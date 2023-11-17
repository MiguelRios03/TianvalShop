<?php
class InicioUsuario {
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
}
?>