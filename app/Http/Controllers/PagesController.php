<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contact;
use App\User;
use App\Conversation;


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

	public function storeconversation()
	{
		$Conversation = Conversation :: Create($request->all());
		return redirect('composer');
	}


	public function composer($id,$number)
	{


		$Conversation = User::find($id)->conversations()->where('phone_number', $number)->get();

	//	$cc = $Conversation[0]->message ;
		//	dd($cc  );
	//	return $Conversation;
	//	$Contacts=Contact::findOrFail($id);
		return view('pages.composer',compact('Conversation'));
	}







	public function composers(Requests\ContactRequest $request)
	{
$Conversation=Conversation::Create($request->all());
$Contacts =Contact::Create($request->all());
		return view('pages.composer',compact('Contacts','Conversation'));
	}
	public function form()
	{
		return view('pages.form');
	}
	public function storecontacts(Requests\ContactRequest $request)
	{
$Contacts = Contact :: Create($request->all());
      
        $Contacts->save();
		return redirect('contacts');
	}
	public function contacts($id)
	{
		
     // $contacts = Contacts::find;
      $Contacts = User::find($id)->contacts;
     // dd($contacts);

	//	$Contacts=User::findOrFail($id)->user_contacts;
		return view('pages.contacts',compact('Contacts'));
	}


}

















