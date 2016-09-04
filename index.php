<?php
session_start();

//$endereco_pg = isset($_SESSION["logado"]) ? "home" : "areaProfessor";

include_once "view/".$endereco_pg.".php";