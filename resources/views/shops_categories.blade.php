
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
    <h1>Search Categories</h1>
    <form method="get" action="{{action('ViewController@shops_categories')}}">
      {{ csrf_field() }}
      <select name="category">
        <option value="Delicacy">Delicacy</option>
        <option value="Fashion">Fashion</option>
        <option value="Beauty & Wellness">Beauty & Wellness</option>
        <option value="Sundry & Services">Sundry & Services</option>
        <option value="IT & Photography gadget">IT & Photography gadget</option>
        <option value="Homes">Homes</option>
        <option value="Leisure & Entertainment">Leisure & Entertainment</option>
        <option value="Department Store & Supermarket">Department Store & Supermarket</option>
      </select>
      <input type="submit" name="search_category" value="Search">
    </form>

    <?php
    if(isset($_GET["id"]) && trim($_GET["id"]) != null)
    {
      $id = $_GET['id'];
      $link = mysqli_connect("localhost","root","","tenant");
      $result = mysqli_query($link, "SELECT * FROM shops WHERE id='$id'");
      while($get = mysqli_fetch_array($result))
      {
        $category = $get['category'];
      }
      echo "<h2>Category: ".$category."</h2>";
      echo "<br>";
      $query = mysqli_query($link, "SELECT * FROM shops WHERE category='$category'");
      while($data = mysqli_fetch_array($query))
      {
        echo "<a href='shops_categories?id=$data[id]'>" .$data['name'];
        echo "</a>" . "<br>";
      }
          echo "<br>"."<br>"."<br>"."<br>"."<br>"."<br>";
    }

      if(isset($_GET['search_category']))
      {
        $category = $_GET['category'];
        echo "<h2>Category: ".$category."</h2>";
        echo "<br>";
        $link = mysqli_connect("localhost","root","","tenant");
        if($link == false)
        {
          echo "Error: Connection Error." . mysqli_connect_error();
        }
        $query = "SELECT * FROM shops WHERE category='$category'";
        $result = mysqli_query($link, $query);
        while($data = mysqli_fetch_array($result))
        {
          echo "<a href='shops_categories?id=$data[id]'>" .$data['name'];
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
