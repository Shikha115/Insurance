<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/css/owl.carousel.min.css">
    <link rel="stylesheet" href="src/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="src/css/aos.css">
    <link rel="stylesheet" href="src/scss/main.css">
    <link rel="icon" type="image/png" href="src/images/favicon.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>LIC E-FLAT</title>
</head>
<body>
    <header class="custom">
        <nav class="menu">
            <div class="menu-left row">  
                <div class="align-items-center col-12 col-md-4 d-flex menu-left-1">
                    <button class="navbar-toggler" type="button">
                        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                    </button>
                    <a class="navbar-brand" href="index.php">LIC E-FLAT</a>    
                </div>  
                <div class="col-12 col-md-8 p-0">
                    <div id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item <?=$_SERVER['REQUEST_URI']=='/insurance/index.php'?'menu-active':''?>">
                                <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item <?=$_SERVER['REQUEST_URI']=='/insurance/index.php#about'?'menu-active':''?>" >
                                <a class="nav-link " href="#about">About</a>
                            </li>
                            <li class="nav-item <?=$_SERVER['REQUEST_URI']=='/insurance/index.php#services'?'menu-active':''?>">
                                <a class="nav-link" href="#services">Services</a>
                            </li>
                            <li class="nav-item <?=$_SERVER['REQUEST_URI']=='/insurance/index.php#testi'?'menu-active':''?>">
                                <a class="nav-link" href="#testi">Testimonial</a>
                            </li>
                            <li class="nav-item <?=$_SERVER['REQUEST_URI']=='/insurance/index.php#contact'?'menu-active':''?>">
                                <a class="nav-link" href="#contact">Contact</a>
                            </li>
                            <li>
                                <span class="navbar-text">
                                    <p class='m-0 d-flex align-items-center'><i class="fas fa-mobile-alt"></i><a href="tel:9999788845">9999788845</a></p>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
