@extends ('master')

@section('content')

<h2>Users</h2>

<ul>
    @foreach ($users as $user)
        <li>{{ $user->first_name }} {{ $user->last_name }} | <a href="{{ route('users.edit', ['user'=>$user->id]) }}">Editar</a> | <a href="">Deletar</a></li>
        <br>
    @endforeach
</ul>

@endsection