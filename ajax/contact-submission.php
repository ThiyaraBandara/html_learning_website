<?php
// Import database connection
require_once '../db.php';

// Function to sanitize input data
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Initialize response array
$response = [
    'success' => false,
    'message' => ''
];

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Validate and sanitize input
        $name = isset($_POST['name']) ? sanitize_input($_POST['name']) : '';
        $email = isset($_POST['email']) ? sanitize_input($_POST['email']) : '';
        $message = isset($_POST['message']) ? sanitize_input($_POST['message']) : '';

        // Validate required fields
        if (empty($name) || empty($email) || empty($message)) {
            throw new Exception('All fields are required.');
        }

        // Validate email format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('Invalid email format.');
        }

        // Prepare SQL statement
        $stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
        
        if (!$stmt) {
            throw new Exception('Failed to prepare statement: ' . $conn->error);
        }

        // Bind parameters and execute
        $stmt->bind_param("sss", $name, $email, $message);
        
        if ($stmt->execute()) {
            $response['success'] = true;
            $response['message'] = 'Thank you for your message. We will get back to you soon.';
        } else {
            throw new Exception('Failed to save message: ' . $stmt->error);
        }

        $stmt->close();
    } catch (Exception $e) {
        $response['message'] = $e->getMessage();
    }
}

// Return JSON response
header('Content-Type: application/json');
echo json_encode($response);