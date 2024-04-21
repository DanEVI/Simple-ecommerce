<?php
require_once "conexion.php";

class Funciones
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function verificarUsuario(string $usuario, string $contra)
    {
        $conn = $this->db->getConnection();
        $sql = "SELECT * FROM usuarios WHERE email = :usuario AND contra = :contra";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':usuario', $usuario, PDO::PARAM_STR);
        $stmt->bindParam(':contra', $contra, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            $name = $result['nombre']; // Accede al nombre del usuario usando la clave 'nombre'
            echo "<script>alert('Bienvenido $name')</script>"; // Muestra un mensaje de bienvenida con el nombre del usuario
            $_SESSION['nombre'] = $result['nombre'];
            $_SESSION['apellido'] = $result['apellido'];
            return true;
        } else {
            return false;
        }
    }

    public function registrarUsuario(string $nombre, string $apellido, string $email, string $contra)
    {
        $conn = $this->db->getConnection();
        $sql = "INSERT INTO usuarios(nombre, apellido, email, contra) VALUES (:nombre, :apellido, :email, :contra)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $stmt->bindParam(':apellido', $apellido, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':contra', $contra, PDO::PARAM_STR);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            // La inserción fue exitosa
            $_SESSION['usuario'] = $nombre . " " . $apellido;
            return true;
        } else {
            // La inserción falló
            return false;
        }
    }
}
