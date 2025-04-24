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

<br>
<?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "lms");

// Fetch books from the 'books' table
$query = "SELECT book_id, book_name, book_image FROM books"; // Added book_id to the query
$books_result = mysqli_query($connection, $query);
?>

   <!-- Product Grid Section -->
<div class="container mt-4">
    <h3 style="text-align: center;">Books</h3>
    <div class="row">
        <?php while ($book = mysqli_fetch_assoc($books_result)) { ?>
            <div class="col-md-3">
                <div class="product-card">
                    <img src="Assests/img/<?php echo $book['book_image']; ?>" alt="<?php echo $book['book_name']; ?>" class="img-fluid product-image">
                    
                    <!-- Book Title -->
                    <h6><?php echo $book['book_name']; ?></h6>

                    <!-- Rating Section -->
                    <div class="rating">
                        <i class="bi bi-star-fill"></i> 3.4 (25)
                    </div>

                    <!-- Read Button -->
                    <a href="read.php?id=<?php echo $book['book_id']; ?>" class="btn btn-outline-primary w-100">Read Now</a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

    <!-- Footer -->
    <footer class="footer-section bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <!-- Library4U Logo and Description -->
                <div class="col-md-4 footer-widget">
                    <div class="footer-logo mb-3">
                        <img src="Assests/img/download.png" alt="Library4U Logo" style="max-width: 150px;">
                    </div>
                    <p>Welcome to Library4U, your gateway to endless knowledge and wisdom. Explore our vast collection of e-books and join our community of readers.</p>
                    <div class="footer-icons mt-3">
                        <a href="#" class="text-white me-2"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-white me-2"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="text-white me-2"><i class="bi bi-youtube"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <!-- Customer Support -->
                <div class="col-md-4 footer-widget">
                    <h5>Customer Support</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Store List</a></li>
                        <li><a href="#" class="text-white">Opening Hours</a></li>
                        <li><a href="#" class="text-white">Contact Us</a></li>
                        <li><a href="#" class="text-white">Return Policy</a></li>
                    </ul>
                </div>

                <!-- Categories -->
                <div class="col-md-4 footer-widget">
                    <h5>Categories</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Novel Books</a></li>
                        <li><a href="#" class="text-white">Poetry Books</a></li>
                        <li><a href="#" class="text-white">Political Books</a></li>
                        <li><a href="#" class="text-white">History Books</a></li>
                    </ul>
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
    <!-- JavaScript -->
<script src="Assests/js/jquery.min.js"></script>
<script src="Assests/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
// Close the database connection
mysqli_close($connection);
?>
