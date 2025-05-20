<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class ClientController extends Controller
{
    private string $url;

    public function __construct()
    {
        $this->url = env('URL_LARAVEL_API', 'http://127.0.0.1');
    }

    public function index(): View | array
    {
        $response = Http::get($this->url . '/clients');
        $clients = $response->json();

        return view('clients.index', compact('clients'));
    }
}
