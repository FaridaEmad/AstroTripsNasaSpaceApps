<!DOCTYPE html>
<html>
    <head>
        <title>AstroTrips</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="../css/owl.carousel.min.css">
        <link rel="stylesheet" href="../css/owl.theme.default.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="../js/owl.carousel.min.js"></script>
        
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .card-center {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    backdrop-filter: blur(15px);
    background-color: transparent;
    color: white;
  }
  .cardm{
    margin-top:100px;
  }
  .bg-slide-img{
    background-image: url("../Media/805184\(2\).jpg");
    background-position: center;
}
.txt{
    font-size:24px;
    font-weight:800;
    color:#000;
}
.nav-active {
    background-color:#000;
    box-shadow: 5px -1px 12px -5px grey;
}
.card-st{
    backdrop-filter: blur(15px);
    background-color: transparent;
    color: white;
}

.ticket-card {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            border: none;
            background-color: #212529;
            border-radius: 10px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.3);
        }

        .ticket-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .ticket-title {
            font-size: 24px;
            font-weight: bold;
            color: #fff;
        }

        .ticket-info {
            margin-bottom: 10px;
        }

        .ticket-info span {
            font-weight: bold;
        }
        .ticket-info-value {
            margin-left: 10px;
            color: #ccc;
        }

        .ticket-id {
            font-size: 12px;
            color: #888;
            text-align: center;
            margin-top: 20px;
        }

        .ticket-destination {
            margin-top: 20px;
            font-weight: bold;
            text-align: center;
            text-transform: uppercase;
        }

        .planet-image {
            width: 120px;
            height: 120px;
            margin-right: 10px;
            object-fit: cover;
            border-radius: 50%;
        }

        .ticket-line {
            height: 1px;
            background-image: linear-gradient(to right, #007bff, #6c757d, #007bff);
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .ptop{
            padding-top:100px;
        }

    .qr-code{
        width:90px;
        height:90px;
        object-fit:cover;
        margin-left:10px;
    }
    </style>
    <script>
const navbar = document.querySelector('.nav-fixed');
window.onscroll = () => {
    if (window.scrollY > 100) {
        navbar.classList.add('nav-active');
    } else {
        navbar.classList.remove('nav-active');
    }
};

        $(document).ready(function() {
          // Show login form and hide register form
          $('#signInLink').click(function() {
            $('#registerForm').hide();
            $('#loginForm').show();
          });

          // Show register form and hide login form
          $('#registerLink').click(function() {
            $('#loginForm').hide();
            $('#registerForm').show();
          });
        });

        $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
      </script>
    </head>
    <body class="bg-img">
        <header>
            <nav class="navbar fixed-top nav-fixed navbar-expand-lg navbar-dark ">
                <div class="container-fluid">
                    <div class="col-9 pd-left">
                        <a class="navbar-brand nav-title nav-icon" href="#"><img src="../Media/Fiverr-Logo-Maker (1).png" alt="logo" class="logo">AstroTrips</a>
                    </div>
                    <div class="col-2 nav-menu">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ">
                                <li class="nav-item">
                                    <a class="nav-link navbar-item active" aria-current="page" href="homepage.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link navbar-item" href="trips.php">Trips</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link navbar-item" href="addFeedback.php">Feedback</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
              </nav>
        </header>
        <section class="main">

