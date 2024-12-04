@extends('layouts/UserInterface_main')
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
<style>

.clear{
	clear: both;
}


.banner{
	width:100%;
	height:500px;
	background-color:black;
	margin-top:0
}


.logo-txt {
/* Prefix required. Even Firefox only supports the -webkit- prefix */
-webkit-text-stroke-width: 1px;
-webkit-text-stroke-color: #c79809;
text-align: center;

}

.layer{
	width: 100%;
	height: 100%;
	top: 0;
	position: absolute;
	background: #07073c80;
}
.banner-txt h5{
	font-size: 30px;
}

.banner-txt{
	font-size: 30px;
}

.contain-layer{
	position: relative;
}
.slides-container1{
	width: 100%;
	
}

.slide-img1{
	width: 100%;
	height: 70vh;
}

/***********************services   ******************** */
.box{
	width: 30%;
	float: left;
	margin-left: 27px;
	padding-top: 0px;
}

.box-image img{
	width: 100%;
}

.box-tittle h1{
	text-align: left;

}

.box-tittle{
	color: aliceblue;
	padding: 0px 37px;
	margin-top: 0px;
}

.box-content a{
	color: black;
	background: aliceblue;
	padding: 7px 10px;
	margin-top: 22px;
	text-decoration: none;
	
}

.box-content {
	text-align: center;
	padding-bottom: 25px;
}

.box-content p{
	margin-bottom: 18px;
	padding : 5px 10px;
  text-align: justify;
}

.services{
	background: #ADD8E6;
	padding: 0px 180px;
	padding-bottom: 20px;
	color: white;	


}

.box-tittle{
	background: #03E4E4;
	padding: 0px 37px;
	color: aliceblue;
	padding-top: 20px;
}


.ser-container{
	background-image: url("../images/backgroun_laptop.jpg");
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;


}
.box-layer{
	position: relative;

}

.box-layer img{
	width: 100%;
	height: 50vh;
}

.box-text{
	position: absolute;
	color:white;
	top: 10%;
	left: 5%;
	text-align: center;

}

.layer-box{
	width: 100%;
	height: 100%;
	top: 0;
	position: absolute;
	background: #07073c80;
}

/************* my slides in about  */


.container1{
margin-top: 100px;
padding: 0 40px;
margin-bottom: 100px;
}
.mySlides .img1{
float: right;
width:500px;
height: 350px;
}
.container1 h2{
float: left;
font-family: 'Courgette', cursive;
text-align: center;
margin-bottom: 30px;
color:rgb(100, 39, 141);
width: 50%
}
.container1 h4{
width: 50%;
float: left;
font-family: 'Courgette', cursive;
text-align: left;
padding-left: 20px;
margin-bottom: 20px;
}
.container1 ul{
float: left;
line-height: 2em;
margin-bottom: 50px;
width: 50%;
}
.container1 a{
float: left;
width: 12%;
margin-left: 30px;
color: white;
text-decoration: none;
background:#4c3499ef;
padding: 10px 30px 10px 28px;
border-radius: 50px;
letter-spacing: 2px;
white-space: nowrap;
}
.a-h:hover{
	color:white;
	text-decoration: none;
}
/* Make the image fully responsive */
.carousel-inner img {
width: 100%;
}

#searcher1{
	display:none;
}

#searcher2{
	display:none;
}
#searcher3{
	display:none;
}

</style>
</head>
@section('User_content')
<!--  banner -->
<div class="banner">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- The slideshow -->
	<div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/banar 1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/banar 2.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/banar 3.jpg" alt="New York" width="1100" height="500">
    </div>
  	</div>
  </div>
