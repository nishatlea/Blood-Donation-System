<html>
<html lang="en">
<head>
<title>Blood Management</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the content */
.content {
  background-color: #ddd;
  padding: 10px;
  height: 1000px; /* Should be removed. Only for demonstration */
}
.x
{text-align: center;
  color: #ff0000}

/* Style the footer */
.footer {
  background-color: #f1f1f1;
  padding: 10px;
}
.log
{
   margin: 10px 30px;
  padding: 20px 40px;
}
</style>
</head>
<body>

<div class="topnav">
  <a href="#"> </a>
  
</div>

<div class="content">

  <h1 class="x">Blood Management System</h1><br>
  
  <img height="300" width="500" align="left" src="{{ asset('images/bd.jpg') }}"  >
  <?php 
 session_start();
 ?>
  
    <div class="log">
      <h3> Log In </h3>
       
        <form action="{{action('PageController@show')}}" method="get">
          
          <label for="aname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="aname"   class="input-field" required>
    <br><br><br>
    <label for="apsw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="apsw"  class="input-field" required>
    <br><br><br>
        
    <h3><button class="button" type="submit" name="login">Login</button></h3>
    <label>
      <br>
      
        </form>

        <a href="{{action('PageController@show2')}}" class="button">Register</a>

      </div>

    
  
</div>

<div class="footer">
  <p>Footer</p>
</div>

</body>
</html>
