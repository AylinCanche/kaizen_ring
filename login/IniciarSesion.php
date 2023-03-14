<?php   
    session_start();
    include('Conexion.php');

    if (isset($_POST['Usuario']) && isset($_POST['Clave']) ) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $Usuario = validate($_POST['Usuario']); 
    $Clave = validate($_POST['Clave']);

    if (empty($Usuario)) {
        header("Location: login.php?error=El Usuario Es Requerido");
        exit();
    }elseif (empty($Clave)) {
        header("Location: login.php?error=La clave Es Requerida");
        exit();
    }else{

        // $Clave = md5($Clave);

        $Sql = "SELECT * FROM usuarios WHERE Usuario = '$Usuario' AND Clave='$Clave'";
        $result = mysqli_query($conn, $Sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['Usuario'] === $Usuario && $row['Clave'] === $Clave) {
                $_SESSION['Usuario'] = $row['Usuario'];
                $_SESSION['Nombre_Completo'] = $row['Nombre_Completo'];
                $_SESSION['Id'] = $row['Id'];
                header("Location: principal.php");
                exit();
            }else {
                header("Location: login.php?error=El usuario o la clave son incorrectas");
                exit();
            }

        }else {
            header("Location: login.php?error=El usuario o la clave son incorrectas");
            exit();
        }
    }

} else {
    header("Location: login.php");
            exit();
}