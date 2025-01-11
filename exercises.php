<!-- exercises.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>HTML Exercises - Learning Hub</title>
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
    <header>
        <h1>HTML Exercises</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="tutorials.php">Tutorials</a></li>
                <li><a href="examples.php">Examples</a></li>
                <li><a href="exercises.php">Exercises</a></li>
                <li><a href="resources.php">Resources</a></li>
                <li><a href="quizzes.php">Quizzes</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </nav>
    </header>
    <main>
        
        
        <h2>Lesson Exercises</h2>
        
        <h3><a href="#lesson1">Lesson 1: Introduction to HTML Exercises</a></h3>
        <h3><a href="#lesson2">Lesson 2: More HTML Concepts Exercises</a></h3>
        <!-- Add more lessons as needed -->

        <?php
    // Define correct answers
    $correctAnswers = [
        "exercise1" => "<!DOCTYPE html>\n<html lang=\"en\">\n<head>\n    <title>My First Page</title>\n</head>\n<body>\n    <h1>Welcome to My First Page</h1>\n</body>\n</html>",
        "exercise2" => "<!DOCTYPE html>\n<html lang=\"en\">\n<head>\n    <title>My Favorite Fruits</title>\n</head>\n<body>\n    <h1>My Favorite Fruits</h1>\n    <ul>\n        <li>Apple</li>\n        <li>Banana</li>\n        <li>Cherry</li>\n    </ul>\n</body>\n</html>",
        "exercise3" => "<!DOCTYPE html>\n<html lang=\"en\">\n<head>\n    <title>My Paragraph</title>\n</head>\n<body>\n    <p>I love to eat <b>ice cream</b> in the summer!</p>\n</body>\n</html>",
        "exercise4" => "<!DOCTYPE html>\n<html lang=\"en\">\n<head>\n    <title>Link Example</title>\n</head>\n<body>\n    <a href=\"https://www.example.com\">Visit My Site</a>\n</body>\n</html>"
    ];

    // Check if a specific exercise was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $exerciseNumber = $_POST['exerciseNumber'];
        $userAnswer = $_POST['answer'];
        $correctAnswer = $correctAnswers["exercise" . $exerciseNumber];
    }
    ?>

    <form method="POST">
        <h3>Exercise 1: HTML Document Structure</h3>
        <label for="exercise1">Write a simple HTML document that includes a title and a heading:</label><br>
        <textarea id="exercise1" name="answer" rows="4" cols="50"><?php echo isset($userAnswer) && $exerciseNumber == 1 ? htmlspecialchars($userAnswer) : ''; ?></textarea>
        <input type="hidden" name="exerciseNumber" value="1">
        <button type="submit">Show Answer</button>
        <?php if (isset($exerciseNumber) && $exerciseNumber == 1): ?>
            <div class="correct-answer">
                <strong>Correct Answer:</strong>
                <pre><?php echo htmlspecialchars($correctAnswer); ?></pre>
            </div>
        <?php endif; ?>
    </form>

    <form method="POST">
        <h3>Exercise 2: Create a List</h3>
        <label for="exercise2">Create an HTML document that contains a list of your favorite fruits:</label><br>
        <textarea id="exercise2" name="answer" rows="4" cols="50"><?php echo isset($userAnswer) && $exerciseNumber == 2 ? htmlspecialchars($userAnswer) : ''; ?></textarea>
        <input type="hidden" name="exerciseNumber" value="2">
        <button type="submit">Show Answer</button>
        <?php if (isset($exerciseNumber) && $exerciseNumber == 2): ?>
            <div class="correct-answer">
                <strong>Correct Answer:</strong>
                <pre><?php echo htmlspecialchars($correctAnswer); ?></pre>
            </div>
        <?php endif; ?>
    </form>

    <form method="POST">
        <h3>Exercise 3: Use HTML Tags</h3>
        <label for="exercise3">Write a short paragraph using the <code>&lt;p&gt;</code> tag:</label><br>
        <textarea id="exercise3" name="answer" rows="4" cols="50"><?php echo isset($userAnswer) && $exerciseNumber == 3 ? htmlspecialchars($userAnswer) : ''; ?></textarea>
        <input type="hidden" name="exerciseNumber" value="3">
        <button type="submit">Show Answer</button>
        <?php if (isset($exerciseNumber) && $exerciseNumber == 3): ?>
            <div class="correct-answer">
                <strong>Correct Answer:</strong>
                <pre><?php echo htmlspecialchars($correctAnswer); ?></pre>
            </div>
        <?php endif; ?>
    </form>

    <form method="POST">
        <h3>Exercise 4: Using Attributes</h3>
        <label for="exercise4">Create a hyperlink that points to a website of your choice:</label><br>
        <textarea id="exercise4" name="answer" rows="4" cols="50"><?php echo isset($userAnswer) && $exerciseNumber == 4 ? htmlspecialchars($userAnswer) : ''; ?></textarea>
        <input type="hidden" name="exerciseNumber" value="4">
        <button type="submit">Show Answer</button>
        <?php if (isset($exerciseNumber) && $exerciseNumber == 4): ?>
            <div class="correct-answer">
                <strong>Correct Answer:</strong>
                <pre><?php echo htmlspecialchars($correctAnswer); ?></pre>
            </div>
            <?php endif; ?>
    </form>
    
    </main>
    <footer>
        <p>&copy; 2023 HTML Learning Hub</p>
    </footer>
</body>
</html>