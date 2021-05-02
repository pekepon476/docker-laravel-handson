@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>ここが本文のコンテンツです</p>
  <p>必要なだけ記述できます</p>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection

<!-- <html>
<body>
  <h1>blade/Index</h1>
<ol>
@foreach($data as $item)
<li>{{$item}}
@endforeach
</ol>
</body>
</html> -->