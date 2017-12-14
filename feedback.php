<?php // feedback.php
require "/home/jupiterbill/abundant-energy/includes/php/commonality.php";
echo MASTHEAD;
?>
<?php echo ROW_BEGIN; ?>
<div class="large-12 columns">
<?php include PATH_ERR . $mCtnt; ?>
<?php echo COL_CLOSE . ROW_CLOSE; ?>
<?php require PATH_PHP . "footer.php"; ?>