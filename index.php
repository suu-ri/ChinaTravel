<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel to China</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Light background color */
        }
        .jumbotron {
            background-image: url('your-background-image.jpg'); /* Add a beautiful background image */
            background-size: cover;
            color: white;
            padding: 100px 25px;
            text-align: center;
        }
        .card {
            transition: transform 0.2s; /* Add a hover effect */
        }
        .card:hover {
            transform: scale(1.05); /* Slightly enlarge the card on hover */
        }
        footer {
            background-color: #343a40; /* Dark footer */
            color: white;
            padding: 20px 0;
        }
    </style>
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Travel to China</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Travel Guides</a></li>
                <li class="nav-item"><a class="nav-link" href="#registerModal" data-bs-toggle="modal">Register</a></li>
                <li class="nav-item"><a class="nav-link" href="#loginModal" data-bs-toggle="modal">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<div class="jumbotron" style="background-image: url('your-background-image.jpg'); background-size: cover; color: black; padding: 100px 25px; text-align: center;">
    <h1 style="text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.7);">Welcome to Your Adventure in China!</h1>
    <p style="text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.7);">Explore the beauty and culture of China with our travel guides.</p>
    <a class="btn btn-primary btn-lg" href="#" role="button">Start Exploring</a>
</div>

<!-- Information Sharing Area -->
<div class="container mt-5">
    <h2>User Experiences</h2>
    <div class="row">
        <!-- Card Example -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <img src="example.jpg" class="card-img-top" alt="Travel Experience">
                <div class="card-body">
                    <h5 class="card-title">Amazing Trip to the Great Wall</h5>
                    <p class="card-text">A brief description of the experience shared by the user.</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        <!-- Repeat for more experiences -->
    </div>
</div>

<!-- Registration Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="POST" action="register.php"> <!-- Update action URL as needed -->
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="registerModalLabel">Register</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="registerName" class="form-label">Name</label>
            <input type="text" class="form-control" id="registerName" name="name" required>
          </div>
          <div class="mb-3">
            <label for="registerEmail" class="form-label">Email address</label>
            <input type="email" class="form-control" id="registerEmail" name="email" required>
          </div>
          <div class='mb-3'>
            <label for='registerPassword' class='form-label'>Password</label>
            <input type='password' class='form-control' id='registerPassword' name='password' required>
          </div>
        </div>
        <div class='modal-footer'>
          <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
          <button type='submit' class='btn btn-primary'>Register</button>
        </div>
      </div>
    </form> 
  </div> 
</div>

<!-- Login Modal -->
<div class='modal fade' id='loginModal' tabindex='-1' aria-labelledby='loginModalLabel' aria-hidden='true'>
  <div class='modal-dialog'>
    <form method='POST' action='login.php'> <!-- Update action URL as needed -->
      <div class='modal-content'>
        <div class='modal-header'>
          <h5 class='modal-title' id='loginModalLabel'>Login</h5>
          <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
        </div>
        <div class='modal-body'>
          <div class='mb-3'>
            <label for='loginEmail' class='form-label'>Email address</label>
            <input type='email' class='form-control' id='loginEmail' name='email' required>
          </div>
          <div class='mb-3'>
            <label for='loginPassword' class='form-label'>Password</label>
            <input type='password' class='form-control' id='loginPassword' name='password' required>
          </div>
        </div>
        <div class='modal-footer'>
          <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
          <button type='submit' class='btn btn-primary'>Login</button>
        </div> 
      </div> 
    </form> 
  </div> 
</div>

<!-- Footer -->
<footer style='background-color: #343a40;'class='text-center text-lg-start mt-5'>
  <div style='color: white;'class='text-center p-3'>
      © 2024 Travel to China | Follow us on:
      <a href='#' style='color: white;'>Facebook</a> |
      <a href='#' style='color: white;'>Twitter</a> |
      <a href='#' style='color: white;'>Instagram</a> 
  </div> 
</footer>

<script src='https://code.jquery.com/jquery-3.6.0.min.js'></script> 
<script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js'></script> 
<script src='https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js'></script>

</body> 
</html> 