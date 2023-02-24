<!-- <html>
  <body>
      <head>
        <meta charset="utf-8">
        <title>How To Validate Password And Confirm Password Using JQuery - techsolutionstuff.com</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      </head>
      <div class="row">
        <div class="col-md-6 col-md-offset-3"> 
<h4 style="margin-top:50px;"><b>How To Validate Password And Confirm Password Using JQuery - techsolutionstuff.com</b></h4><br />
            Enter Password <input type="password" class="form-control" id="Password" placeholder="Enter a password" name="password"><br /> <br / >
            Enter Confirm Password <input type="password" class="form-control" id="ConfirmPassword" placeholder="Enter a Confirm Password" name="confpassword" >
            <div style="margin-top: 7px;" id="CheckPasswordMatch"></div>
        </div>
      </div>
  <body>
</html>
<script>
$(document).ready(function () {
   $("#ConfirmPassword").on('keyup', function(){
    var password = $("#Password").val();
    var confirmPassword = $("#ConfirmPassword").val();
    if (password != confirmPassword)
        $("#CheckPasswordMatch").html("Password does not match !").css("color","red");
    else
        $("#CheckPasswordMatch").html("Password match !").css("color","green");
   });
});
</script> -->


<!-- <html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
</head>
<body>
  <select>
    <option value="">Select a state...</option>
    <option value="AL">Alabama</option>
    <option value="AK">Alaska</option>
    <option value="AZ">Arizona</option>
    <option value="AR">Arkansas</option>
    <option value="CA">California</option>
    <option value="CO">Colorado</option>
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="DC">District of Columbia</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="HI">Hawaii</option>
    <option value="ID">Idaho</option>
    <option value="IL">Illinois</option>
    <option value="IN">Indiana</option>
  </select>
</body>
</html>

<script>
  $(document).ready(function () {
      $('select').selectize({
          sortField: 'text'
      });
  });
</script> -->

<!-- <input list="brow">
<datalist id="brow">
  <option value="Internet Explorer">
  <option value="Firefox">
  <option value="Chrome">
  <option value="Opera">
  <option value="Safari">
</datalist>   -->

<html lang="en">
<head>
	<title></title>
</head>
<body>
	<input id="inputdate" type="date" value="" />
</body>
<script type="text/javascript">
	var d=new Date();				
	var currentYear = d.getFullYear();
	var today = d.getDate();
	if(today<10)
	{
		today="0"+today;
	}
	var currentMonth = d.getMonth() + 1;
	if(currentMonth<10)
	{
		currentMonth="0"+currentMonth;
	}
	strfulldate=currentYear+"-"+currentMonth+"-"+today;	
	document.getElementById("inputdate").value=strfulldate;
</script>
</html>