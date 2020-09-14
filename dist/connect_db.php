<?php
$connect = new PDO('mysql:host=localhost;dbname=sila-str_db;charset=utf8','root','');

$navbarInfoData = $connect-> prepare("SELECT * FROM navbar_info");
$navbarInfoData -> execute();
$navbarInfoData = $navbarInfoData ->fetchAll();

$navbarMenuData = $connect-> prepare("SELECT * FROM navbar_menu");
$navbarMenuData -> execute();
$navbarMenuData = $navbarMenuData ->fetchAll();

$optionData = $connect-> prepare("SELECT * FROM option_block");
$optionData -> execute();
$optionData = $optionData ->fetchAll();

$cardsData = $connect-> prepare("SELECT * FROM cards");
$cardsData -> execute();
$cardsData = $cardsData ->fetchAll();

$footerData = $connect-> prepare("SELECT * FROM footer_item");
$footerData -> execute();
$footerData = $footerData ->fetchAll();


$generalData = $connect-> prepare("SELECT * FROM general");
$generalData -> execute();
$generalData = $generalData ->fetch();

$modalData = $connect-> prepare("SELECT * FROM modal");
$modalData -> execute();
$modalData = $modalData ->fetchAll();

$modalListData = $connect-> prepare("SELECT * FROM modal_item");
$modalListData -> execute();
$modalListData = $modalListData ->fetchAll();

