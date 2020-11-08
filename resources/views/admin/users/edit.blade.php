@extends('layouts.admin')




@section('content')

<div class="row">


    <h1>Edit users</h1>


    <div class="col-sm-3">
        @if(!empty($user->photo->file))

            <img src="{{asset("images/".$user->photo->file)}}" class="img-responsive img-rounded"  alt="image" >
        @else

            <img  src="{{asset('https://via.placeholder.com/150x150')}}"  alt="image">

        @endif






    </div>


    <div class="col-sm-9">


        {!!   Form::model($user,['method'=>'PATCH','action'=>['AdminUsersController@update',$user->id],'files'=>true])   !!}


        <div class="form-group">
            {!! Form::label('name','Name:') !!}
            {!! Form::text('name',null ,['class'=>'form-control']) !!}

        </div>

        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::email('email',null,['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::label('role_id', 'Role:') !!}
            {!! Form::select('role_id',[''=>'Chose Option'] + $roles , null ,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('is_active','Status:') !!}
            {!! Form::select('is_active',array(1=>'Active', 0=>'Not Active') ,0 ,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('photo_id','Photo:') !!}
            {!! Form::file('photo_id' , null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password','Password:') !!}
            {!! Form::password('password',['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Create User',['class'=>'btn btn-primary']) !!}

        </div>

        {!! Form::close() !!}

    </div>

</div>


    <div class="row">
         @include('includes.form_error')

    </div>

@endsection

