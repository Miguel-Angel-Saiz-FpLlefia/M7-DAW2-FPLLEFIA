<?php 
    require 'config.php';
    
    // echo var_dump($users); //Para saber porque del error
    // echo "<br>";
    // var_dump($resultUsers); //Para obtener mas info
    // echo "<br>";
    
    function returnUsersData() {
        global $mysqli;
        $users = $mysqli->query("SELECT * FROM USUARIS"); //Creamos la query para obtener la tabla
        $resultUsers = $users->fetch_all(MYSQLI_ASSOC); //Covierte el objeto a un array associativo
        return $resultUsers;
    }
?>