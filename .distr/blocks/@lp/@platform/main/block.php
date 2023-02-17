<?php if ($version != 'blogger') { ?>
	{% include 'main/block.php' %}
<?php } else { ?>
	{% include '@lp/@platform/main-platform/block.php' %}
<?php } ?>
