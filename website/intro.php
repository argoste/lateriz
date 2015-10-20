<?php
$page_title = "Introduction";
$mycontent = <<< MAIN
    <h1>Introduction</h1>
    <p>The APC initiative is about small, portable devices.</p>
    <p>The Name APC stands for Adventure Personal Computer, meaning a device
    suited for an active life style, for woods, for construction sites etc.</p>
    <p>A better name is needed.</p>
    <figure>
        <embed src="apc_mind_map.svg" type="image/svg+xml">
        <figcaption>APC mind map</figcaption>
    </figure>
    <h2>About</h2>
    <p>The table of contents of this Draft is a
		<dfn title="Immagine it like a tree that has a trunc
    dividing in several branch, every branch has one parent and can have many
    children">hierarchical list</dfn>, but should be a
    <dfn title="Imagine it like a network of nodes,  with each one connected to
    other nodes">pseudograph</dfn>
    instead.
    In fact the real mind map</a> is inherently
    network-like, with parts referring to other parts. 
    Also one branch can be a different way to look at the same object. </p>
		<p>A good organization of the content has been tried by me on 
		<a href="http://argo3.altervista.org">My homepage [external]</a>.</p>
		<p>A main treelike nav can cohexist with a in-site network of &lt;a&gt;
		links.</p>
		<p><a href="http://www.shlomifish.org/">Shlomi Fish homepage</a> had
		a similar idea of hierarchical collapsible nav.<p>
MAIN;
require_once("common.php");
?>