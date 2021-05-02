<html>
<head>
  <title>@yield('title')</title>
  <style>
    body {font-size: 16pt; color: #999; margin: 5px;}
  </style>
</head>
<body>
<h1>@yield('title')</h1>
@section('menubar')
<h2 class="menutitle">menu</h2>
<ul>
  <li>@show</li>
</ul>
<hr size="1">
<div class="content">
@yield('content')
</div>
<div class="footer">
@yield('footer')
</div>
</body>
</html>