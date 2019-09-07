<?php

//conexao ao banco de dados

$conn = mysqli_connect("localhost","root","","portifolio") or die (mysql_error());
mysqli_select_db("portifolio",$conn) or die (mysql_error());
//

?>