<?php
	namespace App\Http\Controllers;
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	
	class HomeController extends Controller{
		
		
		public function index(){
			return "Ejemplo";
		}	
		
		public function getId($id1,$id2){
			return "<p> id es igual a " . $id1 . "</p> <p> id2 es igual a " . $id2 . "</p>";
		}
		public function showView(){
			$msg = "Ejemplo laravel 5";
			$array = [1,2,3,4,5,6,7,8,9];
			return View('home.showView', ['msg' => $msg, 'array' => $array]);
		}
		public function form(Request $request){
			
			if($request -> isMethod("post") && $request-> has("name")){
				$name = $request-> input("name");
			}
			else{
				$name= "";
			}
			
			return View("home.form",["name" => $name]);
		}
	}
	
		