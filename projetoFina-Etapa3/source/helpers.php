<?php

function getUsers ($conn){
    $query = "select * from users";
    $stmt = $conn->query($query);
    return $stmt->fetchAll();
}