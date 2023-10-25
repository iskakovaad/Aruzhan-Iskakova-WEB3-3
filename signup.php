<?php
    require_once("connect.php");

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $number = $_POST['number'];
    $city = $_POST['city'];
    $specialization = $_POST['specialization'];
    $qualification = $_POST['qualification'];
    $question = $_POST['question'];

    mysqli_query($connect, "INSERT INTO `coursework_a` (`id`, `name`, `surname`, `number`, `city`, `specialization`, `qualification`, `question`) 
    VALUES (NULL, '$name', '$surname', '$number', '$city', '$specialization', '$qualification', '$question')");

    header("Location: done.php");
    ?>