<!-- header.php -->
<?php
    // Using array for cleaner title management
    $pageTitles = [
        'index.php' => 'HTML Learning Hub',
        'tutorials.php' => 'HTML Tutorials - Learning Hub',
        'exercises.php' => 'HTML Exercises - Learning Hub',
        'resources.php' => 'HTML Resources - Learning Hub',
        'quizzes.php' => 'HTML Quizzes - Learning Hub',
        'about.php' => 'About Us - Learning Hub',
        'contact.php' => 'Contact Us - Learning Hub'
    ];
    
    $currentPage = basename($_SERVER['PHP_SELF']);
    $title = $pageTitles[$currentPage] ?? 'HTML Tutorials - Learning Hub';
?>

<header class="mb-4">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <h1 class="h4 mb-0"><?php echo $title; ?></h1>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                    data-bs-target="#navbarMain" aria-controls="navbarMain" 
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <?php
                    $navItems = [
                        'index.php' => 'Home',
                        'tutorials.php' => 'Tutorials',
                        'exercises.php' => 'Exercises',
                        'resources.php' => 'Resources',
                        'quizzes.php' => 'Quizzes',
                        'about.php' => 'About Us',
                        'contact.php' => 'Contact Us'
                    ];

                    foreach ($navItems as $page => $label) {
                        $isActive = ($currentPage === $page) ? ' active' : '';
                        echo '<li class="nav-item">';
                        echo '<a class="nav-link' . $isActive . '" href="' . $page . '">' . 
                             $label . ($isActive ? '<span class="visually-hidden">(current)</span>' : '') . '</a>';
                        echo '</li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</header>