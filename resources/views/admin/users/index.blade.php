@extends('layouts.admin')




@section('content')


    <h1>Users</h1>


     <table class="table">
         <thead>
           <tr>
             <th>Id</th>
             <th>Photo</th>
             <th>Name</th>
             <th>Email</th>
             <th>Role</th>
             <th>Status</th>
             <th>Created</th>
             <th>Updated</th>
           </tr>
         </thead>

         @if($users)

             @foreach($users as $user)

         <tbody>
           <tr>
             <td>{{$user->id}}</td>
             <td>@if(!empty($user->photo->file))
                 <img src="{{asset("images/".$user->photo->file)}}" height="50"  alt="image" >
                 @else
                     <img  src="{{asset('https://via.placeholder.com/50x50')}}"  alt="image">
                 @endif
             </td>


             <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>

             <td>{{$user->email}}</td>
             <td>{{$user->role ? $user->role->name : 'User has no role'}}</td>
             <td>{{$user->is_active == 1 ? 'Active' : 'Not Active' }}</td>
             <td>{{$user->created_at->diffForHumans()}}</td>
             <td>{{$user->updated_at->diffForHumans()}}</td>
           </tr>

           @endforeach

           @endif

         </tbody>
       </table>









@endsection