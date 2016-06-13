<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function welcome()
	{
		return view('pages.welcome');
	}

	public function about()
	{
		return view('pages.about');
	}

	public function contact()
	{
		return view('pages.contact');
	}

	public function login()
	{
		return view('pages.login');
	}
	public function signup()
	{
		return view('pages.signup');
	}
	public function dashboard()
	{
		return view('pages.dashboard');
	}
	public function composer()
	{
		return view('pages.composer');
	}
	public function contacts()
	{
		return view('pages.contacts');
	}


}

















