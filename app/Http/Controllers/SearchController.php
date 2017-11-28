<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

/**
* 
*/
class SearchController extends Controller
{
	public function getResults(Request $request) {

		$query = $request['query'];

		if(!$query){
			return redirect()->route('home');
		}

		$users = User::where('name','LIKE',"%{$query}%")->orWhere('email','LIKE',"%{$query}%")->get();
		//dd($users);
		return view('search.results_page',compact('users'));
	}
}