</div>
<div class="clear"></div>
<!--------------------------------- Scientsest -------------------------->
<div style="background: #454152ef; padding: 30px 200px;"class=" services">
			<div  style="border:1px solid rgb(168, 157, 157)" class="animate__animated animate__fadeInLeft box">
				<div style="background: #2b224eef;" class="box-tittle">
					
					<h2>Aboul Ella Hassanien</h2>
				</div>
				<div class="box-image">
					<img src="img\drAboulElla.jpeg">
				</div>
				<div class="box-content">
					<p>
					Professor Hassanien is ex-dean of the faculty of computers and information, Beni Suef University.
					 Professor Hassanien has more than 1000 scientific research papers published in prestigious 
					 international journals and over 45 books covering such diverse topics as data mining, 
					 medical images, intelligent systems, social networks and smart environment.
					</p>
					<p id="searcher1">received his B.Sc. with honors in 1986 and M.Sc degree in 1993, both from Ain Shams University,
						 Faculty of Science, Pure Mathematics and Computer Science Department, Cairo, Egypt.
						  On September 1998, he received his doctoral degree from the Department of Computer Science,
						   Graduate School of Science & Engineering, Tokyo Institute of Technology, Japan.
						Function::Dr Aboul Ella Hassanein is the Founder and Head of the Egyptian Scientific
						 Research Group (SRGE) and a Professor of Information Technology at the Faculty of 
						 Computer and Information, Cairo University.</p>
					<a  style="background: #2b224eef; padding: 8px 30px 15px 30px" class="aa" id="searcher1btn" onclick="myFunction()">more</a>

				</div>
			</div>
			<div style="border:1px solid rgb(168, 157, 157)" class="animate__animated animate__fadeInLeft box">
				<div style="background: #2b224eef;" class="box-tittle">
					<h2>Ashraf Darwish</h2>
				</div>
				<div class="box-image">
					<img src="img\Ashraf-Darwish-2.jpg">
				</div>
				<div class="box-content">
					
				<p>
				Professor Darwish research interests span both computer science and information technology.
				 Much of his work has been focusing on artificial intelligence, mainly through the application 
				 of data mining, machine learning deep learning and robotics in different areas of research.
				  Moreover, his research interests include Internet of Things application.
					</p>
					<p id="searcher2">He has served as general chair, programme committee, sessions chair and keynote speaker
						 for some of international well known conferences and workshops.Professor Ashraf Darwish received his 
						 Ph.D. in computer science from computer science department at Saint Petersburg State University in 
						 2006 from Russian Federation. He has worked as associate professor and then professor of computer 
						 science at the mathematics and computer science department, faculty of science, Helwan University in Cairo.</p>
					<a  style="background: #2b224eef; padding: 8px 30px 15px 30px" class="aa" id="searcher2btn" onclick="myFunction2()">more</a>

				</div>
			</div>
			<div style="border:1px solid rgb(168, 157, 157)" class="animate__animated animate__fadeInLeft box">
				<div style="background: #2b224eef;" class="box-tittle">
					<h2>Sara Abdelghafar</h2>
				</div>
				<div class="box-image">
					<img src="img\pp.jpg">
				</div>
				<div class="box-content">
				<p>
				DR. Sara  research interests span both computer science and information technology.
				 Much of his work has been focusing on Space intelligence, mainly through the application 
				 of data mining, machine learning deep learning and  different areas of research.
					she  has many published paper in space and drone problem solving. she is one of SRGE Members.
					</p>
					<p id="searcher3">  Moreover, her research interests include Internet of Things application.</p>
					<a  style="background: #2b224eef; padding: 8px 30px 15px 30px" class="aa" id="searcher3btn" onclick="myFunction3()">more</a>

				</div>

			</div>
			<div class="clear"></div>
	
</div>
<!------------------------------------About us --------------->
		<div class="container1 ">
			<div class="container float-right col-lg-6 mySlides">
						<div class="item img1">
							<img src="img/aboutimg2.jpg" alt="Chicago" style="width:100%;height:100%;">
						</div>
			</div>
                <h2>Interview  On AI Lab</h2>
                <h4>How to Interview Online</h4>
                <ul>
                    <li>Search and explore question</li>
                    <li>Learn about the English, and IQ and Technical </li>
                    <li>Review your result , and Sign in to test</li>
                    <li> Place your Test</li>
                    <li>Congrats! Track your Level until it's delivered to your Goal</li>
                </ul>
                <a class="a-h" href="#">Learn More</a>
                <div class="clear"></div>
            </div>
@endsection

<script>
	function myFunction() {
	var searcher1 = document.getElementById("searcher1");
	var searcher1btn = document.getElementById("searcher1btn");
	if (searcher1.style.display == "none") {
		searcher1.style.display = "block";
		document.getElementById("searcher1btn").innerHTML = "Read Less";

	} else {
		searcher1.style.display = "none";
	}
	}

	function myFunction2() {
	var searcher2 = document.getElementById("searcher2");
	var searcher2btn = document.getElementById("searcher2btn");
	if (searcher2.style.display == "none") {
		searcher2.style.display = "block";
		document.getElementById("searcher2btn").innerHTML = "Read Less";

	} else {
		searcher2.style.display = "none";
	}
	}

	function myFunction3() {
	var searcher3 = document.getElementById("searcher3");
	var searcher3btn = document.getElementById("searcher3btn");
	if (searcher3.style.display == "none") {
		searcher3.style.display = "block";
		document.getElementById("searcher3btn").innerHTML = "Read Less";

	} else {
		searcher3.style.display = "none";
	}
	}

</script>