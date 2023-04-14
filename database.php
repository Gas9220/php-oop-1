<?php
require_once __DIR__ . '/Models/Movie.php';

$movies = [
    new Movie(
        "Lord of the rings: The Two Towers",
        "20-11-2005",
        "US",
        9.8,
        210,
        false,
        ["Fantasy", "Action"],
        "https://m.media-amazon.com/images/M/MV5BN2EyZjM3NzUtNWUzMi00MTgxLWI0NTctMzY4M2VlOTdjZWRiXkEyXkFqcGdeQXVyNDUzOTQ5MjY@._V1_.jpg"
    ),
    new Movie(
        "Gladiator",
        "13-05-2000",
        "IT",
        8.5,
        170,
        true,
        ["Drama", "Adventure"],
        "https://m.media-amazon.com/images/I/81-0dUkfabL._SL1500_.jpg"
    ),
    new Movie(
        "Tomb Raider",
        "11-06-2018",
        "US",
        6.3,
        159,
        false,
        ["Adventure", "Thriller"],
        "https://pad.mymovies.it/filmclub/2016/11/257/locandina.jpg"
    ),
    new Movie(
        "John Wick",
        "18-08-2014",
        "US",
        7.4,
        140,
        true,
        ["Crime", "Thriller"],
        "https://m.media-amazon.com/images/I/71+k2-r7vQL._SL1500_.jpg"
    ),
    new Movie(
        "Doctor Strange in the multiverse of madness",
        "10-01-2022",
        "US",
        6.9,
        220,
        false,
        ["Horror", "Sci-Fi"],
        "https://cdn.marvel.com/content/1x/stellarvortex_genavailposter_v1_june22_lg.jpg"
    ),
    new Movie(
        "Thor Love & Thunder",
        "22-03-2022",
        "GB",
        6.3,
        200,
        false,
        ["Comedy", "Romance"],
        "https://www.ucicinemas.it/media/movie/o/2022/thor-love-and-thunder_r781Yin.jpg"
    )
];
