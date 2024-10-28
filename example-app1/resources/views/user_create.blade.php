@extends ('master')

@section('content')


<h2>Adicionar</h2>

@if (session()->has('message'))
    {{ session()->get('message') }}
@endif

<form action="{{ route('users.store') }}" method="post">
    @csrf
    <input type="text" name="first_name" placeholder="Primeiro nome">
    <input type="text" name="last_name" placeholder="Segundo nome">
    <input type="text" name="email" placeholder="Email">
    <input type="text" name="password" placeholder="Senha">
    <button type="submit">Enviar</button>
</form>


@endsection