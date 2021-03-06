@extends('front-layout.app')

@section('front-content')
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('{{asset('assets/img/home-bg.jpg')}}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>My personal blog</h1>
                        <hr class="small">
                        <span class="subheading">Blog example using RSS Reader.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            @if(Auth::check())
                <div id="user_id" style="display:none;">{{Auth::user()->id}}</div>
            @else
                <div id="user_id" style="display:none;"></div>

            @endif

            @foreach($posts as $post)
                <div class="post-preview">
                    <div id="{{$post->id}}" class="btn btn-danger add-favorite pull-right">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                    </div>
                    <a href="{{ url('/post/'.$post->id.' ') }}">
                        <h2 class="post-title">
                            {{$post->title}}
                        </h2>
                    </a>
                    <h3 class="post-subtitle">
                        {{strip_tags($post->content)}}
                    </h3>
                    <p class="post-meta">Posted by <a href="#">{{$post->user->name}}</a> on {{$post->created_at}}</p>
                </div>
                <hr>
            @endforeach
                <!-- Pager -->
                <ul class="pager">
                    {!! $posts->render() !!}
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('front-js')
<script>
    $(document).ready(function(){
        $('.add-favorite').hide();
        var user_id = $('#user_id').text();
        var post_id = 0;
        var url = '{{route('savefavorite')}}';
        var token = '{{Session::token()}}';
        var mythis;

        if(user_id != ""){
            console.log('logeado');
            $('.add-favorite').show();
            $('.add-favorite').on('click',function(e){

                post_id = $(this).attr('id');
                mythis = this;
                $.ajax({
                    method: 'POST',
                    url: url,
                    data:{ post_id:post_id, user_id:user_id, _token:token}

                }).done(function(msg){
                    
                    if(msg['message'] == 'Error'){
                        alertify.error("<strong>Already you have this post on your favorites.</strong>");

                    }else{
                        alertify.success("<strong>Added to your favorite list.</strong>");
                        $(mythis).empty();
                        $(mythis).html('<i class="fa fa-check" aria-hidden="true"></i>');
                    }
                });    
            });
        }else{
            
            $('.add-favorite').hide();
        }
    });
</script>
@endsection
