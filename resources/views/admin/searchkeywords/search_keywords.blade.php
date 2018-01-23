@extends('admin.layout.admin')

@section('content')

<div>
	<div class="row">
		<div class="col-md-12">
			<h1>Search keywords</h1><br>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2" >
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Search keyword</th>
						<th>IP</th>
						<th>Search Count</th>
						<th>Date</th>
					</tr>
				</thead>
				<tbody>

				@forelse($keywords as $keyword)
				<tr>
					<td>{{ $keyword->keyword }}</td>
					<td>{{ $keyword->ip }}</td>
					<td>{{ $keyword->search_count }}</td>
					<td>{{ $keyword->updated_at->diffForHumans() }}</td>
				</tr>
				@empty
				<div class="post">
				    <h3>Nothing posts!</h3>
				</div>
				@endforelse
				</tbody>
			</table>

			<div class="row">
				<div class="col-md-12">
					{{ $keywords->links() }}
				</div>
			</div>

		</div>
	</div>
</div>
@endsection

<style>
	.th{
		text-align: center;
	}

	tr:nth-child(even){
		background: #eee;
	}

</style>