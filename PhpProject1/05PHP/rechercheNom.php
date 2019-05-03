<?php

    $filter = filter_input(INPUT_GET, 'filter', FILTER_SANITIZE_FULL_SPECIAL_CHARS) . '%';
    $limit = intval(filter_input(INPUT_GET, 'limit', FILTER_SANITIZE_NUMBER_INT));
    $limit = ($limit > 0) ? $limit: 100;
    $offset = intval(filter_input(INPUT_GET, 'offset', FILTER_SANITIZE_NUMBER_INT));
    $offset = ($offset >= 0) ? $offset: 0;
    
    

    require "connect.php";
    try {

        $con = new PDO("mysql:host=" . SERVER . ";dbname=" . BASE . ";charset=utf8", USER, PASSWD);
        
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $stmt = $con->prepare("SELECT * FROM tvisiteurs WHERE Nom LIKE :filter " . "LIMIT :offset, :limit");
        $stmt->bindValue(':filter', $filter);
        $stmt->bindValue(':offset', intval($offset), PDO::PARAM_INT);
        $stmt->bindValue(':limit', intval($limit), PDO::PARAM_INT);
        
        $stmt->execute;
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $results = $stmt->fetchAll();
        echo json_encode($results);
    }
        catch(PDOException $e) {
        header('Location: HTTP/1.1 500 try later' + $e->getMessage());
    }
?>