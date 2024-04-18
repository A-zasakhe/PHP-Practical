<?php
$top_movies =[
["title" => "Romeo and Juliet", "year" => 1597, "genre" => "Tradegy"],
["title" => "Ocean's 8", "year" => 2018, "genre" => "Crime/Comedy"],
["title" => "Big Momma's House", "year" => 2006, "genre" => "Crime/Comedy"]
];
foreach($top_movies as $movies)
{
	echo "Title: ".$movies["title"]."Release_year: ".$movies["year"]."Genre: ".$movies["genre"]."<br>";
}

?> 