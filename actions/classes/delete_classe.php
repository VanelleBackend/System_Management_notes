<?php
    require_once '../../config/config.php';

    if(isset($_GET['id']) AND !empty($_GET['id'])) {
        if(is_numeric($_GET['id']))
        {
            $idOfClasseDelete = intval(trim($_GET['id']));

            // verifier si l'id existe
            $checkIfClasseExists = $conn->prepare('SELECT id_classe FROM classes WHERE id_classe = ?');
            $checkIfClasseExists->execute(array($idOfClasseDelete));

            if($checkIfClasseExists->rowCount() > 0)
            {
                $query = $conn->prepare('DELETE FROM classes WHERE id_classe = ?');
                $query->execute(array($idOfClasseDelete));

                //redirection après la supression
                header('Location: ../../pages/admin/add_classe.php');
                exit();
            }
            else
            {
                echo "Aucune classe trouvée *";
            }
        }
    }

    
?>