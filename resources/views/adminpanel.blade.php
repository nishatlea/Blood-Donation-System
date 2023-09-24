

Delete data

<form action="{{action('PageController@deletevalue')}}" method="post">
          
          <label for="t_name"><b>Table Name</b></label>
    <input type="text" placeholder="Enter Table Name" name="t_name"   class="input-field" required>
    <br><br><br>
    <label for="c_name"><b>Column Name</b></label>
    <input type="text" placeholder="Enter Column Name" name="c_name"  class="input-field" required>
    <br><br><br>
    <label for="c_value"><b>Column Value</b></label>
    <input type="number" placeholder="Enter Column Value" name="c_value"  class="input-field" required>
    <br><br><br>    
    <h3><button class="button" type="submit" name="submit">Submit</button></h3>
    <label>
      <br>
      
        </form>



