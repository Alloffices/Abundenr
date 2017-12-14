<?php // index.php
require "/home/jupiterbill/abundantenergy/includes/php/commonality.php";
//echo $masthead;
?>
<?php echo ROW_BEGIN; ?>
<div class="large-12 columns">
<p><img src="/images/brands/abundant_energy-logo.jpg" width="347" height="96" alt="<?php echo MNKR; ?> logo" /></p>
<h1>&nbsp;<br /><?php echo MONIKER; ?></h1>
<h3><?php echo TAG; ?></h3>
<?php echo COL_CLOSE . ROW_CLOSE . ROW_BEGIN; ?>
<div class="large-8 large-offset-2 medium-9 small-center columns end">
<h4>Note to Customers</h4>
<p>Last month, our previous website was hacked and vicious things were done to it. We are recovering and have changed to a new more stable server and are creating a new, clean, up-to-date website. We apologize for any disruption this may have caused, and appreciate your patience during this transition. Our email is again up and running, so feel free to call or email us. If you feel that we have not responded to an inquiry, please contact us again as it was probably due to the disruption.</p>
<p>There has been no disruption to our operations and we value your business.</p>
<?php echo COL_CLOSE . ROW_CLOSE . ROW_BEGIN; ?>
<div class="large-12 columns">
<h2><?php echo PRINCIPAL; ?></h2>
<p><?php echo ADDR . "<br />" . CSZ; ?></p>
<p>phone: <?php echo FONE . "<br />&nbsp;&nbsp;&nbsp;&nbsp;fax: " . FAX; ?></p>
<?php echo COL_CLOSE . ROW_CLOSE; ?>
<?php require PATH_PHP . "footer.php"; ?>