@extends('layouts.blog-post')



@section('content')






    <!-- Blog Post -->

    <!-- Title -->
    <h1>{{$post->title}}</h1>

    <!-- Author -->
    <p class="lead">
        by <a href="#">{{$post->user->name}}</a>
    </p>

    <hr>

    <!-- Date/Time -->
    <p><span class="glyphicon glyphicon-time"></span> Posted {{$post->created_at->diffForHumans()}}</p>

    <hr>

    <!-- Preview Image -->

    @if(!empty($post->photo->file))

        <img src="{{asset("images/".$post->photo->file)}}" height="50" class="img-responsive img-rounded"  alt="image" >
    @else

        <img  src="{{asset('https://via.placeholder.com/150x150')}}"  alt="image">

    @endif

    <img class="img-responsive" src="{{$post->photo->file}}" alt="">

    <hr>

    <!-- Post Content -->
    <p>{{$post->body}} </p>


    <hr>

    @if(Session::has('comment_message'))

        {{session('comment_message')}}

    @endif

    <!-- Blog Comments -->


    @if(Auth::check())



    <!-- Comments Form -->
    <div class="well">
        <h4>Leave a Comment:</h4>

        {!!   Form::open(['method'=>'POST','action'=>'PostCommentsController@store'])   !!}

             <input type="hidden" name="post_id" value="{{$post->id}}">

            <div class="form-group">
                {!! Form::label('body','Body:') !!}
                {!! Form::textarea('body',null ,['class'=>'form-control','rows'=>3]) !!}

            </div>

            <div class="form-group">
                    {!! Form::submit('Submit comment',['class'=>'btn btn-primary']) !!}

            </div>

        {!! Form::close() !!}

    </div>

@endif

    <hr>

    <!-- Posted Comments -->




    <!-- Comment -->
    <div class="media">
        <a class="pull-left" href="#">
            <img class="media-object" src="http://placehold.it/64x64" alt="">
        </a>
        <div class="media-body">
            <h4 class="media-heading">Start Bootstrap
                <small>August 25, 2014 at 9:30 PM</small>
            </h4>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
        </div>
    </div>

    <!-- Comment -->
    <div class="media">
        <a class="pull-left" href="#">
            <img class="media-object" src="http://placehold.it/64x64" alt="">
        </a>
        <div class="media-body">
            <h4 class="media-heading">Start Bootstrap
                <small>August 25, 2014 at 9:30 PM</small>
            </h4>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            <!-- Nested Comment -->
            <div class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" src="http://placehold.it/64x64" alt="">
                </a>
                <div class="media-body">
                    <h4 class="media-heading">Nested Start Bootstrap
                        <small>August 25, 2014 at 9:30 PM</small>
                    </h4>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
            </div>
            <!-- End Nested Comment -->
        </div>
    </div>











@stop