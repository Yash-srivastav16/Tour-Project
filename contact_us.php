<?php
$db_hostname = "127.0.0.1";
$db_username = "root";
$db_password = "";
$db_name = "tour";
$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
if (!$conn) {
    echo "Connection Failed:", mysqli_connect_error();
    exit;
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$sql = $conn->prepare("INSERT INTO contact (Name, Email, Phone, Subject, Message) VALUES (?, ?, ?, ?, ?)");
$sql->bind_param("sssss", $name, $email, $phone, $subject, $message);

if ($sql->execute()) {
    echo "We will contact you soon";
} else {
    echo "Error: " . $conn->error;
}

$sql->close();
$conn->close();
?>
