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
    public function create() {
      return view('publishers/create',
        ['title'=>'Publisher Create']);
    }  

    public function store() {
      $publisher = Input::get('publisher');
      $country = Input::get('country');
      $founded = Input::get('founded');
      $genere = Input::get('genere');
      $item = ['publisher'=>$publisher,'country'=>$country,'founded'=>$founded,
               'genere'=>$genere];
      publisher::create($item);
      return redirect('/publisher');
    }  

    public function edit($id) {
      $publisher = publisher::find($id);
      return view('publishers/edit',
        ['publisher'=>$publisher,
         'title'=>'Publisher Edit']);
    }  

    public function update($_,$id) {
      $publisher = Input::get('publisher');
      $country = Input::get('country');
      $founded = Input::get('founded');
      $genere = Input::get('genere');
      $item = ['publisher'=>$publisher,'country'=>$country,'founded'=>$founded,
               'genere'=>$genere];
      publisher::update($id,$item);
      return redirect('/publisher');
    }  

    public function destroy($id) {  
      publisher::destroy($id);
      return redirect('/publisher');
    }
  }
?>