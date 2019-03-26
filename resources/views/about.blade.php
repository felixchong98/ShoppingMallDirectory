<html>
<head>
<style>
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
</style>

<title>About Page</title>
@include('navigation')
</head>

<body>
  <p></p>
  <p><img src="public/image/bannercampus.jpg" alt="banner"></p>
  <p></p>
  <p><table width="80%">
    <tr>
      <td><h3>Overview</h3></td>
      <td rowspan=2><img src="public/image/UTAR.jpg" alt="UTAR"></td>
    </tr>
    <tr>
      <td>Enter its grand gateway into a maze of experiences. This is a shopper’s paradise,
        <br>fashionista’s haven, kid’s wonderland, gourmet hunter’s sanctuary and a firm family
        <br>favourite, all under one roof.<br>
        <br>UTAR Megamall is home to a myriad of retail experiences unlike any other, ranging from
        <br>a dazzling array of fashion and lifestyle innovations to home furnishings, cosmetics and
        <br>healthcare essentials to wining, dining and all things entertainment. With 1.7 million square
        <br>feet nett lettable and over four hundreds retailers in twelve categories, there are plenty to
        <br>keep devoted shoppers grinning. It houses signature anchor tenants AEON, AEON BIG,
        <br>Metrojaya, and Golden Screen Cinemas amongst 430 specialty stores including high fashion
        <br>international brands Superdry, Bershka, Kipling, Miss Selfridge, Swarovski, Timberland,
        <br>Topshop / Topman, Uniqlo and Zara and local brands such as Padini Concept Store.
        <br>Wander around the massive complex and you might stumble upon some of the junior anchor
        <br>specialty shops, including Celebrity Fitness, MPH Bookstores and the Mid Valley
        <br>Exhibition Centre (MVEC), complete with an atrium and 3 halls within 67,621 square feet.
      </td>
    </tr>
  </table></p>

  <br><br><br><br>

  <table width="80%">
    <tr>
      <td>
        <div class="gallery">
          <a target="_blank" href="mainentrance.jpg">
            <img src="public/image/mainentrance.jpg" alt="main entrance" width="600" height="400">
          </a>
          <div class="desc">Main Entrance</div>
        </div>
      </td>
      <td>
        <div class="gallery">
          <a target="_blank" href="waterfountain.jpg">
            <img src="public/image/waterfountain.jpg" alt="water fountain" width="600" height="400">
          </a>
          <div class="desc">Water Fountain in front of UMall</div>
        </div>
      </td>
      <td>
        <div class="gallery">
          <a target="_blank" href="mall.jpg">
            <img src="public/image/mall.jpg" alt="mall" width="600" height="400">
          </a>
          <div class="desc">Inside UMall</div>
        </div>
      </td>
    </tr>
    <tr>
    </tr>
    <tr>
      <td colspan=3 style="text-align:center">
        <a href="https://www.google.com/maps/place/UTAR+Sungai+Long+Campus/@3.0401922,101.7944586,15z/data=!4m5!3m4!1s0x0:0x78796ffc32ce3fcd!8m2!3d3.0401922!4d101.7944586">
          <img src="public/image/location.jpg" alt="location" width="600" height="400">
        </a>
      </td>
    </tr>
  </table>
  @include('footer')
</body>

</html>
