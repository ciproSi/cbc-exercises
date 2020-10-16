<?php

class Game
{
    public $description = null;
    public $id = null;
    public $image_url = null;
    public $name = null;
    public $rating = null;
    public $released_at = null;
    public $genres = [];

    public function addGenre(Genre $genre)
    {
        $this->genres[] = $genre;
    }

}