@extends('admin.layout.admin')

@section('content')


<div class="navbar">

{{-- 	@if ($errors->has('url'))
	<div>
        <span class="help-block">
            <strong>{{ $errors->first('url') }}</strong>
        </span>
    </div>
    @endif
 --}}


	<div class="container-fluid"  style="font-size: 20px;">
	<br><br>
	<a href = "#" class = "list-group-item active">
	   Requested Users
	</a>

	@if(!empty($users))

	<table width="100%">
		<thead>
			<tr>
				<td >Name</td>
				<td >email</td>
				<td >Action</td>
			</tr>
		</thead>
		<tbody>
		@forelse($users as $user)
		<tr>
			<td>{{$user->name}}</td>
			<td>{{$user->email}}</td>
			<td>
				<a href="/admin/user_accept/{{$user->id}}" class = "list-group-item col-md-11">Accept</a>
			</td>
		</tr>
		@empty
			<li>Nothing requested user</li>
		@endforelse
		</tbody>
	</table>
	@endif

	{{-- @if(!empty($restricts))
		@forelse($restricts as $restrict)
			{!! Form::open(['route'=>['restrict.destroy', $restrict->id] , 'method'=> 'DELETE']) !!}
				<a href="#" class = "list-group-item col-md-11">{{$restrict->url}}</a>
				<input type="submit" value="delete" class="btn btn-danger col-md-1" style="height: 100%; vertical-align: middle;">	
			{!! Form::close() !!}
		@empty
			<li>No data</li>
		@endforelse
	@endif
 --}}
	</div>

</div>
@endsection