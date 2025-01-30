<?php
// Include the database connection file
include 'db.php';

// SQL query to fetch quiz questions
$sql = "SELECT * FROM quiz_questions";
$result = $conn->query($sql);

error_reporting(E_ALL);
ini_set('display_errors', 1);

?>


<!-- quizzes.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>HTML Quizzes - Learning Hub</title>

    
</head>
<body>
    <!-- Google Translate Widget -->
<div id="google_translate_element"></div>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en', // Set the default language of your site
            includedLanguages: 'en,es,fr,de,it,zh-CN,ja,ru,fi,el,hi,ko,la,pt,si,ta,th,uk', // Add the languages you want to support
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
        }, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<?php include 'header.php'; ?>
    <main>
        <h2>Test Your HTML Knowledge!</h2>
 
<?php

if ($result) {
    // Output the total number of questions fetched
    echo "<p>Total Questions Found: " . $result->num_rows . "</p>";

    if ($result->num_rows > 0) {
        // Loop through the results and display each question
        $question_number = 1;
        echo "<form id='quizForm'>";
        while($row = $result->fetch_assoc()) {
            echo "<div class='quiz-question' data-correct='" . htmlspecialchars($row["correct_answer"]) . "'>";
            echo "<p><strong>Question " . $question_number . ":</strong> " . htmlspecialchars($row["question"]) . "</p>";
            echo "<ul style='list-style-type: none;'>"; // Remove default bullets
            echo "<li><input type='radio' name='q" . $question_number . "' value='A'> A) " . htmlspecialchars($row["option_a"]) . "</li>";
            echo "<li><input type='radio' name='q" . $question_number . "' value='B'> B) " . htmlspecialchars($row["option_b"]) . "</li>";
            echo "<li><input type='radio' name='q" . $question_number . "' value='C'> C) " . htmlspecialchars($row["option_c"]) . "</li>";
            echo "<li><input type='radio' name='q" . $question_number . "' value='D'> D) " . htmlspecialchars($row["option_d"]) . "</li>";
            echo "</ul>";
            // Hide correct answer during quiz
            echo "<input type='hidden' name='correct" . $question_number . "' value='" . htmlspecialchars($row["correct_answer"]) . "'>";
            echo "</div>";
            $question_number++;
        }
        // Add submit button at the end
        echo "<button type='submit' class='submit-btn'>Submit Answers</button>";
        echo "</form>";
    } else {
        echo "<p>No quiz questions found.</p>";
    }
} else {
    // Display error message if the query fails
    echo "<p>Error executing query: " . $conn->error . "</p>";
}

// Close the connection
$conn->close();
?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const quizForm = document.getElementById('quizForm');
    
    quizForm.addEventListener('submit', function(e) {
        e.preventDefault(); // Prevent form submission
        
        // Get all question divs
        const questions = document.querySelectorAll('.quiz-question');
        let score = 0;
        
        questions.forEach((question, index) => {
            // Get the correct answer from data attribute
            const correctAnswer = question.getAttribute('data-correct');
            
            // Get selected answer
            const selectedRadio = question.querySelector(`input[name="q${index + 1}"]:checked`);
            
            // Remove any previous result styling
            question.querySelectorAll('li').forEach(li => {
                li.classList.remove('correct', 'incorrect');
                if (li.querySelector('.result-icon')) {
                    li.querySelector('.result-icon').remove();
                }
            });
            
            if (selectedRadio) {
                const selectedAnswer = selectedRadio.value;
                const selectedLi = selectedRadio.parentElement;
                
                // Find the li element containing the correct answer
                const correctLi = question.querySelector(`input[value="${correctAnswer}"]`).parentElement;
                
                if (selectedAnswer === correctAnswer) {
                    // Correct answer
                    selectedLi.classList.add('correct');
                    selectedLi.insertAdjacentHTML('beforeend', 
                        '<span class="result-icon">✓</span>');
                    score++;
                } else {
                    // Wrong answer
                    selectedLi.classList.add('incorrect');
                    selectedLi.insertAdjacentHTML('beforeend', 
                        '<span class="result-icon">✗</span>');
                    // Highlight the correct answer
                    correctLi.classList.add('correct');
                    correctLi.insertAdjacentHTML('beforeend', 
                        '<span class="result-icon">✓</span>');
                }
            }
        });
        
        // Display total score
        let scoreDisplay = document.getElementById('score-display');
        if (!scoreDisplay) {
            scoreDisplay = document.createElement('div');
            scoreDisplay.id = 'score-display';
            quizForm.insertBefore(scoreDisplay, quizForm.firstChild);
        }
        scoreDisplay.innerHTML = `Your Score: ${score}/${questions.length}`;
    });
});
</script>
<style>
    .quiz-question li {
    padding: 5px;
    margin: 5px 0;
    border-radius: 4px;
}

.correct {
    background-color: rgba(75, 181, 67, 0.2);
}

.incorrect {
    background-color: rgba(255, 99, 71, 0.2);
}

.result-icon {
    margin-left: 10px;
    display: inline-block;
}

.correct .result-icon {
    color: #4BB543;
}

.incorrect .result-icon {
    color: #FF6347;
}

#score-display {
    margin: 20px 0;
    padding: 10px;
    background-color: #f0f0f0;
    border-radius: 4px;
    font-weight: bold;
}
</style>

    </main>
    <?php include 'footer.php' ?>
    <script src="script.js"></script>
</body>
</html>