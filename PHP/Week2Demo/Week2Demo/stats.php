<?php

$ceasar = "His confectis rebus conventibusque peractis, in citeriorem Galliam
revertitur atque inde ad exercitum proficiscitur. Eo cum venisset,
circuitis omnibus hibernis, singulari militum studio in sumrma omnium
rerum inopia circiter sescentas eius generis cuius supra demonstravimus
naves et longas XXVIII invenit instructas neque multum abesse ab eo quin
paucis diebus deduci possint. Collaudatis militibus atque eis qui
negotio praefuerant, quid fieri velit ostendit atque omnes ad portum
Itium convenire iubet, quo ex portu commodissimum in Britanniam
traiectum esse cognoverat, circiter milium passuum XXX transmissum a
continenti: huic rei quod satis esse visum est militum reliquit. Ipse
cum legionibus expeditis IIII et equitibus DCCC in fines Treverorum
proficiscitur, quod hi neque ad concilia veniebant neque imperio
parebant Germanosque Transrhenanos so icitare dicebantur.";

$words = explode(' ', $ceasar);

echo count($words);

$stats = array();

foreach ($words as $word)   {

    //Remove the "."
    $word = str_replace(".","",$word);
    //Check if the word exists as a key
    if (array_key_exists($word, $stats))    {
        //If it does
        $stats[$word]++;
    } else {
        //If it doesnt , initlialize the key.
        $stats[$word] = 1;
    }
}

//Sort by the must number of occurances
asort($stats);

var_dump($stats);

