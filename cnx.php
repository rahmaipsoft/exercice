


<?php
try
{
	// On se connecte à MySQL
	$mysqlClient = new PDO('mysql:host=localhost;dbname=we_love_food;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table recipes
$sqlQuery = 'SELECT * FROM recipes';
$recipesStatement = $mysqlClient->prepare($sqlQuery);
$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll();

// On affiche chaque recette une à une
// echo"$recipes";
// echo'<pre>';
// var_dump($recipes);
// echo('</pre>')

foreach ($recipes as $recipe) {
    ?>
        <p><?php echo $recipe['author']; ?></p>
    <?php
    }
    ?>

<?php
$sqlQuery = 'SELECT * FROM recipes WHERE author = :author AND is_enabled = :is_enabled';

$recipesStatement = $mysqlClient->prepare($sqlQuery);
$recipesStatement->execute([
'author' => 'recipe2 auther',
'is_enabled' => 1,
]);
$recipes = $recipesStatement->fetchAll();
var_dump($recipes);
?>