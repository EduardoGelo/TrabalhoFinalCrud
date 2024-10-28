@extends ('master')

@section('content')


<h2>Edit</h2>

@if (session()->has('message'))
    {{ session()->get('message') }}
@endif

<form action="{{ route('users.update',['user' => $user->id]) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="first_name" placeholder="Primeiro nome" value="{{ $user->first_name }}">
    <input type="text" name="last_name" placeholder="Segundo nome" value="{{ $user->last_name }}">
    <input type="text" name="email" placeholder="Email" value="{{ $user->email }}">
    <button type="submit">Enviar</button>
</form>


@endsection