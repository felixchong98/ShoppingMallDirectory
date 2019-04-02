
<?php
use App\Common;
?>
<html>
<head>
  <title>Shops Directories</title>
      @include('navigation')
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel = "stylesheet" href = "{{URL::asset('css/style.css')}}" />

</head>
<body>
  <div class="split left">
  <div class="leftPart">
    <h1>Search Floor & Zone</h1>
    <form method="get" action="{{action('ViewController@shops_floor')}}">
      {{ csrf_field() }}
      <p>Floor:</p>
      <select name="floor">
        <option value="LG">LG</option>
        <option value="G">G</option>
        <option value="1">1st</option>
        <option value="2">2nd</option>
        <option value="3">3rd</option>
      </select>
      <br>
      <p>Zone:</p>
      <select name="zone">
        <option value="All">All</option>
        <option value="North">North</option>
        <option value="East">East</option>
        <option value="South">South</option>
        <option value="West">West</option>
      </select>
      <input type="submit" name="search" value="Search">
    </form>
    <?php
    if(isset($_GET["id"]) && trim($_GET["id"]) != null)
    {
      $id = $_GET['id'];
      $link = mysqli_connect("localhost","root","","tenant");
      $result = mysqli_query($link, "SELECT * FROM shops WHERE id='$id'");
      while($get = mysqli_fetch_array($result))
      {
        $floor = $get['floor'];
        $zone = $get['zone'];
      }
      echo "<h2>Floor: ".$floor."</h2>";
      echo "<h2>Zone: ".$zone."</h2>";
      echo "<br>";
      $query = mysqli_query($link, "SELECT * FROM shops WHERE floor='$floor' and zone = '$zone'");
      while($data = mysqli_fetch_array($query))
      {
        echo "<a href='shops_floor?id=$data[id]'>" .$data['name'];
        echo "</a>" . "<br>";
      }
      echo "<br>"."<br>"."<br>"."<br>"."<br>"."<br>";
    }
      if(isset($_GET['search']))
      {
        $floor = $_GET['floor'];
        $zone = $_GET['zone'];
        echo "<h2>Floor: ".$floor."</h2>";
        echo "<h2>Zone: ".$zone."</h2>";
        echo "<br>";
        $link = mysqli_connect("localhost","root","","tenant");
        if($link == false)
        {
          echo "Error: Connection Error." . mysqli_connect_error();
        }
        if($zone == "All")
        {
          $query = "SELECT * FROM shops WHERE floor='$floor'";
        }
        else {
          $query = "SELECT * FROM shops WHERE floor='$floor' and zone='$zone'";
        }
        $result = mysqli_query($link, $query);
        while($data = mysqli_fetch_array($result))
        {
          echo "<a href='shops_floor?id=$data[id]'>" .$data['name'];
          echo "</a>" . "<br>";
        }
        echo "<br>"."<br>"."<br>"."<br>"."<br>"."<br>";
      }
    ?>
  </div>
</div>

<div class="split right">
  <div class="rightPart">
    <?php
    if(isset($_GET["id"]) && trim($_GET["id"]) != null)
    {
      $id = $_GET['id'];
      $link = mysqli_connect("localhost","root","","tenant");
      $result = mysqli_query($link, "SELECT * FROM shops WHERE id='$id'");
      while($data = mysqli_fetch_array($result))
      {
        $code = $data['code'];
        $name = $data['name'];
        $category = $data['category'];
        $floor = $data['floor'];
        $zone = $data['zone'];
        $about = $data['about'];
      }
      echo "<h2>".$name."</h2>";
      echo "<h3>".$code."</h3>";
      echo "<h4>Floor: ".$floor."</h4>";
      echo "<h4>Zone: ".$zone."</h4>"."<br>";
      echo "<h4>About:</h4>"."<br><p>".$about."</p>"."<br>"."<br>";
      echo "<img src='/image/".$floor.".jpg' alt='".$floor."', height='500' width='880'>";
      echo "<br><br><br><br><br><br>";
    }

    ?>
  </div>
</div>

</body>
</html>
