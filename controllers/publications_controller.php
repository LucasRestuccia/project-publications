<?php
include_once "models/publications_model.php";

$pro = new publications_model();
$datos = $pro->get_publications();


include_once "views/publications_view.php";
