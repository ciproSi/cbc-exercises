<?php
require_once 'DBBlackbox.php';

class Dog
{
    public $id = null;
    public $name = null;
    public $breed = null;
    public $awards = null;
    public $siblings = null;
    public $gender = null;
    public $flashed_data = null;
    public $flashed_msgs = [];

    public function __construct() 
    {
        $this->getFlashedData();
        $this->getFlashedMessagess();

        if (isset($_GET['dog_id'])) {
            //this is updating dog, initialize object with data retrieve from DB
            $this->id = $_GET['dog_id'];
            $dog = find($this->id);
            $this->name = $dog['name'];
            $this->breed = $dog['breed'];
           
        }
        //if some data were flashed,set the object properties accordingly
        if ($this->flashed_data != null) {
            $this->name = $this->flashed_data['name'];
            $this->breed = $this->flashed_data['breed'];     
        }
    }
    
    //our "DB" can only handle arrays
    public function propertiesToArray()
    {
        $data = [];
        $data['name'] = $this->name;
        $data['breed'] = $this->breed;
        $data['sibling'] = $this->siblings;

        return $data;
    }

    public function insert()
    {
        $this->id = insert($this->propertiesToArray());
    }

    public function update ()
    {
        update($this->id, $this->propertiesToArray());
    }

    public function getFlashedData ()
    {
        if (isset($_SESSION['flashed_data'])) {
            $this->flashed_data = $_SESSION['flashed_data'];
            
            unset($_SESSION['flashed_data']);
        } 
    }

    public function getFlashedMessagess ()
    {
        $this->flashed_msgs = isset($_SESSION['flashed_msgs']) ? $_SESSION['flashed_msgs'] : [];
        unset($_SESSION['flashed_msgs']);
    }

}