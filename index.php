<?PHP
if($_POST){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CursoSQL";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn -> connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO USUARIA (NOMBRE, APELLIDO, EMAIL) VALUES ('".$nombre."', '".$apellido."', '".$email."')";

if ($conn->query($sql) === TRUE){
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>