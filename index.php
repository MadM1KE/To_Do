<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
   <body>
       <form id="form" method ="POST" action="serverside.php" >
              <p>Item:</p><br/>
              <textarea name="item" value="yes"> </textarea>
              <p>Date:</p><br/>
              <input name="date" type="Date">
              <div></div>
              <input name="submit" type="submit">
</form>
<script>
    $(document).on('click' ,'button' ,function() {
    event.preventDefault();
	   
       var response1 =  $.post("serverside.php", {delete : this.id});
       response1.done(function (data){
     $('#div').replaceWith(data);     
         }); 
 });

    $("#form").submit(function( event ){
    event.preventDefault();
    var information = $("#form").serialize();
       var response =  $.post("serverside.php", information); 
     
	  response.done(function (data){
     $('#div').replaceWith(data);     
         }); 
		 });

</script

<div id="div"></div>

</body>

</html>