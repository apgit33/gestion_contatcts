@extends('layout')

@section('content') 

<div class="container">
    <div class="card" style="width: 18rem;">
        <div class="card-header">
            Name : {{ $user->name }}
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Email : {{ $user->email }}</li>
            <li class="list-group-item">Admin : @php echo ($user->is_admin) ? 'Yes':'No'@endphp</li>
        </ul>
    </div>
</div>

@endsection