<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Product') }}
        </h2>
    </x-slot>

<div class="min-h-screen items-center pt-6 sm:pt-0 bg-pink-300">
     <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-0 text-3xl">Editar produto</h1>
                    <hr />
                    <br>

                    @if (session()->has('error'))
                    <div>
                        {{session('error')}}
                    </div>
                    @endif

                    <p><a href="{{ route('admin/products') }}" class="bg-pink-500 text-white font-bold py-2 px-4 rounded hover:bg-pink-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Voltar</a></p>
                    <br>

                    <form action="{{ route('admin/products/store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="flex mb-3">
                            <div class="w-full md:w-1/2 lg:w-1/3">
                                <input type="text" name="nome" value="{{ $products->id_produto }}" class="border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-500 focus:border-blue-500" placeholder="Nome do produto">
                                @error('nome')
                                <span class="text-red-500">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex mb-3">
                            <div class="w-full md:w-1/2 lg:w-1/3">
                                <input type="number" name="preco" value="{{ $products->preco }}" step="0.01" class="border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-500 focus:border-blue-500" placeholder="Preço do produto">
                                @error('preco')
                                <span class="text-red-500">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex mb-3">
                            <div class="w-full md:w-1/2 lg:w-1/3">
                                <input type="number" name="quantidade" value="{{ $products->quantidade }}" class="border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-500 focus:border-blue-500" placeholder="Quantidade">
                                @error('quantidade')
                                <span class="text-red-500">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="flex">
                            <div class="grid">
                            <!-- class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3" -->
                                <button class="bg-pink-500 text-white font-bold py-2 px-4 rounded hover:bg-pink-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
   
</x-app-layout>
</body>
</html>
