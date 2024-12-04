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
                        <form action="{{route('question.update' , $question->id)}}" method="POST" class="form">
                        @csrf
                        @method('put')   
                                <!--------------------------- Question --------------------------------->
                                    <div class="form-group">
                                   <!-- <input type="text" name="question" id="question" class="form-control input-sm input-question" placeholder="Question">-->
                                        <textarea type="text" name="question" id="question" class="form-control input-sm input-question" >
                                        {{$question->question}}
                                        </textarea>
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
                                    <textarea name="answer1" id="answer1" class="form-control input-sm">{{$question->answer1}}</textarea>
    
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
                                    <textarea name="answer2" id="answer2" class="form-control input-sm">{{$question->answer2}}</textarea>
    
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
                                    <textarea name="answer3" id="answer3" class="form-control input-sm">{{$question->answer3}}</textarea>
   
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
                                    <textarea name="answer4" id="answer4" class="form-control input-sm">{{$question->answer4}}</textarea>
    
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
                                        @if($question->correctAnswerNumber == "1")
                                        <option value="1" selected="selected">1</option>
                                        @else
                                        <option value="1">1</option>
                                        @endif
                                        @if($question->correctAnswerNumber == "2")
                                        <option value="2" selected="selected">2</option>
                                        @else
                                        <option value="2">2</option>
                                        @endif
                                        @if($question->correctAnswerNumber == "3")
                                        <option value="3" selected="selected">3</option>
                                        @else
                                        <option value="3">3</option>
                                        @endif
                                        @if($question->correctAnswerNumber == "4")
                                        <option value="4" selected="selected">4</option>
                                        @else
                                        <option value="4">4</option>
                                        @endif
                                        
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
                                        
                                        
                                       
                                        

                                        @if($question->qusetionCategory == "1")
                                        <option value="1" selected="selected">English</option>
                                        @else
                                        <option value="1" >English</option>
                                        @endif
                                        @if($question->qusetionCategory == "2")
                                        <option value="2" selected="selected">IQ</option>
                                        @else
                                        <option value="2">IQ</option>
                                        @endif
                                        @if($question->qusetionCategory == "3")
                                        <option value="3" selected="selected">Technical</option>
                                        @else
                                        <option value="3">Technical</option>
                                        @endif
                                       
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
                            <input type="submit" value="Update " class="btn btn-info ">
                        </form>
                    </div>
                
            </div>
        </div>
    </div>

    
@endsection  

