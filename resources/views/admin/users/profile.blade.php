@extends('layouts.app')

@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">Edit Profile</div>

		<div class="panel-body">
			@if(count($errors) > 0)
				<ul class="list-group">
					@foreach($errors->all() as $error)
						<li class="list-group-item text-danger">{{ $error }}</li>
					@endforeach
				</ul>
			@endif

			<form action="{{ route('user.profile.update') }}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" name="name" class="form-control" value="{{ $user->name }}">
				</div>

				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email" class="form-control" value="{{ $user->email }}">
				</div>

				<div class="form-group">
					<label for="password">New Password</label>
					<input type="password" name="password" class="form-control">
				</div>

				{{--  <div class="form-group">
						<div class="checkbox">
							<label><input type="checkbox" name="admin" value="1">Admin</label>
						</div>
				</div>  --}}

				<div class="form-group">
					<label for="avatar">Avatar</label>
					<input type="file" name="avatar" class="form-control">
				</div>

				<div class="form-group">
					<label for="about">About</label>
					<textarea name="about" id="about" cols="5" rows="5" class="form-control">{{ $user->profile->about }}</textarea>
				</div>

				<div class="form-group">
					<label for="facebook">Facebook</label>
					<input type="text" name="facebook" class="form-control" value="{{ $user->profile->facebook }}">
				</div>

				<div class="form-group">
					<label for="youtube">Youtube</label>
					<input type="text" name="youtube" class="form-control" value="{{ $user->profile->youtube }}">
				</div>

				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-success"  type="submit">Save Profile</button>
					</div>
					
				</div>

			</form>

		</div>


	</div>
	



@stop