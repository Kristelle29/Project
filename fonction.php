<?php 
require("inc/connexion.php");

function get_Listdepartment(){
    $sql = "SELECT dept_no, dept_name FROM departments";
    $result= mysqli_query(dbconnect(), $sql);
    return $result;
}

?>