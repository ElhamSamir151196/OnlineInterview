@extends('layouts/Dashboard_main')


@section('content')  
<meta charset="UTF-8">
    <title>Laravel Image Upload Tutorial Example From Scratch</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

    <!---------------------- css style  ----------------------->
    <style class="">
       
	   body{
		background: #f8f8f8;
	   }
	   .clear{
		   clear:both;
	   }
	   
        h2 {
        font-family: "Roboto", sans-serif;
        font-size: 26px;
        line-height: 1;
        color: #454cad;
        margin-bottom: 0;
        }

        p {
        font-family: "Roboto", sans-serif;
        font-size: 18px;
        color: #5f6982;
        }
        
        .panel.panel-default {
            width: 100%;
        }

        input.btn.btn-info {
            margin-left: 40%;
        }

        .input-question{
            height: 6rem;
        }
    </style>

{{--@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif--}}

@if(session()->has('success'))
                <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
                    <b>{{session('success')}}</b>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

@endif

<div class="container">
        <div class="row centered-form">
       
            <div class="panel panel-default">
                <div class="">
                        <h3 class="panel-title">Please Enter New Question </h3>
                        </div>
                        <div class="panel-body">
                        <form action="{{url('/create_Question')}}" method="POST" class="form" role="form" accept-charset="utf-8" enctype="multipart/form-data">
                        @csrf
                            
                                <!--------------------------- Question --------------------------------->
                                    <div class="form-group">
                                   <!-- <input type="text" name="question" id="question" class="form-control input-sm input-question" placeholder="Question">-->
                                        <textarea type="text" name="question" id="question" class="form-control input-sm input-question" placeholder="Question"></textarea>
                                    </div>
                                

                                @if ($errors->has('question'))
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->get('question') as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <!--------------------------- answer 1 --------------------------------->
                                <div class="form-group">
                                    <input type="text" name="answer1" id="answer1" class="form-control input-sm" placeholder="Answer Number 1">
                                    </div>
                                

                                @if ($errors->has('answer1'))
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->get('answer1') as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <!--------------------------- answer 2 --------------------------------->
                                <div class="form-group">
                                    <input type="text" name="answer2" id="answer2" class="form-control input-sm" placeholder="Answer Number 2">
                                    </div>
                                

                                @if ($errors->has('answer2'))
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->get('answer2') as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <!--------------------------- answer 3 --------------------------------->
                                <div class="form-group">
                                    <input type="text" name="answer3" id="answer3" class="form-control input-sm" placeholder="Answer Number 3">
                                    </div>
                                

                                @if ($errors->has('answer3'))
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->get('answer3') as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <!--------------------------- answer 4 --------------------------------->
                                <div class="form-group">
                                    <input type="text" name="answer4" id="answer4" class="form-control input-sm" placeholder="Answer Number 4">
                                    </div>
                                

                                @if ($errors->has('answer4'))
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->get('answer4') as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif



                            <!---------------------------- Correct answer--------------------------- -->
                            <div class="form-group">
                                    <label for="inputEmail3" control-label>Correct Answer Number</label>
                                    <select class="form-control js-example-basic-single" name="correctAnswerNumber" id="correctAnswerNumber">
                                        <option value=""></option>
                                        @for( $x = 1; $x <= 4; $x++)
                                        <option value="{{ $x}}">{{ $x }}</option>
                                        @endfor
                                    </select>
                            </div>
                                
                            @if ($errors->has('correctAnswerNumber'))
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->get('correctAnswerNumber') as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                            <!---------------------------- Question Category--------------------------- -->
                            <div class="form-group">
                                    <label for="inputEmail3" control-label>Question Category</label>
                                    <select class="form-control js-example-basic-single" name="qusetionCategory" id="qusetionCategory">
                                        <option value=""></option>
                                        
                                        <option value="1">English</option>
                                        <option value="2">IQ</option>
                                        <option value="3">Technical</option>
                                       
                                    </select>
                            </div>
                                
                            @if ($errors->has('qusetionCategory'))
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->get('qusetionCategory') as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                               
                                  
                                
                                 <div class="clear"></div>                       
                            <input type="submit" value="Add" class="btn btn-info ">
                        </form>
                    </div>
                
            </div>
        </div>
    </div>

    
@endsection  

