@extends('layouts/UserInterface_main')

@section('User_content') 

	<style type="text/css">
		body{
		  background:grey;
		}

		#box{
            text-align:center;
		  margin:15% 30%;
          background:white;
		  
		  
		}
	</style>

    <div id="box">
        <h2>Your Score is : </h2>
        <br>
        <h3> {{$counter}}/15</h3>
    </div>

@endsection