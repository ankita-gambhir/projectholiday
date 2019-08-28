<?php
session_start();
$uname = $_SESSION['uname'];
$hotel = $_SESSION['hotel'];

?>
<html>
<head>
<style>
body  {background-color: skyblue}
</style>
</head>
<body>
<form action="insert.php" method="post" enctype="multipart/form-data">
  <!--  General -->
  <div class="form-group">
    <h2 class="heading">Booking & contact</h2>
    <div class="controls">
      <input type="text" id="name" class="floatLabel" name="name" value= <?php echo $uname ?>
>
      <label for="name">Name</label>
    </div>
<br>
    <div class="controls">
     <input type="text" id="email" class="floatLabel" name="email"/>
      <label for="email">Email</label>
    </div>  
<br>     
    <div class="controls">
      <input type="tel" id="phone" class="floatLabel" name="phone"/>
      <label for="phone">Phone</label>
    </div>
<br>    
      <div class="grid">
        <div class="col-2-3">
          <div class="controls">
           <input type="text" id="street" class="floatLabel" name="street"/>
           <label for="street">Street</label>
          </div> 
<br>
      <div class="grid">
        <div class="col-2-3">
          <div class="controls">
            <input type="text" id="city" class="floatLabel" name="city">
            <label for="city">City</label>
          </div>         
        </div>
<br>
      <div class="controls">
        <input type="text" id="country" class="floatLabel" name="country">
        <label for="country">Country</label>
      </div>
  </div>
  <!--  Details -->
  <div class="form-group">
    <h2 class="heading">Details</h2>
    <div class="grid">
    <div class="col-1-4 col-1-4-sm">
      <div class="controls">
        <input type="date" id="arrive" class="floatLabel" name="arrive" value="<?php echo date('Y-m-d'); ?>">
        <label for="Arrive" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Arrive</label>
      </div>      
    </div>
<br>
    <div class="col-1-4 col-1-4-sm">
      <div class="controls">
        <input type="date" id="depart" class="floatLabel" name="depart" value="<?php echo date('Y-m-d'); ?>" />
        <label for="depart" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Depart</label>
      </div>      
    </div>
      </div>
<br>
      <div class="grid">
    <div class="col-1-3 col-1-3-sm">
      <div class="controls">
        <i class="fa fa-sort"></i>
        <select class="floatLabel" name="people">
          <option value="blank"></option>
          <option value="1">1</option>
          <option value="2" selected>2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>  
          <option value="12">12</option>
          <option value="13>13</option>
          <option value="14">14</option>	
           
        </select>
        <label for="fruit"><i class="fa fa-male"></i>&nbsp;&nbsp;People</label>
      </div>      
    </div>
    <div class="col-1-3 col-1-3-sm">
    <div class="controls">
      <i class="fa fa-sort"></i>
      <select class="floatLabel" name="room">
        <option value="blank"></option>
        <option value="deluxe" selected>With Bathroom</option>
        <option value="Zuri-zimmer">Without Bathroom</option>
      </select>
      <label for="fruit">Room</label>
     </div>     
    </div>     
    <div class="col-1-3 col-1-3-sm">
    <div class="controls">
      <i class="fa fa-sort"></i>
      <select class="floatLabel" name="bedding">
        <option value="blank"></option>
        <option value="single-bed">single bed</option>
        <option value="double-bed" selected>Double bed</option>
      </select>
      <label for="fruit">Bedding</label>
     </div>     
    </div><br>

     <div class="grid">
    <div class="col-1-5 col-1-5-sm">
         <div class="controls">
      <input type="text" id="hotel" class="floatLabel" name="hotel" value= <?php echo $hotel ?>
>
      <label for="hotl">Hotel</label>
    </div>
<br>
    
 </div>
</br>
      <div class="grid">
        <p class="info-text">Please describe your needs e.g. Extra beds, children's cots</p>
        <br>
        <div class="controls">
          <textarea name="comments" class="floatLabel" id="comments"></textarea>
          <label for="comments">Comments</label>
          </div>
            <input type="submit" name="submit" value="Submit" class="col-1-4"></button>
      </div>  
  </div> <!-- /.form-group -->
</form>

</body>
</html>

