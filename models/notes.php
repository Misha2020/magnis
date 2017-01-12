<?php

function noteAll($link){
    $query = " SELECT * FROM notebook ORDER BY id DESC ";
    $result = mysqli_query( $link, $query);

    if(!$result){
        die(mysqli_error($link));
    }

    $n = mysqli_num_rows ($result);
    $articles = array();

    for($i = 0;$i < $n; $i++ ){
        $row = mysqli_fetch_assoc($result);
        $articles[] = $row;
    }

    return $articles;
}

function noteOne($link, $id_note){
    $query = sprintf(" SELECT * FROM notebook WHERE id=%d ", (int)$id_note);
    $result = mysqli_query( $link, $query);

    if(!$result){
        die(mysqli_error($link));
    }

    $note = mysqli_fetch_assoc($result);

    return $note;
}

function noteAdd($link, $title, $date, $content, $nickname){
    $title  = trim($title);
    $content = trim($content);
    $nickname = trim($nickname);


    $sql = " INSERT INTO notebook (title, date, content, nickname) VALUES ('%s','%s','%s', '%s')";

    $query = sprintf($sql, mysqli_real_escape_string($link, $title), mysqli_real_escape_string($link, $date), mysqli_real_escape_string($link, $content), mysqli_real_escape_string($link, $nickname));

    $result = mysqli_query($link,$query);
    if(!$result){
        die(mysqli_error($link));
    }

    return true;
}

function noteEdit($link, $id, $title, $date, $content, $nickname ){
    $title  = trim($title);
    $content = trim($content);
    $date = trim($date);
    $nickname = trim($nickname);
    $id = (int)$id;


    $sql = " UPDATE notebook SET title='%s', content='%s', date='%s' , nickname='%s' WHERE id='%d' ";

    $query = sprintf($sql, mysqli_real_escape_string($link, $title), mysqli_real_escape_string($link, $content),mysqli_real_escape_string($link, $date), mysqli_real_escape_string($link, $nickname), $id);

    $result = mysqli_query($link,$query);
    if(!$result){
        die(mysqli_error($link));
    }

    return mysqli_affected_rows($link);
}

function noteDelete($link, $id){
    $id = (int)$id;

    if($id == 0){
        return false;
    }

    $sql = sprintf(" DELETE FROM notebook WHERE id='%d' ", $id);
    $result = mysqli_query($link,$sql);

    if(!$result){
        die(mysqli_error($link));
    }

    return mysqli_affected_rows($link);
}
