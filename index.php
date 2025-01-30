<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>HTML Learning Hub</title>
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

    <main class="flex-grow-1">
        <!-- Hero Section -->
        <div class="bg-primary text-white py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h2 class="display-4 mb-4">Learn HTML Easily!</h2>
                        <p class="lead mb-4">Are you ready to embark on an exciting journey into the world of web development? At HTML Learning, we provide you with all the resources you need to master HTML and build stunning websites from scratch.</p>
                        <a href="tutorials.php" class="btn btn-light btn-lg">Start Learning Now</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Introduction Section -->
                    <div class="mb-5">
                        <p class="lead">HTML (Hypertext Markup Language) is the backbone of web development. It is the standard language used to create and design web pages. Learning HTML is the first step to becoming a proficient web developer, and it opens up a world of opportunities in the tech industry.</p>
                    </div>

                    <!-- Features Section -->
                    <h3 class="h2 mb-4">What You'll Find Here</h3>
                    <div class="row g-4 mb-5">
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h4 class="h5 card-title">Comprehensive Tutorials</h4>
                                    <p class="card-text">Dive into our detailed tutorials that guide you through every aspect of HTML, from the fundamentals to advanced techniques. Each tutorial is designed to be easy to follow, with clear explanations and practical examples.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h4 class="h5 card-title">Interactive Code Examples</h4>
                                    <p class="card-text">Explore real-world code snippets that demonstrate how HTML is used in practice. These examples allow you to see the concepts in action and apply them to your projects.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h4 class="h5 card-title">Hands-On Exercises</h4>
                                    <p class="card-text">Test your skills with a variety of exercises designed to reinforce your learning. Practice makes perfect, and our exercises will help you solidify your understanding.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h4 class="h5 card-title">Fun Quizzes</h4>
                                    <p class="card-text">Challenge yourself with our interactive quizzes to assess your knowledge and track your progress. Quizzes are a great way to review what you've learned and prepare for the next steps.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Call to Action Section -->
                    <div class="bg-light p-4 rounded">
                        <h3 class="h2 mb-3">Get Started Today!</h3>
                        <p class="mb-4">No matter your background, HTML Learning is here to support you. Whether you're a complete beginner or looking to enhance your existing skills, you'll find valuable resources to help you succeed.</p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                            <a href="tutorials.php" class="btn btn-primary me-md-2">View Tutorials</a>
                            <a href="exercises.php" class="btn btn-outline-primary">Try Exercises</a>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="h5 mb-0">Quick Links</h4>
                        </div>
                        <div class="list-group list-group-flush">
                            <a href="tutorials.php" class="list-group-item list-group-item-action">HTML Basics</a>
                            <a href="exercises.php" class="list-group-item list-group-item-action">Practice Exercises</a>
                            <a href="quizzes.php" class="list-group-item list-group-item-action">Take a Quiz</a>
                            <a href="resources.php" class="list-group-item list-group-item-action">Additional Resources</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>