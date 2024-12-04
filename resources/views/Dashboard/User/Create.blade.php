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
			    		<h3 class="panel-title">Please Create new User </h3>
			 			</div>
			 			<div class="panel-body">
			    		<form action="{{url('/create_user')}}" method="post" >
						@csrf
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                		<input type="text" name="name" id="name" class="form-control input-sm" placeholder="First Name">
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
			    						<input type="text" name="Second_name" id="Second_name" class="form-control input-sm" placeholder="Last Name">
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
			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
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
			    				<input type="text" name="Phone" id="Phone" class="form-control input-sm" placeholder="Phone">
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
			    				<input type="text" name="Address" id="Address" class="form-control input-sm" placeholder="Address">
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

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
			    					</div>
			    				</div>

								@if ($errors->has('password'))
									<div class="alert alert-danger">
										<ul>
											@foreach ($errors->get('password') as $error)
												<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
								@endif

			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
			    					</div>
			    				</div>

								@if ($errors->has('password_confirmation'))
									<div class="alert alert-danger">
										<ul>
											@foreach ($errors->get('password_confirmation') as $error)
												<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
								@endif
			    			</div>

			    			
							<div class="form-check">
							  <input class="form-check-input" type="radio" name="Category" id="flexRadioDefault1" value="flexRadioDefault1">
							  <label class="form-check-label" for="flexRadioDefault1">
							    Client
							  </label>
							</div>
							<div class="form-check">
							  <input class="form-check-input" type="radio" name="Category" id="flexRadioDefault2" value="flexRadioDefault2" checked>
							  <label class="form-check-label" for="flexRadioDefault2">
							    Admin
							  </label>
							</div>

							
			    										
			    			<input type="submit" value="Register" class="btn btn-info btn-block">
			    		</form>
			    	</div>
	    		
    		</div>
    	</div>
    </div>

@endsection  