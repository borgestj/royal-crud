<?php
session_start();
$mysqli = new mysqli('localhost', 'root', 'root', 'royal-test') or die(mysqli_error($mysqli));

$type = '';

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $comercial_name = $_POST['comercial_name'];
    $cnpj = $_POST['cnpj'];
    $city = $_POST['city'];

    $name_contact = $_POST['name_contact'];
    $phones = $_POST['phone'];

    $result=$mysqli->query("SELECT id as total from people");
    $data = $result->fetch_assoc();
    $idContact = $data['total'] + 1;

    $mysqli->query("INSERT INTO people (name, comercial_name, cnpj, city, type) VALUES('$name', '$comercial_name', '$cnpj', '$city', 'PJ')") or die($mysqli->error);
    
    $mysqli->query("INSERT INTO contacts (contactName, phones, created, peopleId) VALUES('$name_contact', '$phones', NOW(), '$idContact')");

    $_SESSION['message'] = "Usuário cadastrado com sucesso!";
    $_SESSION['msg_type'] = "success";

    header("location: index.php");
}

if (isset($_POST['savepf'])) {
    $name = $_POST['name'];
    $cpf = $_POST['cpf'];
    $city = $_POST['city'];
    $rg = $_POST['rg'];
    $birthday = $_POST['birthday'];
    $birthdayConvert = implode("-",array_reverse(explode("/",$birthday)));

    $name_contact = $_POST['name_contact'];
    $phones = $_POST['phone'];

    $result=$mysqli->query("SELECT id as total from people");
    $data = $result->fetch_assoc();
    $idContact = $data['total'] + 1;

    $mysqli->query("INSERT INTO people (name, cpf, city, rg, birthday, type) VALUES('$name', '$cpf', '$city', '$rg', '$birthdayConvert', 'PF')") or die($mysqli->error);
    
    $mysqli->query("INSERT INTO contacts (contactName, phones, created, peopleId) VALUES('$name_contact', '$phones', NOW(), '$idContact')");

    $_SESSION['message'] = "Usuário cadastrado com sucesso!";
    $_SESSION['msg_type'] = "success";

    header("location: index.php");
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM contacts WHERE id = $id") or die($mysqli->error);
    $mysqli->query("DELETE FROM people WHERE id = $id") or die($mysqli->error);

    $_SESSION['message'] = "Usuário deletado com sucesso!";
    $_SESSION['msg_type'] = "danger";

    header("location: index.php");
}