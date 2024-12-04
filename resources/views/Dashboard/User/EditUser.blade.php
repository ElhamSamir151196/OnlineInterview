@extends('layouts/Dashboard_main')

@section('content')  



{{--
    @if ($errors->any())
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
        <div class=" centered-form">
       
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Please Update User id # {{$user->id}}</h3>
			 			</div>
			 			<div class="panel-body">
			    		<form action="{{route('user.update' , $user->id )}}" method="post" >
						@csrf
						@method('put')
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
                                    <textarea type="text" name="name" id="name" class="form-control input-sm"  >{{$user->name}} </textarea>

                                    </div>
			    				</div>

								@if ($errors->has('name'))
									<div class="alert alert-danger">
										<ul>
											@foreach ($errors->get('name') as $error)
												<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
								@endif

			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
										<textarea type="text" name="Second_name" id="Second_name" class="form-control input-sm"  >{{$user->Second_name}} </textarea>

									</div>
			    				</div>
								@if ($errors->has('Second_name'))
									<div class="alert alert-danger">
										<ul>
											@foreach ($errors->get('Second_name') as $error)
												<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
								@endif
			    			</div>

							

			    			<div class="form-group">
								<textarea type="email" name="email" id="email" class="form-control input-sm" >{{$user->email}} </textarea>

							</div>

							@if ($errors->has('email'))
								<div class="alert alert-danger">
									<ul>
										@foreach ($errors->get('email') as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif

			    			<div class="form-group">
								<textarea type="text" name="Phone" id="Phone" class="form-control input-sm" placeholder="Phone"  >{{$user->Phone}} </textarea>

							</div>

							@if ($errors->has('Phone'))
								<div class="alert alert-danger">
									<ul>
										@foreach ($errors->get('Phone') as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif


			    			<div class="form-group">
								<textarea  type="text" name="Address" id="Address" class="form-control input-sm" >{{$user->Address}} </textarea>

							</div>

							@if ($errors->has('Address'))
								<div class="alert alert-danger">
									<ul>
										@foreach ($errors->get('Address') as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif

			    			
 <!--                          -->


 <!--                          -->
			    			
							<div class="form-check">
							@if($user->Category =="Client")
							  <input class="form-check-input" type="radio" name="Category" id="Client" value="Client" checked>
							 @else
							 <input class="form-check-input" type="radio" name="Category" id="Client" value="Client">
							 @endif
							  <label class="form-check-label" for="Client">
							    Client
							  </label>
							</div>
							<div class="form-check">
							@if($user->Category =="Admin")
							  	<input class="form-check-input" type="radio" name="Category" id="Admin" value="Admin" checked>
							@else
							  <input class="form-check-input" type="radio" name="Category" id="Admin" value="Admin">
							@endif
							  <label class="form-check-label" for="Admin">
							    Admin
							  </label>
							</div>

							
			    										
			    			<input type="submit" value="Update" class="btn btn-info btn-block">
			    		</form>
			    	</div>
	    		
    		</div>
    	</div>
    </div>

@endsection  