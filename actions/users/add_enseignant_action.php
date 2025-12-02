<?php

    require_once '../../config/config.php';

    if(isset($_POST['submit'])) {
        if(!empty($_POST['name']) AND !empty($_POST['surname']) AND !empty($_POST['email']) AND !empty($_POST['password'])) {

            // storage the datas users into var
            $nameEnseignant= trim(htmlspecialchars($_POST['name']));
            $surnameEnseignant = trim(htmlspecialchars($_POST['surname']));
            $emailEnseignant = trim(htmlspecialchars($_POST['email']));
            // hachage to pasword
            $passwordEnseignant = trim(htmlspecialchars($_POST['password']));
            $passwordEnseignant = password_hash($passwordEnseignant, PASSWORD_DEFAULT);

            // check if exist teach
            $query = $conn->prepare('SELECT * FROM utilisateurs WHERE email = ? AND role = ?');
            $query->execute(array($emailEnseignant, 'enseignant'));

            if($query->rowCount() > 0) {
                $error_msg = "Email déjà existant *"; // email teach exit readly
            }
            else {

                $req = $conn->prepare('INSERT INTO utilisateurs (nom, prenom, email, password, role) VALUES (?, ?, ?, ?, ?)'); 
                $req->execute(array($nameEnseignant, $surnameEnseignant, $emailEnseignant, $passwordEnseignant, 'enseignant'));
                $success_msg = "Enseignant ajouter avec succèss";

            }
        } 
        else {
            $error_msg = "Veuillez remplir tous les champs *";
        }
    }

    // recover list the teachs
    $req = $conn->prepare('SELECT * FROM utilisateurs WHERE role = ?');
    $req->execute(array('enseignant'));
    $listEnseignant = $req->fetchAll();
?>