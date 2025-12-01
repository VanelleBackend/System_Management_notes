<?php
    session_start();
    require_once '../../config/Debug.php';
    
    if(isset($_SESSION['id'])) {
        if($_SESSION['role'] == 'admin') {

        } elseif($_SESSION['role'] == 'enseignant') {
            header('Location: ../enseignants/dashboard_enseignant.php');
            exit();
        } 
    } else {
        header('Location: ../auth/login.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gestion des bulletins</title>
         <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poller+One&family=Poppins:wght@200;300;400;500;600;700;800;900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../../assets/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
        <style>
            body{
                background-color: #f0f0f0c9;
                font-family: 'Poppins', sans-serif;
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
            <span class="navbar-brand ms-2">ESPACE ADMIN</span>
        </nav>
        <div class="offcanvas offcanvas-start d-md-none" tabindex="1" id="sidebarMenu" aria-labelledby="sidebarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="sidebarLabel">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body p-0">
                <div class="sidebar bg-dark">
                    <h3 class="d-none d-md-block">ESPACE ADMIN</h3>
                    <a href="dashboard_admin.php">
                            <i class="fa-solid fa-gauge"></i>
                            Dashboard
                    </a>
                    <a href="add_classe.php">
                            <i class="fa-solid fa-chalkboard"></i>
                            Classes
                    </a>
                    <a href="add_matiere.php">
                        <i class="fa-solid fa-layer-group"></i>
                            Matières
                    </a>
                    <a href="add_enseignant.php">
                        <i class="fa-solid fa-person-chalkboard"></i>
                            Enseignants
                    </a>
                    <a href="add_eleve.php">
                        <i class="fa-solid fa-user-graduate"></i>
                            Élèves
                    </a>
                    <a href="notes.php">
                        <i class="fa-solid fa-pen-to-square"></i>
                            Notes
                    </a>
                    <a href="#" class="active">
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
                        <h5>ESPACE ADMIN</h5>
                        <a href="dashboard_admin.php">
                            <i class="fa-solid fa-gauge"></i>
                            Dashboard
                        </a>
                        <a href="add_classe.php">
                            <i class="fa-solid fa-chalkboard"></i>
                            Classes
                        </a>
                        <a href="add_matiere.php">
                            <i class="fa-solid fa-layer-group"></i>
                            Matières
                        </a>
                        <a href="add_enseignant.php">
                            <i class="fa-solid fa-person-chalkboard"></i>
                            Enseignants
                        </a>
                        <a href="add_eleve.php">
                            <i class="fa-solid fa-user-graduate"></i>
                            Élèves
                        </a>
                        <a href="notes.php">
                            <i class="fa-solid fa-pen-to-square"></i>
                            Notes
                        </a>
                        <a href="#" class="active">
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
                    <h5 class="mb-5 fw-none">
                        <span class="text-primary fw-bold">Free-School</span> : Un système gestion des notes
                    </h5>
                </main>
            </div>
        </div>

    <script src="../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>   
    </body>
</html>