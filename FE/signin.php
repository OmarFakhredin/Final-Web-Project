<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Movie Website</title>
    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #007bff; /* Bootstrap primary blue */
            color: #ffffff;
        }
        .form-control, .btn-primary {
            border-radius: 0.25rem;
        }
        .btn-primary {
            background-color: #0056b3; /* Darker blue */
            border: none;
        }
        .header-area {
            background: transparent;
        }
        .logo img {
            filter: brightness(0) invert(1);
        }
        .img-fluid {
            border-radius: 15px; /* Rounded corners */
            box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.75); /* Adding shadow */
        }
    </style>
</head>
<body>
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/logo.png" alt="" style="width: 158px;">
                        </a>
                        <!-- ***** Logo End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="container mt-5">
        <div class="row align-items-center">
            <div class="col-md-6 mx-auto">
                <h2 class="mb-4 text-center">Sign In</h2>
                <form>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                </form>
            </div>
            <div class="col-md-6">
                <img src="assets/images/banner-image.jpg" alt="" class="img-fluid">
            </div>
        </div>
    </div>

    <footer>
        <div class="container text-center">
            <p>Copyright © 2048 Movie Website. All rights reserved.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
