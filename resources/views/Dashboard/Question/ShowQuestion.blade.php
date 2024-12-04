@extends('layouts/Dashboard_main')

@section('content')  

<style>
    .btnStyle{
        display:inline-block;
    }

    .btnx{
        padding: 15px 70px;
        margin: 0px 141px;
       
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
            
                <h4 class="text-primary"> Question Number {{$question->id}}</h4>


            </div>
            <div class="card-body">
            <table class="table">
               
                             <tr>  <th scope="row">Question </th><td>   <p>{{$question->question}}</p> </td> </tr> 
                             <tr>  <th scope="row">Answer # 1</th><td>   <p>{{$question->answer1}}</p> </td> </tr>
                             <tr>  <th scope="row">Answer # 2</th><td> <p>{{$question->answer2}}</p>  </td> </tr>
                             <tr>  <th scope="row">Answer # 3</th><td> <p>{{$question->answer3}}</p>  </td> </tr>
                             <tr>  <th scope="row">Answer # 4</th><td>   <p>{{$question->answer4}}</p> </td> </tr>
                             <tr>  <th scope="row">Correct Answer Number</th><td>   <p>{{$question->correctAnswerNumber}}</p> </td> </tr>
                             <tr>  <th scope="row">Test Type</th><td> 
                                @if($question->qusetionCategory == "1")
                                    <p>English</p>
                                @elseif($question->qusetionCategory == "2")
                                    <p>IQ</p>
                                @elseif($question->qusetionCategory == "3")
                                    <p>Technical</p>
                                @endif
                            </td> </tr>
            </table> 
            </div>
                            
        </div>
        <div class="card mt-2 mb-2">
            <div class="card-body">
            

                <form action="{{url('/question').'/'.$question->id}}" class="btnStyle " method="POST">
                @csrf
                @method('delete')                    
                    <button class="btn btn-danger  btn-sm btnx">Delete</button>
                </form>

                 

                  
                    <a href="{{route('question.edit', $question->id)}}" class="btn btn-warning btn-sm float-right btnx">Edit</a>
                
                        
            </div>
        </div>
 
 @endsection   