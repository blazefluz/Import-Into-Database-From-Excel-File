<?php
if (isset($_GET['id'])){

$id = $_GET['id'];

} else{

$id =0;

}
?>

<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>File Upload</title>
	
	<!-- Stylesheets -->
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet'>
	<link rel="stylesheet" href="css/style.css">

	<!-- Optimize for mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>  
</head>
<body>

	<!-- TOP BAR -->
	<div id="top-bar">
		
		<div class="page-full-width">
		
			<a href="#" class="round button dark ic-left-arrow image-left ">Return to website</a>

		</div> <!-- end full-width -->	
	
	</div> <!-- end top-bar -->
	
	
	
	<!-- HEADER -->
	<div id="header">
		
		<div class="page-full-width cf">
	
			<div id="login-intro" class="fl">
			
				<h1>Excel File Upload</h1>
				<h5>Enter your credentials below</h5>
			
			</div> <!-- login-intro -->
			
			<!-- Change this image to your own company's logo -->
			<!-- The logo will automatically be resized to 39px height. -->
			<a href="#" id="company-branding" class="fr"><img src="images/company-logo.png" alt="Blue Hosting" /></a>
			
		</div> <!-- end full-width -->	

	</div> <!-- end header -->
	
	
	
	<!-- MAIN CONTENT -->
	<div id="content">
	
		<form action="upload_file.php" method="POST" id="login-form" enctype="multipart/form-data">
		
			<fieldset>
               
				<p ><b>
				<?php
				if ($id ==5){
				echo "Successfully Excel File Imported";
				}
				if ($id ==1){
				echo "Error!! Uploaded file must have xlsx Extension";
				}
				if ($id ==2){
				echo "Error!! Please try again";
				}
				
				?>
				</b></p>

				<p>
					<label for="login-password">File Upload</label>
					<input type="file" name="file" id="file" class="round full-width-input" required>
				</p>
				
				
				
				<input type="submit" value="Submit" class="button round blue image-right ic-right-arrow">

			</fieldset>

			<br/><div class="information-box round"></div>

		</form>
		
	</div> <!-- end content -->
	
	
	
	<!-- FOOTER -->
	<div id="footer">

		<p>&copy; Copyright 2012 <a href="#">BlueHosting, LLC</a>. All rights reserved.</p>
		<p><strong>SimpleAdmin</strong> theme by <a href="http://www.adipurdila.com">Adi Purdila</a></p>
	
	</div> <!-- end footer -->

</body>
</html>