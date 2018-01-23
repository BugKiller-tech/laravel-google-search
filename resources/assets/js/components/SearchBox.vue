<template lang="html">
  <div class="searchbox" >
		<br>
<!-- 		<div class="row col-sm-10" style="margin-left: 2%;">
			{{-- <form action="{{route('search')}}" method="post"> --}}
				{{csrf_field()}}
				<div class="navbar-form " role="search">
				<img src="{{asset('images/logo.png')}}" height="30px;">
			        <div class="input-group" style="width: 50%;">
			            <input class="form-control" placeholder="Search" name="search_word" id="srch-term" type="text" v-on:keyup.enter="getResult">
			            <div class="input-group-btn">
			                <button class="btn btn-default" style="background: rgb(72, 166, 72);" type="submit">
			                	<i class="glyphicon glyphicon-search"></i>
			                </button>
			            </div>
			        </div>
			    </div>
			{{-- </form> --}}
		</div>
		-->
	</div>
 
</template>

<style>
		
	.searchbox{
		border-bottom: solid 1px #CCCCCC;
		display: grid;
		height: 100px;
	}

	input[type=text] {
	    box-sizing: border-box;
	    border: none;
	    border-radius: 4px;
	    font-size: 16px;
	    background-color: #EEEEEE;
	    background-image: {{url('images/searchicon.png')}};
	    background-position: 10px 10px; 
	    background-repeat: no-repeat;
	    padding: 5px 20px 5px 40px;
	    -webkit-transition: width 0.4s ease-in-out;
	    transition: width 0.4s ease-in-out;
	}

	input[type=text]:focus {
	    width: 50%;
	}


</style>
	




<script>
	export default{
		data(){

		},

		methods: {
			getResult(){
				// this.$emit('messagesent', {
				// 	message: this.messageText,
				// 	user: {
				// 		name: 'hkg328' //$('.navbar-right .dropdown-toggle').text();
				// 	}
				// });
				console.log(this.messageText);
			}
		}
	}	
</script>

<style lang="css">

	a {
		font-size: 15px;
		color: #0000FF;
	}
</style>