<?php /*  masthead.php 
Version: 2015.12.28
*/
$title = ucwords(MONIKER);
$file_name = array("home","explore_solar","solar_products","solar_services","about_us","news");
define("SEXNS",count($file_name));
define("ABBR_SZ",4);
$bkgd_id = " id='grad'";
$soc_med = "";
$descriptn = "";
$keywds = "";

$nav_var = substr($_SERVER['PHP_SELF'],-8,ABBR_SZ);
$pg = -8; // any negative integer works to reset the marker

// set-up main navigation text
for($i=0; $i<SEXNS; $i++) {
	$page_abbr[$i] = substr($file_name[$i],-4,ABBR_SZ); // create abbreviated page identifier
	$titl_nav[$i] = ucwords(str_replace("_"," ",$file_name[$i])); // create a title-case page title
	$uppr_nav[$i] = strtoupper(trim($titl_nav[$i])); // create an uppercase navigation label
	$uppr_nav[$i] = str_replace(" ",'&nbsp;',$uppr_nav[$i]);
	if($i == 5) $navvar[$i] = "\t\t<li role='menuitem'><a href='/" . $file_name[$i] . "/'>" . $uppr_nav[$i] . "</a></li>\n";
		else $navvar[$i] = "\t\t<li role='menuitem'><a href='/" . $file_name[$i] . ".php'>" . $uppr_nav[$i] . "</a></li>\n";
}

// populate page-specific variables
switch($nav_var) {
	case $page_abbr[1]:
		$pg = 1;
    	$navvar[$pg] = "\t\t<li role='menuitem' class='self'>" . $uppr_nav[$pg] . "</li>\n";
		$aitch1 = "<h1 class='text-center'>" . $uppr_nav[$pg] . "</h1>\n"; // page heading
		$keywds .= $titl_nav[$pg] . " ";
		$descriptn .= "People can learn about the different types of solar power systems in Florida to reduce their electricity bills and be more environmentally-friendly in their home or business.";
		$pg_title = "Solar Power System Florida | Abundantenergy.com";
	break;
	case $page_abbr[2]:
		$pg = 2;
    	$navvar[$pg] = "\t\t<li role='menuitem' class='self'>" . $uppr_nav[$pg] . "</li>\n";
		$aitch1 = "<h1>" . $titl_nav[$pg] . "  Services</h1>\n"; // section header
		$pg_title = "Solar Pool and Water Heating Jupiter Florida | Abundantenergy.com";
		$keywds .= " Treasure Coast, Florida";
		$descriptn .= "Anyone looking to reduce their electricity bills in Jupiter, Florida can learn more about solar photo voltaic systems for their home or business from Abundant Energy.";
	break;
	case $page_abbr[3]:
		$pg = 3;
    	$navvar[$pg] = "\t\t<li role='menuitem' class='self'>" . $uppr_nav[$pg] . "</li>\n";
		$aitch1 = "<h1 class='text-center'>" . $uppr_nav[$pg] . "</h1>\n"; // page heading
		$pg_title = "Solar Panel Installation and Maintenance Florida | Abundantenergy.com";
		$keywds = MONIKER . ", " . FONE;
		$descriptn .= "Property owners can hire Abundant Energy for solar panel installation, repair and maintenance in Jupiter.";
	break;
	case $page_abbr[4]:
		$pg = 4;
    	$navvar[$pg] = "\t\t<li role='menuitem' class='self'>" . $uppr_nav[$pg] . "</li>\n";
		$aitch1 = "<h1>Solar Energy Systems in Southeast Florida</h1>\n"; // page heading
		$pg_title = "Solar Panel Repair Florida - Solar Energy Companies | Abundantenergy.com";
		$keywds = $pg_title . " ";
		$descriptn .= "Abundant energy is a leading solar power system company providing solar units repairs and maintenance in Jupiter, FL.";
	break;
	case "ndex":
		$pg = 5;
		$nav_var = "news";
    	$navvar[$pg] = "\t\t\t<li role='menuitem' class='self'> " . $uppr_nav[$pg] . "</li>\n";
		$pg_title = $titl_nav[$pg] . " " . MONIKER;
		$keywds = $pg_title . " ";
	break;
	case "feed":
		$pg = 6;
		$aitch1 = "<h1> </h1>";
		$pg_title = MONIKER . " Feedback";
		if($_GET[e]) { 
		$feedback = strip_tags(stripslashes($_GET[e]));
		$feedback = trim($feedback);
				if($feedback == 'ok') $mCtnt = PATH_ERR . "form_ok.php";
			elseif($feedback == 'ff') $mCtnt = PATH_ERR . "form_fail.php";
			elseif($feedback == '400') $mCtnt = PATH_ERR . "400.php";
			elseif($feedback == '401') $mCtnt = PATH_ERR . "401.php";
			elseif($feedback == '403') $mCtnt = PATH_ERR . "403.php";
			elseif($feedback == '404') $mCtnt = PATH_ERR . "404.php";
			elseif($feedback == '500') $mCtnt = PATH_ERR . "500.php";
		else $mCtnt = PATH_ERR . "404.php";
		}
	break;
	case "vacy":
		$pg = 7;
		$file_nm = "Privacy Policy";
		$aitch1 = "<h1>" . $file_nm . "</h1>";
		$bkgd_id = "grad";
		$pg_title = $file_nm . " : " . MONIKER;
		$keywds = $file_nm;
		$descriptn = "";
	break;
	case "ndex":
		$bkgd_id = "";
		$pg_title = "Home : " . MONIKER;
	break;
	default:
	case $page_abbr[0]:
		$pg = 0;
    	$navvar[$pg] = "\t\t<li role='menuitem' class='self'>" . $uppr_nav[$pg] . "</li>\n";
		$bkgd_id = " id='foto'";
		$keywds .= "solar energy installer, Treasure Coast FL, factory-direct solar energy solutions";
		$descriptn .= "Solar energy companies in Florida, like Abundant Energy, provide services to install residential and commercial solar panels at affordable prices to help save you money.";
		$pg_title = "Residential & Commercial Solar Panels - Solar Energy Company Jupiter Florida | Abundantenergy.com";
		$aitch1 = "\t<h1>A Leader in Florida Solar Energy</h1>";
	break;
}

