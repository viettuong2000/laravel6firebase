<?php

namespace App\Http\Controllers\Firebase;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Laravel\Firebase\Facades\Firebase;
use Kreait\Firebase\Contract\Auth;
use Kreait\Firebase\Auth\UserQuery;

class ContactController extends Controller
{
    public function __construct(Auth $auth)
    {       
        // $this->database = $database;
        // $this->tablename = 'contacts';
        $this->auth = $auth;
    }

    public function index()
    {
        $userQuery = [
            'sortBy' => UserQuery::FIELD_USER_EMAIL,
            'order' => UserQuery::ORDER_DESC,
            // 'order' => UserQuery::ORDER_DESC # this is the default
            'offset' => 1,
            'limit' => 499, # The maximum supported limit is 500
        ];
        dd($userQuery);
        return view('firebase.contact.index', compact('users'));
    }
    
    public function create()
    {
        return view('firebase.contact.create');
    }

    public function store(Request $request)
    {
        
        $postData = [
            'fname' => $request->first_name,
            'lname' => $request->last_name,
            'phone' => $request->phone,
            'email' => $request->email,
        ];
        $factory = (new Factory)->withServiceAccount(__DIR__.'/fir-laravel-8412f-firebase-adminsdk-q5qjn-9cef0ee85c.json')->withDatabaseUri('https://fir-laravel-8412f-default-rtdb.firebaseio.com/');

        $database = $factory->createDatabase();
        // $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'');
        // $firebase = (new Factory)
        // ->withServiceAccount($serviceAccount)
        // ->withDatabaseUri('https://fir-laravel-8412f-default-rtdb.firebaseio.com/')
        // ->create();

        // $database = $factory->getDatabase();
        $postRef = $database->getReference('contacts')->push($postData);
        if($postRef)
        {
            return redirect('contacts')->with('status','Contact Added Successfully');
        }
        else 
        {
            return redirect('contacts')->with('status','Contact Not Added');
        }
    }
}
