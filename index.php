<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $text = 'Roma Roma Roma,core de stà città,unico grande amore,de tanta e tanta gente,che fai sospirà.Roma Roma Roma,lassace cantà,da stà voce nasce un core,so centomila voci che hai fatto nammorà.Roma Roma bella,t’ho dipinta io, gialla come er sole,rossa come er core mio.Roma Roma mia,nun te fa cantà,tu sei nata grande,  e grande hai da restà.    Roma Roma Roma,    core de stà città,    unico grande amore,    de tanta e tanta gente,ch’hai fatto nammorà.';
    $bad_word;
    $bad_word = $_GET['word'];
    ?>
</body>
<h2> <?= $text; ?> </h2>
<h2>La lunghezza del testo è: <?= strlen($text) ?> </h2>
<h2> <?= str_replace( $bad_word, '***',$text) ?> </h2>
<h2>La lunghezza del nuovo testo è: <?= strlen(str_replace( $bad_word, '***',$text)) ?></h2>
<h2>La bad word è scelta inserendo nel link ?word= <?= $bad_word ?> (questa è l attuale bad word) </h2>
</html>