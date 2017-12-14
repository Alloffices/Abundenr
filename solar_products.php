<?php // solar_products.php
$content = array(
	array("solar hot water heating","Solar Water Heating","Solar can save up to 80% of water heating costs.","Water heating systems are often the second biggest user of electricity, about 30% of total electricity costs. Savings vary according to water usage, family size, age and type of a structure, tank size, and water temperature preferences. Our solar tanks are thermally insulated for maximum heat storage, minimum heat loss, and provide back up electrical element heat during extremely heavy usage."),
	array("PV solar energy generation","Solar Photovoltaic","Solar PV lowers energy bills from day one.","For home or commercial use, photovoltaic solar (PV) is the ultimate system to provide clean power, protect the environment, and lower utility bills from day one. Solar energy systems increase the value of your home or business and give you greater control over future costs. Solar photovoltaic electric systems power your entire building and make a major statement about your commitment to clean air."),
	array("solar pool heating","Solar Pool Heating","Solar is the most efficient and cost-effective way to heat a home or community swimming pool.","Solar is the most efficient and cost-effective way to heat a home or community swimming pool. A solar-heated pool stays warm throughout the winter season, uses no electricity whatsoever, is long-lasting and maintenance free. Ours are designed with unobtrusive rooftop hardware and automatic controllers that work similar to your home’s thermostat. Set it&mdash;forget it.")
);
define("NBR_PANELS",count($content));
require "/home/jupiterbill/abundantenergy/includes/php/commonality.php";
echo MASTHEAD;
?>
<?php 
for($n=0;$n<NBR_PANELS;$n++) {
	echo ROW_BEGIN . "\n<div class='large-6 medium-6 columns";
	$p = $n+1;
	if($n % 2 == 0){
		echo " odd'>\n\t";
		echo "<img src='/images/content/products_" . $p . ".jpg' width='600' height='470' alt='" . $content[$n][0] . "' />\n\t"; 
		echo COL_CLOSE . "\n<div class='large-6 medium-6 columns'>\n\t";
		echo "<h1>" . $content[$n][1] . "</h1>\n\t<h2>" . $content[$n][2] . "</h2>\n\t<p>" . $content[$n][3] . "</p>\n\t";
		echo "<p>Ask us about <a href='mailto:info@abundantenergy.com?subject=" . $content[$n][0] . "'>" . $content[$n][0] . "&nbsp;&raquo;</a></p>\n";
	}
	else{
		echo " even'>\n\t";
		echo "<h1>" . $content[$n][1] . "</h1>\n\t<h2>" . $content[$n][2] . "</h2>\n\t<p>" . $content[$n][3] . "</p>\n\t";
		echo "<p>Ask us about <a href='mailto:info@abundantenergy.com?subject=" . $content[$n][0] . "'>" . $content[$n][0] . "&nbsp;&raquo;</a></p>\n\t"; 
		echo COL_CLOSE . "\n<div class='large-6 medium-6 columns'>\n\t";
		echo "<img src='/images/content/products_" . $p . ".jpg' width='600' height='470' alt='" . $content[$n][0] . "' />\n";
	}
	echo COL_CLOSE . ROW_CLOSE;
}
echo SITEMAP; ?>
<?php require PATH_PHP . "footer.php"; ?>