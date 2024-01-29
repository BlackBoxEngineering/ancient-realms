<html>
<head>
<title>sphere_info</title>
</head>

<body>
<?php

//fill in your MySQL information here
$hostname = "localhost";
$username = "Jesus";
$password = "d34dd34d";
$database = "ancientuo";

//the tablename demo was used for this tutorial. change this to the actual name of the table.
$table = "demo";

//connects to MySQL and selects the corresponding database.
mysql_connect($hostname,$username,$password);
mysql_select_db($database);

//selects all rows from the provided table name.
$query = "select * from $table";
$result = mysql_query($query);

//this if makes sure there is information in the table. if there isn't, there will be no output.
if (mysql_num_rows($result) > 0)
{
       //this creates a variable named $query_data and fills it with the information from the first row. using a while statement, this will repeat for each row the table contains.
    while ($query_data = mysql_fetch_array($result))
    {
               //we create new variables for each different column in the row.
 $id = $query_data['id'];
 $account = $query_data['account'];
 $name = $query_data['name'];
 $guild = $query_data['guild'];
 $kills = $query_data['kills'];
 $fame = $query_data['fame'];
 $karma = $query_data['karma'];
 
 //this is where you can format your output using html.
 $echo = "$id - $account - $name - $guild - $kills - $fame - $karma<br>";
 
               //this displays the actual output.
 echo $echo;
    }
}

?>
</body>
</html>

