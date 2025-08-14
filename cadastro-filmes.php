<?php
require "src/FilmesDAO.php";
FilmesDAO::inserir($_POST);

header("location:form-filmes.php");