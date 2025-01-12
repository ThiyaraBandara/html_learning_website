<!-- contact.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Contact Us - Learning Hub</title>
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
        <h1>Contact Us</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="tutorials.php">Tutorials</a></li>
                <li><a href="exercises.php">Exercises</a></li>
                <li><a href="resources.php">Resources</a></li>
                <li><a href="quizzes.php">Quizzes</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Get in Touch</h2>
        <form action="#" method="POST">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required><br><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>
            <label for="message">Message:</label><br>
            <textarea id="message" name="message" required></textarea><br><br>
            <button type="submit">Send Message</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2023 HTML Learning Hub</p>
    </footer>
</body>
</html>