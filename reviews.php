<?php
	//include_once("phead.php");
	include_once("db.php");

	function  add1($n)
{
if ($n<2) 
	{
	echo "<h2><font  color='#ff0000'>*</font></h2>";
	return;
	}
else if ($n<3) 
		{
	echo "<h2><font color='#ff0000'>**</font></h2>";
	return;
	}
else if ($n<4) 
		{
	echo "<h2><font  color='#ff0000'>***</font></h2>";
		return;
	}
	else
if ($n<5) 
		{
	echo "<h2><font  color='#ff0000'>****</font></h2>";
		return;
	}
	else
if ($n<6) 
		{
	echo "<h2><font  color='#ff0000'>*****</font></h2>";
		return;
	}

}

?>

<style>
#division4{
	height: 100px;
	width:  100px;
	border: 2px solid black;
	border-radius: 20px;
	background-color:#ffffff;
	margin: 30px;
	padding: 10px 30px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #ff0000;
  color: white;
  padding: 8px 10px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 20%;
  border-radius: 5%;
}
table {
  border-collapse: collapse;
  width: 80%;
}

th, td {
  padding: 5px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}


input[type="text"]
{
    background: transparent;
    border: none;
   height: 20px;
  width: 100%;
  position: relative;
}

.btn {
  border: 1px solid black;
  background-color: white;
  color: black;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
}

/* Green */
.success {
  border-color: #04AA6D;
  color: #330000;
}

.success:hover {
  background-color: #04AA6D;
  color: white;
}
.img1 {
  border-radius: 50%;
  width: 60px;
  height: 60px;
}
.my-custom-scrollbar {
position: relative;
height: 480px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;
}
.button {
  background-color: #04AA6D; /* Green */
  border: none;
  color: white;
  padding: 5px 3px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}
.button5 {
  background-color: #ff6666; /* Green */
  border: none;
  color: white;
  padding: 5px 1px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

.button6 {
  background-color: #c0c0c0; /* Green */
  border: none;
  color: #000000;
  padding: 5px 1px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

.button1 {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

  .img {
  border-radius: 50%;
  width: 30px;
  height: 30px;
}
</style>
<body background="images/backadmin.jpg">

<?php
	





$hid = (isset($_GET['hid']) ? $_GET['hid'] : '');


$docc=mysqli_query($con,"select * from feedback where hid='$hid' ");

 ?>
<br>
<center><h4><u><font size="4" color="#000000">Reviews  Details of  <?php print $hid ;?></font></u></h4></center>
<div class="table-wrapper-scroll-y my-custom-scrollbar">
		<table width="80%" align="center">
			<tr>
				<th align = "center">rdate</th>
				<th align = "center">fid</th>
				<th align = "center">rate</th>
				<th align = "center">review</th>

			</tr>


			<?php
	
				while ($row2 = $docc->fetch_assoc()) {


   
                    echo "<tr>";
                    echo "<td>".$row2['rdate']."</td>";
  
                    echo "<td>".$row2['fid']."</td>";
					 echo "<td>"; add1($row2['rate'])."</td>";//$row2['rate']

					echo "<td>".$row2['review']."</td>";


				
				}	
 

             ?>
 </form>

		</table>
		
	</div>
     

		<script type="text/javascript">
  $(document).ready(function(){$(".rightAccount").click(function(){$(".account").fadeToggle();});});
</script>
	
</body>
</html>