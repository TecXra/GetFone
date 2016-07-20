<?php

use Illuminate\Database\Seeder;

class GetFoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

/*
        	\App\User::create([
			'username' => 'Saad',
			'number'=>'03006723222',
			'email' => 'saad@saad.com',
			'password' => bcrypt('saad'),
			'confirmed' => 1,
			'confirmation_code' => md5(microtime() . env('APP_KEY')),
		]);


        	\App\User::create([
			'username' => 'Asif',
			'number'=>'03014430979',
			'email' => 'asif@asif.com',
			'password' => bcrypt('asif'),
			'confirmed' => 1,
			'confirmation_code' => md5(microtime() . env('APP_KEY')),
		]);



*/
        	\App\Contact::create([
			'user_id' => '1',
			'number' => '03154342359',
			'name' => 'Ali Haider',
			
		]);





        	\App\Contact::create([
			'user_id' => '1',
			'number' => '03014430979',
			'name' => 'Asif',
			
		]);


        	\App\Contact::create([
			'user_id' => '1',
			'number' => '0900786012',
			'name' => 'Raza',
			
		]);





        	\App\Contact::create([
			'user_id' => '2',
			'number' => '03154342359',
			'name' => 'Ali Haider',
			
		]);





        	\App\Conversation::create([
			'user_id' => '1',
			'phone_number' => '03154342359',
			'message' => 'Hello !',
			'check'=>'s',
		]);




        	\App\Conversation::create([
			'user_id' => '1',
			'phone_number' => '03154342359',
			'message' => 'Hy !',
			'check'=>'r',
		]);



        	\App\Conversation::create([
			'user_id' => '1',
			'phone_number' => '03154342359',
			'message' => 'How are you ?',
			'check'=>'s',
		]);







    }
}













            