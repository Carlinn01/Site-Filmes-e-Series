<?php
require "src/ClienteDAO.php";
ClienteDAO::inserir($_POST);

echo "Deu boa!";
//header("location:ok.html");