<?php
$grade = 16;

if ($grade == 0) {
    echo "Tu es vraiment un gros nul !!!";
}

elseif ($grade == 5) {
    echo "Tu es très mauvais";
}

elseif ($grade == 7) {
    echo "Tu es mauvais";
}

elseif ($grade == 10) {
    echo "Tu as pile poil la moyenne, c'est un peu juste…";
}

elseif ($grade == 12) {
    echo "Tu es assez bon";
}

elseif ($grade == 20) {
    echo "Tu te débrouilles très bien !";
}

elseif ($grade == 16) {
    echo "Excellent travail, c'est parfait !";
}

else {
    echo "Désolé, je n'ai pas de message à afficher pour cette note";
}
?>



<?php
$userAge = 24;

$isAdult = ($userAge >= 18) ? "kkkkk" : "jjjjj";

echo $isAdult;
echo"<br>";

$ppp = ($userAge >= 24);
echo $ppp;
?>