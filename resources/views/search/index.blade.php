<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{csrf_token()}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<title></title>
	<link rel="stylesheet" href="{{url('css/app.css')}}">
	<link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
</head>

<body>
<div class="container">
	<div align="center" id="search_div" style="width: 80%" >
		<form action="{{route('search')}}" method="post">
			{{csrf_field()}}
			<div class="navbar-form" role="search">
			<img src="{{asset('images/logo.png')}}"><br>
<!-- 			<div id="search_text_title" class="mobile_freind_font">No Ads. No Partner Sites. Just real results.</div> -->
			<br>
		        <div class="input-group" style="padding: 30px 0px;">
		            <input class="form-control" placeholder="Search" name="search_word" id="search_word" value="{{$search_word or ''}}" type="text">
		            <div class="input-group-btn">
		                <button class="btn btn-default" type="submit">
		                	<i class="glyphicon glyphicon-search"></i>
		                </button>
		            </div>
		        </div>
		    </div>
<!--
		    <div style="font-size: 20px; color: #AAAAAA;">
		    Only see what you ask for. &nbsp;&nbsp;
		    <div><a href="about"style="cursor: pointer;">Learn More.</a></div>
-->
		    </diva>
		</form>
	</div>
</div>
</body>

<style>
img
{
    max-width: 100%;
    min-width: 100px;
    height: auto;
}


/* Small devices (landscape phones, 544px and up) */
@media (min-width: 544px) {  
  .mobile_freind_font {font-size:1.5rem;} /*1rem = 16px*/
}
 
/* Medium devices (tablets, 768px and up) The navbar toggle appears at this breakpoint */
@media (min-width: 768px) {  
  .mobile_freind_font {font-size:2rem;} /*1rem = 16px*/
}
 
/* Large devices (desktops, 992px and up) */
@media (min-width: 992px) { 
  .mobile_freind_font {font-size:2.5rem;} /*1rem = 16px*/
}
 
/* Extra large devices (large desktops, 1200px and up) */
@media (min-width: 1200px) {  
  .mobile_freind_font {font-size:3rem;} /*1rem = 16px*/    
}










#search_div {
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translateX(-50%) translateY(-50%);
}

#search_text_title{
	
	font-size: 27pt;
	color: #777777;
}




.searchbox{
	border-bottom: solid 1px #CCCCCC;
	display: grid;
	height: 100px;
}

input[type=text] {
    box-sizing: border-box;
    border: none;
    border-radius: 4px;
    font-size: 20pt;
/*    background-color: #EEEEEE;*/
/*    background-image: {{asset('images/searchicon.png')}};*/
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 5px 20px 5px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}
input[type=text]:focus {
    width: 100%;
}
body{
	background: #f7f7f7;
}

</style>
<script src="{{url('js/app.js')}}"></script>
</html>