<?php

namespace todoparrot\Http\Controllers;

use Illuminate\Http\Request;

use todoparrot\Http\Requests;

use todoparrot\Todolist;
use todoparrot\movie;
use todoparrot\category;

class listsController extends Controller
{
    //
    /*public function __construct(){
    	$this->middleware('auth');
    }*/
    function index(){
    	$data['movies'] = Movie::all();
    	$product_lists = array('Laptop', 'Iphone', 'Cars');
    	$data['userTitle'] = "User Information";
    	$data['users'] = ['firstName'=>'Lucas', 'LastName'=>'Dozie', 'email'=>'lucasatwon@gmail.com', 'PhoneNumber'=>'08129834675', 'password'=>'cjdbsubbcsdbiv', 'bio'=>'He is a polymot programmer lerom ipsum'];
    	return view('lists.showlist')
    						->with('product_lists', $product_lists)
    						->with($data);

   	}
	function show($id){
		$data['movies'] = Movie::find(30);

		$data['categories'] = category::all();
		$data['page_title'] = 'All Movies'; 
    	return view('lists.edit')
    					->with($data);
	}
	function create(){
		$date = date('y-m-d');
		$favourite_quote = "Keep moving forward";
		$description = Todolist::find(1);
		$name = 'Imo Nnadozie';
		$page_title ="Personal Details";
    	//return view('lists.create')->withName($name)->withfavourite_quote($favourite_quote)->withDate($date);
    	return view('lists.create', compact('date', 'page_title', 'favourite_quote', 'name'));
	}
	function edit($id){
		$data['movies'] = Movie::all();
		return view('lists.edit')->with($data);
	}
	function update($id){
		
	}
	function destroy($id){
		
	}


}
