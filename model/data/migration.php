<?php
error_reporting(E_ALL);
try {
    // Connecting to date base
    $connect = new PDO("sqlite:$db");
    
    // SQL request on create table
    $sql = "CREATE TABLE IF NOT EXISTS `Roulette`(
        id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
        sector INTEGER NOT NULL,
        half INTEGER,
        third INTEGER,
        dozen INTEGER,
        parity TEXT,
        color TEXT,
        stat INTEGER DEFAULT 0
    )";
    // Completing sql request
    $connect -> exec($sql);
    echo "Created table casino roulette";

    // Fill table
    $sql = "INSERT INTO `Roulette`(sector, parity, color) VALUES
    (0, 'zero', 'green'),
    (32, 'even', 'red'),
    (15, 'odd', 'black'),
    (19, 'odd', 'red'),
    (4, 'even', 'black'),
    (2, 'even', 'black'),
    (21, 'odd', 'red'),
    (25, 'odd', 'red'),
    (17, 'odd', 'black'),
    (34, 'even', 'red'),
    (6, 'even', 'black'),
    (27, 'odd', 'red'),
    (13, 'odd', 'black'),
    (36, 'even', 'red'),
    (11, 'odd', 'black'),
    (30, 'even', 'red'),
    (8, 'even', 'black'),
    (23, 'odd', 'red'),
    (10, 'even', 'black'),
    (5, 'odd', 'red'),
    (24, 'even', 'black'),
    (16, 'even', 'red'),
    (33, 'odd', 'black'),
    (1, 'odd', 'red'),
    (20, 'even', 'black'),
    (14, 'even', 'red'),
    (31, 'odd', 'black'),
    (9, 'odd', 'red'),
    (22, 'even', 'black'),
    (18, 'even', 'red'),
    (29, 'odd', 'black'),
    (7, 'odd', 'red'),
    (28, 'even', 'black'),
    (12, 'even', 'red'),
    (35, 'odd', 'black'),
    (3, 'odd', 'red'),
    (26, 'even', 'black')
    ";
    $countSector = $connect -> exec($sql);
    echo "In table roulette add strings $countSector"; 
    $connect = NULL;
}

catch(PDOException $e){
    echo "Date base error". $e -> getMessage();
}