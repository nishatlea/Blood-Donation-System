<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;




class PageController extends Controller
{
	public function show()
    {
        

        $x=$_GET["aname"];
        $y=$_GET["apsw"];
      Session::put('user', $x);
      Session::put('p', $y);
       
       $users = DB::select('select  name,password from userinfo where name=? ' ,[$x]);
        foreach ($users as $user) 
        {
    $p = $user->name ;
    
    $q = $user->password ;
    

      }
    
   
    if(!isset($p) || !isset($q) || !($q==$y))

       { return view('error'); }
   else 

     {return view("page1") ;}
     
     

     

    }

    public function show5()
    {
        return view('receive');
    }

    public function search1()
    {
        $x=$_GET["blood"]  ;
        //Session::put('bl',$x);
        //$sum1 = DB::table('stock')->sum('amount_in_bag');
        $p = DB::table('stock')
                ->where('b_type', $x)
                ->sum('amount_in_bag');
        $q = DB::table('receiver')
                ->where('b_type', $x)
                ->sum('amount_in_bag');
        if ($p-$q<=0)
            {echo "Sorry , The blood is not available at this moment ." ;}
        else
        {
        echo "Available amount of ";
        echo $x ;
        echo " blood is ";
        echo $p-$q; 
        echo " bag ";
      
      }
    }

public function show4()
    {
        return view('donate');
    }
    public function donate1()
    {    
     
        $a=Session::get('user');
        $b=Session::get('p');
        
       
      $users = DB::table('userinfo')
                   ->where('name', $a)
                   ->where('password', $b)->get();
        
        foreach ($users as $user) 
        {
        
        $y = $user->blood_group;
        $c =$user->user_id;
        

      }

        $z=$a;
        $w= $_GET["amount"];
        
        DB::insert('insert into donor (d_id, name,user_id) values (?, ?,?)', [ null,$z,$c]);
         $dd = DB::table('donor')
                   ->where('name', $a)
                   ->where('user_id', $c)->get();
        foreach ($dd as $us) 
        {
        
        $tt = $us->d_id;
        

      }

        DB::insert('insert into blood (d_id,b_id, b_type) values (?, ?,?)', [ $tt,null,$y]);
        DB::insert('insert into stock (b_type, c_id, d_id, amount_in_bag) values (?, ?,?,?)', [ $y,null,$tt,$w]);
        DB::insert('insert into donate (d_id) values (?)', [ $tt]);
        
        echo $y ;
        echo "<br>";
        echo $z ;
        echo "<br>";
        echo $w ;
        echo "<br>";
        if($w >=2)
    {  $hh= DB::select(DB::raw('select donor_warning()'));

       print_r($hh);
        /* foreach ($hh as $kk) {
             print_r($kk->donor_warning());
         }
         */
        

            

  }
    
      
    }
    public function receive1()
    {   
        $w= $_GET["amount1"];
        $x=$_GET["r_id"];
        $y=$_GET["b1_type"];
        $z=$_GET["rname"];
        DB::insert('insert into receiver (r_id,b_type,name,amount_in_bag) values (?, ?,?,?)', [ $x,$y,$z,$w]);
       // DB::insert('insert into receipt (r_id) values (?)', [ $x]);
        echo $x ;
        echo "<br>";
        echo $y ;
        echo "<br>";
        echo $z ;
        echo "<br>";
        echo $w ;
        echo "<br>";
        
       
    }


public function showsum()
    {//aggregate sum function
     //$sum1 = DB::select('select sum(amount_in_bag) from stock ');
        //return view('sumvalue', ['sum1' => $sum1]);
       $sum1 = DB::table('stock')->sum('amount_in_bag');
       echo $sum1;
}
public function donormax()
    {
       $m1 = DB::table('stock')->max('amount_in_bag');
       echo "Maximum donation by a donor till now at a time ";
       echo $m1;
       echo " bag " ;
    
          
}
public function lojoin()
{
  $x = DB::table('donor')
            ->leftJoin('donate', 'donor.d_id', '=', 'donate.d_id')
            ->get();
   return view('lojoindata', ['x' => $x]);
}

public function joindata()
{
   $x=DB::select('select a.name,b.amount_in_bag,b.b_type from donor a join stock b using(d_id)');
   return view('joinvalue', ['x' => $x]);
}

public function subquery()
{ //$y=DB::select('select b_id from stock where amount_in_bag > ('select amount_in_bag from stock where amount_in_bag = ?', [2])' ) ; 
  //return view('querysub', ['y' => $y]);
 
 }

 

 public function procedurecall()
{ 
   $z= DB::select('call receiver_list()');
   foreach ($z as $us) 
        {
        
        echo $us->name;
        echo "<br>" ;
        

      }
 
 }

 public function unionvalue()
 {

    $z= DB::select('select name from donor union (select name from receiver)')
 ;
 return view('activeusers', ['z' => $z]);

 }

    public function show2()
    {return view('register');}

public function updateinfo()
    {return view('update');}
 public function insert()
    {
        $a=$_GET["name"];
        $b=$_GET["email"];
        $c=$_GET["phone"];
        $d=$_GET["bgroup"];
        $e=$_GET["pass"];
        DB::insert('insert into userinfo (user_id, name,email,phone,blood_group,password) values (?, ?,?,?,?,?)', [null, $a,$b,$c,$d,$e]);
        echo "Congrats";
        
 
    }
    public function select()
    {
        
        $users = DB::select('select  distinct(name),blood_group from userinfo ');
          return view('showusers', ['users' => $users]);
    }
    public function deletevalue()
    {
       // $a= $_POST["t_name"];
        // $b= $_POST["c_name"];
         //$d= $_POST["c_value"];
         
         $deleted = DB::delete('delete from userinfo where user_id = ?', [ 9]);
        // DB::select('delete from $a where $b= $d ');
         //echo $a ;
          
    }
    public function modifycolumn()
    {
         $a= $_POST["t_name"];
         $b= $_POST["c_name"];
         $c= $_POST["c_type"];
         $d= $_POST["c_value"];
         DB::select(' alter table $a modify $b $c($d)');

         echo "done" ;
          
    }
     
    public function updatename()
    {
        
        $stf=$_GET["newname"];
         $affected = DB::update('update userinfo set user_id =$stf where name = ?', ['habib']);
         echo $stf;
          
    }
    public function updatephone()
    {
        
         $affected = DB::update('update abc set id = 3 where name = ?', ['nishat']);
          
    }
    public function updatepassword()
    {
        
         $affected = DB::update('update abc set id = 3 where name = ?', ['nishat']);
          
    }
}
