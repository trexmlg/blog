<?php

require "functions.php";
require "Database.php";

echo "hi there";

$config = require("confib.php");

$db = new Database($config["database"]);
$posts = $db->query("SELECT * FROM posts");
$comments = $db->query("SELECT * FROM comments")->fetchALL(PDO::FETCH_ASSOC);
// $user = $db->query(); //

echo "<ul>";
foreach ($posts as $post){
    echo "<li>" . $post["content"] . "</li>";
}
echo "</ul>";
?>
