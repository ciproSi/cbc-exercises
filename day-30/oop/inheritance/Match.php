<?php

class Match
{
   public $begins_at = null;
   public $score = null;
   public $nr_of_players = null;
   public $length = null;

   public function __construct($begins_at)
   {
       $this->begins_at = $begins_at;
   }

   public function getEstimatedEnd ()
   {
       //get the time of start in timestamp format
       $timestamp = strtotime($this->begins_at);
       $ends_at_timestamp = $timestamp + (60 * $this->length);
       return date('Y-m-d H:i:s', $ends_at_timestamp);
   }
}