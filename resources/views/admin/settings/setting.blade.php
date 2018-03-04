@extends('layouts.app')

@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">Settings</div>

		<div class="panel-body">
			@if(count($errors) > 0)
				<ul class="list-group">
					@foreach($errors->all() as $error)
						<li class="list-group-item text-danger">{{ $error }}</li>
					@endforeach
				</ul>
			@endif

			<form action="{{ route('settings.update') }}" method="post">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="site_name">Site Name</label>
                <input type="text" name="site_name" class="form-control" value="{{ $setting->site_name }}">
				</div>

				<div class="form-group">
					<label for="contact_number">Contact Number</label>
                <input type="text" name="contact_number" class="form-control" value="{{ $setting->contact_number }}">
				</div>

				<div class="form-group">
					<label for="contact_email">Contact Email</label>
                <input type="email" name="contact_email" class="form-control" value=" {{ $setting->contact_email }}">
				</div>

				<div class="form-group">
					<label for="address">Address</label>
                <input type="address" name="address" class="form-control" value="{{ $setting->address }}">
				</div>

				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-success"  type="submit">Save Settings</button>
					</div>
					
				</div>

			</form>

		</div>


	</div>
	



@stop