<?php
    session_start();
    require_once '../../config/Debug.php';
    require_once '../../actions/users/add_enseignant_action.php';
    
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
        <title>Ajouter un enseignant</title>
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
                    <a href="#" class="active">
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
                    <a href="bulletins.php">
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
                        <a href="#" class="active">
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
                        <a href="bulletins.php">
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
                    <h4 class="mb-4 text-center text-decoration-underline fw-bolder">Gestion des enseignants</h4>
                     <!-- Nav Tabs -->
                    <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="add-tab" data-bs-toggle="tab" data-bs-target="#add" type="button" role="tab">
                            Ajouter un enseignant
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="list-tab" data-bs-toggle="tab" data-bs-target="#list" type="button" role="tab">
                            Liste des enseignants
                            </button>
                        </li>
                    </ul>
                    <!-- Tab Contents -->
                    <div class="tab-content">
                        <!-- Onglet Ajouter -->
                        <div class="tab-pane fade show active" id="add" role="tabpanel">
                            <div class="p-4" style="max-width: 100%;">
                                <form method="post" action="" class="bg-white w-75 p-5 mx-auto mt-5 shadow-lg rounded-3">
                                    <?php 
                                        if(isset($error_msg)){ 
                                            echo '<div class="alert alert-danger" role="alert">'.$error_msg.'</div>'; 
                                        }
                                        elseif(isset($success_msg)) {
                                            echo '<div class="alert alert-success" role="alert">'.$success_msg.'</div>';
                                        }
                                    ?> 
                                    <div class="row g-3">
                                        <div class="col">
                                            <label for="nom" class="form-label">Nom :</label>
                                            <input type="text" class="form-control form-control-lg form-control-lg" id="nom" autocomplete="off" aria-label="First name" name="name">
                                        </div>
                                        <div class="col">
                                            <label for="prenom" class="form-label">Prénom</label>
                                            <input type="text" class="form-control form-control-lg" id="Prenom" autocomplete="off" aria-label="Last name" name="surname">
                                        </div>
                                    </div>
                                    <div class="row g-3 mt-3 mb-5">
                                        <div class="col">
                                            <label for="Email" class="form-label">Email :</label>
                                            <input type="text" class="form-control form-control-lg" id="Email" autocomplete="off" aria-label="email" name="email">
                                        </div>
                                        <div class="col">
                                            <label for="ppassword" class="form-label">Password :</label>
                                            <input type="password" class="form-control form-control-lg" id="Password" autocomplete="off" aria-label="password" name="password">
                                        </div>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-dark btn-lg mb-5">Ajouter</button>
                                </form>
                            </div>
                        </div>
                        <!-- Onglet Liste -->
                        <div class="tab-pane fade" id="list" role="tabpanel">
                            <div class="p-4">
                                <h5 class="mb-3">Enseignants disponibles</h5>
                                <table class="table table-bordered table-striped shadow-sm">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>Adresse email</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php if(isset($listEnseignant) AND !empty($listEnseignant)): $numEnseignant = 1; ?>
                                            <?php foreach($listEnseignant as $value): ?>
                                                <tr>
                                                    <td><?= $numEnseignant ?></td>
                                                    <td><?= $value['nom'] ?></td>
                                                    <td><?= $value['prenom'] ?></td>
                                                    <td><?= $value['email']?></td>
                                                    <td>
                                                        <a class="btn btn-sm btn-warning mx-2">Modifier</a>
                                                        <a class="btn btn-sm btn-danger mx-2">Supprimer</a>
                                                    </td>
                                                </tr>
                                            <?php $numEnseignant++;  endforeach; ?>
                                        <?php else: ?>
                                            <tr>
                                                <td colspan="4" class="text-danger text-center">Aucun enseignant *</td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>

    <script src="../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>   
    </body>
</html>