<?php
require_once ("DB.php");
require_once("models/notes.php");

$link = dbConnect();

if(isset($_GET['action'])){
    $action = $_GET['action'];
} else {
    $action = "";
}

if($action == "add") {
    if (!empty($_POST)) {
        noteAdd($link, $_POST['title'], $_POST['date'], $_POST['content'], $_POST['nickname']);
        header("Location: index.php");
    }
    include("views/post_creation_page.php");

} elseif ($action == "edit") {
    if (!isset($_GET['id'])) {
        header("Location: index.php");
    }
    $id = (int)$_GET['id'];

    if (!empty($_POST) && $id > 0) {
        noteEdit($link, $id, $_POST['title'], $_POST['date'], $_POST['content'],  $_POST['nickname']);
        header("Location: index.php");
    }
    $note = noteOne($link, $id);
    include("views/post_creation_page.php");
} elseif ($action == "delete"){
    $id = (int)$_GET['id'];
    $article = noteDelete($link, $id);
    header("Location: index.php");
} else {
    $notes = noteAll($link);
    include("views/home_page.php");
}

