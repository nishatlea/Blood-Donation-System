
  


</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the side navigation */
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
}


/* Side navigation links */
.sidenav a {
  color: white;
  padding: 16px ;
  margin: 10px;
  text-decoration: none;
  display: block;
}

/* Change color on hover */
.sidenav a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the content */
.content {
  margin-left: 200px;
  padding-left: 20px;
  background-color: #ddd;
  
}
.topnav {
  overflow: hidden;
  background-color: #333;
  color: white;
  text-decoration-style: all;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  height:100px;

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

/* Style the footer */
.footer {
  background-color: #f1f1f1;
  padding: 14px 550px;
  vertical-align: bottom;
  margin: auto;
}
.dropbtn {
  background-color: #C0C0C0;
  color: #000000;
  padding: 20px 20px 20px 20px;
  font-size: 20px;
  border-style: solid;
  border-color: #000000;
  cursor: pointer;
  margin:auto;
  height: 50px 50px;
  width: 50 px 50px;
  display: block;

}

.dropdown {
  position: relative;
  display: block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 10px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 10px 10px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
.inp
{ background-color: #C0C0C0;
  color: #000002;
  margin: 10px 30px;
  padding: 20px 40px;
  font-size: 20px;
  border-style: solid;
  border-color: #000000;
  cursor: pointer;
  height: 50px 50px;
  width: 50 px 50px;
  display: block;
 }
.log
{
   margin: 10px 30px;
  padding: 20px 40px;
}
.ex
{ background-color: #C0C0C0;
  color: #000000;
  padding: 20px 20px 20px 20px;
  font-size: 20px;
  border-style: solid;
  border-color: #000000;
  margin:auto;
  cursor: pointer;
  height: 50px 50px;
  width: 60%;
  display:block;
  }
  .et
{ background-color: #C0C0C0;
  color: #000000;
  padding: 20px 20px 20px 20px;
  font-size: 20px;
  border-style: solid;
  border-color: #000000;
  margin:auto;
  cursor: pointer;
  height: 50px 50px;
  width: 50%;
  display:block;
  
  }


</style>
</head>
<body>

<div class="topnav">
<a href="#"></a>
<center><h1>Blood Donation Management System</h1></center>
  
</div>

<div class="sidenav">

  <br> <br> <br>

  <div class="dropdown">
  <button class="dropbtn">My Profile</button>
  <div class="dropdown-content">
  <a href="#">Link 1</a>
  <a href="#">Link 2</a>
  <a href="#">Link 3</a>
  </div>
</div>
<br><br><br>

<div class="dropdown">
  <button class="dropbtn">Donation</button>
  <div class="dropdown-content">
  <a href="{{action('PageController@lojoin')}}"><h5>Donation History</h5></a>
  <a href="{{action('PageController@donormax')}}"><h5>Maximum Donation</h5></a>
  </div>
</div>
<br><br><br>
<div class="dropdown">
  <button class="dropbtn">Collection</button>
  <div class="dropdown-content">
  <a href="PageController@joindata"><h5>Stock History</h5></a>
  <a href="{{action('PageController@showsum')}}"><h5>Total Collection</h5></a>
  <a href="{{action('PageController@procedurecall')}}" class="button"><h5> Receipt </h5> </a>
  </div>
</div>
<br> <br> <br>
<div class="dropdown">
 <div> <button class="dropbtn">Users</button>
  <div class="dropdown-content">
  <a href="{{action('PageController@unionvalue')}}"><h5>Active Users</h5></a>
  <a href="{{action('PageController@select')}}"><h5>Show Users</h5></a>
  </div>
</div>
</div>
<br><br><br>
  
</div>

<div class="content">
  <div>
  
  
  
  
<img height="300" width="400" align="right" src="{{ asset('images/donateblood.jpg') }}"  >
<div class="log" >

 <center><h1>  Search For Blood  </h1></center>

 <form action= "{{action('PageController@search1')}}" method="get"  >
  <select name="blood" class="et">
    <option value="A+" > <h4> A+ </h4> </option>
    <option value="A-"><h4> A- </h4>  </option>
    <option value="B+"><h4> B+ </h4> </option>
    <option value="B-"> <h4>B- </h4> </option>
    <option value="O+"> <h4> O+ </h4> </option>
    <option value="O-"> <h4> O- </h4> </option>
    <option value="AB+"> <h4> AB+ </h4> </option>
    <option value="AB-"> <h4> AB- </h4> </option>
  </select>
  <br><br>
  <input type="submit" class="ex"  >
</form>


</div>

<a href="{{action('PageController@show4')}}" class="button"><h3> Donate Blood </h3> </a>
<a href="{{action('PageController@show5')}}" class="button"><h3> Receive Blood </h3></a>
<br>

  <p>A full-height, fixed sidenav and content.</p>

</div>
</div>

<div class="footer">
  <p>created by nishataurora1956@gmail.com</p>
</div>

</body>
</html>
