
<!-- This is the project specific website template -->
<!-- It can be changed as liked or replaced by other content -->

<?php

$domain=ereg_replace('[^\.]*\.(.*)$','\1',$_SERVER['HTTP_HOST']);
$group_name=ereg_replace('([^\.]*)\..*$','\1',$_SERVER['HTTP_HOST']);
$themeroot='http://r-forge.r-project.org/themes/rforge/';

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en   ">

  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php echo $group_name; ?></title>
	<link href="<?php echo $themeroot; ?>styles/estilo1.css" rel="stylesheet" type="text/css" />
  </head>

<body>

<!-- R-Forge Logo -->
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tr><td>
<a href="http://r-forge.r-project.org/"><img src="<?php echo $themeroot; ?>/imagesrf/logo.png" border="0" alt="R-Forge Logo" /> </a> </td> </tr>
</table>


<!-- get project title  -->
<!-- own website starts here, the following may be changed as you like -->

<?php if ($handle=fopen('http://'.$domain.'/export/projtitl.php?group_name='.$group_name,'r')){
$contents = '';
while (!feof($handle)) {
	$contents .= fread($handle, 8192);
}
fclose($handle);
echo $contents; } ?>

<!-- end of project description -->

<h2>This project is for you if you are</h2>
<ul>
  <li>working on TMDL</li>
  <li>tired from doing routine operations in your favorite spreadsheet</li>
  <li>not satisfied with charting capabilities of your favorite spreadsheet</li>
  <li>not well familiar (at least at this moment) with <em>R</em> and wonderful package <em>lattice</em>.</li>
</ul>

<h2>Features</h2>
<ul>
  <li>Flow and Load duration curves</li>
  <li>Monthly variation plot</li>
  <li>Box plots with mean &amp; median and whiskers at 10<sup>th</sup> and 90<sup>th</sup> percentiles as used in most TMDL studies</li>
</ul>

<h2>Vignette</h2>
<p>
This <a href="vignette">vignette</a> requires SVG enabled browser.
Firefox should be find, however default IE might not work.
</p>

<h2>Example plots</h2>
<img src="fdc.png" border="0" alt="Flow Duration Curve" />

<img src="ldc.png" alt="Load Duration Curve" />

<p> The <strong>project summary page</strong> you can find <a href="http://<?php echo $domain; ?>/projects/<?php echo $group_name; ?>/"><strong>here</strong></a>. </p>

</body>
</html>
