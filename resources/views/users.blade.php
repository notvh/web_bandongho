@extends('layouts.main')

@section('top')
<h1>Danh sach users</h1>

<ul>
    
@foreach($users as $user)
@if ($loop->index > 0)
<li>{{ $user->id }}. {{ $user->name }}, </li>
@endif
@endforeach    

</ul>
<a href=" {{ route('users.create') }}" style="a{color:red}">Create User</a>
@endsection

