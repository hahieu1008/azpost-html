<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!--CK Editor-->
    <script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>

    <!--font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>ADMIN DASHBOARD AZPOST</title>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Custom styles for this template -->
    <link href="../css/offcanvas.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">AZPOST MANAGER</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            
            <li class="nav-item">
              <a class="nav-link" href="../post.php?page=Introduction">Introduction</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../post.php?page=Feature">Feature</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../post.php?page=Token AZP">Token AZP</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../post.php?page=How to earn">How to earn</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register.php">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Hieu Ha
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="settings.php">Setting</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Logout</a>
              </div>

              <!--
              <li class="nav-item active">
                <a class="nav-link" href="#"><button class="btn btn-sm btn-primary" type="button">Create Note</button></a>
              </li>
              -->
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    
    <div class="nav-scroller bg-body shadow-sm">
      <nav class="nav nav-underline" aria-label="Secondary navigation">
      <a class="nav-link" href="index.php">Dashboard</a>
        <a class="nav-link" href="m-admins.php">
            Admins
        </a>   
        <a class="nav-link" href="m-users.php">
            Users
        </a>
        <a class="nav-link" href="m-posts.php">
            Posts
        </a>
        <a class="nav-link" href="m-pages.php">Pages</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link active" href="#">Link</a>
        <a class="nav-link " href="#">Link</a>
      </nav>
    </div>
    
    <main class="container">