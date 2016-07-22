<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contact;
use App\User;
use App\Conversation;
use GuzzleHttp\Client;

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
		$user = User::find(1);
		return view('pages.dashboard',compact('user'));
	}





public function tokenupdate(Requests\ContactRequest $request)
	{
		$user=User::findOrFail($request->id);
        $user->update($request->all());

        return "200";
	}



public function storerecieveconversation(Requests\ContactRequest $request)
	{

		//dd($request);

		$Conversation=Conversation::Create($request->all());
		$Conversation->user_id='1';
		$Conversation->check='r';
		
		$Conversation->save();
//dd($Conversation);
      $composer = 'composer/' . $Conversation->user_id . '/' . $Conversation->phone_number ;

//return "$emprofile";
return "200";
 
		return redirect($composer);
	}


	public function storesendconversation(Requests\ContactRequest $request)
	{
		$user = User::find(1);	

		$token = $user->token;
   		$headers = ['Content-Type' => 'application/json',
       'Authorization' => 'key=AIzaSyA3LJ5StdqrfmIkJW44cu3v5SAFE8JkJSE'
   ];


       $client = new Client();

   $r = $client->request('POST', 'https://gcm-http.googleapis.com/gcm/send',[
         'headers' => $headers ,
  'json' =>     [    'to'     => $token,

                  'data'     =>     [    'messageBody' => $request->message,
                               'sendTo' => $request->phone_number
                               ]
              ]
]);

	//	dd($request);


//		$Conversation=Conversation::Create($request->all());
	//	$Contacts =Contact::Create($request->all());
	//	return view('pages.composer',compact('Contacts','Conversation'));
	




		$Conversation=Conversation::Create($request->all());
		$Conversation->user_id=$user->id;
		$Conversation->save();
		
		$composer = 'composer/' .$Conversation->user_id . '/' .  $Conversation->phone_number ;



		return redirect($composer);
	}



	public function composer($id,$number)
	{

		$Conversation = User::find($id)->conversations()->where('phone_number', $number)->get();
		$num=$number;

		return view('pages.composer',compact('Conversation','num'));
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
                     return "200";
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

















