

<?php

// Déclaration du tableau des recettes
$recipes = [
    ['Cassoulet', '[...]', 'mickael.andrieu@exemple.com', true],
    ['Couscous', '[...]', 'mickael.andrieu@exemple.com', false],
];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Affichage des recettes</title>
</head>
<body>
    <ul>
        <?php for ($lines = 0; $lines <= 1; $lines++): ?>
            <li><?php echo $recipes[$lines][0] . ' (' . $recipes[$lines][1] . ')'; ?></li>
        <?php endfor;?>
    </ul>

    <br>
    <?php

$mickael = ['Mickaël Andrieu', 'mickael.andrieu@exemple.com', 'S3cr3t', 34];
$mathieu = ['Mathieu Nebra', 'mathieu.nebra@exemple.com', 'devine', 33];
$laurene = ['Laurène Castor', 'laurene.castor@exemple.com', 'P4ssw0rD', 28];

$users = [$mickael, $mathieu, $laurene];

echo $users[1][1]; // "mathieu.nebra@exemple.com"
?>
<br>
<h1>  ***********</h1>
<?php

/**
 * Déclaration du tableau des recettes
 * Chaque élément du tableau est un tableau numéroté (une recette)
 */
$recipes = [
    ['samia1', 'samia', 'mickael.samia1@exemple.com', true],
    ['lina1///', 'lina', 'lina.andrieu@exemple.com', false],
];

for ($lines = 0; $lines <= 1; $lines++) {
    // echo $recipes[$lines][0];
    echo $recipes[1][0];
}
?>


<?php

$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
];

echo '<pre>';
print_r($recipes);
echo '</pre>';

?>


<?php
$recipe = [
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
    'author' => 'laurene.castor@exemple.com',
];

if (array_key_exists('title', $recipe)) {
    echo 'La clé "title" se trouve dans la recette !';
}

if (array_key_exists('commentaires', $recipe)) {
    echo 'La cle "commentaires" se trouve dans la recette !';
}

?>


</body>
</html>