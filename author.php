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

        
    <!-- About -->
  <div class="about-us-section">
    <!-- Left Image -->
    <div class="about-us-image-left">
      <img src="Assests/img/book.png" alt="Stack of Books">
    </div>
  
    <!-- Centered Text -->
    <div class="about-us-text">
      <h1>Author Profile</h1>
      <p>Home > Authors</p>
    </div>
  
    <!-- Right Image -->
    <div class="about-us-image-right">
      <img src="Assests/img/book.png" alt="More Books">
    </div>
  </div>

  <div class="container"></div>
    <h2 class="text-center mb-4">Authors</h2>
    <div class="custom-carousel-container">
        <!-- Card 1 -->
        <div class="custom-author-card text-center">
            <img src="Assests/img/02.jpg" class="custom-author-img" alt="Author Image">
            <h5 class="custom-card-title">Author: Wade Warren</h5>
            <p class="custom-text-muted">United States of America</p>

            <div class="custom-social-icons">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>

            <p class="custom-card-text mt-3">Morbi cursus enim in consequat suscipit. Quisque id dui ante.</p>

            <div class="d-flex justify-content-center align-items-center custom-stats">
                <div>4+ Books</div>
                <div class="custom-divider"></div>
                <div>100+ Sales</div>
                <div class="custom-divider"></div>
                <div>90+ Reviews</div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="custom-author-card text-center">
            <img src="Assests/img/03.jpg" class="custom-author-img" alt="Author Image">
            <h5 class="custom-card-title">Author: Alexander Smith</h5>
            <p class="custom-text-muted">Canada</p>

            <div class="custom-social-icons">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>

            <p class="custom-card-text mt-3">Pellentesque habitant morbi tristique senectus et netus et malesuada.</p>

            <div class="d-flex justify-content-center align-items-center custom-stats">
                <div>6+ Books</div>
                <div class="custom-divider"></div>
                <div>150+ Sales</div>
                <div class="custom-divider"></div>
                <div>85+ Reviews</div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="custom-author-card text-center">
            <img src="Assests/img/04.jpg" class="custom-author-img" alt="Author Image">
            <h5 class="custom-card-title">Author: Emily Johnson</h5>
            <p class="custom-text-muted">United Kingdom</p>

            <div class="custom-social-icons">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>

            <p class="custom-card-text mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

            <div class="d-flex justify-content-center align-items-center custom-stats">
                <div>10+ Books</div>
                <div class="custom-divider"></div>
                <div>200+ Sales</div>
                <div class="custom-divider"></div>
                <div>120+ Reviews</div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="custom-author-card text-center">
            <img src="Assests/img/05.jpg" class="custom-author-img" alt="Author Image">
            <h5 class="custom-card-title">Author: Michael Brown</h5>
            <p class="custom-text-muted">Australia</p>

            <div class="custom-social-icons">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>

            <p class="custom-card-text mt-3">Sed ultrices nunc vel erat venenatis, ac venenatis nisl bibendum.</p>

            <div class="d-flex justify-content-center align-items-center custom-stats">
                <div>12+ Books</div>
                <div class="custom-divider"></div>
                <div>250+ Sales</div>
                <div class="custom-divider"></div>
                <div>130+ Reviews</div>
            </div>
        </div>
    </div>
 </div>
 <section class="featured-books-section"></section>
    <div class="container">
        <h2>Library 4 U Top Books</h2>
        <?php
 $connection = mysqli_connect("localhost", "root", "");
 $db = mysqli_select_db($connection, "lms");
 // Query to fetch book details (id, name, image) from the books table
 $query = "SELECT book_id, book_name, book_image FROM books"; 
 $books_result = mysqli_query($connection, $query);
 ?>
    <div class="row">
            <?php while ($book = mysqli_fetch_assoc($books_result)) { ?>
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="book-card">
                        <!-- Dynamically display book image -->
                        <img src="Assests/img/<?php echo htmlspecialchars($book['book_image']); ?>" alt="<?php echo htmlspecialchars($book['book_name']); ?>">
                        
                        <div class="book-info">
                            <!-- Dynamically display book name -->
                            <div class="book-title"><?php echo htmlspecialchars($book['book_name']); ?></div>
                            <div class="ratings">★★★★★</div>
                            <button class="add-to-cart-btn">
                                <a href="read.php?id=<?php echo $book['book_id']; ?>">Read Now</a>
                            </button>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="explore-more">
            <a href="books.php">Explore More</a>
        </div>
            
        </div>
    </div>
 </section>
 <?php
 // Close the database connection
 mysqli_close($connection);
 ?>


 <div class="container mt-5"></div>
    <!-- Image with text overlay -->
    <div class="image-text-container">
        <img src="Assests/img/book-shape.png" alt="Background Image" class="img-fluid">
        <div class="overlay-text">Read Your Favourite Book Now</div>
        <div class="explore-more">
            <a href="books.php">Explore More</a>
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
 <script src="https://kit.fontawesome.com/a076d05399.js"></script>     
</body>
</html>