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

	<div class="searchbox row" >
		<br>
		<div class="col-sm-8" style="margin-left: 1%;">
			<form action="{{route('search')}}" method="post">
				{{csrf_field()}}
				<div class="navbar-form" role="search">
					<img src="{{asset('images/logo.png')}}" height="30px;">
			        <div class="input-group">
			            <input class="form-control" placeholder="Search" name="search_word" id="search_word" value="{{$search_word or ''}}" type="text">
			            <div class="input-group-btn">
			                <button class="btn btn-default" type="submit">
			                	<i class="glyphicon glyphicon-search"></i>
			                </button>
			            </div>
			        </div>
			    </div>
			</form>
		</div>
		<div class="col-sm-8"></div>
	</div>

	<input type="hidden" name="startPos" id="startPos" value="{{$startPos or 1 }}">

	@yield('content')
	
	<div id="loading_state" style="visibility: hidden;"  class="row col-sm-6 col-sm-offset-1">
		<img src="{{asset('images/loading.gif')}}" height="150px;">
	</div>
	<br><br><br>

	<style>
		
		.searchbox{
			border-bottom: solid 1px #CCCCCC;
			display: grid;
			/*height: 100px;*/
		}

		input[type=text] {
		    box-sizing: border-box;
		    border: none;
		    border-radius: 4px;
		    font-size: 20pt;
		    background-color: #EEEEEE;
		    background-image: {{url('images/searchicon.png')}};
		    background-position: 10px 10px; 
		    background-repeat: no-repeat;
		    padding: 5px 20px 5px 40px;
		    -webkit-transition: width 0.4s ease-in-out;
		    transition: width 0.4s ease-in-out;
		}

		input[type=text]:focus {
		    width: 100%;
		}

	</style>
	




	<script src="{{url('js/app.js')}}"></script>
	{{-- <script src="{{url('js/bootstrap.js')}}"></script> --}}
	<script>



		$(document).ready(function(){
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
		});

		
		$(window).scroll(function() {
			if($(window).scrollTop() + $(window).height() == $(document).height()) {
				moreResult();
			}
		});


		function moreResult(){

			if($('#search_word').val()==""){
				return;
			}
			if($("#loading_state").css("visibility")=="visible"){
				return;
			}

			$("#loading_state").css("visibility", "visible");
	
	
			axios.post('/more_result', { search_word: $('#search_word').val(), startPos: $('#startPos').val() })
			  .then(function(response){
		    	// console.log('saved successfully')
		    	 $('#startPos').val(response.data.startPos);

		    	 // alert(JSON.stringify(response.data.results));
		    	 for(i=0;i<response.data.results.length; i++){
					// alert(response.data.results[i].title);
					
					$("#search_result").append('<div class="Item">');
					$("#search_result").append('<a href="' + response.data.results[i].link + '" target="_blank"><u>'+ response.data.results[i].title + '</u></a><br>');
					$("#search_result").append('<div  style="color: #00AA00;  word-wrap: break-word;">'+ response.data.results[i].link + '</div>');
					$("#search_result").append('<div style="float: left;">');
					 if(response.data.results[i].pagemap.cse_thumbnail!==undefined){
					 	$("#search_result").append('<img src="' + response.data.results[i].pagemap.cse_thumbnail[0].src + '" width="50" height="50">');
					 }
					$("#search_result").append('</div>');
					$("#search_result").append('<div>');
					$("#search_result").append(response.data.results[i].htmlSnippet);
					$("#search_result").append('</div>');
					$("#search_result").append('<br><br>');
					$("#search_result").append('</div>');



					$("#loading_state").css("visibility", "hidden");
		    	}
		    }); 
			
		}

</script>
	
</body>
</html>