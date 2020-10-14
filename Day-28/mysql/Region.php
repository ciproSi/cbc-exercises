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

    // I was thinking that the construct is a nice way to automate some tasks but I think Honza is heading towards class which will be used to store data retrieved from the DB and saving them back after the manipulation as well as for creating new records. Then it's a bit overdoing stuff so I just let it be commented. as I feel sorry to say good bye to my nice code.
    
    // public function __construct($region_name)
    // {
    //     $this->name = $region_name;
    //     //prepare slug and safe it as object property
    //     //if there is no space in string it's not working good - needs to be implemented
    //     //removing diacritics needs to be implemented
    //     $this->slug = strtolower(substr_replace($this->name, '-', strpos($this->name, ' '), 1));
    // }

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

    public function update () 
    {
        if ($this->id != null) {
            $query = "
                UPDATE `regions`
                SET 
                `name` = ?,
                `slug` = ?
                WHERE `id` = ?
            ";

            update($query, [$this->name, $this->slug, $this->id]);
        }
    }

    public function save()
    {
        if ($this->id == null) {
            $this->insert();
        } else {
            $this->update();
        }
    }

    public function delete ()
    {
        if ($this->id != null) {
            $query = "
            DELETE
            FROM `regions`
            WHERE `id` = ?
            ";
            
            delete($query, [$this->id]);
        }
    }

}
