<?php

require "functions.php";
require "Database.php";

echo "<h1>hi there<h1/>";

$config = require("confib.php");

$db = new Database($config["database"]);
$posts = $db->query("SELECT * FROM post")->fetchAll();

if (isset($_GET["search_query"]) && $_GET["search_query"] != "") {
    $posts = $db->query("SELECT * FROM post WHERE content LIKE " . $_GET ["search_query"] )->fetchAll();
};

echo "<form >";
echo "<input name='search_query' />";

echo "<button>Meklēt<button/>";
echo "<form/>";

echo "<ul>";
foreach ($posts as $post){
    echo "<li>" . $post["content"] . "</li>";
}
echo "</ul>";
?>
