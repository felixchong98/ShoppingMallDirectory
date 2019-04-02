<html>
<head>
  <title>Shops Directories</title>
      @include('navigation')
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style>
  .split {
 height: 100%;
 width: 30%;
 position: fixed;
 z-index: 1;
 top: 98;
}

.left {
  padding-left: 10;
  left: 0;
  background-color: grey;
  overflow: scroll;
}

.right {
  right:0;
  height:100%;
  width:68%;
  overflow: scroll;
}

.leftPart {
  color: white;
  position: absolute;
  left: 3%;
}

.rightPart{
  position: right;
}
  </style>

</head>
<body>
  <div class="split left">
  <div class="centered">
    <h1>Search by Name:</h1>
    <form method:"post" action:"{{action('ViewController@shops_name')}}">
      {{ csrf_field() }}
      <input type="text" name="name" value:"">
      <br>
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
        $name = $get['name'];
      }
      echo "<h2>Search Result:</h2>";
      echo "<br>";
      $query = mysqli_query($link, "SELECT * FROM shops WHERE name='$name'");
      while($data = mysqli_fetch_array($query))
      {
        echo "<a href='shops_name?id=$data[id]'>" .$data['name'];
        echo "</a>" . "<br>";
      }
          echo "<br>"."<br>"."<br>"."<br>"."<br>"."<br>";
    }
      if(isset($_GET['search']))
      {
        $name = $_GET['name'];
        echo "<h2>Search Result:</h2>";
        echo "<br>";
        $link = mysqli_connect("localhost","root","","tenant");
        if($link == false)
        {
          echo "Error: Connection Error." . mysqli_connect_error();
        }
        $query = "SELECT * FROM shops WHERE name like '$name'";
        $result = mysqli_query($link, $query);
        while($data = mysqli_fetch_array($result))
        {
          echo "<a href='shops_name?id=$data[id]'>" .$data['name'];
          echo "</a>" . "<br>";
        }
        echo "<br>"."<br>"."<br>"."<br>"."<br>"."<br>";
      }
    ?>
  </div>
</div>

<div class="split right">
  <div class="centered">
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
