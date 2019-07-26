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

    $a = explode(" ",$ceasar);
    //var_dump($a);
    $words = array();
    foreach($a as $word)
    {
        str_replace(",","",$word);
        str_replace(".","",$word);
        str_replace(" ","",$word);
        if(array_key_exists($word, $words))
        {
            $words[$word]++;
        }
        else
        {
            $words[$word] = 1;
        }
    }

    asort($words);
    foreach($words as $word => $times)
    {
        echo $word . " " . $times . "\n";
    }
?>