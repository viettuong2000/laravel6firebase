<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Database;

class FirebaseService extends ServiceProvider
{
    /**
     * @var Firebase
     */
    public $firebase;

    public function __construct()
    {
        // get file from project root directory
        $this->firebase = (new Factory)->withServiceAccount(__DIR__ . '/../../fir-laravel-8412f-firebase-adminsdk-q5qjn-9cef0ee85c.json')->withDatabaseUri('https://fir-laravel-8412f-default-rtdb.firebaseio.com/');
    }
}
