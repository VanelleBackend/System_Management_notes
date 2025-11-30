<?php
    require_once '../../config/config.php';

    if(isset($_POST['submit'])) {

        // check email and password
        if(!empty($_POST['email']) AND !empty($_POST['password'])){

            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);

            $req = $conn->prepare("SELECT * FROM utilisateurs WHERE email = ?");
            $req->execute(array($email));

            if($req->rowCount() > 0){

                $usersInfos = $req->fetch();

                if(password_verify($password, $usersInfos['password'])){

                    $_SESSION['id'] = $usersInfos['id_user'];
                    $_SESSION['name'] = $usersInfos['nom'];
                    $_SESSION['role'] = $usersInfos['role'];

                    // check role
                    if($_SESSION['role'] == 'admin'){
                        header('Location: ../../pages/admin/dashboard_admin.php');
                        exit();
                    }
                    elseif($_SESSION['role'] == 'enseignant') {
                        header('Location: ../../pages/enseignants/dashboard_enseignant.php');
                        exit();
                    }
                    else {
                        header('Location: ../../pages/enseignants/dashboard_eleve.php');
                        exit();
                    }
                    
                }
                else{
                    $error_msg = 'Password incorrect *';
                }
            }
            else{
                $error_msg = 'Email incorrect *';
            }  

        }
        else {
            $error_msg = 'Veuillez remplir tous les champs *';
        }

    }

?>