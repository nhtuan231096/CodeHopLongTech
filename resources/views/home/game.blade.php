<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Quay Số Trúng Thưởng - Hợp Long</title>
	<link rel="stylesheet" type="text/css" href="{{url('public/game')}}/css/style.css" />
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
	<script src="http://www.google.com/jsapi" type="text/javascript"></script>
    <script type="text/javascript">
        google.load("jquery", "1.2.6");
    </script>
    <script type="text/javascript" src="{{url('public/game')}}/js/example.js"></script>
</head>
<body>
<!-- 	<div class="top">	
	 	 <a href="#relative" class="custom-logo-link" rel="home">
	    	<img src="{{url('uploads/logo/event.png')}}" width="100%" height="925px" alt="Xuan Ky Hoi">
	    	
	    	<div id="getit">Bắt đầu</div>   
		</a> 
	</div> -->
	<style type="text/css">
		div.top {
		  position: relative; 
		} 
		div#getit {
		  position: absolute;
		  top: 680px;
		  left: 710px;
		  width: 520px;
		  height: 100px;
		  /*border: 3px solid black;*/
		  font-size: 80px;
		 text-transform: uppercase;
		  font-family: "Times New Roman", Times, serif;
		    opacity: 0;
		}
	</style>
	<style type="text/css">
		div#relative {
		  position: relative; 
		} 
		div#page-wrap {
		  position: absolute;
		  top: 720px;
		  left: 850px;
		  width: 250px;
		  height: 130px;
		  border: 2px solid gray; 
		  font-family: "Times New Roman", Times, serif;	  
		}
	</style>
	<style type="text/css">
		div#relative {
		  position: relative; 
		} 
		div#randomnumber {
		  position: absolute;
		  top: 480px;
		  left: 830px;
		  width: 300px;
		  height: 170px;
		  /*border: 3px solid black;*/
		  color: #fff;
		  font-size: 130px;
		  font-family: "Times New Roman", Times, serif;
		}
	</style>
	<style type="text/css">
		div#relative {
		  position: relative; 
		} 
		div#load {
		  position: absolute;
		  top: 510px;
		  left: 830px;
		  width: 300px;
		  height: 170px;
		}

	</style>
	<!-- show ket qua -->
	<div id="relative">	
		<img src="{{url('uploads/logo/event-2.jpg')}}" alt="Xuan Ky Hoi">
		<div id="randomnumber"></div>
	</div>
	<div id="load">
	 	<img src="{{url('public/game')}}/images/loading.gif" alt="get a random number between..." id="loading-message" style="display: none; width: 150px;height:100px;" />
	 </div>  
		<div id="page-wrap">      
      <!--   <img src="{{url('public/game')}}/images/randomnumb.png"  alt="get a random number between..." />     -->
        <input type="text" id="lownumber" value="1" />
        and
        <input type="text" id="highnumber" value="100"/>
    	<button  id="getit" type="button" class="btn btn-lg btn-danger">Start game</button>
    </br>
    </br>
    	<a href="congratulations" class="btn btn-md btn-success">Next</a>
	</div>
</body>
</html>