<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>About Us - HTML Learning</title>
</head>
<body>
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

    <main class="container py-5">
        <div class="row">
            <div class="col-12">
                <h2 class="display-4 mb-4">Our Mission</h2>
                <p class="lead">To provide comprehensive and accessible resources for learning HTML and web development.</p>
                <p class="mb-5">At HTML Learning, we are passionate about empowering individuals to master the art of web development through comprehensive and engaging education. Our mission is to provide a nurturing environment where learners of all levels can enhance their HTML skills and build a solid foundation for their web development journey.</p>

                <h3 class="h2 mb-4">What We Offer</h3>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item py-3">
                        <h5 class="mb-1">In-Depth Tutorials</h5>
                        <p class="mb-0">Step-by-step guides that cover everything from the basics of HTML to advanced techniques, ensuring that you have the knowledge needed to create stunning websites.</p>
                    </li>
                    <li class="list-group-item py-3">
                        <h5 class="mb-1">Interactive Examples</h5>
                        <p class="mb-0">Real-world code snippets and projects that allow you to see HTML in action and apply what you learn in a hands-on manner.</p>
                    </li>
                    <li class="list-group-item py-3">
                        <h5 class="mb-1">Challenging Exercises</h5>
                        <p class="mb-0">A variety of exercises designed to reinforce your learning and help you practice what you've studied.</p>
                    </li>
                    <li class="list-group-item py-3">
                        <h5 class="mb-1">Engaging Quizzes</h5>
                        <p class="mb-0">Fun and interactive quizzes to test your knowledge, track your progress, and boost your confidence.</p>
                    </li>
                </ul>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>