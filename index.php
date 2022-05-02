<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php
$paragraf ="Mi sono rotto il cazzo
Degli esperimenti del frequentiamoci ma senza impegno
Stiamo insieme ma non vediamoci che poi ho paura
Anzi vediamoci quanto ci pare
Ma vediamoci in compagnia
Mi sono rotto il cazzo dei codardi con l'amore degli altri
Mi sono rotto il cazzo perché poi non si dorme più
Si sta svegli finchè non muore la speranza
Maledetta stronza che non muore mai mentre io vorrei dormire
Mi sono rotto il cazzo di questa città
Degli aperitivi a dieci euro, del clima di terrore a gratis
Dei giovani di sinistra, arrivisti, bugiardi, senza lode
Gente che in una gara di idiozia riuscirebbe ad arrivare secondo
Mi sono rotto il cazzo di quelli che vogliono andare un anno all'estero
Ma prima tre mesi da cameriere, così guadagno qualche soldo
Svegliati stronzo che sono trent'anni che mamma ti mantiene
E le dispiace pure che vai a fare il cameriere
Mi sono rotto il cazzo delle signorine che vogliono fare un sacco di cose
Ma non ne sono in grado e se ne accorgono tardi
E allora 800 euro per la reflex, 200 per yoga e 300 per i peli del culo e 600 d'affitto
Per emanciparsi
Mi sono rotto il cazzo della puzza di piscio delle zone industriali
Della puzza di industria
Dei giardini pubblici
Di tutti a lavoro in auto, una persona per auto Per finanziare meglio l'Eni
Mi sono rotto il cazzo della critica musicale
Non siete Lester Bangs
Non siete Carlo Emilio Gadda
Si fa fatica a capire cosa scrivete
Bontà di dio
Avete dei gusti di merda
C'avete rotto il cazzo etichette indipendenti
Con 400 euro ti registro il disco in casa, suona bene, lo metti su Vimeo
Fai girare la voce
Tra un anno a Coachella
E tra due anni
A fare il benzinaio

Mi sono rotto il cazzo che se vince la sinistra vince la droga
E mai che mi invitino a un festino
Mi sono rotto il cazzo del più grande partito riformista d'europa
Del facciamo quadrato nel grande centro nei girotondi
Del partito dell'amore
Del governo ombra
Di chi si difende dai processi e non nei processi
Dei militari nei giardini pubblici a fare la guardia a chi piscia il cane
Mi sono rotto il cazzo della sicurezza come fiera della forca
E del fascino della divisa
Sarebbe bello bruciassero meno fabbriche e Crollassero meno scuole
E scippassero più vecchiette
Mi sono rotto il cazzo di c'è la crisi c'è la crisi
Da domani acquisto solo cacciabombardieri
E' un po' di tempo ormai
Che vendiamo solo sangue e compriamo solo merda
Mi sono rotto il cazzo che bisogna essere lavoratori flessibili
Come ergastolani in turnee ma molti più sorridenti
Dei fascisti col culto del corpo che diventano campioni di greco-romana
E poi fanno gli agguati ai ragazzini di notte
In cinque contro uno
Mi sono rotto il cazzo che non sono d'accordo con te
Ma morirei affinché tu possa dire la tua stronzata
Che poi i nazisti sono giovani che amano la politica
I comunisti prendono a modello Cristo
Mentre i preti contestualizzano bestemmie
E nella guerra per la pace vince da sempre
Il voto moderato

Fate una cosa bella, ma bella davvero
La prossima volta che dite una stronzata
Ammazzatevi da soli

Mi sono rotto il cazzo anche di me stesso
Che mi conosco fin troppo bene e ho ancora tutta la vita davanti
Che cazzo faccio da qui fino alla pensione
Che poi mica me la danno, e comunque
Non avevo le carte
Mi sono rotto il cazzo anche di te
Che per fortuna non ti conosco
E forse sei la speranza
Giuro che se ti incontro
Giuro che se ti incontro
Finisce male";
$badWord = $_GET["badWord"];
$goodParagraf = str_replace($badWord, '***', $paragraf );
?>

<h1>Questa è una canzone con il cazzo</h1>
<p> <?php echo ($paragraf) ?> </p>
<h3>E la sua lunghezza è <?php echo strlen($paragraf) ?> </h3>
<hr>

<h1>Questa è una canzone senza il cazzo (tramite $_GET)</h1>
<p> <?php echo ($goodParagraf) ?> </p>
<h3>E la sua lunghezza è <?php echo strlen($goodParagraf) ?> </h3>
