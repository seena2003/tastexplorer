
<?php
	include_once("db.php");

	//***********************************************************************************

 $dsql=mysqli_query($con,"SELECT  max(id) as 'max' FROM hotels ");
        $d_arr=mysqli_fetch_assoc($dsql);
		$id1=$d_arr['max']+1;
		$hid=(1000+$id1+1);
//***************************************************************************************************
if(isset($_POST['hsave']))
	{
		//print("<h2>sfnaskflksdfsdkflsdklfsdf</h2>");
   @extract($_POST);

   $files = $_FILES['file'];
$filename = $files['name'];
$filrerror = $files['error'];
$filetemp = $files['tmp_name'];
$fileext = explode('.', $filename);
$filecheck = strtolower(end($fileext));
$fileextstored = array('png' , 'jpg' , 'jpeg');

if(in_array($filecheck, $fileextstored))
	{

    $pic = 'hotels/'.$filename;
    move_uploaded_file($filetemp, $pic);

 $ins=mysqli_query($con,"INSERT INTO `hotels` (`hid`, `hname`, `ph`, `address`, `rate`, `lname`,`loc`, `pic`) VALUES ( '$hid', '$hname', '$ph', '$address', 0,'$lname', '$loc', '$pic')")  or die(mysqli_query());
			if(!$ins)
			{
				$mmsg="<font size='' color='#ff0000'><strong>Hotel Details un sucessfully...</strong></font>";
				
			}
			else
		{
				
				   echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('$hname hotel Succesfully Registered under reg no $hid')
					window.location.href='http://localhost/tast_expo/hotel_details.php';
					</SCRIPT>");
				$id1=$id1+1;
		       $hid=(1000+$id1);
		}
	}
			  
	}

//*******************************************************************************************************
?>


<!DOCTYPE html>
<html>
<head>
  <title>Admin </title>

    <!-- Title Page-->
    <title>Add Hotel | Hotel Panel</title>
    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css3/main.css" rel="stylesheet" media="all">
</head>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="fYpvwC9r64pptNrUjbVuAKMy6dHbWzF3rLGcMxHs">
    <title>New Hotel Login</title>

    <link rel="icon" type="image/png" href="image/favicon.png">


    <link rel="stylesheet" href="css/all.css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
        href="assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="assets/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="stylesheet" type="text/css"
        href="css/toastr.min.css">

    
    <script src="assets/jquery-3.7.0.min.js"></script>
    <link href="css/select2.min.css" rel="stylesheet" />

    
    <script src="assets/sweetalert.min.js"></script>
    <link rel="stylesheet" href="css/frontendStyle.css">
    <!-- Lightbox CSS -->
    <link rel="stylesheet" href="css/fancybox.css">
    
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <style>
   


    .selected {
        border: 2px solid #800000;
        border-radius: 12px;
        position: relative;
    }

   

    /* date picker css */
    .ui-widget.ui-widget-content {
        width: 100%;
        font-size: 20px;
        font-weight: 300;
        background-color: #efefef !important;
    }

    .hasDatepicker {
        width: 100%;

    }

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #ffffff;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: #0066ff;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #e5e5e5;

}

.dropdown:hover .dropdown-content {
  display: block;}

 


/* Full-width input fields   */
 input[type=text],input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 0px solid #ffffff;
  box-sizing: 0px border-box;
}
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  margin: 0px;
  float: right;
  width: 100%;
  padding: 0px;
  background: #141114;
  /*background: #008489;*/
  height: 35px;
  color: white;
  text-align: center;
}
  .img {
  border-radius: 50%;
  width: 30px;
  height: 30px;
}

  .img1 {
  width: 70px;
  height: 50px;
}


