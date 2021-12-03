<?php


if(isset($_GET['file'])){
    include($_GET['file']);

}else{
    include("home.php");
}