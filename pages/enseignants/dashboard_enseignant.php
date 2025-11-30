<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard Admin</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poller+One&family=Poppins:wght@200;300;400;500;600;700;800;900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../../assets/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
        <style>
            body{
                background-color: #f0f0f0c9;
                font-family: poppins, 'Segoe UI' sans-serif;
            }
            .sidebar {
                background-color: #1f2d3d;
                color: #fff;
                padding: 1.5rem;
                min-height: 100vh;
            }
            .sidebar h4 {
                color: #fff;
                margin-bottom: 2rem;
                font-weight: 900;
            }
            .sidebar a {
                color: #adb5bd;
                text-decoration: none;
                display: flex;
                align-items: center;
                gap: 0.75rem;
                padding: 0.75rem 1rem;
                border-radius: 0.375rem;
                margin-bottom: 0.5rem;
            }
            .sidebar a:hover, .sidebar a.active {
                background-color: #35595e;
                color: #fff;
            }
            main .poppins-black {
                font-family: "Rubik", sans-serif;
                font-optical-sizing: auto;
                font-weight: 700;
            }
            .card {
                transition: transform 0.2s;
            }
            .card:hover {
                transform: translateY(-3px);
            }
            .offcanvas-start {
                width: 250px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark d-md-none px-3">
            <button class="btn btn-outline-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu">
                <i class="fa-solid fa-bars"></i>
            </button>
            <span class="navbar-brand ms-2">ESPACE ENSEIGANTS</span>
        </nav>
        <div class="offcanvas offcanvas-start d-md-none" tabindex="1" id="sidebarMenu" aria-labelledby="sidebarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="sidebarLabel">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body p-0">
                <div class="sidebar bg-dark">
                    <h3 class="d-none d-md-block">ESPACE ENSEIGANTS</h3>
                    <a href="#" class="active">
                            <i class="fa-solid fa-gauge"></i>
                            Dashboard
                    </a>
                    <a href="#">
                            <i class="fa-solid fa-chalkboard"></i>
                            Classes
                    </a>
                    <a href="#">
                        <i class="fa-solid fa-layer-group"></i>
                            Matières
                    </a>
                    <a href="#">
                        <i class="fa-solid fa-person-chalkboard"></i>
                            Enseignants
                    </a>
                    <a href="#">
                        <i class="fa-solid fa-user-graduate"></i>
                            Élèves
                    </a>
                    <a href="#">
                        <i class="fa-solid fa-pen-to-square"></i>
                            Notes
                    </a>
                    <a href="#">
                        <i class="fa-solid fa-file-lines"></i>
                            Bulletins
                    </a>
                    <a href="../auth/logout.php">
                        <i class="fa-solid fa-right-from-bracket"></i>
                            Déconnexion
                    </a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <nav class="col-md-3 col-lg-2 d-none d-md-block bg-dark sidebar">
                    <div>
                        <h4>ESPACE ENSEIGANTS</h4>
                        <a href="#" class="active">
                            <i class="fa-solid fa-gauge"></i>
                            Dashboard
                        </a>
                        <a href="#">
                            <i class="fa-solid fa-chalkboard"></i>
                            Classes
                        </a>
                        <a href="#">
                            <i class="fa-solid fa-layer-group"></i>
                            Matières
                        </a>
                        <a href="#">
                            <i class="fa-solid fa-person-chalkboard"></i>
                            Enseignants
                        </a>
                        <a href="#">
                            <i class="fa-solid fa-user-graduate"></i>
                            Élèves
                        </a>
                        <a href="#">
                            <i class="fa-solid fa-pen-to-square""></i>
                            Notes
                        </a>
                        <a href="#">
                            <i class="fa-solid fa-file-lines"></i>
                            Bulletins
                        </a>
                        <a href="../auth/logout.php">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            Déconnexion
                        </a>
                    </div>
                </nav>
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                    <h4 class="mb-5 fw-none">
                        <span class="text-primary fw-bold">Free-School</span> : Un système gestion des notes
                    </h4>
                    <div class="row g-4 mb-4">
                        <div class="col-sm-6 col-lg-3 d-flex">
                            <div class="card shadow-sm h-100 w-100">
                                <div class="card-body">
                                    <h6 class="text-muted">Classes</h6>
                                    <h2 class="poppins-black">10</h2>
                                    <span class="badge bg-success">
                                        <i class="fa-solid fa-chalkboard me-1 fs-3"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 d-flex">
                            <div class="card shadow-sm h-100 w-100">
                                <div class="card-body">
                                    <h6 class="text-muted">Élèves</h6>
                                    <h2 class="poppins-black">30</h2>
                                    <span class="badge bg-danger">
                                        <i class="fa-solid fa-user-graduate me-1 fs-3"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 d-flex">
                            <div class="card shadow-sm h-100 w-100">
                                <div class="card-body">
                                    <h6 class="text-muted">Enseignants</h6>
                                    <h2 class="poppins-black">8</h2>
                                    <span class="badge bg-success">
                                        <i class="fa-solid fa-person-chalkboard me-1 fs-3"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 d-flex">
                            <div class="card shadow-sm h-100 w-100">
                                <div class="card-body">
                                    <h6 class="text-muted">Matières</h6>
                                    <h2 class="poppins-black">5</h2>
                                    <span class="badge bg-primary">
                                        <i class="fa-solid fa-layer-group me-1 fs-3"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>

    <script src="../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>