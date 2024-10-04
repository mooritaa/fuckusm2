<html>  
<head>  
<title>Problema</title>  
</head>  
<body>  
<?php  
// Conexión a la base de datos usando mysqli
$conexion = new mysqli("localhost", "root", "", "phpfacil");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Problemas en la conexión: " . $conexion->connect_error);
}

// Preparar la consulta
$stmt = $conexion->prepare("INSERT INTO alumnos (nombre, mail, codigocurso) VALUES (?, ?, ?)");
$stmt->bind_param("ssi", $_REQUEST['nombre'], $_REQUEST['mail'], $_REQUEST['codigocurso']);

// Ejecutar la consulta
if ($stmt->execute()) {
    echo "El alumno fue dado de alta.";
} else {
    echo "Problemas en el insert: " . $stmt->error;
}

// Cerrar la declaración y la conexión
$stmt->close();
$conexion->close();
?>  
</body>  
</html>
