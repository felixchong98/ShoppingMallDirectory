<!DOCTYPE html>
<html>
<head>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #e65c00;
  color: white;
}
</style>
</head>
<body>
<table width="100%"  class="topnav">
  <tr>
    <td><img src="{{URL::asset('/image/umall.png')}}" alt="UMall-logo", height="90" width="90"></td>
    <td>
      <div>
      <a class="nav" onclick="openPage(event, 'Home')" href="home">Home</a>
      <a class="nav" onclick="openPage(event, 'Shop')" href="#Shop">Shops</a>
      <a class="nav" onclick="openPage(event, 'Contact')" href="contact">Contact Us</a>
      <a class="nav" onclick="openPage(event, 'About')" href="about">About</a>
      </div>
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
