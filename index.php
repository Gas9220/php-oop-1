<?php 
class Movie {
    private $title;
    private $release_date;
    private $language;
    private $vote;
    private $minutes;
    private $over18;

    public function __construct(string $title, string $release_date, string $language, float $vote, float $minutes, bool $over18) {
        $this->title = $title;
        $this->release_date = $release_date;
        $this->$language = $language;
        $this->vote = $vote;
        $this->minutes = $minutes;
        $this->over18 = $over18;
    }
}

?>