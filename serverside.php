<?php



$db_hostname = 'localhost';
$db_database = 'MishaDb';
$db_username = 'root';
$db_password = '';
$db = mysql_connect($db_hostname, $db_username, $db_password);
if (!$db) die("Unable to connect to MySQL: " . mysql_error());

mysql_select_db($db_database, $db)
or die("Unable to select database: " . mysql_error());

if (isset($_POST['delete']) && $_POST['delete']!="") {
    
   $id =  $_POST['delete'];
   
   
   
  $query = "DELETE FROM todolist where id='$id'";
	$result = mysql_query($query);
  };

if ((isset($_POST['item'])) && (isset($_POST['date']))) {

if (empty($_POST['item'])) {

die ("todo field is required");

  $item = $_POST['item'];
  $date = $_POST['date'];
  
 
  $query  = "INSERT INTO todolist (item , 
                                  date) 
                                VALUES('$item' , '$date')";
								
$result = mysql_query($query);


															
};
};
$query = "select * todolist";
 $result = mysql_query($query);

 $rows = mysql_num_rows($result); 

echo '<div id="div">';
for ($i = 0 ; $i < $rows ; $i++)
{
$row = mysql_fetch_row($result);

echo <<<_END

<ul>
<li>item:</li>
<li>$row[1]</li>
<li><Date:</li>
<li>$row[2]</li>

<li><button type="button" id="$row[0]">DELETE</button></li>
</ul>

_END;


  };
  echo '</div>';

  mysql_close($db);


?>