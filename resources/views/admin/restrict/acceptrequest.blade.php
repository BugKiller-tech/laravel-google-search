@extends('admin.layout.admin')

@section('content')


<div class="navbar">


	
	<a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Add new</a>
	<div class="modal fade" id="modal-id">
		<div class="modal-dialog">
			{!! Form::open(['route'=>'restrict.store', 'method'=>'post']) !!}
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Add Restrict site</h4>
				</div>
				<div class="modal-body">
					<div class="form-group"	>
						{!! Form::label('url', 'Url') !!}
						{!! Form::text('url', null, array('class'=>'form-control')) !!}
					</div>
				</div>


				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
			</div>
			{!! Form::close() !!}

		</div>
			
	</div>

	@if ($errors->has('url'))
	<div>
        <span class="help-block">
            <strong>{{ $errors->first('url') }}</strong>
        </span>
    </div>
    @endif



	<div class="container-fluid"  style="font-size: 20px;">
	<br><br>
	<a href = "#" class = "list-group-item active">
	   site lists requested from the admins
	</a>

	@if(!empty($restricts))
		@forelse($restricts as $restrict)
			{!! Form::open(['route'=>['accept_request', $restrict->id] , 'method'=> 'post']) !!}
				<a href="#" class = "list-group-item col-md-9">{{$restrict->url}}</a>
				<input type="submit" value="Accept" class="btn btn-danger col-md-1" style="height: 45px; margin-top: 2px; vertical-align: middle;">	
			{!! Form::close() !!}

			{!! Form::open(['route'=>['reject_request', $restrict->id] , 'method'=> 'post']) !!}
				<input type="submit" value="Reject" class="btn btn-danger col-md-1" style="height: 45px; margin-top: 2px; vertical-align: middle;">	
			{!! Form::close() !!}
		@empty
			<li>No data</li>
		@endforelse
	@endif

	</div>

</div>
@endsection