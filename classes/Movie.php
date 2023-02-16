<?php

require_once 'Entity.php';

class Movie extends Entity {
    protected $title;
    protected $runtime;
    protected $releaseDate;
    protected $actors;

    public function __construct($id, $title, $runtime, $releaseDate) {
        parent::__construct($id);
        $this->title = $title;
        $this->runtime = $runtime;
        $this->releaseDate = $releaseDate;
        $this->actors = array();
    }

    public function getTitle() {
        return $this->title;
    }

    public function getRuntime() {
        return $this->runtime;
    }

    public function getReleaseDate() {
        return $this->releaseDate;
    }

    public function getActors() {
        return $this->actors;
    }

    public function addActor($actor, $character) {
        $this->actors[] = array('actor' => $actor, 'character' => $character);
    }

    public function getActorsByAge() {
        usort($this->actors, function($a, $b) {
            return $a['actor']->getAge() < $b['actor']->getAge();
        });
        return $this->actors;
    }

    public function toJson() {
        return json_encode(array(
            'id' => $this->getId(),
            'title' => $this->getTitle(),
            'runtime' => $this->getRuntime(),
            'releaseDate' => $this->getReleaseDate(),
            'actors' => array_map(function($a) {
                return array(
                    'actor' => $a['actor']->toJson(),
                    'character' => $a['character']
                );
            }, $this->getActors())
        ));
    }
}


?>