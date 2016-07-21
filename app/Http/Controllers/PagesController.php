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
	public function composer($id)
	{
$Contacts=Contact::findOrFail($id);

		return view('pages.composer',compact('Contacts'));
	}
	public function composers(Requests\ContactRequest $request)
	{

$Contacts = contact :: Create($request->all());
		return view('pages.composer',compact('Contacts'));
	}
	public function form()
	{
		return view('pages.form');
	}


	public function storecontacts(Requests\ContactRequest $request)
	{
			  $input = $request->input();
          
                 $number        = $input['number'];
                   $name          = $input['name'];
                $contacts = [];
                   for ($i = 0; $i <  count( $input['name']); $i++) {
						$contacts[] =   new Contact
                                       ( [
                                           'number'  => $number[$i],
                                           'name'    => $name[$i],
                                        ] );
                   }

                $user = User::find(1);   	

					$user->contacts()->saveMany($contacts);
                    //  return "200";
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

















