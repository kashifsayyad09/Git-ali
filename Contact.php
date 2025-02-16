<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "estock";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];

    // Create a connection to the database
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        error_log("Connection failed: " . $conn->connect_error);
        echo "Error: Unable to connect to the database.";
        exit;
    }

    // Sanitize the input data
    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);
    $message = mysqli_real_escape_string($conn, $message);

    // Use a prepared statement to insert the data
    $sql = "INSERT INTO contact(name, email, message) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $message);
    $stmt->execute();
    $result = $stmt->get_result();

    if (!$result=null) {
        echo "Thank you for your message!";
        header('Location:head.html');
    } else {
        echo "Error: Unable to insert data into the database.";
    }
}
?>
