<head>
  <title>Laravel Sample</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
@extends('user/layout')
@section('content')
<div class="container ops-main">
<div class="row">
  <div class="col-md-12">
    <h3 class="ops-title">users</h3>
  </div>
</div>
<div class="row">
  <div class="col-md-11 col-md-offset-1">
    <table class="table text-center">
      <tr>
        <th class="text-center">PS_ID</th>
        <th class="text-center">PS</th>
        <th class="text-center">name</th>
      </tr>
      @foreach($users as $user)
      <tr>
        <td>
          <a href="/user/{{ $user->id }}/edit">{{ $user->id }}</a>
        </td>
        <td>{{ $user->PS_ID }}</td>
        <td>{{ $user->PS }}</td>
        <td>{{ $user->name }}</td>
        <td>
          <form action="/user/{{ $user->id }}" method="post">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-xs btn-danger" aria-label="Left Align"><span class="glyphicon glyphicon-trash"></span></button>
          </form>
        </td>
      </tr>
      @endforeach
    </table>
    <div><a href="/user/create" class="btn btn-default">新規作成</a></div>
  </div>
</div>
@endsection