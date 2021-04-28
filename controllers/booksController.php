<?php
  require_once('models/book.php');

  class booksController extends Controller {

    public function index() {  
      return view('book/index' ,
       ['books'=>book::all(),
       'title'=>'Book List']
      );
    }

    public function show($id) {
      $bok = book::find($id);
      return view('book/show',
        ['book'=>$bok,
         'title'=>'Book Detail']);
    }
  }
?>