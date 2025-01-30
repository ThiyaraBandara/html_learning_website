<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Resources - Learning Hub</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <style>
        .resource-card {
            transition: transform 0.2s;
        }
        .resource-card:hover {
            transform: translateY(-5px);
        }
        .custom-icon {
            font-size: 2rem;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <!-- Google Translate -->
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
        <div class="row mb-4">
            <div class="col-12">
                <h1 class="display-4 text-center mb-4">HTML Learning Resources</h1>
                <p class="lead text-center text-muted">Expand your HTML knowledge with these carefully curated resources</p>
            </div>
        </div>

        <!-- Featured Resources -->
        <div class="row g-4">
            <!-- W3Schools -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm resource-card">
                    <div class="card-body text-center">
                        <i class="bi bi-book custom-icon text-primary"></i>
                        <h3 class="card-title h5">W3Schools HTML Tutorial</h3>
                        <p class="card-text">Comprehensive HTML tutorials with interactive examples and exercises.</p>
                        <div class="d-grid gap-2">
                            <a href="https://www.w3schools.com/html/" class="btn btn-outline-primary">
                                Start Learning
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <small class="text-muted">
                            <i class="bi bi-check-circle-fill text-success"></i> Free Resource
                        </small>
                    </div>
                </div>
            </div>

            <!-- MDN Web Docs -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm resource-card">
                    <div class="card-body text-center">
                        <i class="bi bi-file-earmark-text custom-icon text-info"></i>
                        <h3 class="card-title h5">MDN Web Docs</h3>
                        <p class="card-text">Detailed documentation and guides from Mozilla Developer Network.</p>
                        <div class="d-grid gap-2">
                            <a href="https://developer.mozilla.org/en-US/docs/Web/HTML" class="btn btn-outline-info">
                                Explore Docs
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <small class="text-muted">
                            <i class="bi bi-check-circle-fill text-success"></i> Official Documentation
                        </small>
                    </div>
                </div>
            </div>

            <!-- Codecademy -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm resource-card">
                    <div class="card-body text-center">
                        <i class="bi bi-code-slash custom-icon text-success"></i>
                        <h3 class="card-title h5">Codecademy HTML Course</h3>
                        <p class="card-text">Interactive HTML course with hands-on coding exercises.</p>
                        <div class="d-grid gap-2">
                            <a href="https://www.codecademy.com/learn/learn-html" class="btn btn-outline-success">
                                Start Course
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <small class="text-muted">
                            <i class="bi bi-star-fill text-warning"></i> Interactive Learning
                        </small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Resources Section -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="card-header bg-light">
                        <h3 class="h5 mb-0">Additional Learning Resources</h3>
                    </div>
                    <div class="card-body">
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                                <i class="bi bi-play-circle me-3 text-danger"></i>
                                <div>
                                    <h6 class="mb-1">HTML Video Tutorials</h6>
                                    <small class="text-muted">Learn through video explanations</small>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                                <i class="bi bi-journal-code me-3 text-primary"></i>
                                <div>
                                    <h6 class="mb-1">HTML Practice Exercises</h6>
                                    <small class="text-muted">Test your knowledge with exercises</small>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                                <i class="bi bi-people me-3 text-success"></i>
                                <div>
                                    <h6 class="mb-1">Community Forums</h6>
                                    <small class="text-muted">Connect with other learners</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include 'footer.php' ?>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>