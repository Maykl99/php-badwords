<?php
    /* Creare una variabile con un paragrafo di testo.
    Visualizzare a schermo il paragrafo con la relativa lunghezza
     e sostituire la badword passata in GET con tre *. */

    #testo
    $text='Oggi sono andato ma da qui non me ne sono andato, lui è andato via';
    #rivavo la lunghezza testo
    $textL=strlen($text);
    #prelevo valore con l'array globale
    $valoreUrl=$_GET['badword'];
    #stampo valore modificato
    $replace= str_ireplace($valoreUrl,'***',$text);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passaggio valori</title>
</head>
<body>
    <div>
        <div>Testo stringa: <?php echo $text?></div>
        <div>Lunghezza stringa: <?php echo strlen($text)?></div>
        <div>Parola modificata: <?php echo $replace?></div>
    </div>
</body>
</html>