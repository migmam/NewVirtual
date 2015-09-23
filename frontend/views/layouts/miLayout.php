<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);


$a_url = explode("/", Yii::$app->urlManager->baseUrl);
$site  = $a_url[count($a_url)-1];



// create object
$smarty = new Smarty;

// assign some content. This would typically come from
// a database or other source, but we'll use static
// values for the purpose of this example.
$smarty->assign('name', $site);
$smarty->assign('address', '45th & Harris');

// display it
$smarty->display(__DIR__."/".$site.".tpl");
//$smarty->display(__DIR__."/index.tpl");