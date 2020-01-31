<!DOCTYPE html>
<html>
<head>
	<title> Logged In </title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  	<style type="text/css">
  		.box{
  			width: 600px;
  			margin:0 auto;
  			border: 1px solid #ccc;
  			padding-bottom: 10px;
  		}
  	</style>
</head>
<body>
    <div class="container box">
        @yield('content')
    </div>

</body>
</html>
