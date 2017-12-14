<?php // footer.php

if(BLOG_PAGE == "yes") echo "</div><!-- #page -->\n";
echo ROW_BEGIN;
?>
<div class='large-12 columns'>
	<p class="text-center fine">&copy; 1987<?php echo " - " . date('Y') . " " . MONIKER; ?> 
All rights reserved. State Licensed Solar Energy Contractor:&nbsp;<strong>FL&nbsp;CVC56729</strong><br /><a href="#" onclick="open_privacy();">Privacy Statement</a> | Designed by <a href="http://www.<?php echo WEB_DOM; ?>" title="<?php echo WEB_DEV; ?>: <?php echo REGN; ?>, web design and development" target="_blank"><?php echo WEB_DEV; ?></a></p>
<?php echo COL_CLOSE . ROW_CLOSE . SCRP_FTR; ?>

</body>
</html>