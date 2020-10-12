<?php

class User
{
    public $id = null;
    public $username = null;
    public $name = null;
    public $password = null;
    public $number_of_posts = 0;
    public $created_at = null;
    public $activity = null;
    public $activity_duration = null;

    
    //method __construct is called automatically when the object is created from the class
    public function __construct($name)
    {
        $this->username = strtolower($name);      
        $this->name = $name;
        $this->created_at = date('Y-m-D H:i:s');
    }

    //declare methods
    public function dump ()
    {
        var_dump($this);
    }

    public function learn ($minutes)
    {
        $this->activity = 'studying';
        $this->activity_duration = $minutes;
    }

    public function whatAreYouDoing()
    {
        echo 'I am ' . $this->activity . ' for ' . $this->activity_duration . ' minutes.';
    }
}