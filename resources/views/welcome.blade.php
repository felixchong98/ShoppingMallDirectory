<html>
<head>
  <title>Home Page</title>
  @include('navigation')
</head>
<body>
  <h1 style="text-align: center"><b>Welcome to UMall</b></h1>
  <br><br>
  <p style="text-align: center"><img src="{{URL::asset('/image/umall.png')}}" alt="UMall-logo", height="500" width="500"></p>
  <br><br>
  @include('footer')
</body>
</html>
