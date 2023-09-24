<form action="{{action('PageController@insert')}}" method="get">
          
          <label for="name"><b>Username</b></label>
    <input type="text" placeholder="Enter name" name="name"   class="input-field" required>
    <br><br><br>
     <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter email" name="email"   class="input-field" required>
    <br><br><br>
    <label for="phone"><b>Phone Number</b></label>
    <input type="number" placeholder="Enter phone number" name="phone"   class="input-field" required>
    <br><br><br>
    <label for="bgroup"><b>Blood Group</b></label>
    <input type="text" placeholder="Enter Blood Group" name="bgroup"  class="input-field" required>
    <br><br><br>
    <label for="pass"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass"  class="input-field" required>
    <br><br><br>
     
        
    <h3><button class="button" type="submit" name="submit">Submit</button></h3>
    <label>
      <br>
      
        </form>
