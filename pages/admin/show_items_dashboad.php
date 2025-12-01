<?php

    require_once '../../config/config.php';

    // recover all class
    $query = $conn->query('SELECT * FROM classes');
    $totalClass = Count($query->fetchAll());
?>