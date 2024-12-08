<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Apple</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- My CSS -->
        <link rel="stylesheet" href="/css/style.css">
    </head>

    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <!-- Brand -->
                <a class="navbar-brand" href="/homepage">
                    <img src="/images/navbar-buttons/apple-black-logo.svg" alt="Apple Logo" class="logo light-logo">
                    <img src="/images/navbar-buttons/apple-white-logo.svg" alt="Apple Logo" class="logo dark-logo">
                </a>
                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="/homepage">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/intrattenimento">Intrattenimento</a></li>
                        <li class="nav-item"><a class="nav-link" href="/accessori">Accessori</a></li>
                        <li class="nav-item"><a class="nav-link" href="/supporto">Supporto</a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="/images/navbar-buttons/search-black.svg" alt="Search" class="nav-icon light-icon">
                                <img src="/images/navbar-buttons/search-white.svg" alt="Search" class="nav-icon dark-icon">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="/images/navbar-buttons/bag-black.svg" alt="Bag" class="nav-icon light-icon">
                                <img src="/images/navbar-buttons/bag-white.svg" alt="Bag" class="nav-icon dark-icon">
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Theme Toggler -->
                <div id="theme-toggle" class="theme-toggle ms-3">
                    <div class="theme-circle"></div>
                </div>
            </div>
        </nav>
        <main>
            <!-- Hero Section -->
            <section class="hero-section">
                <div class="container">
                    <div class="row align-items-center min-vh-100">
                        <!-- Card 1 -->
                        <div class="col-md-6 hero-text">
                            <div class="hero-container">
                                <h1 class="display-3 fw-bold">Pura Magia.</h1>
                                <p class="lead">Scopri l'innovazione come mai prima d'ora.</p>
                                <a href="#learn-more" class="btn btn-dark btn-lg rounded-pill">Scopri di più</a>
                                <img src="/images/hero section/iphone-16-hero.png" alt="Hero Image" class="img-fluid hero-image mt-4">
                            </div>
                        </div>
                        <!-- Card 2 -->
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="hero-card">
                                        <h3>iPhone 16 Pro</h3>
                                        <p>Titanio. Così forte. Così leggero. Così Pro.</p>
                                        <img src="/images/hero section/iphone-16-pro.png" alt="iPhone 16 Pro" class="img-fluid card-image">
                                    </div>
                                </div>
                                <!-- Card 3 -->
                                <div class="col-12">
                                    <div class="hero-card">
                                        <h3>iPhone 16 Pro Max</h3>
                                        <p>Il nostro Pro più potente di sempre.</p>
                                        <img src="/images/hero section/iphone-16-max.png" alt="iPhone 16 Pro Max" class="img-fluid card-image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Feat Section -->
            <section class="py-5">
                <div class="container">
                    <div class="row g-4">
                        <!-- Card 1 -->
                        <div class="col-md-4">
                            <div class="feature-card text-center">
                                <h3>Innovazione</h3>
                                <p>Spingiamo i confini con soluzioni all'avanguardia.</p>
                            </div>
                        </div>
                        <!-- Card 2 -->
                        <div class="col-md-4">
                            <div class="feature-card text-center">
                                <h3>Design</h3>
                                <p>Bello, intuitivo e funzionale.</p>
                            </div>
                        </div>
                        <!-- Card 3 -->
                        <div class="col-md-4">
                            <div class="feature-card text-center">
                                <h3>Qualità</h3>
                                <p>Attenzione ai dettagli senza compromessi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between">
                        <p class="m-0">Copyright 2024 Apple Inc. Tutti i diritti riservati.</p>
                        <p class="m-0">Italia</p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Bootstrap JS Bundle -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- My JS -->
        <script src="/js/main.js"></script>
    </body>

</html>