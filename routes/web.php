<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http; // Facade para trabajar con requests http

Route::get('/', function () {
    $response = Http::get('http://127.0.0.1:8000/api/clients');
    $clients = $response->json();

    echo "<ul>";
    foreach($clients as $client)
    {
        echo "<li>{$client['name']} - {$client['email']}</li>";
    }
    echo "</ul>";
});
