<!-- examples.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>HTML Examples - Learning Hub</title>
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
        <h1>HTML Examples</h1>
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
        <h2>HTML Example Code</h2>
        <pre>
            <code>
                &lt;!DOCTYPE html&gt;
                &lt;html&gt;
                &lt;head&gt;
                    &lt;title&gt;My First HTML Page&lt;/title&gt;
                &lt;/head&gt;
                &lt;body&gt;
                    &lt;h1&gt;My First Heading&lt;/h1&gt;
                    &lt;p&gt;My first paragraph.&lt;/p&gt;
                &lt;/body&gt;
                &lt;/html&gt;
            </code>
        </pre>
    </main>
    <footer>
        <p>&copy; 2023 HTML Learning Hub</p>
    </footer>
</body>
</html>