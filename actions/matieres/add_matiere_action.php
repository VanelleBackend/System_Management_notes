<?php
    require_once '../../config/config.php';

    // insert to class
    if(isset($_POST['submit'])) {
        if(!empty($_POST['name_matiere']) AND !empty($_POST['coef_matiere'])) {

            $nameMatiere = htmlspecialchars($_POST['name_matiere']);
            $coefMatiere = htmlspecialchars($_POST['coef_matiere']);

            $query = $conn->prepare('INSERT INTO matieres (nom_matiere, coefficient) VALUES (?, ?)');
            $query->execute(array($nameMatiere, $coefMatiere)); 

            if($query){
                $success_msg = "Matière ajouter avec succèss";
            }
            else{
                $error_msg = "Erreur lors de l'ajout *";
            }
        }
        else {
            $error_msg = "Veuillez remplir tous les champs *";
        }
    }

    // recover list matiere
    $req = $conn->query('SELECT * FROM matieres');
    $listMatiere = $req->fetchAll();

?>