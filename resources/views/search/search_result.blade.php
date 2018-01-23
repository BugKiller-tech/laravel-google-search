@extends('search.main')

@section('search_word')
@if(!empty($search_word))
{{$search_word}}
@endif
@endsection
	
@section('content')
<div class="row col-sm-5 col-sm-offset-1" id="search_result">
<br><br>
	@if(!empty($results))
		@forelse($results as $result)
		<div class="Item">
			<a href="{{$result->link}}" target="_blank"><u>{{$result->title}}</u></a>
			<div style="color: #00AA00; word-wrap: break-word;">{{$result->link}}</div>
			<div style="float: left;">
			 	@if(!empty($result->pagemap->cse_thumbnail[0]->src))
					<img src="{{$result->pagemap->cse_thumbnail[0]->src}}" width="50" height="50">
				@endif 
			</div>
			<div>
				{!!$result->htmlSnippet!!}
			</div>
			<br><br>
		</div>

		@empty
			<div>No result!</div>
		@endforelse
	@endif
</div>


<style>

@media (max-width: 768px) {  
  #search_result{
	margin-left: 1%;
  }
}

a {
	font-size: 17px;
	color: #0000FF;
}
.Item:hover{
	background: #EEEEEE;
}

</style>
@endsection