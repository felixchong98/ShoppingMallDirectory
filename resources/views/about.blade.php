<html>
<head>

<title>About Page</title>
@include('navigation')
<link rel = "stylesheet" href = "{{URL::asset('css/style.css')}}" />
</head>

<body>

  <img src="{{URL::asset('/image/bannercampus.jpg')}}" alt="UMall-logo", id="banner">
  <br></br>
  <p><table id="aboutTable" align="center">
    <tr>
      <td><h3>Overview</h3></td>
      <td rowspan=2><img src="{{URL::asset('/image/UTAR.jpg')}}" alt="UTAR", height="400" width="400"></td>
    </tr>
    <tr>
      <td>Enter its grand gateway into a maze of experiences. This is a shopper抯 paradise,
        <br>fashionista抯 heaven, kid抯 wonderland, gourmet hunter抯 sanctuary and a firm family
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

  <table id = "aboutTable" align="center">
    <tr>
      <td>
        <img src="{{URL::asset('/image/mainentrance.jpg')}}" alt="main entrance", width="400" height="500">
      </td>
      <td>
        <img src="{{URL::asset('/image/waterfountain.jpg')}}" alt="water fountain", width="400" height="500">
      </td>
      <td>
        <img src="{{URL::asset('/image/mall.jpg')}}" alt="mall", width="400" height="500">
      </td>
    </tr>

    <tr>
    </tr>

    <tr>
      <td colspan=3 style="text-align:center">
        <br>
        <h4>View our location: </h4>
        <a href="https://www.google.com/maps/place/UTAR+Sungai+Long+Campus/@3.0401922,101.7944586,15z/data=!4m5!3m4!1s0x0:0x78796ffc32ce3fcd!8m2!3d3.0401922!4d101.7944586">
          <img src="{{URL::asset('/image/location.png')}}" alt="location" width="50%" height="90%" id="aboutLocation">
        </a>
      </td>
    </tr>
  </table>
  <br>
  @include('footer')
</body>

</html>
