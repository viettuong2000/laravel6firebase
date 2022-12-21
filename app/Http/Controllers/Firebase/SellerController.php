<?php

namespace App\Http\Controllers\Firebase;

use App\Http\Controllers\Controller;
use App\Providers\FirebaseService;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class SellerController extends Controller
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
        $sellers = $this->database->getReference('sellers')->getValue();
        if ($sellers == "") $sellers = [];
        return view('firebase.seller.index', compact('sellers'));
    }

    public function create()
    {
        return view('firebase.seller.create');
    }

    public function store(Request $request)
    {
        $postData = [
            'fname' => $request->first_name,
            'lname' => $request->last_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
        ];
        $postRef = $this->database->getReference('sellers')->push($postData);
        if ($postRef) {
            return redirect('sellers')->with('status', 'Seller Added Successfully');
        } else {
            return redirect('sellers')->with('status', 'Contact Not Added');
        }
    }

    public function edit($id)
    {
        $seller = $this->database->getReference('sellers/' . $id)->getValue();
        return view('firebase.seller.edit', compact('seller', 'id'));
    }

    public function update(Request $request, $id)
    {
        $postData = [
            'fname' => $request->fname,
            'lname' => $request->lname,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
        ];
        $postRef = $this->database->getReference('sellers/' . $id)->update($postData);
        if ($postRef) {
            return redirect('sellers')->with('status', 'Seller Updated Successfully');
        } else {
            return redirect('sellers')->with('status', 'Seller Not Updated');
        }
    }

    public function destroy($id)
    {
        $postRef = $this->database->getReference('sellers/' . $id)->remove();
        if ($postRef) {
            return redirect('sellers')->with('status', 'Seller Deleted Successfully');
        } else {
            return redirect('sellers')->with('status', 'Seller Not Deleted');
        }
    }
}
