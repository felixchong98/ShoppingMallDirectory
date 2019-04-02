<!DOCTYPE html>
<html>
<head>
<link rel = "stylesheet" href = "{{URL::asset('css/style.css')}}" />
</head>
<body id="navBody">
<table class="topnav">
  <tr>
    <td><img src="{{URL::asset('/image/umall.png')}}" alt="UMall-logo", height="90" width="90"></td>
    <td>
      <div>
      <a class="nav" onclick="openPage(event, 'Home')" href="welcome">Home</a>
      <div class="dropdown">
          <a>Shops</a>
        <div class="dropdown-content">
          <a class="nav" onclick="openPage(event, 'Categories')" href="shops_categories">Search by Categories</a>
          <a class="nav" onclick="openPage(event, 'floor')" href="shops_floor">Search by Floor/Zone</a>
          <a class="nav" onclick="openPage(event, 'name')" href="shops_name">Search by Name</a>
        </div>
      </div>
      <a class="nav" onclick="openPage(event, 'Contact')" href="contact_us">Contact Us</a>
      <a class="nav" onclick="openPage(event, 'About')" href="about">About</a>
      </div>
    </td>
    <td>
      <a href="{{ route('login') }}">Login</a>
    </td>
  <tr>
</table>

<!-- change class name to active so that the background color will change-->
<script>
function openPage(evt, pageName) {
  var i, nav;
  nav = document.getElementsByClassName("nav");
  for (i = 0; i < nav.length; i++) {
    nav[i].className = nav[i].className.replace(" active", "");
  }
  evt.currentTarget.className += " active";
}
</script>

</body>
</html>
