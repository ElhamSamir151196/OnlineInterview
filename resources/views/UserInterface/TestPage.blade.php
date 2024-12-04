@extends('layouts/UserInterface_main')

@section('User_content')  
<head>
	<title>
		Test
	
</title>
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
        
        <!-- Styles -->
    <style>
            /* html, body {
                background-color: #fff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            } */

            .choice{
                padding-left:20px;
            }

            .form-question{
                margin-left: -1.5rem;
				font-family: bold;
				font-size: 16px;
				font-weight: bold;
            }

            .question{
                margin:20px;
                color:black;
            }

            .timer{
                float:right;
            }
			.form-check-label{
				font-weight: 400;
				font-size: 16px;

			}
			input[type='radio']:after {
			width: 15px;
			height: 15px;
			border-radius: 10px;
			top: -3px;
			left: -1px;
			position: relative;
			background-color: #d1d4d1;
			content: '';
			display: inline-block;
			visibility: visible;
			/* border: 2px solid white; */
			}

			input[type='radio']:checked:after {
				width: 15px;
				height: 15px;
				border-radius: 10px;
				top: -3px;
				left: -1px;
				position: relative;
				background-color:#736c88ef;
				content: '';
				display: inline-block;
				visibility: visible;
				/* border: 2px solid white; */
			}
    </style>

@php ($CorrectAnswerNumber = [])
<input type="hidden" name="id" value="{{$id}}">

        <div class="container" >
			<div style="font-weight: 700; color:white; font-size: 20px;margin-top: 10px;border: 1px solid black;padding: 10px;background: #7d6ba3ef;margin-bottom: 100px;"class="animate__animated animate__fadeInRightBig timer">Submission closes in <span style="color:rgb(9, 9, 44)"id="time">2:00</span> minutes!</div>
            <form action="{{url('/submit_answer')}}" id="form" name="form" method="post" >
			@csrf

                    <!-- <div style="font-weight: 700; color:white; font-size: 20px;margin-top: 100px;border: 1px solid black;padding: 10px;background: #4c3499ef;"class="timer">Submission closes in <span id="time">10:00</span> minutes!</div> -->
                        <!-- Question 1-->
					@foreach($questions as $key => $question)	
                        <div class="question">
                            <div class="form-check">
								@if($key==0)
								<label class="form-question" style="display:inline">{{$key+1}}  . {{$question->question}}

								@else
								<label class="form-question" >{{$key+1}}  . {{$question->question}}

								@endif
							  </label>
                            </div>
							<div class="form-check choice">
							  <input class="form-check-input" type="radio" name="{{$key+1}}" id="flexRadioDefault1" value="1">
							  <label class="form-check-label" for="flexRadioDefault1">
                              {{$question->answer1}}
							  </label>
                              </div>
							<div class="form-check choice">
							  <input class="form-check-input" type="radio" name="{{$key+1}}" id="flexRadioDefault2" value="2" >
							  <label class="form-check-label" for="flexRadioDefault2">
                              {{$question->answer2}}
							  </label>
                              </div>
							<div class="form-check choice">
                              <input class="form-check-input" type="radio" name="{{$key+1}}" id="flexRadioDefault3" value="3" >
							  <label class="form-check-label" for="flexRadioDefault3">
                              {{$question->answer3}}
							  </label>
                              </div>
							<div class="form-check choice">
                              <input class="form-check-input" type="radio" name="{{$key+1}}" id="flexRadioDefault4" value="4" >
							  <label class="form-check-label" for="flexRadioDefault4">
                              {{$question->answer4}}
							  </label>
							</div>
							<input type="hidden" name="CorrectAnswerNumber[]" value="{{$question->correctAnswerNumber}}">

						</div>
					@endforeach
              
            
                <input style="background-color: #4c3499ef; margin-bottom: 20px; float: right;"type="submit" value="Submit" class="btn btn-info">
			</form> 
        </div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

        <script type="text/javascript">

	
		window.onbeforeunload = function() {
				return "Dude, are you sure you want to leave? Think of the kittens!";
			}

		function startTimer(duration, display) {
		    var timer = duration, minutes, seconds;
		    setInterval(function () {
		        minutes = parseInt(timer / 60, 10);
		        seconds = parseInt(timer % 60, 10);

		        minutes = minutes < 10 ? "0" + minutes : minutes;
		        seconds = seconds < 10 ? "0" + seconds : seconds;

		        display.textContent = minutes + ":" + seconds;

		        if (--timer < 0) {
		        	//alert(timer);
					//window.open("{{url('/submit_answer1')}}" , "_self");
					
					document.getElementById("form").submit();

		            timer = duration;
		        }
		    }, 1000);
		       
		    
		}

		window.onload = function () {
		    var fiveMinutes = 60 * 1,
		        display = document.querySelector('#time');
		    startTimer(fiveMinutes, display);

		    
		};

	</script>
  @endsection
