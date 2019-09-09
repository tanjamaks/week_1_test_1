<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "baza2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else { echo "Konekcija uspjela";
}

$sql = "CREATE TABLE IF NOT EXISTS customers ( 
       id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
       title VARCHAR(40) NOT NULL,
       lastname VARCHAR(50) NOT NULL,
       firstname VARCHAR(50) NOT NULL)";

if ($conn->query($sql) === TRUE) {
    echo "Table customers created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql = "CREATE TABLE IF NOT EXISTS products ( 
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    product VARCHAR(255) NOT NULL,
    opis TEXT NOT NULL,
    quantity INT(11) NOT NULL,
    cost FLOAT NOT NULL)";

if ($conn->query($sql) === TRUE) {
 echo "Table products created successfully";
} else {
 echo "Error creating table: " . $conn->error;}

 $sql = "CREATE TABLE IF NOT EXISTS purchases ( 
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    customers_id INT(11) NOT NULL,
    day INT(11) NOT NULL,
    month INT(11) NOT NULL,
    year INT NOT NULL,
    FOREIGN KEY(customers_id) REFERENCES customers(id)";

if ($conn->query($sql) === TRUE) {
 echo "Table purchases created successfully";
} else {
 echo "Error creating table: " . $conn->error;}

 $sql = "CREATE TABLE IF NOT EXISTS purchaseproducts ( 
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    products_id INT(11) UNSIGNED,
    purchases_id INT(11) NOT NULL,
    quantity INT(11) NOT NULL,
    cost FLOAT NOT NULL,
    FOREIGN KEY (products_id) REFERENCES products(id),
    FOREIGN KEY (purchases_id) REFERENCES purchases(id)";
    

if ($conn->query($sql) === TRUE) {
 echo "Table purchases created successfully";
} else {
 echo "Error creating table: " . $conn->error;}

