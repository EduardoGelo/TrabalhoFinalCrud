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
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>
<div class="min-h-screen items-center pt-6 sm:pt-0 bg-pink-300">
     <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Cadastro de produtos") }}
                    <br>
                    <br><p><a href="products" class="bg-pink-500 text-white font-bold py-2 px-4 rounded hover:bg-pink-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Produtos</a></p>
                    <br>
                    <p><a href="dashboard" class="bg-pink-500 text-white font-bold py-2 px-4 rounded hover:bg-pink-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Dashboard admin</a></p>
                    <br><div class="flex items-center justify-between">
                        <h1 class="mb-0 text-3xl">Lista de produtos</h1>
                        <a href="{{ route('admin/products/create') }}" class="bg-pink-500 text-white font-bold py-2 px-4 rounded hover:bg-pink-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Adicionar produto</a>
                        <!-- se der erro confere a rota -->
                    </div>
                    <br>
                    <hr />
                    @if(Session::has('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    <div class="overflow-x-auto">
                        <table class="table-auto w-full">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 w-1/3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nome</th>
                                <th class="px-6 py-3 w-1/6 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Preço</th>
                                <th class="px-6 py-3 w-1/6 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Quantidade</th>
                                <th class="px-6 py-3 w-1/3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Ações</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($products as $product)
                            <tr class="bg-gray-100">
                                
                                <td class="px-6 py-4 whitespace-nowrap">{{ $product->nome }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-center">{{ $product->preco }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-center">{{ $product->quantidade }}</td>
                                <td class="px-6 py-4 whitespace-nowrap flex justify-center space-x-2">
                                    <div class="flex space-x-2" role="group" aria-label="Produtos">
                                        <!-- se der erro troca id pra id_produto -->
                                        <a href="{{ route('admin/products/edit', ['id_produto' => $product->id_produto]) }}"type="button" class="px-4 py-2 text-white bg-gray-500 hover:bg-gray-600 rounded">Editar</a>
                                        <form action="{{ route('admin/products/destroy', $product->id_produto) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="px-4 py-2 text-white bg-red-500 hover:bg-red-600 rounded">Deletar</button>
                                        </form> 
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td class="" colspan="5">Sem produtos cadastrados</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
   
</x-app-layout>
</body>
</html>