// concatenate the main navigation simple
$nav_display = "<div class='expanded row' id='w_nv'>\n" . ROW_BEGIN . "\t<ul class='menu expanded'>\n";
for($i=0; $i<SEXNS; $i++) {
	$nav_display .= $navvar[$i];
}
define("NAV_HORZ",$nav_display . "\t</ul>\n" . ROW_CLOSE . ROW_CLOSE);

// create the template masthead (banner and nav)
define("MASTHEAD",BANNER.NAV_HORZ);


// set-up the sitemap social media section
$connexion = array(
	array("Specials and deals","facebook","https://www.facebook.com/abundantenergy/"),
	array("Breaking news","twitter","https://twitter.com/AbundantEnergy"),
	array("Endorsements","linkedin","https://www.linkedin.com/company/abundant-energy-inc-?trk=biz-companies-cym"),
	array("Document sharing","google_plus",""),
	array("Videos","youtube","")
);
define("NBR_CONNECT",count($connexion));
for($c=0;$c<NBR_CONNECT;$c++) {
	if(!empty($connexion[$c][2])) $soc_med .= "<a href='" . $connexion[$c][2] . "' target='_blank'>";
	$soc_med .= "<img src='/images/icons/" . $connexion[$c][1] . ".png' width='32' height='32' alt='" . $connexion[$c][1] . "' />";
	$soc_med .= $connexion[$c][0];
	if(!empty($connexion[$c][2])) $soc_med .= "</a>";
	$soc_med .= "<br />\n\t";
}
$sitemap  = "<div class='expanded row' id='w_mp'>\n<div class='row' id='sitemap'>\n\t";
$sitemap .= COL_BEGN2 . "\t<h5><a href='/" . $file_name[1] . ".php'>" . $uppr_nav[1] . "</a></h5>\n\t";
$sitemap .= "<p>Why Go Solar<br />Solar in Florida<br />Incentives &amp; Resources</p>\n". COL_CLOSE;
$sitemap .= COL_BEGN2 . "\t<h5><a href='/" . $file_name[2] . ".php'>" . $uppr_nav[2] . "</a></h5>\n\t";
$sitemap .= "<p>Solar Water Heating<br />Solar Photovoltaic<br />Solar Pool Heating</p>\n". COL_CLOSE;
$sitemap .= COL_BEGN2 . "\t<h5><a href='/" . $file_name[3] . ".php'>" . $uppr_nav[3] . "</a></h5>\n\t";
$sitemap .= "<p>Installation<br />Service<br />Maintenance<br />Inspection</p>\n". COL_CLOSE;
$sitemap .= COL_BEGN2 . "\t<h5><a href='/" . $file_name[4] . ".php'>" . $uppr_nav[4] . "</a></h5>\n\t";
$sitemap .= "<p>Our Work<br />Our Clients<br />Careers<br />Testimonials</p>\n". COL_CLOSE;
$sitemap .= "<div class='large-2 medium-6 small-6 columns'>\n\t<h5>CONTACT</h5>\n\t<p>";
$sitemap .= MONIKER . "<br />" . ADDR . "<br />" . CSZ . "<br />Office: " . FONE_T . "<br />Fax: " . FAX . "<br /><script>info_mail();</script></p>\n". COL_CLOSE;
$sitemap .= "<div class='large-2 medium-6 small-6 columns'>\n\t<h5>CONNECT</h5>\n\t<p>" . $soc_med;
$sitemap .= "</p>\n" . COL_CLOSE . ROW_CLOSE . ROW_CLOSE;
define("SITEMAP",$sitemap);

define("MAST","\n</head>\n<body" . $bkgd_id . ">\n");

// now let's build the page!
if($nav_var != "news") {
echo HEAD . HD_META;
?>
<meta name="description" content="<?php echo $descriptn; ?>" />
<meta name="keywords" content="<?php echo $keywds; ?>" />

<title><?php echo $pg_title; ?></title>

<?php
echo HD_FAVI . CSS3;
if($nav_var == 'ndex') echo CSS_L;
if(strlen(STYLING) > 20) echo STYLING;
echo SCRP_BEGIN;
echo MAST;
include_once PATH_SCR . "analyticstracking.php";
}// end 'all but (section 5) blog'
?>