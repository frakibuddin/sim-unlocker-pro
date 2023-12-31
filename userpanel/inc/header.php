<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/dataTables-bootstrap5.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body class="dark-mode">
    <!--============ start header ============-->
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid gap-4 ">
                    <a class="navbar-brand" href="index.php">
                        <img src="assets/img/sim-unlocker-logo-dark-mode.png" alt="logo" width="200" class="header-logo" data-lightImg="assets/img/sim unlocker-logo-light-mode.png">
                    </a>
                    <div class="mode-btns ml-auto d-lg-none">
                        <i class="fa-regular fa-sun fs-2 text-color"></i>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse py-5 py-lg-0 gap-4" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto mb-2 mb-lg-0 ">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="dashboard.php">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="model-list.php">Model List</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="download.php">Download File</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="profile.php">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="tickets.php">Ticket</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="buy-credits.php">Buy Credit</a>
                            </li>
                        </ul>
                        <form class="d-flex gap-4 align-items-center mt-3 mt-lg-0">
                            <div class="mode-btns d-none d-lg-block">
                                <i class="fa-regular fa-sun fs-2 text-color"></i>
                            </div>
                            <a href="login.php" type="button" class="mybtn mybtn-menu blue-btn">Logout</a>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--============ End header ============-->