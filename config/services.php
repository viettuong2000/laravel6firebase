<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'firebase' => [
        'database_url' => env('FIREBASE_DATABASE_URL', ''),
        'project_id' => env('FIREBASE_PROJECT_ID', 'fir-laravel-8412f'),
        'private_key_id' => env('FIREBASE_PRIVATE_KEY_ID', '9cef0ee85c730177a0aaae1b8aeced01dc4cabd5'),
        'private_key' => str_replace("\\n", "\n", env('FIREBASE_PRIVATE_KEY', '-----BEGIN PRIVATE KEY-----\nMIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCqgd3Sby14rSZY\nPmd4wJXdRoL0LrMtNFQYyZsKpKR7KsNjKbqnHkg50+VvMMlFaTyLd52TfWLxNiVH\nQQOYWAQgwHrLRg8d8xNvO4j+U+nrEz+BiNgn+VIOuz25jPjlxuVqCGOswwPOGBgI\n9J4/Hip1ZXFPn8BpwtSjICxNTGPJM3Hpf4h0TnxWmxYT19P5OIeE/vcNIwkQe7RU\n4TtQwgDR3KpL1ZZEpIXPG7S7iCZSfFTCoCsuH/GV2gaU2vPlpp3EyS9ZqzmNXfxr\ncK6z4xdkxtjgeukHG8Yw6pTc/7wKhZ/B5Npe9AawJ+Nf54tMDvC0QOQ0wd3qASoH\nj2mT+lcjAgMBAAECggEAPsllqqjgALEaDqKkLZYVWY8uh8ZumnXLhfkvS4MHQoej\nvW9PWVzQUeMSeJhpdVLkRaM9dmNUvOgoYA2zyjSXCIx4a0QYKvoorOwqbSTvXW4Q\nE54Votqvedc/SoV73fkY36vJMIP7cbfzmdCiOTHdhq9dQ2nbS9a/wHYHektn712V\nZ6+ZE8gUgEsKMkBx3qgTM4z1q6ERxon/tW1x/UsuNmmS6/VYHDCOT9RoP9yEiQrC\nPiSziSz5RYoDQ3pSUt9qZRIKpscdb/w6Aiqs353Uv9kKSN3ks7HmJizgeYZgMl/Z\nAwoROImI5OysYMiG8o1dHju0GPGniV3czqKgQccc8QKBgQDWenCyK1V1Kd8bvejY\ng2Q6yS9UxCkcka078DrIi/TlthmqbiiXCAAOECmT0JE3pSay5kz/8q5hxwV4BAVg\n3uBUB2t5oziQXZFrgN4m9tzRfMdAYg4POyjfbIgy76PXr+XGFB+llfvNkvVzOsQG\n0ypFq7cAPHbIRJplZ7mBwWJz+QKBgQDLhDh8cWBjYpWzDugua2GQ/9O8oPitq0Q8\ngdSxurNgXGtEzQd4jbYf4ydLYNo5I3M8YEbjawversUwK+++/ntiCYaowHQfW4HS\nsQyYPbup+UqfspUPKJ+e4HEe3tlVScSc9eHChWkeQrjAeUVWl6Guza1prOUl+K3/\nhk70Bywy+wKBgFrls2NfSC2KnFrGhqtULCNZ5mxXYlEQUEnpyw/5eMXuAjyfySYR\nJuzO3sAdkZ3yqU8CmbmToWIhFelCUwE2E/6o0lzP1wYgEaRtDjmXQAisiEl6BRlh\najYeai6kL10W2Bu1pZ/oy7nZQZsfWbrGvdCfMMSx22mO4Zx+dDlQuygJAoGABkqe\nHGq82hWwHwr07opvR7ZA63HmfifvQheZZa0p4m64+jWEZ5up5650BoaF+II6C8HG\nLz2d7lJk0ippjPP9CHjW6tyYOmfvyX2jsAkohgao4er5ZLCSzqyNkrC880AGjfuj\n8QmCyGazo2+cTyL84pSFKeEobFYVuvKB+lVGboUCgYEAj3Pv0XhRCde0BHKnHd3u\n6CnlNXu4esPC0Rmxui2VJvRCjDYQHNaZQtRPuxqD2GluI200oARSa/QkMM+F/b3T\nAvupo+9fnTuPSjLqmXwjGRrEtCeKyTxHWUy7t1hv6KXLM3c5svJVMjZZpBa9DSqn\n7k8R0pW0uF+0Cf7MN265NoI=\n-----END PRIVATE KEY-----\n')),
        'client_email' => env('FIREBASE_CLIENT_EMAIL', 'firebase-adminsdk-q5qjn@fir-laravel-8412f.iam.gserviceaccount.com'),
        'client_id' => env('FIREBASE_CLIENT_ID', '108669007021410316121'),
        'client_x509_cert_url' => env('FIREBASE_CLIENT_x509_CERT_URL', 'https://www.googleapis.com/robot/v1/metadata/x509/firebase-adminsdk-q5qjn%40fir-laravel-8412f.iam.gserviceaccount.com'),
    ]
];
