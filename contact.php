<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Library</title>
    <link rel="icon" type="image/x-icon" href="Assests/img/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Assests/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="Assests/img/download.png" alt="Library4U Logo" style="max-width: 40px;">
                <span class="ms-2">Library4U</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="author.php">Authors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="books.php">Books</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin/index.php">Admin</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center ms-lg-3">
                    <a href="#" class="social-icon me-2"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="social-icon me-2"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="social-icon me-2"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>
    </nav>

<div class="container my-5">
        <!-- Contact Form -->
        <div class="col-md-8">
            <div class="contact-form">
                <h2>Ready To Get Started?</h2>
                <p>Have questions, feedback, or need assistance? Feel free to reach out to us. Our team is here to help you make the most of our digital library.</p>
                <form>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Your Name*</label>
                            <input type="text" id="name" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Your Email*</label>
                            <input type="email" id="email" class="form-control" placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Write Message*</label>
                        <textarea id="message" class="form-control" rows="5" placeholder="Write Message" required></textarea>
                    </div>
                    <button type="submit" class="btn">
                        Send Message <i class="bi bi-arrow-right-circle"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
<footer class="footer-section bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <!-- About Us -->
                <div class="col-md-4 footer-widget">
                    <h5>About Us</h5>
                    <p>Library4U is dedicated to providing a vast collection of e-books to readers worldwide. Join our community and explore the world of knowledge.</p>
                </div>

                <!-- Quick Links -->
                <div class="col-md-4 footer-widget">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.php" class="text-white">Home</a></li>
                        <li><a href="about.php" class="text-white">About Us</a></li>
                        <li><a href="books.php" class="text-white">Books</a></li>
                        <li><a href="contact.php" class="text-white">Contact</a></li>
                    </ul>
                </div>

                <!-- Follow Us -->
                <div class="col-md-4 footer-widget">
                    <h5>Follow Us</h5>
                    <div class="footer-icons">
                        <a href="#" class="text-white me-2"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-white me-2"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="text-white me-2"><i class="bi bi-youtube"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <hr class="bg-white">
            <div class="row mt-4">
                <div class="col-md-12 text-center">
                    <p>© 2024 by <span class="text-primary">Library4U</span>. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
  <script src="Assests/js/imagesloaded.pkgd.min.js"></script>
	<script src="Assests/js/anime.min.js"></script>
	<script src="Assests/js/uncover.js"></script>
	<script src="Assests/js/demo1.js"></script>
    <script src="Assests/js/script.js"></script>
    <script src="Assests/js/bundle.min.css"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="Assests/js/jquery.min.js"></script>
        
</body>
</html>