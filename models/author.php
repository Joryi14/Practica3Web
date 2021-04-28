<?php


class author extends Model {

  static $authors = [
    ['id'=>1,'author'=>'Abraham Silberschatz','nationality'=>'Israelis / American','birth_year'=>1952,'fields'=>'Database Systems/Operating Systems', 'book'=>[['idb'=>1,'title'=> 'Operating System Concepts'],['idb'=>2,'title'=>'Database System Concepts']]],
    ['id'=>2,'author'=>'Andrew S. Tanenbaum','nationality'=>'Dutch / American','birth_year'=>1944,'fields'=>'Distributed computing/Operating Systems','book'=>[['idb'=>3,'title'=> 'Computer Networks'],['idb'=>4,'title'=>'Modern Operating Systems']]
    ]];
  public static function all() { 
    return self::$authors; 
  }

  public static function find($id) {
    foreach (self::$authors as $key => $author)
      if ($author['id'] == $id) return $author;
    return [];
  }
}
?>