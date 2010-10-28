
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

<h2>Goal</h2>
<p>
The goal of this project is to provide easy to use tools
to facilitate the process of <abbr title="Total Maximum Daily Load">TMDL</abbr> development
</p>

<h2>This project is for you if you are</h2>
<ul>
  <li>working on <a href="http://en.wikipedia.org/wiki/Total_maximum_daily_load">TMDL</a></li>
  <li>tired from doing routine operations in your favorite spreadsheet</li>
  <li>not satisfied with charting capabilities of your favorite spreadsheet</li>
  <li>not well familiar (at least at this moment) with <em>R</em> and wonderful package <em>lattice</em>.</li>
</ul>

<h2>Features</h2>
<ul>
  <li>Flow and Load duration curves</li>
  <li>Monthly flow variation plot</li>
  <li>Box plots with mean &amp; median and whiskers at 10<sup>th</sup> and 90<sup>th</sup> percentiles as used in most TMDL studies<br />
  (Default whiskers of boxplot function in R stretch to 1.5 <abbr title="interquartile range">IQR</abbr>)</li>
  <li>MOS can be calculated as % from TMDL or as a difference between TMDL for low and median flows within each hydrological interval</li>
</ul>

<h2>Vignette</h2>
<p>
  This <a href="vignette">vignette</a> requires <a href="http://en.wikipedia.org/wiki/Scalable_Vector_Graphics">SVG</a> enabled browser.
  Firefox should be fine, however default Internet Explorer may not work without proper <a href="http://en.wikipedia.org/wiki/Scalable_Vector_Graphics#SVG_and_Microsoft_Internet_Explorer">plugin</a>.
</p>

<h2>Download</h2>
<p>
  For some reason windows binary build is currently broken on R-Forge, so here is some snapshot <a href="tmdl_0.4-0.zip">tmdl_0.4-0.zip</a>
</p>

<h2>Example plots</h2>
<img src="fdc.png" border="0" alt="Flow Duration Curve" />
<br />
<img src="ldc.png" alt="Load Duration Curve" />
<br />
<img src="ldc_theme.png" alt="Load Duration Curve with theme" />

<p> The <strong>project summary page</strong> you can find <a href="http://<?php echo $domain; ?>/projects/<?php echo $group_name; ?>/"><strong>here</strong></a>. </p>

</body>
</html>
