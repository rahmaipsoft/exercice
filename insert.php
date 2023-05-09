


<?php
try
{
	$db = new PDO('mysql:host=localhost;dbname=we_love_food;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

// Ecriture de la requête
$sqlQuery = 'INSERT INTO recipes(title, recipe, author, is_enabled) VALUES (:title, :recipe, :author, :is_enabled)';

// Préparation
$insertRecipe = $db->prepare($sqlQuery);

// Exécution ! La recette est maintenant en base de données
$insertRecipe->execute([
    'title' => 'maha',
    'recipe' => 'Etape 1 : Des flageolets ! Etape 2 : Euh ...',
    'author' => 'maha@exemple.com',
    'is_enabled' => 1, // 1 = true, 0 = false
]);
