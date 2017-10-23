@extends('layouts.docs')
@section('content')
  <form class="user-form" action="/users/{{$user->id}}" method="post">
    {{ csrf_field() }}
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
          <tr>
              <td>{{$user->id}}</td>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>
                <select name="editor">
                  <option value="{{$user->is_editor}}">{{$user->is_editor}}</option>
                  <option value="{{abs($user->is_editor-1)}}">{{abs($user->is_editor-1)}}</option>
                </select>
              </td>
              <td>
                <select name="admin">
                  <option value="{{$user->is_admin}}">{{$user->is_admin}}</option>
                  <option value="{{abs($user->is_admin-1)}}">{{abs($user->is_admin-1)}}</option>
                </select>
              </td>
              <td>
                <button type="submit" class="btn btn-default">Güncelle</a>
              </td>
          </tr>
        </tbody>
    </table>
  </form>
@endsection
