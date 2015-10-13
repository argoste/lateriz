#AdventurePC device

##Revisions

Added «Considerazioni a ruota libera» on 2015-09-22 First written by Stefano
Carlesso on 2014-03-23

##Summary

These are notes about my ideal portable device. Codename is AdventurePC or APC.

##Idea

+ An updated version of historic handheld pc like Psion 5mx, Nokia Communicator
series (including N90), Sharp
Zaurus + A business-oriented device in contrast of entertainment-oriented
smartphone + A low-cost alternative to Blackberry devices + just what is needed,
not all bell-and-whistles

##What will be good for?

+ writing articles, notes + programming + email client + web browsing (mainly
text and images) + calculator, calendar, address book + diagram drawing
(flowchart, ER, UML...) + phone (voice and SMS)


##What will be bad for?

+ Games (in particular new games with advanced graphics)
+ Videos
+ be spied by big corporations or governments


##Specifications

+ open hardware + free and open source software (Angstrom Linux, seems a good
candidate) + low cost + full hardware keyboardRechner + pointing device can be a
pointing stick, a four-keys controller, a trackball or a trackpad, not a
touch-screen + clamshell to protect screen and for big surface + big battery for
long operating life (up to 10 hours like OpenPandora). achieved using ARM
processor, reflective black/white screen, optimized Operating System +
sunlight-readable screen like OLPC and Pixel Qi screens, towards e-ink + maybe
some LED in the frame for use on dark places (activated by a sensor?): eats
battery + the more pixel the better + card reader + communication: 3G, Wi-Fi,
Bluetooth, USB, serial over USB for debugging + rugged anti-glare screen shield
+ water- and dust-proof like OLPC + rugged chassis: metal or plastic or what?
Consider also heat dissipation, sun effect...

Implementation

+ Maybe it can be a tweaked version of OpenPandora: reflective screen instead of
trasmissive, more pixel in the screen, more symbol keys, less gaming controls,
no need of video output, no need of old games emulation + or based on Raspberry
Pi + or based on Beaglebone Black

##To do

+ Study the ergonomics of the device: how do you hold it while typing or using
pointing device + study earphones comfort and earphones holder for tidy cables +
invent a good bag for transport + find out the best GUI for screen real
estateRechner


##Big question

Why don't you use a two device approach, I mean a feature phone and a very small
laptop? Because you have to carry two devices instead of one; because I want to
use just one SIM card and subscription; because it seems awkward to transfer
data between the two all the time.

It depends on what is your usage pattern: if you work a lot outdoors, you can
benefit from AdventureOrdinateur approach. If you work in more confortable
places, and a bigger screen is more important, the two device approach is
Rechnermore suitable.







##Considerazioni a ruota libera

Fa parte de **La progettazione di un dispositivo portatile** di Lorenzo Carlesso
e Stefano Carlesso.

Bug: questo testo é didascalico, pedante, sgrammaticato e non porta vere nuove
informazioni.

### Esigenze a cui rispondere?

In questo testo considero **dispositivi portatili** quelli afferenti alle
seguenti categorie: feature phone, smartphone, tablet, laptop, smartwatch,
netbook, palmari (pda), Handheld PC (H/PC), subnotebook. Le ultime tre categorie
appartengono purtroppo al passato e forse non sono ben distinte, come del resto
i netbook sono dei particolari portatili.

Le attivitá svolte attraverso i dispositivi portatili sono molteplici. Attivitá
e funzioni sono due facce della stessa medaglia, a seconda di dove mettiamo
l'accento. Comunque l'elemento piú importante é l'utente.

Ci sono le funzioni funzioni che per comoditá chiamo *agenda* o organizer :
rubrica, appunti, calendario, promemoria, sveglia. Sono funzioni svolte dai
vecchi PDA (i cosiddetti palmari)e ancora prima delle rubriche e dei taccuini
cartacei.

Una funzione simile e complementare al prendere appunti é la possibilitá di
utilizzare un semplice ma completo text editor e un file manager.

Calcolatrice scientifica e convertitore di unitá di misura e valuta.

La navigazione del web in mobilitá viene ormai quasi data per scontata. I
feature phone sono piú adatti ai siti WAP. L'immissione di dati (un semplice
form) non mi soddisfa sullo smartphone, in particolare perché ci si trova a
utilizzare siti non ottimizzati per piccoli schermi.

Lettore di Ebook e di PDF.

Image editor per veloci schizzi e schemi e diagrammi.

Emulatore di terminale e client SSH.




###Esempi ispiratori

+ Nokia Asha 201 (mio cell vecchio)
+ I classici RIM BlackBerry
+ netbook Asus EeePc
+ HandyPC della Road Gmbh
+ OLPC
References

OpenPandora One Laptop Per Child Pixel Qi

## Cose da approfondire

+ Provare a vedere
[howto](http://www.tldp.org/HOWTO/Keyboard-and-Console-HOWTO-7.html)
+ e inoltre [ARM Arch Linux](http://archlinuxarm.org/)


## Software

GNU/Linux of course. Maybe I can try RiscOS Open. X11 and at some point Wayland.
A tiling window manager. Basic applications like terminal emulator,
file manager, text editor. Do not use tabs nor virtual desktops.


### The bloated approach

This approach is not good for APC. I explain to get to the point.

Desktop Environment contains multiple virtual desktop.

Each virtual desktop contains multiple window.

Each window contain multiple tabs.