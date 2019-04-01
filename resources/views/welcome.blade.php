<html>
<head>
  <title>Home Page</title>
  @include('navigation')
  <link rel = "stylesheet" href = "{{URL::asset('css/style.css')}}" />
</head>
<body>
  <br><br>
  <h1 class="homeHeader"><b>Welcome to UMall</b></h1>
  <p style="text-align: center"><img src="{{URL::asset('/image/umall.png')}}" alt="UMall-logo", height="500" width="500"></p>
  <br><br>
  @include('footer')
</body>
</html>
