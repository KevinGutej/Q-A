<?php

$db = new mysqli('localhost', 'root', '', '');//CREATE A DATABASE

if ($db->connect_error) {
    die("Failed to connect to database: " . $db->connect_error);
}

$questionsQuery = "SELECT * FROM questions"; //CREATE A TABLE NAMED 'QUESTIONS'
$questionsResult = $db->query($questionsQuery);

if ($questionsResult->num_rows > 0) {
    while ($row = $questionsResult->fetch_assoc()) {
        echo '<p>' . $row['question'] . '</p>';
    }
}