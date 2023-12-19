<?php 

// Create table stories

$conn = new PDO('sqlite:shifumi.db');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "CREATE TABLE IF NOT EXISTS Story (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    result VARCHAR(25) NOT NULL,
    computerChoice VARCHAR(25) NOT NULL,
    userChoice VARCHAR(25) NOT NULL,
    date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);";

$conn->exec($sql);

// Fill table stories with random data

$choices = ['pierre', 'papier', 'ciseaux'];
$results = ['Gagné', 'Perdu', 'Match nul'];

for ($i = 0; $i < 20; $i++) {
    $result = $results[rand(0, 2)];
    $computerChoice = $choices[rand(0, 2)];
    $userChoice = $choices[rand(0, 2)];
    $sql = "INSERT INTO Story (result, computerChoice, userChoice) VALUES ('$result', '$computerChoice', '$userChoice');";
    $conn->exec($sql);
}
