<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Random ideas</title>
</head>

<body>
<!--      <ul class="collapsibleList">
        <li class="toplevel">Draft proposal
          <ul>
            <li><a href="intro.php">Introduction</a></li>
             <li title="The motivations to make" class="toplevel">Goals
              <ul>
                <li>Alternative user experience</li>
                <li>Learning experiment</li>
                <li>Made with my hands</li>
                <li>Privacy and freedom</li>
                <li>Workers' rights</li>
                <li>Jobs in Europe</li>
                <li>Environment protection</li>
              </ul>
            </li>

             <li title="The things needed" class="toplevel">Resources
              <ul>            
                <li>Time</li>
                <li>Money</li>
                <li>Capabilities</li>
                <li>Feasibility study</li>
              </ul>
            </li>
            <li title="The process of making" class="toplevel">Activities
              <ul>
                <li>Learn, Collect, Summarize</li>
                <li>Design</li>
                <li>Develop</li>
                <li>Test</li>
                <li>Manufacture</li>
                <li>Write Documentation</li>
              </ul>
            </li>
            <li title="The things made" class="toplevel">Products
              <ul>
                <li>Hardware</li>
                <li>Software</li>
                <li>Documentation</li>
              </ul>
            </li>

          </ul>
       </li>
        <li class="toplevel">Gallery</li>
        <li class="toplevel">Documentation</li>
        <li class="toplevel">Download center</li>

      </ul>-->
              <!--
        Possible sections/subprojects:

        <li>News</li>
        <li>About us (Contacts)</li>
        <li>Partners (other OSS & OSH projects)</li>
        <li>Bibliography (mainly websites)</li>
        <li>History (shorter than reading the git log)</li
        <li>Roadmap (the future)</li>
        
          -->

