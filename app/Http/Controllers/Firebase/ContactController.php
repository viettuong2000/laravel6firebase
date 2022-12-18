<?php

namespace App\Http\Controllers\Firebase;

use App\Http\Controllers\Controller;
use App\Providers\FirebaseService;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Kreait\Firebase\Factory;

class ContactController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    protected $firebase;
    protected $database;
    public function __construct(FirebaseService $firebaseService)
    {
        $this->firebase = $firebaseService->firebase;
        $this->database = $firebaseService->firebase->createDatabase();
    }

    public function index()
    {
        $users = $this->database->getReference('contacts')->getValue();
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
        $factory = (new Factory)->withServiceAccount(__DIR__ . '/fir-laravel-8412f-firebase-adminsdk-q5qjn-9cef0ee85c.json')->withDatabaseUri('https://fir-laravel-8412f-default-rtdb.firebaseio.com/');

        $database = $factory->createDatabase();
        // $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'');
        // $firebase = (new Factory)
        // ->withServiceAccount($serviceAccount)
        // ->withDatabaseUri('https://fir-laravel-8412f-default-rtdb.firebaseio.com/')
        // ->create();

        // $database = $factory->getDatabase();
        $postRef = $database->getReference('contacts')->push($postData);
        if ($postRef) {
            return redirect('contacts')->with('status', 'Contact Added Successfully');
        } else {
            return redirect('contacts')->with('status', 'Contact Not Added');
        }
    }

    public function edit($id)
    {
        $user = $this->database->getReference('contacts/' . $id)->getValue();
        return view('firebase.contact.edit', compact('user', 'id'));
    }

    public function update(Request $request, $id)
    {
        $postData = [
            'fname' => $request->fname,
            'lname' => $request->lname,
            'phone' => $request->phone,
            'email' => $request->email,
        ];
        $postRef = $this->database->getReference('contacts/' . $id)->set($postData);
        if ($postRef) {
            return redirect('contacts')->with('status', 'Contact Updated Successfully');
        } else {
            return redirect('contacts')->with('status', 'Contact Not Updated');
        }
    }

    public function destroy($id)
    {
        $postRef = $this->database->getReference('contacts/' . $id)->remove();
        if ($postRef) {
            return redirect('contacts')->with('status', 'Contact Deleted Successfully');
        } else {
            return redirect('contacts')->with('status', 'Contact Not Deleted');
        }
    }
}
