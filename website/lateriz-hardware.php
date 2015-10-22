<?php
$page_title = "The hardware parts";
$mycontent = <<<HERE

<h1>The hardware parts</h1>
<p>A lot is purchased pre-made: a Single Board Computer,  screen, 
batteries, 3G modem etc.</p>
<p>Custom keyboard and pointing device is developed in-house. </p>
<p>The chassis is developed in-house.</p>
<figure>
    	<figcaption>As main component I've chosen 
	<a href="https://www.olimex.com/Products/OLinuXino/A10/A10-OLinuXino-LIME/open-source-hardware">
	Olimex's OLinuXino A10</a>  [external link] that cost around 30 EUR</figcaption>
	<img src="A10-OLinuXino-LIME-1.jpg" alt="a complete computer of the size of a
	credit card">

</figure>

<figure>
	<figcaption>
		<ul>
			<li>This 3d model of OLinuXino was made by <a href="https://www.thingiverse.com/Lutino">
		Lutino [external link]</a>;</li>
		<li>a credit card for size comparison;</li>
		<li>aluminium heatsink;</li>
		<li>a beefy 6600 mAh LiPo battery (very rough assessment: 10 hours of full usage).</li>
		</ul>
	</figcaption>
	<img src="mattone.png" alt="3d scene">
</figure>

<figure>
    	<figcaption>Early prototype of a custom usb keyboard
	</figcaption>
	<img src="my-keyboard.jpg" alt="diy keyboard">
</figure>

<figure>
    	<figcaption>A simple and rough way to make a housing for the device. Just use
	a plastic box, either the type expecially made for electronics or the type
	used in electric systems for wet/dusty places. Cut holes as needed.</figcaption>
	<img src="modified-plastic-box.jpg" alt="a tough plastic box closed with screws">

</figure>

<figure>
    	<figcaption>It is possible to employ a classic <dfn title="A clam is a small
	soft animal living in the sea and protecting itself by means of a hard shell">
	clamshell</dfn>
	design for a better chassis. This 3D model is parametric e.g. it can be
	easily changed modifying each variable (aka parameter) on the right.
	With this settings it
	looks like a brick.</figcaption>
	<img src="parametric-solid-model.png">

</figure>
HERE;
require_once("common.php");
?>