<?php // solar_services.php
require "/home/jupiterbill/abundantenergy/includes/php/commonality.php";
echo MASTHEAD;
?>
<?php echo ROW_BEGIN; ?>
<div class="large-6 medium-6 end columns">
<?php echo $aitch1; ?>
<?php echo COL_CLOSE . ROW_CLOSE . ROW_BEGIN; ?>
<div class="large-6 medium-6 columns">
<section>
	<h2>Installation</h2>
		<p>Solar panels aren’t always mounted on rooftops, but usually are. 
        So our teams are highly trained in all areas of safety. 
        In fact, safety on roof tops is a priority and our teams as well as our trucks are fully equipped with the latest in safety gear made specifically for solar installations.</p>
		<p>Our installation services are completed by our own factory-trained technicians, not subcontractors, to ensure your system is installed to meet local building codes as well as to meet state and utility requirements. 
        All of our equipment installers are licensed and insured.</p>
	<h2>Service</h2>
		<p>Solar panels generally require very little maintenance because there are no moving parts. 
        We recommend an annual inspection for dirt or debris removal and panel inspection to make sure the panels are working at maximum efficiency. 
        Routine maintenance can prevent scaling and corrosion to maximize operating efficiently. 
        For safety reasons, we do not recommend inspection or cleaning by the owner or a third party, especially when roofs are steep or when long hose extensions are required. 
        In the rare event of freezing in south Florida, we provide freeze protection when temps fall below 42&deg; F.</p>
		<p>Our technicians are trained and mentored by us; we do not sub-contract. 
        We also employ a full service staff to assist with any questions or concerns you may have with an existing solar energy system. 
        We offer as-needed maintenance at hourly rates, as well as prepaid Maintenance Agreements for a set period, or for the life of the equipment.</p>
	</section>
<?php echo COL_CLOSE; ?>
<div class="large-6 medium-6 columns">
	<section>
		<h2>Maintenance Agreement</h2>
		<p>Includes periodic inspections, maintenance and parts. Costs are based on type of solar installation, location of the solar panels, and other factors.</p>
		<p>Yes! I’m interested in a maintenance agreement quote&hellip; <?php echo FONE; ?>, <script>maint_mail();</script>.</p>
		<h2>Free Inspection</h2>
		<p>Regardless of who installed your solar energy system, eventually you may need service or want an inspection to determine if your system would last longer or run more efficiently with regular maintenance. 
        We offer a free no-obligation one-time service inspection. 
        If parts are needed, in many cases we provide a quote on the spot and perform the work on the same day.</p>
		<p>I’m interested in a one-time service call or inspection&hellip; <?php echo FONE; ?>, <script>visit_mail();</script>.</p>
		<p>State Licensed Solar Energy Contractor: FL CVC56729</p>
		<h2>Did You Know?</h2>
		<p>Florida is one of only four states that prohibit citizens from buying electricity from anyone other than a utility company. 
        To change this, we are fully engaged in the Floridians for Solar Choice grassroots citizens’ effort to help more homes and businesses generate electricity through solar energy choice.<br />
        <a href="http://www.flsolarchoice.org/get-the-facts/" title=" Floridians for Solar Choice site " target="_blank">Get informed and sign the Petition&nbsp;&raquo;</a></p>
	</section>
<?php echo COL_CLOSE . ROW_CLOSE . SITEMAP; ?>
<?php require PATH_PHP . "footer.php"; ?>