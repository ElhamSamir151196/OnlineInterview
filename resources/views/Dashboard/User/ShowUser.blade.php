@extends('layouts/Dashboard_main')

@section('content')  

<style>
    .btnStyle{
        display:inline-block;
    }

    .btnx{
        padding: 15px 70px;
        margin: 0px 50px;
       
    }
</style>
             
        @if(session()->has('danger'))
                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                    <b>{{session('danger')}}</b>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

         @endif

         @if(session()->has('warning'))
                <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
                    <b>{{session('warning')}}</b>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
    
        @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                    <b>{{session('success')}}</b>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

         @endif


        <div class="card mt-2 mb-2">
            <div class="card-header">
            
                <h4 class="text-primary"> User Number {{$user->id}}</h4>


            </div>
            <div class="card-body">
            <table class="table">
                
            <tr>  <th scope="row" colspan="2"> <legend>Personal Information </legend> </th></tr>

                             <tr>  <th scope="row">Full Name </th><td>   <p>{{$user->name}} {{$user->Second_name}}</p> </td> </tr> 
                             <tr>  <th scope="row">E-mail</th><td>   <p>{{$user->email}}</p> </td> </tr>
                             <tr>  <th scope="row">Phone</th><td> <p>{{$user->Phone}} </p>  </td> </tr>
                             <tr>  <th scope="row">Category</th><td>  <p>{{$user->Category }} </p> </td> </tr>
               
                <tr>  <th scope="row" colspan="2"> <legend>Onine Tests </legend> </th></tr>

                            

                             <tr>  <th scope="row" >IQ</th><td>  <p>{{$user->IQGrade }} </p> </td> </tr>
                             <tr>  <th scope="row">IQ Flag</th><td>  
                             @if($user->IQFlag == "F")    
                             <p>NOT Tested yet</p> 
                             @else
                             <p>Tested </p>
                            @endif
                            </td> </tr>

                             <tr>  <th scope="row">English</th><td>  <p>{{$user->EnglishGrade }} </p> </td> </tr>

                             <tr>  <th scope="row">English Flag</th><td>  
                             @if($user->EnglishFlag == "F")    
                             <p>NOT Tested yet</p> 
                             @else
                             <p>Tested </p>
                            @endif    
                             </td> </tr>

                             <tr>  <th scope="row">Technical</th><td>  <p>{{$user->TechnicalGrade }} </p> </td> </tr>

                             <tr>  <th scope="row">Technical Flag</th><td> 
                             @if($user->TechnicalFlag == "F")    
                             <p>NOT Tested yet</p> 
                             @else
                             <p>Tested </p>
                            @endif    
                             </td> </tr>
            </table> 
            </div>
                            
        </div>
        <div class="card mt-2 mb-2">
            <div class="card-body">
            

                <form action="{{url('/user').'/'.$user->id}}" class="btnStyle " method="POST">
                @csrf
                @method('delete')                    
                    <button class="btn btn-danger  btn-sm btnx">Delete</button>
                </form>   
                    <a href="{{route('user.edit', $user->id)}}" class="btn btn-warning btn-sm float-right btnx">Edit</a>
                    <a href="{{route('user.edit_password', $user->id)}}" class="btn btn-warning btn-sm float-right btnx">Peset Password</a>
   
            </div>
        </div>
 
 @endsection   