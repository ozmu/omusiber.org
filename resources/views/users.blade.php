@extends('layouts.docs')
@section('content')
    <table class="table">
        <thead>
        <th>ID</th>
        <th>İsim</th>
        <th>Email</th>
        <th>Editör</th>
        <th>Admin</th>
        <th></th>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->is_editor}}</td>
                <td>{{$user->is_admin}}</td>
                <td>
                  <a href="/users/{{$user->id}}" class="btn btn-default">Düzenle</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
