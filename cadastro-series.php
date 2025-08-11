<?php
require "src/SeriesDAO.php";
SeriesDAO::inserir($_POST);
    
echo "Deu boa!";
//header("location:ok.html");