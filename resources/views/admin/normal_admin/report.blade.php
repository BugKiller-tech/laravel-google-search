@extends('admin.layout.admin')

@section('content')


<div class="navbar">


	
	<a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Make Request</a>
	<div class="modal fade" id="modal-id">
		<div class="modal-dialog">
			{!! Form::open(['route'=>'restrict.store', 'method'=>'post']) !!}
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">write your request url below</h4>
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
	   Site lists removed from searching result.
	</a>

	@if(!empty($restricts))
		@forelse($restricts as $restrict)

				<a href="#" class = "list-group-item col-md-10">{{$restrict->url}}</a>
				<div class = "list-group-item col-md-2 alert alert-danger">
				@if($restrict->status==1)
					Accepted
				@else
					Not Accepted
				@endif
				</div>
		@empty
			<li>No data</li>
		@endforelse
	@endif

	</div>

</div>
@endsection