<?php

class publisher extends Model {

  static $publishers = [					
    ['id'=>1,'publisher'=>'John Wiley & Sons','country'=>'United States','founded'=>1807,'genere'=>'Academic','book'=>[['idb'=>1,'title'=> 'Operating System Concepts'],['idb'=>2,'title'=>'Database System Concepts']]], 
     ['id'=>2,'publisher'=>'Pearson Education','country'=>'United Kingdom','founded'=>1844,'genere'=>'Education','book'=>[['idb'=>3,'title'=> 'Computer Networks'],['idb'=>4,'title'=>'Modern Operating Systems']]]
  ];

  public static function all() { 
    return self::$publishers; 
  }

  public static function find($id) {
    foreach (self::$publishers as $key => $publisher)
      if ($publisher['id'] == $id) return $publisher;
    return [];
  }
}
?>