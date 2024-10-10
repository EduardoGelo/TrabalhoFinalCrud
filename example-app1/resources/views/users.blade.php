@section('content')

<h2>Users</h2>

<ul>
    @foreach ($users as $user)
        <li>{{ $user->first_name }}</li>
    @endforeach
</ul>

@endsection