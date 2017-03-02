<?php 

namespace Devsite\Http\Controllers;

use Devsite\Post;
use Devsite\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Redirector;
use Image;
use File;

class UserController extends Controller {	

	// Pass the data of the current user in the given view.
	public function profile() {
		$posts = Post::all();
		return view('pages.profile', ['user' => Auth::user(), 'posts' => $posts]);
	}

	// The sign in function to be executed when the user signed in.
	public function postLogIn(Request $request) {		
		$this->validate($request, [
			'email' => 'required',
			'password' => 'required'
		]);

		$remember = false;

		if(isset($request->remember)) {
			$remember = true;
		}

		if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']], $remember)) {
			// The user is being remembered.
			return redirect()->route('home');
		}
		return redirect()->back();
	}	

	public function setCountries() {
		$countries = DB::table('countries')->get();
		return view('pages.register', ['countries' => $countries]);
	}

	// The function to be executed when the user logs out.
	public function logOut() {
		Auth::logout();
		return redirect()->route('index');
	}
}