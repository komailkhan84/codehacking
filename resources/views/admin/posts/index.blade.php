@extends('layouts.admin')



@section('content')

    <h1>Posts</h1>

     <table class="table table-hover">
         <thead>
           <tr>
             <th>id</th>
             <th>Photo</th>
             <th>Owner</th>
             <th>Category</th>
             <th>Title</th>
             <th>Body</th>
             <th>Post Link</th>
             <th>Comments</th>
             <th>Created</th>
             <th>Updated</th>
           </tr>
         </thead>

         @if($posts)

             @foreach($posts as $post)

         <tbody>
           <tr>
             <td>{{$post->id}}</td>
{{--
            <td><img height="50" src="{{$post->photo ? $post->photo->file : 'https://via.placeholder.com/50x50' }}" alt=""></td>--}}

               <td>@if(!empty($post->photo->file))
                       <img src="{{asset("images/".$post->photo->file)}}" height="60"  alt="image" >
                   @else
                       <img  src="{{asset('https://via.placeholder.com/50x50')}}"  alt="image">
                   @endif
               </td>


             <td><a href="{{route('admin.posts.edit', $post->id)}}">{{$post->user->name}}</a></td>

             <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>

             <td>{{$post->title}}</td>
             <td>{{$post->body}}</td>
               <td><a href="{{route('home.post', $post->id)}}">View Post</a></td>
               <td><a href="{{route('admin.comments.show', $post->id)}}">View Comments</a></td>
             <td>{{$post->created_at->diffForhumans()}}</td>
             <td>{{$post->updated_at->diffForhumans()}}</td>
           </tr>

           @endforeach

           @endif

         </tbody>
       </table>




@stop
