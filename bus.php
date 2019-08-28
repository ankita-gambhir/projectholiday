<HTML>
<BODY>
<style>
body {background-color: skyblue}
</style>
<form action="insert3.php" method="post" enctype="multipart/form-data">
 
<H1> BUS RESERVATION FORM</H1>
<P>NAME-&nbsp<INPUT TYPE="TEXT" SIZE="20" name= "name" MAXLENGTH="99" />
<P>AGE-&nbsp<INPUT TYPE="TEXT" SIZE="12" name= "age" MAXLENGTH="99" />
<P>ADDRESS-&nbsp<INPUT TYPE="TEXT" SIZE="25" name= "address" MAXLENGTH="99" />
<P>EMAIL-&nbsp<INPUT TYPE="TEXT" SIZE="20" name = "email" MAXLENGTH="99" />
<P>TELEPHONE-&nbsp<INPUT TYPE="TEXT" SIZE="10" name= "telephone" MAXLENGTH="99" />
<P>SELECT BUS TYPE &nbsp
 <div class="grid">
    <div class="col-1-3 col-1-3-sm">
      <div class="controls">
        <i class="fa fa-sort"></i>
        <select class="floatLabel" name="berth">
<OPTION value="AC1">AC Sleeper</OPTION>
<OPTION value="AC2">Sleeper</OPTION>
<OPTION value="GENERAL" selected>GENERAL</OPTION>
</select>
<label for="fruit"><i class="fa fa-male"></i>&nbsp;&nbsp;BERTH</label>
      </div>      
    </div>
</P>
<H2> CITY
<P>FROM-&nbsp<INPUT TYPE="TEXT" SIZE="20" name= "from" MAXLENGHT="99">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspTO-&nbsp<INPUT TYPE="TEXT" SIZE="20"  MAXLENGHT="90" name = "to"/>
<P>Travel Date-&nbsp<INPUT TYPE="TEXT" SIZE="20" name= "tdate" MAXLENGTH="99" />
<br>
<br>
<input type="submit" value="click here to submit" />
<input type="reset" value="clear this form" />

</BODY>
</HTML>