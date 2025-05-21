@extends('layouts.app')

@section('content')
    <div class="flex flex-col gap-5">
        <h1 class="text-4xl font-bold">Dar de alta un nuevo cliente</h1>

        <div class="">
            <a class="btn btn-gray" href="{{ route('clients.index') }}">Regresar</a>
        </div>

        <form action="{{ route('clients.store') }}" method="post">
            @csrf
            <div class="flex flex-col gap-4 my-4">
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nombre del cliente</label>
                    <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Ingrese el nombre del cliente" required />
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Correo del cliente</label>
                    <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Ingrese el correo del cliente" required />
                </div>
                <div>
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Teléfono del cliente</label>
                    <input type="text" id="phone" name="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Ingrese el teléfono del cliente" required />
                </div>
                <div>
                    <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Dirección del cliente</label>
                    <input type="text" id="address" name="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Ingrese la dirección del cliente" required />
                </div>

                <button type="submit" class="btn btn-blue">Agregar</button>
            </div>
        </form>
    </div>
@endsection