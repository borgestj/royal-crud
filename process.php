<?php
session_start();
$mysqli = new mysqli('localhost', 'root', 'root', 'royal-test') or die(mysqli_error($mysqli));

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $comercial_name = $_POST['comercial_name'];
    $cnpj = $_POST['cnpj'];
    $city = $_POST['city'];
    //  $rg = $_POST['rg'];
    //  $birthday = $_POST['birthday'];

    $name_contact = $_POST['name_contact'];
    $phones = $_POST['phone'];

    $count = $mysqli->query("SELECT count(id) FROM people") or die($mysqli->error);
    $newId = (intval($count) + 1);
    var_dump($count);
    
    $mysqli->query("INSERT INTO people (name, comercial_name, cnpj, city) VALUES('$name', '$comercial_name', '$cnpj', '$city')") or die($mysqli->error);
    
    $mysqli->query("INSERT INTO contacts (name, phones, created, peopleId) VALUES('$name_contact', '$phones', NOW(), '$newId')");

    $_SESSION['message'] = "Usuário cadastrado com sucesso!";
    $_SESSION['msg_type'] = "success";

    header("location: index.php");
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM people WHERE id = $id") or die($mysqli->error);
}

if (isset($_POST['list'])) {
    $name =  $_POST['name'];

    $mysqli->query("SELECT * FROM people WHERE id = $id") or die($mysqli->error);

    header("location: <?php echo BASEURL; ?>register/lista.php");

}