@extends('layouts.admin')



{{--@section('styles')--}}

{{--        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/basic.min.css">--}}

{{--@stop--}}


@section('content')


        <h1>Upload Media</h1>

        <form  action="{{ route('admin.media.store') }}" method="post"   enctype="multipart/form-data" >
            {{ csrf_field() }}

            <input type="file" name="file" class="form-control" multiple required>
            <br>
            <input class="btn btn-primary" type="submit" value="Add Photos">

        </form>







{{--       {!!   Form::open(['method'=>'POST','action'=>'AdminMediasController@store', 'class'=>'dropzone'])   !!}--}}

{{--        <div class="form-group">--}}

{{--            {!! Form::file('photo_id' , null,['class'=>'form-control','multiple']) !!}--}}
{{--        </div>--}}

{{--        <div class="form-group">--}}
{{--            {!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}--}}

{{--        </div>--}}

{{--       {!! Form::close() !!}--}}





@stop


{{--@section('scripts')--}}

{{--        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.css"></script>--}}

{{--@stop--}}

