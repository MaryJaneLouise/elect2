<?php
    $serverName = "localhost";
    $username   = "testuser2";
    $password   = "test0123!";

    //MySQLCon
    $dbCon = new mysqli($serverName, $username, $password);

    if ($dbCon->connect_error) {
        die("Connection failed: ". $dbCon->connect_error);
    }

    echo "\nDatabase connected successfully - MySQLCon";
    $dbCon->close();

    //procedural
    $dbConProd = mysqli_connect($serverName, $username, $password);

    if (!$dbConProd) {
        die("Connection failed". mysqli_connect_error());
    }
    echo "\nDatabase connected successfully - procedural";

    //PDO
    try {
        $dbConPDO = new PDO("mysql:host=$serverName;", $username, $password);
        $dbConPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "\nDatabase connected successfully - PDO";
    } catch (PDOException $ex) {
        echo "Connection failed". $ex->getMessage();
    }
    /*
    //MySQLi OOP
    $dbConOOP = new mysqli($serverName, $username, $password);

    if ($dbConOOP->connect_error) {
        die("Connection failed: ". $dbConOOP->connect_error);
    }

    $query = "CREATE DATABASE fromphpdb";
    if ($dbConOOP->query($query) === True) {
        echo "\n\nDatabase created successfully - OOP (fromphpdb)";
    } else {
        echo "Error Creating the database: ". $dbConOOP->error;
    }
    $dbConOOP->close();

    //procedural
    $dbCONProcedural = mysqli_connect($serverName, $username, $password);

    if (!$dbCONProcedural) {
        echo "Connection failed: ". mysqli_connect_error();
    }

    $queryProd = "CREATE DATABASE fromphpdb2";
    if (mysqli_query($dbCONProcedural, $queryProd)) {
        echo "\nDatabase has been created from procedural - (fromphpdb2)";
    } else {
        echo "Error creating database: ". mysqli_error($dbCONProcedural);
    }

    //PDOQuery
    try {
        $dbPDO = new PDO("mysql:host=$serverName;", $username, $password);
        $dbPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $queryPDO = "CREATE DATABASE fromphpdb3";
        $dbPDO->exec($queryPDO);

        echo "\nDatabase has been created - PDOQuery (fromphpdb3)";
    } catch (PDOException $ex) {
        echo "\nDatabase creation cannot continue: ". $ex->getMessage();
    }*/
/*
    //MySQLi OOP
    $dbNameOOP = "fromphpdb";
    $dbConMySqli = new mysqli($serverName, $username, $password, $dbNameOOP);

    if ($dbConMySqli->connect_error) {
        die("Connection failed: ". $dbConMySqli->connect_error);
    }

    $queryOOP = "CREATE TABLE tbl_students (
        student_id INT(6) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
        first_name VARCHAR(30) NOT NULL,
        last_name VARCHAR(30) NOT NULL,
        grade DECIMAL(10, 2) NOT NULL
    )";

    if ($dbConMySqli->query($queryOOP) === True) {
        echo "Table created success";
    } else {
        echo "Table has not been created: ". $dbConMySqli->error;
    }
    $dbConMySqli->close();*/

    //PDODb
    $dbNamePDO = "fromphpdb3";
    try {
        $dbConPDODb = new PDO("mysql:host=$serverName;dbname=$dbNamePDO", $username, $password);
        $dbConPDODb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $queryPDO = "CREATE TABLE tbl_students (
        student_id INT(6) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
        first_name VARCHAR(30) NOT NULL,
        last_name VARCHAR(30) NOT NULL,
        grade DECIMAL(10, 2) NOT NULL)";

        $dbConPDODb->exec($queryPDO);
        echo "\nTable created Successfully";
    } catch (PDOException $ex) {
        echo "creation Failed" . $ex->getMessage();
    }
?>