@extends('admin.layout.main')
@section('title','My Favorite Posts')

@section('content')
        <div class="row">
            <div class="col-lg-12 col-md-6">
				<table class="table">
					<thead>
						<th>ID</th>
						<th>Name</th>
						<th>Action</th>
					</thead>
					<tbody>
						@foreach($favorites as $favorite)
							<tr>
								<td>{{$favorite->id}}</td>
								<td>{{$favorite->post->title}}</td>
								<td>
								 <a href="{{route('admin.favorites.destroy',$favorite->id)}}" onclick="return confirm('Are you sure?');" class="btn btn-danger">Delete</a> 
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
				{!! $favorites->render() !!}
            </div>
        </div>
        <!-- /.row -->
@endsection