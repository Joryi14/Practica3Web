<?php
  require_once('models/author.php');

  class authorController extends Controller {

    public function index() {  
      return  
      view('authors/index',
       ['author'=>author::all(),
       'title'=>'Author List']
      );
    }

    public function show($id) {
      $author = author::find($id);
      return view('authors/show',
        ['author'=>$author,
         'title'=>'Author Detail']);
    }
  }
?>