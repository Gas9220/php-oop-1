<?php 
class Movie implements \JsonSerializable {
    private $title;
    private $release_date;
    private $language;
    private $vote;
    private $minutes;
    private $over18;
    private $genre;

    public function __construct(string $title, string $release_date, string $language, float $vote, float $minutes, bool $over18, array $genre) {
        $this->title = $title;
        $this->release_date = $release_date;
        $this->language = $language;
        $this->vote = $vote;
        $this->minutes = $minutes;
        $this->over18 = $over18;
        $this->genre = $genre;
    }

    public function isLongerThan($min) {
        return $this->minutes > $min ? true : false;
    }

    public function getReleaseDate() {
        return $this->release_date;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}
