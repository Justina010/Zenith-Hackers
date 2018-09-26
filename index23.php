<!Doctype html>
<html>

<head>
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css" />
	<title>
	</title>
	
	<style>
		.rat .container-fluid{
			margin-left: 400px;
			margin-top: 50px;
			background-color: rgba(0,0,0,,0.5);
			width: 600px;
			padding-left:110px !important;
			padding-right:30px !important;
			padding-top: 20px;
			padding-bottom:20px;
		}
		.form-control{
			width: 350px;
			border-radius: 0px;
			border: 1px solid #000;
			
		}
		form{
			width:
		}
		
		.gov{
/*
		padding-top:-30px;	
			padding-bottom: -150px;
			padding-right: 20px;
			
*/
			padding: 0px;
		}	
		
		
	</style>
	
	
	</head>


<body>
	
	<div class="rat">
	<div class="container-fluid thumbnail">
	<form>
	<p class="gov">Name</p>
		<input class="form-control" placeholder="Name of Organisation..." type="text" required=required name="Name of organisation">
		
		<p class="gov"> Pick up location</p>
		<select class="form-control" name="location">
		<option value="Ikeja">Ikeja</option>
		<option value="Surulere">Surulere</option>
		<option value="Ojo">Ojo</option>
		<option value="Alimosho">Alimosho</option>
		<option value="Shomolu">Shomolu</option>
		<option value="Ifako-ijaye">Ifako-ijaye</option>
		<option value="Lagos mainland">Lagos mainland</option>
		<option value="Amuwo-odofin">Amuwo-odofin</option>
		<option value="Oshodi-isolo">Oshodi-isolo</option>
		<option value="Eti-osa">Eti-osa</option>
		<option value="Agege">Agege</option>
		<option value="Apapa">Apapa</option>
		<option value="Epe">Epe</option>
		<option value="Ibeju-lekki">Ibeju-lekki</option>
		<option value="Badagry">Badagry</option>
		<option value="Lagos-island">Lagos-island</option>
		<option value="Kosofe">Kosofe</option>
		<option value="Mushin">Mushin</option>
		<option value="Ojo">Ojo</option>
		<option value="Ikorodu">Ikorodu</option>
		<option value="Ajeromi-ifelodun">Ajeromi-ifelodun</option>
			</select>
			<br>
			 
			<p>Company Email Address</p>
			<input type="text" class="form-control" placeholder="Enter company's email address..." required=required name="company's email address">
			<br>
			
			<p>Company's Phone Number</p>
			<input class="form-control" type="text" placeholder="Enter company's phone number......."name="Company phone number">
			
			<p>Name of Rep</p>
			<input type="text" class="form-control" required=required 
				   placeholder="Enter name of rep..."name="Name of Rep">
			
			<p >Gender
			<input type="radio"> 
			<span>Male</span> 
			<input type="radio"> 
			<span>Female</span>
		</p>
				
		<br>
			   <button class="btn btn-default" type="submit">Submit</button>
	
		
		
	</form>
		
		  
	</div> 
	</div>
	</body>


</html>



