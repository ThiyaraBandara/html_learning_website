<?php
// Include the database connection file
include 'db.php';

// SQL query to fetch quiz questions
$sql = "SELECT * FROM quiz_questions";
$result = $conn->query($sql);

error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Quizzes - Learning Hub</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <!-- Google Translate Widget -->
    <div id="google_translate_element" class="p-2"></div>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                includedLanguages: 'en,es,fr,de,it,zh-CN,ja,ru,fi,el,hi,ko,la,pt,si,ta,th,uk',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <?php include 'header.php'; ?>

    <main class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h2 class="h4 mb-0">Test Your HTML Knowledge!</h2>
                    </div>
                    <div class="card-body">
                        <?php
                        if ($result) {
                            echo '<div class="alert alert-info">Total Questions Found: ' . $result->num_rows . '</div>';

                            if ($result->num_rows > 0) {
                                $question_number = 1;
                                echo '<form id="quizForm">';
                                while($row = $result->fetch_assoc()) {
                                    echo '<div class="quiz-question mb-4 p-3 border rounded" data-correct="' . htmlspecialchars($row["correct_answer"]) . '">';
                                    echo '<h5 class="mb-3">Question ' . $question_number . ':</h5>';
                                    echo '<p class="mb-3">' . htmlspecialchars($row["question"]) . '</p>';
                                    echo '<div class="list-group">';
                                    echo '<label class="list-group-item border-0 rounded mb-2">
                                            <input type="radio" name="q' . $question_number . '" value="A" class="form-check-input me-2">
                                            A) ' . htmlspecialchars($row["option_a"]) . '
                                          </label>';
                                    echo '<label class="list-group-item border-0 rounded mb-2">
                                            <input type="radio" name="q' . $question_number . '" value="B" class="form-check-input me-2">
                                            B) ' . htmlspecialchars($row["option_b"]) . '
                                          </label>';
                                    echo '<label class="list-group-item border-0 rounded mb-2">
                                            <input type="radio" name="q' . $question_number . '" value="C" class="form-check-input me-2">
                                            C) ' . htmlspecialchars($row["option_c"]) . '
                                          </label>';
                                    echo '<label class="list-group-item border-0 rounded mb-2">
                                            <input type="radio" name="q' . $question_number . '" value="D" class="form-check-input me-2">
                                            D) ' . htmlspecialchars($row["option_d"]) . '
                                          </label>';
                                    echo '</div>';
                                    echo '<input type="hidden" name="correct' . $question_number . '" value="' . htmlspecialchars($row["correct_answer"]) . '">';
                                    echo '</div>';
                                    $question_number++;
                                }
                                echo '<button type="submit" class="btn btn-primary btn-lg w-100">Submit Answers</button>';
                                echo '</form>';
                            } else {
                                echo '<div class="alert alert-warning">No quiz questions found.</div>';
                            }
                        } else {
                            echo '<div class="alert alert-danger">Error executing query: ' . $conn->error . '</div>';
                        }
                        $conn->close();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include 'footer.php' ?>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const quizForm = document.getElementById('quizForm');
        
        quizForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const questions = document.querySelectorAll('.quiz-question');
            let score = 0;
            
            questions.forEach((question, index) => {
                const correctAnswer = question.getAttribute('data-correct');
                const selectedRadio = question.querySelector(`input[name="q${index + 1}"]:checked`);
                
                // Remove previous results
                question.querySelectorAll('.list-group-item').forEach(item => {
                    item.classList.remove('bg-success', 'bg-danger', 'text-white');
                    if (item.querySelector('.result-icon')) {
                        item.querySelector('.result-icon').remove();
                    }
                });
                
                if (selectedRadio) {
                    const selectedAnswer = selectedRadio.value;
                    const selectedItem = selectedRadio.closest('.list-group-item');
                    const correctItem = question.querySelector(`input[value="${correctAnswer}"]`).closest('.list-group-item');
                    
                    if (selectedAnswer === correctAnswer) {
                        selectedItem.classList.add('bg-success', 'text-white');
                        selectedItem.insertAdjacentHTML('beforeend', 
                            '<span class="result-icon float-end">✓</span>');
                        score++;
                    } else {
                        selectedItem.classList.add('bg-danger', 'text-white');
                        selectedItem.insertAdjacentHTML('beforeend', 
                            '<span class="result-icon float-end">✗</span>');
                        correctItem.classList.add('bg-success', 'text-white');
                        correctItem.insertAdjacentHTML('beforeend', 
                            '<span class="result-icon float-end">✓</span>');
                    }
                }
            });
            
            // Display score with Bootstrap alert
            let scoreDisplay = document.getElementById('score-display');
            if (!scoreDisplay) {
                scoreDisplay = document.createElement('div');
                scoreDisplay.id = 'score-display';
                quizForm.insertBefore(scoreDisplay, quizForm.firstChild);
            }
            
            const percentage = (score / questions.length) * 100;
            let alertClass = 'alert-danger';
            if (percentage >= 80) alertClass = 'alert-success';
            else if (percentage >= 60) alertClass = 'alert-warning';
            
            scoreDisplay.className = `alert ${alertClass} mt-3 mb-4`;
            scoreDisplay.innerHTML = `
                <h4 class="alert-heading">Quiz Results</h4>
                <p class="mb-0">Your Score: ${score}/${questions.length} (${percentage}%)</p>
            `;
        });
    });
    </script>

    <style>
    .quiz-question {
        background-color: #fff;
        transition: all 0.3s ease;
    }
    
    .list-group-item {
        cursor: pointer;
        transition: all 0.2s ease;
    }
    
    .list-group-item:hover {
        background-color: #f8f9fa;
    }
    
    .form-check-input {
        cursor: pointer;
    }
    
    .result-icon {
        font-weight: bold;
        margin-left: 10px;
    }
    
    .bg-success .result-icon,
    .bg-danger .result-icon {
        color: white;
    }
    </style>
</body>
</html>