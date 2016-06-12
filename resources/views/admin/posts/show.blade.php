@extends('front-layout.app')
@section('title','Carrascosa Blog | '.$post->title)

@section('front-content')
    <header class="intro-header" style="background-image: url('{{asset('assets/img/post-bg.jpg')}}')">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                    <div class="post-heading">
                        <h1>{{$post->title}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Post Content -->
    <article>
        <div class="container">
            @if(Auth::check())
                <div id="user_id" style="display:none;">{{Auth::user()->id}}</div>
            @else
                <div id="user_id" style="display:none;"></div>
            @endif
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                    <div id="{{$post->id}}" class="btn btn-danger add-favorite pull-right">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                    </div>
                    {{$post->content}}
                </div>
            </div>
        </div>
    </article>

@endsection

@section('front-js')
<script>
    $(document).ready(function(){
        $('.add-favorite').hide();
        var user_id = $('#user_id').text();
        var post_id = 0;
        var url = '{{route('savefavorite')}}';
        var url2 = '{{route('savefavorite')}}';

        var token = '{{Session::token()}}';
        var mythis;

        if(user_id != ""){
        	    $.ajax({
                    method: 'GET',
                    url: url2,
                    data:{ post_id:post_id, user_id:user_id, _token:token}

                }).done(function(msg){
                    
                    if(msg['message'] == 'Error'){
                        alertify.confirm("Already you have this post on your favorites.");

                    }else{
                        alertify.success("Added to your favorite list.");
                    }
                });  
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