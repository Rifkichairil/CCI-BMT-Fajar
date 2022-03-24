<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'db_bmt';

try {
    $conn = new PDO("mysql:host=$server;dbname=$database", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $rekening_id = $_POST['rekening_id'];

        $sql = "SELECT * FROM rekening WHERE id_rekening = '$rekening_id'";
    
        // Prepare statement
        $stmt = $conn->prepare($sql);
    
        // execute the query
        $stmt->execute();
        $books = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($books);
    
        // echo a message to say the UPDATE succeeded
        // echo $stmt->rowCount() . " records UPDATED successfully";
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
}
    
    $conn = null;
?>