<?php
require "src/FilmesDAO.php";
FilmesDAO::inserir($_POST);
    
echo "Deu boa!";
//header("location:ok.html");