@extends ('layout.main')

@section('content')
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
		{{ Form::open(array('url'=>'/register','method'=>'post')) }}
			<div class="form-group">
				{{ Form::label('username','Username') }}
				{{ Form::text('username',null,array('class'=>'form-control')) }}
				@if ($errors->has('username'))
					{{ $errors->first('username') }}
				@endif

			</div>

			<div class="form-group">
				{{ Form::label('email','Email') }}
				{{ Form::text('email',null,array('class'=>'form-control')) }}
				@if ($errors->has('email'))
					{{ $errors->first('email') }}
				@endif

			</div>

			<div class="form-group">
				{{ Form::label('password','Password') }}
				{{ Form::password('password', array('class'=>'form-control')) }}
				@if ($errors->has('password'))
					{{ $errors->first('password') }}
				@endif
			</div>

			<div class="form-group">
				{{ Form::label('password_confirmation','Password') }}
				{{ Form::password('password_confirmation', array('class'=>'form-control')) }}
				@if ($errors->has('password_confirmation'))
					{{ $errors->first('password_confirmation') }}
				@endif
			</div>

			{{ Form::submit('Register', array('class'=>'btn btn-primary')) }}
		</div>
		{{Form::close()}}
	</div>
@stop