<h1>AdventurePC device</h1>
		<p>It is made of hardware and sofware that respects user freedom (your and others').</p>
    <p>Should respect also worker's right</p>
	<a href="https://www.gnu.org/philosophy/free-sw.html">
		<figure>
			<embed src="gnuhead_plain.svg" type="image/svg+xml">
			<figcaption>Software that respects freedom (your and other's).</figcaption>
	 </figure>
	 </a>
	 <a href="http://www.oshwa.org/">
		<figure>
			<embed src="oshw-logo.svg" type="image/svg+xml">
			<figcaption>Similar, but for hardware things.</figcaption>
	</figure>
	</a>
<!--TODO
which characters are special and must be escaped in HTML (not XHTML)
Are there pre-made CSS for mobile accessibility of this site? -->
<p>These are notes about my ideal portable device. Codename is <b>lateriz</b></p>
<p>The old name was AdventurePC or APC.</p>
<p>This page contains notes useful for many things, including modelling the
problem using diagrams (more later on a visual language called UML). The
management of the problem could benefit of some methodologies written by
experts (as an example Agile). </p>

<p>The activities to be conducted during the project life  can be divided in
groups (bad word) </p>
<ul>
  <li>Specification</li>
  <li>Design</li>
  <li>Implementation</li>
  <li>Test</li>
  <li>Manufacture</li>
  <li>Maintenance</li>
</ul>
<p>Also Write documentation, Maintenance</p>

<h2>Introduction</h2>
<p>As a write this, in 2015, mobile computing is commonplace. I regard as mobile
terminals smartphones, tablets and also laptops.</p>

<h3>My usage pattern</h3>
<p>I mostly use my smartphone for</p>
<ul>
  <li>as a phone, for voice calls and sms;</li>
  <li>as an electronic agenda, for calendar, notes and contacts;</li>
  <li>as an internet terminal, for web, email and chats</li>
</ul>
<p>Having all this functions in one device provide connection between different
activities, but my experience as an use could be better. I don't really like
touchscreens. I miss an hardware keyboard, in particular to take notes, which
I do quite a bit, and to write email messages.</p>
<p>I also use the calculator, the integrated camera, and the map application.</p>
<p>I also read PDFs and eBooks, sometimes as a torch.</p>
<p>As an audio player for language courses. I don't like the controls.</p>
<p>The previous considerations can be the basis for an Use Case Diagram</p>

<h2>The Motivations for the project</h2>
<ul>
  <li>Alternative user experience</li>
  <li>Learning experiment</li>
  <li>Made with my hands</li>
  <li>Privacy and freedom</li>
  <li>Workers' rights</li>
  <li>Jobs in Europe</li>
  <li>Environment protection</li>
</ul>

<h2>The goals of the device</h2>

<h2 id="inspiration">Idea and inspiration</h2>
<ul>
  <li>An updated version of historic handheld PC like Psion 5mx,
  Nokia Communicator  series (including N90), Sharp Zaurus</li>
  <li>A business-oriented device in contrast of
  an entertainment-oriented smartphone</li>
  <li>A low-cost alternative to Blackberry devices</li>
  <li>just what is needed, not all bell-and-whistles</li>
</ul>


<h2 id="pros">What will be good for?</h2>
<ul>
  <li>writing articles, notes</li>
  <li>programming</li>
  <li>email client</li>
  <li>web browsing (mainly text and images)</li>
  <li>calculator, calendar, address book</li>
  <li>diagram drawing (flowchart, ER, UML&hellip;)</li>
  <li>phone (voice and SMS)</li>
</ul>


<h2 id="cons">What will be bad for?</h2>
<ul>
  <li>Games (in particular new games with advanced graphics)</li>
  <li>Videos</li>
  <li>be spied by big corporations or governments</li>
</ul>


<h2>Wanted (notes for the Specification)</h2>
<ul>
<li>open hardware</li>
  <li>free and open source software (Angstrom Linux, seems a good candidate)</li>
  <li>low cost</li>
  <li>full hardware keyboardRechner</li>
  <li>pointing device can be a pointing stick, a four-keys controller, a
  trackball or a track pad, not a touch-screen</li>
  <li>clamshell to protect screen and for big surface</li>
  <li>big battery for long operating life (up to 10 hours like OpenPandora).
  Achieved using ARM processor, reflective black/white screen, optimized
  Operating System</li>
  <li>sunlight-readable screen like OLPC and Pixel Qi screens, towards e-ink</li>
  <li>maybe some LED in the frame for use on dark places (activated by a
  sensor?): eats battery</li>
  <li>the more pixel the better</li>
  <li>card reader</li>
  <li>communication: 3G, Wi-Fi, Bluetooth, USB, serial over USB for debugging</li>
  <li>rugged anti-glare screen shield</li>
  <li>water- and dust-proof like OLPC</li>
  <li>rugged chassis: metal or plastic or what? Consider also heat dissipation,
  sun effect&hellip;</li>
</ul>


<p>Ideas (notes for the Implementation)</p>
<ul>
  <li>Maybe it can be a tweaked version of OpenPandora: reflective screen
  instead of transmissive, more pixel in the screen, more symbol keys, less
  gaming controls, no need of video output, no need of old games emulation</li>
  <li>or based on Raspberry Pi</li>
  <li>or based on BeagleBone Black</li>
  <li>or based on Olimex&rsquo;s OLinuXino boards (A10, A20, etc)</li>
</ul>


<h2>To do</h2>

<ul>
<li>Study the ergonomics of the device: how do you hold it while typing or using
pointing device</li>
<li>study earphones comfort and earphones holder for tidy cables
+
invent a good bag for transport</li>
<li>find out the best GUI for screen real
estateRechner</li>
</ul>


<h2>Some design idea discussion</h2>

<p>Why don&apos;t you use a two device approach, I mean a feature phone and a
very small
laptop? Because you have to carry two devices instead of one; because I want to
use just one SIM card and subscription; because it seems awkward to transfer
data between the two all the time.</p>

<p>It depends on what is your usage pattern: if you work a lot outdoors, you can
benefit from AdventureOrdinateur approach. If you work in more comfortable
places, and a bigger screen is more important, the two device approach is
more suitable.</p>

<!-- Translate this  -->
<
<h2>Considerazioni a ruota libera</h2>

<p>Fa parte de <strong>La progettazione di un dispositivo portatile</strong>
di Lorenzo Carlesso e Stefano Carlesso.</p>

<p>Bug: questo testo é didascalico, pedante, sgrammaticato e non porta vere nuove
informazioni.</p>

<h3>Esigenze a cui rispondere?</h3>

<p>In questo testo considero <strong>dispositivi portatili</strong> quelli
afferenti alle
seguenti categorie: feature phone, smartphone, tablet, laptop, smartwatch,
netbook, palmari (pda), Handheld PC (H/PC), subnotebook. Le ultime tre categorie
appartengono purtroppo al passato e forse non sono ben distinte, come del resto
i netbook sono dei particolari portatili.</p>

<p>Le attivitá svolte attraverso i dispositivi portatili sono molteplici.
Attivitá e funzioni sono due facce della stessa medaglia, a seconda di dove
mettiamo l'accento. Comunque l'elemento piú importante é l'utente.</p>

<p>Ci sono le funzioni funzioni che per comoditá chiamo <em>agenda</em> o
organizer :
rubrica, appunti, calendario, promemoria, sveglia. Sono funzioni svolte dai
vecchi PDA (i cosiddetti palmari)e ancora prima delle rubriche e dei taccuini
cartacei.</p>

<p>Una funzione simile e complementare al prendere appunti é la possibilitá di
utilizzare un semplice ma completo text editor e un file manager.</p>

<p>Calcolatrice scientifica e convertitore di unitá di misura e valuta.</p>

<p>La navigazione del web in mobilitá viene ormai quasi data per scontata. I
feature phone sono piú adatti ai siti WAP. L'immissione di dati (un semplice
form) non mi soddisfa sullo smartphone, in particolare perché ci si trova a
utilizzare siti non ottimizzati per piccoli schermi.</p>

<p>Lettore di Ebook e di PDF.</p>

<p>Image editor per veloci schizzi e schemi e diagrammi.</p>

<p>Emulatore di terminale e client SSH.</p>

<h3>Esempi ispiratori</h3>

<ul>
<li>Nokia Asha 201 (mio cell vecchio)</li>
<li>I classici RIM BlackBerry</li>
<li>netbook Asus EeePc</li>
<li>HandyPC della Road Gmbh</li>
<li>OLPC (One Laptop Per Child)</li>
<li>OpenPandora</li>
<li>Sunlight readable screens by Pixel Qi</li>
</ul>


<h2>Cose da approfondire</h2>

<ul>
<li>Provare a vedere
  <a href="http://www.tldp.org/HOWTO/Keyboard-and-Console-HOWTO-7.html">howto</a>
</li>
<li>e inoltre <a href="http://archlinuxarm.org/">ARM Arch Linux</a></li>
</ul>


<h2>Software</h2>

<p>GNU/Linux of course. Maybe I can try RiscOS Open.</p>
<p> X11 and at some point Wayland.</p>
<p>A tiling window manager.</p>
<p>Basic applications like terminal emulator,
file manager, text editor. </p>
<p>Do not use tabs nor virtual desktops.</p>

<h3>The bloated approach</h3>

<p>This approach is not good for APC. I explain to get to the point.</p>

<p>Desktop Environment contains multiple virtual desktop.</p>

<p>Each virtual desktop contains multiple window.</p>

<p>Each window contain multiple tabs.</p>


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
    
    
<section>
  <h1>Artist's impression of the Lateriz project</h1>
  <figure>
  <embed src="artist-impression-of-lateriz.svg">
  <figcaption>A Free Software GNU and A Open Hardware  Wheel (the Titans) hold the brick (bare not polished) construction.
Green pipes connect everything (linked, multidisciplinary, complex) : the nerd user is happy</figcaption>
</figure> 
</section>   


</body>
</html>
