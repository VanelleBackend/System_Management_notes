<?php
    require_once '../../config/config.php';

    if(isset($_GET['id']) AND !empty($_GET['id'])) {
        if(is_numeric($_GET['id']))
        {
            $idOfMatiereDelete = intval(trim($_GET['id']));

            // verifier si l'id existe
            $checkIfMatiereExists = $conn->prepare('SELECT id_matiere FROM matieres WHERE id_matiere = ?');
            $checkIfMatiereExists->execute(array($idOfMatiereDelete));

            if($checkIfMatiereExists->rowCount() > 0)
            {
                $query = $conn->prepare('DELETE FROM matieres WHERE id_matiere = ?');
                $query->execute(array($idOfMatiereDelete));

                //redirection après la supression
                header('Location: ../../pages/admin/add_matiere.php');
                exit();
            }
            else
            {
                echo "Aucune classe trouvée *";
            }
        }
    }

    
?>