.button {
  background-color: #04AA6D; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
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
.button1 {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}


</style>
    
 <!-- STEP 1: If you don't have jQuery on your page then use this line or one similar -->
<script type="text/javascript" src="./js/jquery-latest.min.js"></script>

<!-- STEP 2: Add this to your page or preferably to an external javascript file -->
<script type="text/javascript">

	//initialize the 3 popup css class names - create more if needed
	var matchClass=['popup1','popup2','popup3'];
	//Set your 3 basic sizes and other options for the class names above - create more if needed
	var popup1 = 'width=400,height=300,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=20,top=20';
	var popup2 = 'width=800,height=600,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=50,top=50';
	var popup3 = 'width=1000,height=750,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=20,top=20';

	//The pop-up function
	function tfpop(){
			var x = 0;
			var popClass;
			//Cycle through the class names
			while(x < matchClass.length){
					popClass = "'."+matchClass[x]+"'";
					//Attach the clicks to the popup classes
					$(eval(popClass)).click(function() {
							//Get the destination URL and the class popup specs
							var popurl = $(this).attr('href');
							var popupSpecs = $(this).attr('class');
							//Create a "unique" name for the window using a random number
							var popupName = Math.floor(Math.random()*10000001);
							//Opens the pop-up window according to the specified specs
							newwindow=window.open(popurl,popupName,eval(popupSpecs));
							return false;
					});							
			x++;
			} 
	}
	
	//Wait until the page loads to call the function
	$(function() {
		tfpop();
	});
</script>


    <link rel="modulepreload" href="d27f3c49.js" /><script type="module" src="assets/app-d27f3c49.js"></script>

</head>


    <header class="page-header">
    <div class="container">
        <div class="row px-0">
            <div class="col-lg-12 px-0">
                <div class="wrapper" id="menu-bar">
                    <div class="left-area col-lg-12 col-md-12 order-lg-1 order-2">
                        <a href="index.html" >
                       	 <img src="t2.png" alt="" width="50" height="80" class='img1' class="img-fluid">
                            <img src="a1.png" alt="" width="200" height="150" class='img1' class="img-fluid">
                             </a>
                        <div class="burger" id="burger">
                            <span class="burger-line"></span>
                            <span class="burger-line"></span>
                            <span class="burger-line"></span>
                        </div>
                        <span class="overlay">
                            <div class="close">
                                <i class="fas fa-times text-white"></i>
                            </div>
                        </span>
                        <nav class="navbar" id="navbar">
                          
                            <ul class="menu" id="menu">
                                <li class="menu-item"><a href="http://localhost/tast_expo/hotel_details.php" class="menu-link">
                                        <span>Home</span> </a></li>
             
                                <li class="menu-item"><a href="nfood.php" class="menu-link">
                                        <span>Food Catagary</span> </a>
                                </li>
                                <!-- <li class="menu-item"><a href="dreamlight.html/blogs" class="menu-link"> <span>Blog</span> -->
                                    </a></li>
             
                   <div class="dropdown">  <a href="index.html" class="menu-link"><span>Logout</span> </a>
	         
					 
             </div>
                       
                            </ul>
                        </nav>
                                          
                             </a>
                        <input type="hidden" value="" name="" id="location_idd">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</header>



<!-- //********************************************************************************************** -->
    <form action=" " method="POST" enctype="multipart/form-data">
<?php $admin=(new DateTime())->format('Y-m-d');?>
<input type="hidden"   name="hid"  value=<?php print("H$hid");?>>
<input type="hidden"   name="id1"  value=<?php print("$id1");?>>


	<div class="page-wrapper bg-blue p-t-60 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">

                <div class="card-body">

				<div class="row row-space">
                   <div class="input-group">
                    <h4 class="title">Adding New Hotel  Info</h4>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<strong><font size="3" color="#000099"><?php print("H$hid");?></font></strong>
				
                        </div>


                                <div class="input-group">
                                     <input class="input--style-1" type="text" placeholder="Hotel Name" name="hname" required="required">
                               </div>

                        <div class="input-group">
                            <input class="input--style-1" type="number" placeholder="Contact Number" maxlength="10"  name="ph" required="required" >
                        </div>
   
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Address" name="address" required="required">
                        </div>
						
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Enter the Location Here"  name="lname" required="required">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Link the Location Here" name="loc" required="required">
                        </div>

                    
							<div class="input-group">
                            <input class="input--style-1" type="file" placeholder="file" name="file">
                        </div>
      

                        <div class="p-t-20">
						<center><button  class='button button2' name='hsave' >Save </button></center>
                      
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

  
	
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>



</body>
</html>