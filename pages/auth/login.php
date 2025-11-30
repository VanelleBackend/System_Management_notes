<?php
    session_start();
    require_once '../../config/Debug.php';
    require_once '../../actions/users/login_action.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Connexion</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poller+One&family=Poppins:wght@200;300;400;500;600;700;800;900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../../assets/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="../../assets/css/style.css">
        <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark d-md-none px-3">
            <h4 class="navbar-brand ms-2">CONNEXION</h4>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <nav class="col-md-3 col-lg-2 d-none d-md-block bg-dark sidebar">
                    <div>
                        <h4>CONNEXION</h4>
                    </div>
                </nav>
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                    <h5 class="mb-5 fw-none">
                        <span class="text-primary fw-bold">Free-School</span> : Un système gestion des notes
                    </h5><br><br><br>
                    <form action="" method="post" class="w-50 bg-white mx-auto p-5 rounded-2 shadow-lg mt-5">

                        <?php if(isset($error_msg)){ echo '<div class="alert alert-danger" role="alert">'.$error_msg.'</div>'; }?> 
                        
                        <div class="mb-5 d-flex justify-content-center">
                            <i class="fa-solid fa-user fs-1" style="color: #1d1e20;"></i>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" autocomplete="off">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" autocomplete="off">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <button type="submit" name="submit" class="btn btn-dark btn-lg"><span class="fw-700">Se connecter</span></button>
                    </form>
                </main>
            </div>
        </div>
    </body>
</html>