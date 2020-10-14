<?php

// $name = 'North America';
// $space_position = strpos($name, ' ');
// var_dump($space_position);

// $name_no_spaces = strtolower(substr_replace($name, '-', strpos($name, ' '), 1));

// var_dump($name_no_spaces);

class Region
{
    public $name = null;
    public $slug = null;
    public $id = null;

    public function __construct($region_name)
    {
        $this->name = $region_name;
        //prepare slug and safe it as object property
        //if there is no space in string it's not working good - needs to be implemented
        //removing diacritics needs to be implemented
        $this->slug = strtolower(substr_replace($this->name, '-', strpos($this->name, ' '), 1));
    }
    public function insert()
    {
        
        $query = "
            INSERT
            INTO `regions`
            (`name`, `slug`)
            VALUES
            (?, ?)
        ";

        insert($query, [$this->name, $this->slug]);
        $this->id = last_insert_id();
    }

}
