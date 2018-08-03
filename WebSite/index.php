<!DOCTYPE html>

	<?php
	
		$json_string = 'http://tests.mariomendezzuiga.com/public/users/all-people';
		$jsondata = file_get_contents($json_string);
		$obj = json_decode($jsondata, true);
		?>


<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Consumiendo mi api rest</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300" rel="stylesheet">

		<script type="text/javascript" >
		$(document).ready(function(){
		$(".content").hide();
		$("body").css({
		"background":"#000",
		"transition":"2.5s"
});

		$("#be").css({
		"margin-left":"0",
		"color":"#fff",
		"transition":"2.5s ease"
});
		$("#challenge").css({
		"margin-right":"0",
		"color":"#fff",
		"transition":"2.5s ease"
});

		$("#dxc").css({
		
		"color":"#fff",
		"transition":"2.5s"
});

setTimeout(function(){ 
	$(".animate").hide();
	$(".content").css("display","center");
	$("body").css({
		"background-image":"url(img/background.jpg)",
		"background-position": "center",
        "background-attachment": "fixed",       
        "background-repeat": "no-repeat",
        "background-size": "cover",
        "-webkit-background-size": "cover",
        "-moz-background-size": "cover",
        "-o-background-size": "cover",
        "height":"100%",
        "font-family": "'Montserrat', sans-serif",
	});
	$(".content").show()
 }, 3000);
	
});
	</script>
</head>

<body style="
       
        background-position: center;
        background-attachment: fixed;       
        background-repeat: no-repeat;
        background-size: cover;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        height:100%; 
        font-family: 'Montserrat', sans-serif;
        ">
	<br>
	<br>
	<div class="animate">
			<h1 id="be" style="font-size: 150px; margin-left: -200px;"><b>Be</b></h1>
			<h1 id="challenge" style="font-size: 150px; text-align: right; margin-right: -800px;"><b>Challenge</b></h1>
			<br>
			<h1 id="dxc" style="font-size: 150px; text-align: center;"><b>DXC</b></h1>
	</div>
	<div class="content container" style=" border-radius: 5px; background-color: rgba(30,30,30,0.7)">
		  <div class="container-fluid text-center" style="padding: 0;">
		<h1 style=" color:#fff;">User Stories</h1>
            <table class="table text-center" style="background-color: #fff; border-radius: 5px;">
  <thead class="thead-inverse text-center">
    <tr>
                  <th  class="text-center"><b>id</b></th>
                  <th class="text-center"><b>Name</b></th>
                  <th class="text-center"><b>Lastname</b></th>
                  <th class="text-center"><b>Snn</b></th>
                  <th class="text-center"><b>Birthdate</b></th>
    </tr>
  </thead>
  <tbody>
    <?php
				foreach ($obj as $user) {
					?><tr>
              <th class="scope text-center"><?= $user['id'] ?></th>
              <td><?= $user['name'] ?></td>
              <td><?= $user['lastname'] ?></td>
              <td><?= $user['ssn'] ?></td>
              <td><?= $user['birthdate'] ?></td>
              </tr>
					</div>
					<?php
				}
			?>
              
               
  </tbody>
</table>
</div>

		

		<form action="process.php" class="form-group" method="post">
			<div class="col-md-5">
			<select class="form-control" name="rs">
				<option  value="/all-people">Base Route</option>
				<option  value="/all-people">/all-people</option>
				<option  value="/people-by-id">/people-by-id</option>
				<option  value="/people-by-lastname">/people-by-lastname</option>
				<option  value="/order-people-by-lastname">/order-people-by-lastname</option>
				<option  value="/people-by-ssn">/people-by-ssn</option>
			</select>
			</div>
			<div class="col-md-5">
			<input class="form-control col-md-6" type="text" name="val" placeholder="/value">
			</div>
			<input class="btn btn-primary" type="submit">
		</form>

		
				<h1 class="text-center" style="color:#fff;">Information Elements</h1>
			         <table class="table text-center" style="background-color: #fff; border-radius: 5px;">
  <thead class="thead-inverse text-center" >
    <tr>			
    			  <th class="text-center"><b>Method</b></th>
                  <th class="text-center"><b>Element</b></th>
                  <th class="text-center"><b>Base Route</b></th>
                  <th class="text-center"><b>Value</b></th>
                  
    </tr>
  </thead>
  	
	<tr>		  
				  <th class="text-center"><b>GET</b></th> 
                  <td class="text-center">users</td>
                  <td class="text-center">/all-people</td>
                  <td class="text-center"></td>
                  
    </tr>
    <tr>		  
				  <th class="text-center"><b>POST</b></th> 
                  <td class="text-center">users</td>
                  <td class="text-center">/add-people</td>
                  <td class="text-center"></td>
                  
    </tr>
    <tr>          
    	          <th class="text-center"><b>GET</b></th> 
                  <td class="text-center">users</td>
                  <td class="text-center">/people-by-id</td>
                  <td class="text-center">/id</td>
                  
    </tr>
    <tr>          
    			  <th class="text-center"><b>GET</b></th> 
                  <td class="text-center">users</td>
                  <td class="text-center">/people-by-lastname</td>
                  <td class="text-center">/lastname</td>
                  
    </tr>
    <tr>          
    			  <th class="text-center"><b>DELETE</b></th> 
                  <td class="text-center">users</td>
                  <td class="text-center">/delete-by-ssn</td>
                  <td class="text-center">/ssn</td>
                  
    </tr>
    <tr>
    			  <th class="text-center"><b>GET</b></th> 
                  <td class="text-center">users</td>
                  <td class="text-center">/order-people-by-lastname</td>
                  <td class="text-center"></td>
                  
    </tr>
    <tr>
    			  <th class="text-center"><b>GET</b></th> 
                  <td class="text-center">users</td>
                  <td class="text-center">/people-by-ssn</td>
                  <td class="text-center">/ssn</td>
                  
    </tr>
    <tr>
    			  <th class="text-center"><b>PUT</b></th> 
                  <td class="text-center">users</td>
                  <td class="text-center">/update-lastname-by-id</td>
                  <td class="text-center">/id</td>
                  
    </tr>
    <tr>
                  <td class="text-center" colspan="4" style="text-align: left">This site consumes web services from the API Rest created on the site of <b>tests.mariomendezzuiga.com</b>. <br>
Here you can consult all the <b>GET</b> queries, if you want to make another query through <b>POST</b>, <b>PUT</b>, or <b>DELETE</b> you will have to use an http client as a Postman to test these services.</b></td>
                  
    </tr>
	<tr>
                  <td class="text-center" colspan="4">You can test by Postman, only you need write the url: <br> <b>tests.mariomendezzuiga.com/public/Element/Base Route/Value</b></td>
                  
    </tr>
    
</table>
		</div>
	


	
	
</body>
</html>