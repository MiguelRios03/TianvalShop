<?php
    class ModeloUsuario{
    private $con;

    public function __construct($conexion) {
        $this->con = $conexion;
    }
    public function obtenerUsuarioPorEmail($email) {
        $sqlEmail = "SELECT * FROM usuarios WHERE email = ?";
        $stmtEmail = mysqli_prepare($this->con, $sqlEmail);

        if ($stmtEmail) {
            mysqli_stmt_bind_param($stmtEmail, "s", $email);
            mysqli_stmt_execute($stmtEmail);
            $resultEmail = mysqli_stmt_get_result($stmtEmail);
            return $resultEmail;
        } else {
            return false;
        }
    }
    public function actualizarContraseña($email, $nuevaContraseña) {
        $sqlUpdate = "UPDATE usuarios SET contraseña = ? WHERE email = ?";
        $stmtUpdate = mysqli_prepare($this->con, $sqlUpdate);
    
        if ($stmtUpdate) {
            mysqli_stmt_bind_param($stmtUpdate, "ss", $nuevaContraseña, $email);
            if(mysqli_stmt_execute($stmtUpdate)){
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    public function eliminarUsuarioPorEmail($email) {
        $sqlDelete = "DELETE FROM usuarios WHERE email = ?";
        $stmtDelete = mysqli_prepare($this->con, $sqlDelete);
    
        if ($stmtDelete) {
            mysqli_stmt_bind_param($stmtDelete, "s", $email);
            if(mysqli_stmt_execute($stmtDelete)){
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function actualizarDatos($nombre, $telefono, $ciudad, $direccion, $correo) {
        $sqlUpdate = "UPDATE usuarios SET nombre = ?, telefono = ?, ciudad = ?, direccion = ? WHERE email = ?";
        $stmtUpdate = mysqli_prepare($this->con, $sqlUpdate);
    
        if ($stmtUpdate) {
            // Cambié el orden de los parámetros en la siguiente línea
            mysqli_stmt_bind_param($stmtUpdate, "sssss", $nombre, $telefono, $ciudad, $direccion, $correo);
    
            if (mysqli_stmt_execute($stmtUpdate)) {
                return true;
            } else {
                return false;
            }
        } else {
            echo "Error en la preparación de la consulta: " . mysqli_error($this->con);
            return false;
        }
    }
    
    
    }
    

?>