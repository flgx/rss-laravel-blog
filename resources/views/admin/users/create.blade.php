@extends('admin.layout.main')
@section('title')
    New User
@endsection

@section('content')
        <div class="row">
            <div class="col-lg-3 col-md-6">
            	{!! Form::open(['route' => 'admin.users.store','method' => 'POST']) !!}

            		<div class="form-group">
            			{!! Form::label('name','Name') !!}
            			{!! Form::text('name', null,['class'=> 'form-control','placeholder'=>'Type a name','required']) !!}
            		</div>
            		<div class="form-group">
            			{!! Form::label('email','E-mail') !!}
            			{!! Form::email('email', null,['class'=> 'form-control','placeholder'=>'youremail@gmail.com','required']) !!}
            		</div>
            		<div class="form-group">
            			{!! Form::label('password','Password') !!}
            			{!! Form::password('password',['class'=> 'form-control','required']) !!}
            		</div>
            		<div class="form-group">
            			{!! Form::label('type','User Type') !!}
            			{!! Form::select('type',[''=>'Select type of user','member'=> 'Member','admin' => 'Administrator'],null,['class'=> 'form-control','required']) !!}
            		</div>
            		<div class="form-group">
            			{!! Form::submit('Add User',['class'=>'btn btn-primary']) !!}
            		</div>

            	{!! Form::close() !!}
            </div>
        </div>
        <!-- /.row -->


@endsection