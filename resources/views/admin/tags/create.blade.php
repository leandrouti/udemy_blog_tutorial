@extends('layouts.app')

@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">Create a new Tag</div>

		<div class="panel-body">
			@if(count($errors) > 0)
				<ul class="list-group">
					@foreach($errors->all() as $error)
						<li class="list-group-item text-danger">{{ $error }}</li>
					@endforeach
				</ul>
			@endif

			<form action="{{ route('tags.store') }}" method="post">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="tag">Tag</label>
					<input type="text" name="tag" class="form-control">
				</div>

				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-success"  type="submit">Store Tag</button>
					</div>
					
				</div>

			</form>

		</div>


	</div>
	



@stop