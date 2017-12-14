<?php // about_us.php
require "/home/jupiterbill/abundantenergy/includes/php/commonality.php";
echo MASTHEAD;
$testimonials = array(
	"One of the best decisions we have made as homeowners is to use solar for both hot water and heating our pool.",
	"From the purchase process, to installation, to excellent service, Abundant Energy is always there with answers when we need them.",
	"Abundant Energy has exceeded our expectations. We enjoy significant electrical usage cost savings and are enjoying a much longer swimming pool season. We could not be more pleased with our choice.",
	"In a world where &ldquo;buyer beware&rdquo; is the norm, it’s comforting to know that Bill and Abundant Energy under-promise and over-deliver."
);
define("NBR_T",count($testimonials));
$t = date('z') % NBR_T;
?>
<?php echo ROW_BEGIN; ?>
	<div class='large-8 medium-8 columns'>
<?php echo BLK_BEGIN; ?>
	<div class='large-6 medium-6 columns'>
		<h1><?php echo MNKR; ?></h1>
		<h2>A leader in solar energy systems in southeast Florida.</h2>
		<p><?php echo MNKR; ?> has been the trusted provider of residential and commercial solar energy systems in southeast Florida since 1987. 
        Our solar water heating, solar pool heating and solar photovoltaic (PV) systems are trusted by homeowners and businesses from Broward to St. Lucie counties.</p>
<?php echo COL_CLOSE; ?>
	<div class='large-6 medium-6 columns'>
	<img src='/images/content/about_1.jpg' width='600' height='470' alt='about solar #1' />
<?php echo COL_CLOSE . ROW_CLOSE; ?>
<?php echo BLK_BEGIN; ?>
	<div class='large-6 medium-6 columns'>
		<h4>Our History</h4>
		<p>Our heritage in Palm Beach Gardens dates to 1987, before solar energy developed into the buzzword for conservation and clean air that it is today. 
        Founder William (Bill) A. Hoysradt, Jr. started the company out of his home, hauling and installing solar panels from the back of a 1982 gold El Camino. 
        After 6,000 installations, corporate headquarters were moved to Jupiter. 
        In the &rsquo;90s we acquired Sunworks of Broward, extending operations from Broward County in the south to St. Lucie County in the north.</p>
		<p>With over 12,000 customers and more than 15MW of installed solar electric, <?php echo MNKR; ?> continues to be a trusted leader in Florida’s solar energy market.</p>
<?php echo COL_CLOSE; ?>
	<div class='large-6 medium-6 columns'>
	<img src='/images/content/about_2.jpg' width='600' height='470' alt='about solar #2' />
<?php echo COL_CLOSE . ROW_CLOSE; ?>
<?php echo BLK_BEGIN; ?>
	<div class='large-6 medium-6 columns'>
		<h4>Free Consultation</h4>
		<p>We offer free consultations both in-home and via phone/Skype. 
        If you are passionate about playing a role in reducing fossil fuel consumption or want to dramatically lower your electric bills, we’ll explain the many advantages of quiet, reliable solar heating for your pool, home, community or business without the use of confusing industry jargon or false promises. 
        Coupled with our on-site evaluation, our solar consultation provides a site plan and accurate down to the penny quote on which to base an intelligent cost/benefits decision.</p>
<?php echo COL_CLOSE; ?>
	<div class='large-6 medium-6 columns'>
	<img src='/images/content/about_3.jpg' width='600' height='470' alt='about solar #3' />
<?php echo COL_CLOSE . ROW_CLOSE; ?>
<?php echo COL_CLOSE;// end of main column; begin sidebar ?>
	<div class='large-4 medium-4 columns'>
		<h3>Our Customers</h3>
		<p>Solar energy customers producing clean energy today</p>
		<h4>Residential Solar</h4>
		<p><?php echo MNKR; ?> has installed solar systems that have helped over 12,500 residential customers from Broward to St. Lucie counties dramatically reduce or eliminate their electrical bills. 
        99.94% of Florida’s power through FPL is provided through a combination of natural gas, nuclear, coal and purchased power, and only 0.38% solar.</p>
		<h4>Commercial Customers</h4>
		<ul class='notmenu'>
			<li>Florida Atlantic University, Boca Raton</li>
			<li>Frenchmen’s Creek Beach and Country Club, Juno Beach &amp; Palm Beach Gardens</li>
			<li>Holiday Out Recreation Area, Jensen Beach</li>
			<li>Cambridge and Heritage Ridge, Hobe Sound</li>
			<li>Waterberry Community, Boca Raton</li>
			<li>Abel Unlimited Inc., Riviera Beach</li>
			<li>Turtle Reef Club, Jensen Beach</li>
			<li>Broward Children&rsquo;s Learning Center, Davie</li>
			<li>Summit-Questa School, Davie</li>
			<li>Pine Jog School, West Palm Beach</li>
			<li>Murray Middle School, Stuart</li>
			<li>Polo Club of Boca Raton, Boca Raton</li>
		</ul>
		<h3>Endorsements</h3>
		<p>Solar panels are basically alike; it’s the people who make the difference. 
        We always provide references to those who ask, and we are proud to do so.</p>
		<h4>Today&rsquo;s Testimonial</h4>
			<blockquote>&ldquo;<?php echo $testimonials[$t]; ?>&rdquo;</blockquote>
		<h3>Careers</h3>
		<p>Abundant Energy provides bright futures in solar energy.
		Solar jobs are ideal for clean energy advocates.</p>
		<ul class='notmenu'>
			<li>Systems Design Specialist</li>
			<li>Solar Product Installer</li>
			<li>Assembler/Service Technician</li>
			<li>Account Manager</li>
			<li>Customer Service Specialist</li>
		</ul>
		<p><script>career_mail();</script> with your attached résumé (Word or PDF) or the link to your online résumé. </p>
<?php 
echo COL_CLOSE . ROW_CLOSE . ROW_CLOSE;// end sidebar and content

echo SITEMAP; ?>
<?php require PATH_PHP . "footer.php"; ?>
<?php ?>