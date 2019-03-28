<html>
<head>
  <title>Contact Us</title>
    <?php include('navigation.blade.php'); ?>

    <style>
      body{
        font-family: Bahnschrift;
      }

    </style>
</head>
<body>

  <p><h2>CUSTOMER CARE / FEEDBACK</h2></p>

  <br>

  <p><h3>GET IN TOUCH WITH US</h3></p>
  <p>Every suggestion & feedback matters to us. Share your experience
  <br>and help us to improve so we can serve you better.</p>

  <br>
  <form method="post" action="contact.blade.php">
  <table width=25% border="0" >
    <tr>
      <td><input style="font-family: Bahnschrift; font-size:12pt; width:350px; height:35px;"
        type="text" name="subject" placeholder="Subject"></td>
    </tr>
    <tr>
      <td>
        <select  style="font-family: Bahnschrift; font-size:12pt; width:80px; height:25px;" name="Salutation">
          <option value="Mr.">Mr.</option>
          <option value="Mrs.">Mrs.</option>
          <option value="Ms.">Ms.</option>
        </select>
        </td>
    </tr>
    <tr>
      <td><input style="font-family: Bahnschrift; font-size:12pt; width:350px; height:35px;"
        type="text" type="fullname" placeholder="Full Name*"></td>
    </tr>
    <tr>
      <td><input style="font-family: Bahnschrift; font-size:12pt; width:350px; height:35px;" size="40"
        type="text" name="email" placeholder="Email*"></td>
    </tr>
    <tr>
      <td><input style="font-family: Bahnschrift; font-size:12pt; width:350px; height:35px;" size="40" 
        type="text" name="contactNo" placeholder="Contact Number"></td>
    </tr>
    <tr>
      <td><br><textarea style="font-family: Bahnschrift; font-size:12pt;" rows="12" cols="40"
        type="textarea" name="contactNo" placeholder="Feedback"></textarea></td>
    </tr>
    <tr>
      <td><br><input style="font-family: Bahnschrift; font-size:12pt; width:80px; height:25px;"
        type="submit" name="submit" value="Send"></td>
    </tr>
  </table>

  </form>
</body>
</html>
