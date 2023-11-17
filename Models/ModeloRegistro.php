<?php
class ModeloRegistro {
    private $con;

    public function __construct($conexion) {
        $this->con = $conexion;
    }

    public function verificarEmailExistente($email) {
        $sql = "SELECT * FROM usuarios WHERE email = ?";
        $stmt = mysqli_prepare($this->con, $sql);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $resultado = mysqli_stmt_get_result($stmt);

            return mysqli_num_rows($resultado) > 0;
        }

        return false;
    }

    public function verificarDocumentoExistente($documento) {
        $sql = "SELECT * FROM usuarios WHERE documento = ?";
        $stmt = mysqli_prepare($this->con, $sql);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $documento);
            mysqli_stmt_execute($stmt);
            $resultado = mysqli_stmt_get_result($stmt);

            return mysqli_num_rows($resultado) > 0;
        }

        return false;
    }

    public function registrarUsuario($nombre, $contraseña, $email, $documento, $ciudad, $direccion, $telefono) {
        $hashed_password = password_hash($contraseña, PASSWORD_DEFAULT);
        $sql = "INSERT INTO usuarios(nombre, contraseña, email, documento, ciudad, direccion, telefono) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($this->con, $sql);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "sssssss", $nombre, $contraseña, $email, $documento, $ciudad, $direccion, $telefono);

            if (mysqli_stmt_execute($stmt)) {
                return true;
            }
        }

        return false;
    }
}
?>