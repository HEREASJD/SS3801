<?php
if (session_status() == PHP_SESSION_NONE)
{
    session_start();
}
?>

<html>
	<title>SS3801 Deliverable</title>
	<style>
	  <?php include "styles.css" ?>
	</style>
	<body class="bg">

<?php

require 'header.php';
?>
<?php
if (isset($_POST['currentPlanButton']))
{
	require 'current_plan.php';
}
else if (isset($_POST['biomassButton']))
{
	require 'biomass.php';
}
else if (isset($_POST['geothermalButton']))
{
	require 'geothermal.php';
}
else if (isset($_POST['hydroelectricButton']))
{
	require 'hydroelectric.php';
}
else if (isset($_POST['solarButton']))
{
	require 'solar.php';
}
else if (isset($_POST['solar2Button']))
{
	require 'solar2.php';
}
else if (isset($_POST['windButton']))
{
	require 'wind.php';
}
else if (isset($_POST['ourPlanButton']))
{
	require 'our_plan.php';
}
else if (isset($_POST['sourcesButton']))
{
	require 'sources.php';
}
else
{
	require 'main.php';
}	
?>
	</body>
<?php
// probably want a universal footer here
?>
</html>