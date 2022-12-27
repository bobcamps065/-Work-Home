<html>
    <link rel="stylesheet" href="main.css">
    <link rel="shortcut icon" href="imagens/united.png" type="image/x-icon">
    <title>Work Home</title>
    <!-- ===================================== -->
    <div class="php">
    
    
<?php 
$name = $_POST['name'];
$email = $_POST['email'];
//============================ 
 $host = "localhost";
 $user = "root";
 $pass = "";
 $dba = "banco";
 
 $con = new mysqli($host, $user,$pass, $dba);
 
 if ($con->connect_error) {
     die("Erro na conexão: " . $con->connect_error);
} else {
    
    
$sql = $con->prepare("INSERT INTO cadastro (nome, email) VALUES (?, ?)");
$sql->bind_param("ss", $name, $email);
$sql->execute();

echo "Connect successfully!";
}

$sql->close();
$con->close();

?>
<!-- -------------------------------------------------------------- -->
     
    
    
    

</html>
