<?php /* commonality.php
Version 2016.09.10
*/
date_default_timezone_set('America/New_York');

define("MNKR","Abundant Energy");
define("MNKR2","Abundant<span>Energy</span>");
define("MONIKER",MNKR.", Inc."); // Used in Contact, Keywords, etc.
define("PRINCIPAL","Bill Hoysradt");
define("TAG","Solar Energy Equipment Supplier");
define("TAG2","solar solutions");
define("REGN","Treasure Coast");
define("ADDR","1312 Commerce Lane, Suite 15B");
define("CSZ","Jupiter, FL 33458");
define("FONE_B","(561) 744-5421");// main business line
define("FONE_C","(561) 346-5611");// Bill's cellular line
define("FONE_T","(800) 748-3202");// toll-free business line
define("FONE",FONE_T);// main phone displayed
define("FAX","(561) 744-3026");

define("DOM_ROOT","abundantenergy");
define("DOMAIN",DOM_ROOT . ".com");
define("OUR_URL","http://www." . DOMAIN . "");
define("PATH","/home/jupiterbill/". DOM_ROOT ."/");

define("PATH_INC",PATH . "includes/");
define("PATH_SCR",PATH . "js/");
define("PATH_ERR",PATH_INC . "error/");
define("PATH_PAG",PATH_INC . "pages/");
define("PATH_PHP",PATH_INC . "php/");

define("BLK_BEGIN","<div class='row blok'>\n");
define("ROW_BEGIN","<div class='row'>\n");
define("ROW_CLOSE","</div><!-- row -->\n\n");
define("ROW_COL12","<div class='row large-12 columns'>\n");
define("COL_BEGN2","<div class='large-2 medium-3 small-6 columns'>\n");
define("COL_CLOSE","</div><!-- column -->\n");
define("WID_CLOSE","</div><!-- fullwidth -->\n\n");

define("WEB_DEV","ActiveCanvas");
define("WEB_DOM","activecanvas.com");


/*   Masthead  \n<link rel='stylesheet' media='all' href='css/icons.css' /> */
define("HEAD","<!DOCTYPE html>\n<html class='no-js' lang='en-US'>\n<head>\n\n");
define("HD_META","<!-- Meta Tags -->\n<meta charset='UTF-8' />\n<meta http-equiv='X-UA-Compatible' content='IE=Edge' />\n<meta name='viewport' content='width=device-width, initial-scale=1.0' />\n<meta name='robots' content='".$rbt_i."index, ".$rbt_f."follow' />\n<meta name='geo.region' content='US-FL' />\n<meta name='author' content='" . WEB_DEV ."' />\n<meta name='copyright' content='Copyright (c) 2013 - " . date('Y') . " " . WEB_DEV . "' />\n");
define("HD_FAVI","<!-- Favicon -->\n<link rel='icon' href='/favicon.ico' />\n<link rel='shortcut icon' href='/favicon.ico' type='image/x-icon' />\n<link rel='apple-touch-icon' href='/favicon.ico' type='image/x-icon' />\n\n<link rel='canonical' href='http://www." . DOMAIN . "' />\n\n");
define("CSS3","<!-- CSS3 -->\n<link rel='stylesheet' media='all' href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Open+Sans:400,400italic,600italic,600'>\n<link rel='stylesheet' media='all' href='https://cdn.jsdelivr.net/foundation/6.0.6/foundation.min.css' />\n<link rel='stylesheet' media='all' href='/css/app.css' />\n");
define("CSS_B","<link rel='stylesheet' media='all' href='/css/blog.css' />\n");
define("CSS_L","<link rel='stylesheet' media='all' href='/css/landing.css' />\n");
define("STYLING","<style>" . $stylings . "</style>\n");
define("SCRP_BEGIN","\n<!-- Includes -->\n<script src='/scripts/js/modernizr.js'></script>\n<script src='/js/fx.js'></script>\n");
define("SCRP_FTR","\n<script src='/js/jquery.min.js'></script>\n<script src='https://cdn.jsdelivr.net/foundation/6.0.6/foundation.min.js'></script>\n<script src='/js/app.js'></script>\n");

define("BANNER",ROW_COL12 . "<h1 id='masthead'>" . MNKR2 . "</h1>" . ROW_CLOSE);

/* ---------- END ---------- */
require_once PATH_PHP . "masthead.php";
?>