<?php
  require_once('models/publisher.php');

  class publisherController extends Controller {

    public function index() {  
      return view('publishers/index',
      ['publisher'=>publisher::all(),
      'title'=>'Publisher List']
    );
    }
    public function show($id) {
      $publisher = publisher::find($id);
      return view('publishers/show',
       ['publisher'=>$publisher,
      'title'=>'Publisher Detail']);
    }
  }
?>