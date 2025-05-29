<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice</title>
</head>
<body>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #2c3e50;
            text-align: center;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background-color: #ecf0f1;
            margin: 5px 0;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
    <h1>Recommended Manga Books</h1>

    <p>Here are some manga books that I recommend:</p>

    <?php
        $books = [
            [
                'title' => 'One Piece',
                'author' => 'Eiichiro Oda',
                'genre' => 'Adventure, Fantasy',
                'releaseYear' => 1997
            ],
            [
                'title' => 'Naruto',
                'author' => 'Masashi Kishimoto',
                'genre' => 'Adventure, Fantasy',
                'releaseYear' => 1999
            ],
            [
                'title' => 'Attack on Titan',
                'author' => 'Hajime Isayama',
                'genre' => 'Action, Dark Fantasy',
                'releaseYear' => 2009
            ],
        ];

        function filter($items, $fn) {
           $filteredbooks = [];

           foreach ($items as $item) {
                if ($fn($item)) {
                    $filteredbooks[] = $item;
                } 
           }

           return $filteredbooks;
        };
        
        $filteredbooks = filter($books, function($book) {
            if ($book['releaseYear'] >= 1999) {
                return true;
            }
            return false;
        })
        
    ?>

    <ul>
        <?php foreach ($filteredbooks as $book) : ?>
            <li>
                <a href="<?php $book['author'] ?>">
                    <?= $book['title']; ?> by <?= $book['author']; ?> <?= $book['genre']; ?> (<?= $book['releaseYear']; ?>)
                </a>
            </li>

        <?php endforeach; ?>
    </ul>
    
</body>
</html>