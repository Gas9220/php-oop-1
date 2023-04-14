<?php 
require_once __DIR__.'/Models/Movie.php';

$movies = [
    new Movie("Lord of the rings: The Two Towers", "20-11-2005", "US", 9.8, 210, false, ["Fantasy", "Action"]),
    new Movie("Gladiator", "13-05-2000", "IT", 8.5, 170, true, ["Drama", "Adventure"]),
    new Movie("Tomb Raider", "11-06-2018", "US", 6.3, 159, false, ["Adventure", "Thriller"]),
    new Movie("John Wick", "18-08-2014", "US", 7.4, 140, true, ["Crime", "Thriller"]),
    new Movie("Doctor Strange in the multiverse of madness", "10-01-2022", "US", 6.9, 220, false, ["Horror", "Sci-Fi"]),
    new Movie("Thor Love & Thunder", "22-03-2022", "GB", 6.3, 200, false, ["Comedy", "Romance"])
];

?>