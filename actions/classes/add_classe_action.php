<?php
    require_once '../../config/config.php';

    // insert to class
    if(isset($_POST['submit'])) {
        if(!empty($_POST['name_class']) AND isset($_POST['level_class'])) {

            $nameClass = htmlspecialchars($_POST['name_class']);
            $levelClass = htmlspecialchars($_POST['level_class']);

            $query = $conn->prepare('INSERT INTO classes (nom_classe, niveau) VALUES (?, ?)');
            $query->execute(array($nameClass, $levelClass));

            if($query){
                $success_msg = "Classe ajouter avec succèss";
            }
            else{
                $error_msg = "Erreur lors de l'ajout *";
            }
        }
        else {
            $error_msg = "Veuillez remplir tous les champs *";
        }
    }

    // recover list class
    $req = $conn->query('SELECT * FROM classes');
    $listClass = $req->fetchAll();

?>