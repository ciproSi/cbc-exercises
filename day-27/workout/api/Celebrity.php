<?php 

class Celebrity
{
    public $name = null;
    public $citizenship = null;
    public $earnings = null;
    public $photo = null;
    public $age = null;
    public $events = [];

    public function fill ($array)
    {
        //possible security issues if there is some sensitive property
        foreach ($array as $key => $value) {
            $this->$key = $value;
        }

        
        //harder bur could be safer
        // $this->name = $array['name'];
        // $this->photo = $array['photo'];
        // $this->earnings = $array['earnings'];
        // $this->age = $array['age'];
        // $this->citizenship = $array['citizenship'];
        // $this->events = $array['events'];
    }

}