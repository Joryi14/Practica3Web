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
    public function create() {
      return view('authors/create',
        ['title'=>'author Create']);
    }  

    public function store() {
      $author = Input::get('author');
      $nationality = Input::get('nationality');
      $birth = Input::get('birth_year');
      $field = Input::get('fields');
      $item = ['author'=>$author,'nationality'=>$nationality,'birth_year'=>$birth,
               'fields'=>$field];
      author::create($item);
      return redirect('/author');
    }  

    public function edit($id) {
      $author = author::find($id);
      return view('authors/edit',
        ['author'=>$author,
         'title'=>'Author Edit']);
    }  

    public function update($_,$id) {
      $author = Input::get('author');
      $nationality = Input::get('nationality');
      $birth = Input::get('birth_year');
      $field = Input::get('fields');
      $item = ['author'=>$author,'nationality'=>$nationality,'birth_year'=>$birth,
               'fields'=>$field];
      author::update($id,$item);
      return redirect('/author');
    }  

    public function destroy($id) {  
      author::destroy($id);
      return redirect('/author');
    }
  }
?>