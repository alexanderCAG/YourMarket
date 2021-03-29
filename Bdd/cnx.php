

<?php

$con = mysqli_connect("localhost","root","","yourmarket");

// verif de la cnx
if (mysqli_connect_errno())
{
echo "Erreur de connexion à MySql: " . mysqli_connect_error();
}

?>