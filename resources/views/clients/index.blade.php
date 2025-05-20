@extends('layouts.app')

@section('content')
    <div class="flex flex-col gap-5">
        <h1 class="text-4xl font-bold">Listado de clientes</h1>

        <div class="">
            <a class="btn btn-blue" href="{{ route('clients.create') }}">Nuevo</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                {{-- Cuando se trabaja con una API Rest la data recuperada son arrays no objetos --}}
                @foreach ($clients as $client)
                    <tr>
                        <td>{{ $client['name'] }}</td>
                        <td>{{ $client['email'] }}</td>
                        <td>{{ $client['phone'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection