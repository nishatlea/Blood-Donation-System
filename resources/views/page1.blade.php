                     
<html>
<head>
<style>
.button {
  background-color: #4CAF50;
  border: none;
  color: #00008B;
  padding: 7px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.menu
{ text-align: center; ;
color: blue ;}
.dd
{ text-align: center; 
color: blue;}
.inp
{
	width:75%;
	height:75%;
	padding: 12px 20px;
   box-sizing: border-box;
}
</style>
</head>
<body bgcolor="#E5E6B2">

<center> <h1>  Search For Blood  </h1>

 <form action= "{{action('PageController@search1')}}" method="get" id="inp">
  <select name="blood" id="dd">
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
  <input type="submit" id="dd">
</form>
</center>
<p id="ab" >
	<center>
<h2> Menu  </h2>
<a href="{{action('PageController@show4')}}" class="button"><h3> Donate Blood </h3> </a>
<a href="{{action('PageController@show5')}}" class="button"><h3> Receive Blood </h3></a>
<br>
<a href="{{action('PageController@select')}}" class="button"><h3> Show User </h3> </a>
<br>
<a href="{{action('PageController@updateinfo')}}" class="button"><h3> Update Info </h3> </a>
<br>
<a href="{{action('PageController@unionvalue')}}" class="button"><h3> Active Users </h3> </a>
<br>
<a href="{{action('PageController@joindata')}}" class="button"><h3> Stock History</h3> </a>
<br>

<a href="{{action('PageController@lojoin')}}" class="button"><h3> Donation History </h3> </a>
<br>
<a href="{{action('PageController@donormax')}}" class="button"><h3> Maximum Donation </h3> </a>
<br>
<a href="{{action('PageController@showsum')}}" class="button"><h3> Total Collection of blood </h3> </a>
<br>
<a href="{{action('PageController@procedurecall')}}" class="button"><h3> Procedure </h3> </a>
<br>


<span>
<img height="300" width="500" align=" left " src="{{ asset('images/donateblood.jpg') }}"  >
</span>
</center>
</p>


</body>
</html>