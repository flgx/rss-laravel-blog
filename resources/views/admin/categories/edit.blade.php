@extends('admin.layout.main')
@section('title')
    Edit Category
@endsection

@section('content')
        <div class="row">
            <div class="col-lg-3 col-md-6">
            	{!! Form::open(['route' => ['admin.categories.update',$category->id],'method' => 'PUT']) !!}

            		<div class="form-group">
            			{!! Form::label('name','Name') !!}
            			{!! Form::text('name', $category->name,['class'=> 'form-control','placeholder'=>'Type a name for the category','required']) !!}
            		</div>
            		<div class="form-group">
            			{!! Form::submit('Edit Category',['class'=>'btn btn-primary']) !!}
            		</div>

            	{!! Form::close() !!}
            </div>
        </div>
        <!-- /.row -->


@endsection