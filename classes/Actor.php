<?php

require_once 'Entity.php';
class Actor extends Entity {
    protected $name;
    protected $dateOfBirth;

    public function __construct($id, $name, $dateOfBirth) {
        parent::__construct($id);
        $this->name = $name;
        $this->dateOfBirth = $dateOfBirth;
    }

    public function getName() {
        return $this->name;
    }

    public function getDateOfBirth() {
        return $this->dateOfBirth;
    }

    public function getAge() {
        return date_diff(date_create($this->dateOfBirth), date_create('today'))->y;
    }

    public function toJson() {
        return json_encode(array(
            'id' => $this->getId(),
            'name' => $this->getName(),
            'dateOfBirth' => $this->getDateOfBirth(),
            'age' => $this->getAge()
        ));
    }
}

?>