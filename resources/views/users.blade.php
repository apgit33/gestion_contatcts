@extends('layout')

@section('content') 

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        @php
            $i = 1;
        @endphp
        
        <tbody>
            @forelse ($users as $user)
            <tr>
                <th scope="row"><?=$i++?></th>
                <td>
                    <a href="users/{{ $user->id }}/show">
                        {{ $user->name }}
                    </a>
                </td>
                <td>{{ $user->email }}</td>
            </tr>
            @empty
               <p>no data</p> 
            @endforelse
        </tbody>
    </table>
</div>

@endsection