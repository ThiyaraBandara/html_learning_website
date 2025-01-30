<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>HTML Exercises - Learning Hub</title>
</head>
<body class="d-flex flex-column min-vh-100">
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

    <main class="container py-5 flex-grow-1">
        <h2 class="display-4 mb-4">Lesson Exercises</h2>

        <!-- Table of Contents -->
        <div class="card mb-5">
            <div class="card-header bg-light">
                <h3 class="h5 mb-0">Quick Navigation</h3>
            </div>
            <div class="card-body">
                <ul class="list-unstyled mb-0">
                    <li class="mb-2"><a href="#lesson1" class="text-decoration-none">Lesson 1: Introduction to HTML</a></li>
                    <li><a href="#lesson2" class="text-decoration-none">Lesson 2: HTML Lists</a></li>
                </ul>
            </div>
        </div>

        <?php
        // PHP code block remains the same
        $correctAnswers = [
            "exercise1" => "<!DOCTYPE html>\n<html lang=\"en\">\n<head>\n    <title>My First Page</title>\n</head>\n<body>\n    <h1>Welcome to My First Page</h1>\n</body>\n</html>",
            "exercise2" => "<!DOCTYPE html>\n<html lang=\"en\">\n<head>\n    <title>My Favorite Fruits</title>\n</head>\n<body>\n    <h1>My Favorite Fruits</h1>\n    <ul>\n        <li>Apple</li>\n        <li>Banana</li>\n        <li>Cherry</li>\n    </ul>\n</body>\n</html>",
            "exercise3" => "<!DOCTYPE html>\n<html lang=\"en\">\n<head>\n    <title>My Paragraph</title>\n</head>\n<body>\n    <p>I love to eat <b>ice cream</b> in the summer!</p>\n</body>\n</html>",
            "exercise4" => "<!DOCTYPE html>\n<html lang=\"en\">\n<head>\n    <title>Link Example</title>\n</head>\n<body>\n    <a href=\"https://www.example.com\">Visit My Site</a>\n</body>\n</html>",
            "exercise0" => "<!DOCTYPE html>\n<html lang=\"en\">\n<head>\n    <meta charset=\"UTF-8\">\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n    <title>HTML Lists Showcase</title>\n</head>\n<body>\n    <h1>HTML Lists Showcase</h1>\n\n    <h2>Ordered List of Favorite Fruits</h2>\n    <ol>\n        <li>Mango</li>\n        <li>Apple</li>\n        <li>Grapes</li>\n    </ol>\n\n    <h2>Nested Ordered List of Fruits and Vegetables</h2>\n    <ol>\n        <li>Fruits\n            <ol type=\"I\">\n                <li>Mango</li>\n                <li>Apple</li>\n                <li>Grapes</li>\n            </ol>\n        </li>\n        <li>Vegetables\n            <ol type=\"I\">\n                <li>Carrot</li>\n                <li>Brinjal</li>\n                <li>Beans</li>\n            </ol>\n        </li>\n    </ol>\n\n    <h2>Unordered List of Animals</h2>\n    <ul>\n        <li>Cat</li>\n        <li>Dog</li>\n        <li>Cow</li>\n    </ul>\n\n    <h2>Definition List of Beverages</h2>\n    <dl>\n        <dt>Coffee</dt>\n        <dd>Black hot drink</dd>\n        <dt>Milk</dt>\n        <dd>White hot drink</dd>\n    </dl>\n</body>\n</html>"
        ];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $exerciseNumber = $_POST['exerciseNumber'];
            $userAnswer = $_POST['answer'];
            $correctAnswer = $correctAnswers["exercise" . $exerciseNumber];
        }
        ?>

        <!-- Lesson 1 -->
        <section id="lesson1" class="mb-5">
            <h3 class="h2 mb-4">Lesson 1 - Introduction to HTML</h3>
            
            <!-- Exercise 1 -->
            <div class="card mb-4">
                <div class="card-header bg-light">
                    <h4 class="h5 mb-0">Exercise 1: HTML Document Structure</h4>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="mb-3">
                            <label for="exercise1" class="form-label">Write a simple HTML document that includes a title and a heading:</label>
                            <textarea class="form-control font-monospace" id="exercise1" name="answer" rows="8"><?php echo isset($userAnswer) && $exerciseNumber == 1 ? htmlspecialchars($userAnswer) : ''; ?></textarea>
                        </div>
                        <input type="hidden" name="exerciseNumber" value="1">
                        <button type="submit" class="btn btn-primary">Show Answer</button>
                        <?php if (isset($exerciseNumber) && $exerciseNumber == 1): ?>
                            <div class="mt-3 p-3 bg-light border rounded">
                                <strong>Correct Answer:</strong>
                                <pre class="mt-2 mb-0"><code><?php echo htmlspecialchars($correctAnswer); ?></code></pre>
                            </div>
                        <?php endif; ?>
                    </form>
                </div>
            </div>

            <!-- Exercise 2 -->
            <div class="card mb-4">
                <div class="card-header bg-light">
                    <h4 class="h5 mb-0">Exercise 2: Create a List</h4>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="mb-3">
                            <label for="exercise2" class="form-label">Create an HTML document that contains a list of your favorite fruits:</label>
                            <textarea class="form-control font-monospace" id="exercise2" name="answer" rows="8"><?php echo isset($userAnswer) && $exerciseNumber == 2 ? htmlspecialchars($userAnswer) : ''; ?></textarea>
                        </div>
                        <input type="hidden" name="exerciseNumber" value="2">
                        <button type="submit" class="btn btn-primary">Show Answer</button>
                        <?php if (isset($exerciseNumber) && $exerciseNumber == 2): ?>
                            <div class="mt-3 p-3 bg-light border rounded">
                                <strong>Correct Answer:</strong>
                                <pre class="mt-2 mb-0"><code><?php echo htmlspecialchars($correctAnswer); ?></code></pre>
                            </div>
                        <?php endif; ?>
                    </form>
                </div>
            </div>

            <!-- Exercise 3 -->
            <div class="card mb-4">
                <div class="card-header bg-light">
                    <h4 class="h5 mb-0">Exercise 3: Use HTML Tags</h4>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="mb-3">
                            <label for="exercise3" class="form-label">Write a short paragraph using the <code>&lt;p&gt;</code> tag:</label>
                            <textarea class="form-control font-monospace" id="exercise3" name="answer" rows="8"><?php echo isset($userAnswer) && $exerciseNumber == 3 ? htmlspecialchars($userAnswer) : ''; ?></textarea>
                        </div>
                        <input type="hidden" name="exerciseNumber" value="3">
                        <button type="submit" class="btn btn-primary">Show Answer</button>
                        <?php if (isset($exerciseNumber) && $exerciseNumber == 3): ?>
                            <div class="mt-3 p-3 bg-light border rounded">
                                <strong>Correct Answer:</strong>
                                <pre class="mt-2 mb-0"><code><?php echo htmlspecialchars($correctAnswer); ?></code></pre>
                            </div>
                        <?php endif; ?>
                    </form>
                </div>
            </div>

            <!-- Exercise 4 -->
            <div class="card mb-4">
                <div class="card-header bg-light">
                    <h4 class="h5 mb-0">Exercise 4: Using Attributes</h4>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="mb-3">
                            <label for="exercise4" class="form-label">Create a hyperlink that points to a website of your choice:</label>
                            <textarea class="form-control font-monospace" id="exercise4" name="answer" rows="8"><?php echo isset($userAnswer) && $exerciseNumber == 4 ? htmlspecialchars($userAnswer) : ''; ?></textarea>
                        </div>
                        <input type="hidden" name="exerciseNumber" value="4">
                        <button type="submit" class="btn btn-primary">Show Answer</button>
                        <?php if (isset($exerciseNumber) && $exerciseNumber == 4): ?>
                            <div class="mt-3 p-3 bg-light border rounded">
                                <strong>Correct Answer:</strong>
                                <pre class="mt-2 mb-0"><code><?php echo htmlspecialchars($correctAnswer); ?></code></pre>
                            </div>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        </section>

        <!-- Lesson 2 -->
        <section id="lesson2">
            <h3 class="h2 mb-4">Lesson 2 - HTML Lists</h3>
            
            <div class="card">
                <div class="card-header bg-light">
                    <h4 class="h5 mb-0">Lists Exercise</h4>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="mb-3">
                            <label for="exercise0" class="form-label">
                                Create an HTML document that showcases your understanding of different types of lists in HTML. Your document should include:
                                <ul class="mt-2">
                                    <li>An ordered list of your favorite fruits</li>
                                    <li>A nested ordered list that categorizes fruits and vegetables</li>
                                    <li>An unordered list of animals you like</li>
                                    <li>A definition list for beverages</li>
                                </ul>
                                <strong>Instructions:</strong>
                                <ul>
                                    <li>Create an HTML document with a title</li>
                                    <li>Include the required lists as specified</li>
                                    <li>Use the <code>&lt;pre&gt;</code> tag to display the HTML code for each list</li>
                                </ul>
                            </label>
                            <textarea class="form-control font-monospace" id="exercise0" name="answer" rows="12"><?php echo isset($userAnswer) && $exerciseNumber == 0 ? htmlspecialchars($userAnswer) : ''; ?></textarea>
                        </div>
                        <input type="hidden" name="exerciseNumber" value="0">
                        <button type="submit" class="btn btn-primary">Show Answer</button>
                        <?php if (isset($exerciseNumber) && $exerciseNumber == 0): ?>
                            <div class="mt-3 p-3 bg-light border rounded">
                                <strong>Correct Answer:</strong>
                                <pre class="mt-2 mb-0"><code><?php echo htmlspecialchars($correctAnswer); ?></code></pre>
                            </div>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php' ?>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>