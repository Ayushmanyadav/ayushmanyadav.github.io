<?php
session_start();
	error_reporting(0)	;
include('link/index_link.php');
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Ayushman yadav">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary  " id="gharme">
	<a class="navbar-brand" href="#">Navbar</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item ">
				<a class="nav-link active li-h" href="#har">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link li-s" href="#ser">services</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link li-c" href="#ct"   tabindex="-1" aria-disabled="true">contact us </a>
			</li>
			<li class="nav-item text-sm-center ">
				<button data-target="#modal" class="btn btn-outline-light" style="border-radius: 25px;" data-toggle="modal"><span>hello,</span><?php echo $_SESSION['user']; ?></button>
			</li>
			
		</ul>
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
		</form>
	</div>
</nav>
<!--  <--><br id="har"></-->
<header class="text-center text-capitalize">
	<h1 class="display-2 font-weight-bold font-italic">Smart coder</h1>
</header>
<div class="container-fluid vga ">
	<div class="row bg-white">
		<div class="col-sm-12 col-md-6" id="ser"><img src="img/kindpng_1247304.png" class="img-fluid p-md-4" alt=""></div>
		<div class="col-md-6 col-sm-12 d-flex align-items-center justify-content-center " id="hm" style=" font: babloo da 2;font-size: 1.6rem;"><p>
			<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste quibusdam deserunt suscipit repellat magni quam earum, debitis neque vitae ipsam quas explicabo ex aliquam totam molestias alias, quod dicta aut!</span>
			<span>Tempora omnis culpa vitae nobis delectus pariatur magni ad asperiores in voluptate, veniam harum unde a at iusto cumque iure ipsa minima, hic beatae totam nulla! Recusandae molestiae, consectetur excepturi.</span>
			<span>Natus repudiandae sequi eveniet reprehenderit commodi assumenda, voluptate incidunt at recusandae voluptatibus. Nihil ipsa aperiam explicabo ab. Distinctio explicabo possimus commodi veniam autem delectus quae, nisi! Natus officiis, laudantium ducimus.</span>
		</p></div>
	</div>
</div>
<div class="container-fluid vga ">
	<div class="row bg-white">
		<div class="col-sm-12 col-md-6 d-flex align-items-center justify-content-center"style=" font: babloo da 2;font-size: 1.6rem;"><p>
			<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste quibusdam deserunt suscipit repellat magni quam earum, debitis neque vitae ipsam quas explicabo ex aliquam totam molestias alias, quod dicta aut!</span>
			<span>Tempora omnis culpa vitae nobis delectus pariatur magni ad asperiores in voluptate, veniam harum unde a at iusto cumque iure ipsa minima, hic beatae totam nulla! Recusandae molestiae, consectetur excepturi.</span>
			<span>Natus repudiandae sequi eveniet reprehenderit commodi assumenda, voluptate incidunt at recusandae voluptatibus. Nihil ipsa aperiam explicabo ab. Distinctio explicabo possimus commodi veniam autem delectus quae, nisi! Natus officiis, laudantium ducimus.</span>
		</p></div>
		<div class="col-md-6 col-sm-12  order-md-1" ><img src="img/kindpng_1247304.png" class="img-fluid p-md-4 order-md-2" alt=""></div>
	</div>
</div>
<!--  -->
<br id="ct">
<!--  -->
<div class="bg-dark vga">
	<div class="container text-white "><br>
		
		<br><br>
		<div class="row"><div class="col-sm-12 col-md-6 text-center text-capitalize text-white">link</div>
		<div class="col-sm-12 col-md-6 text-center text-capitalize text-white">link</div><div class="col-sm-12 col-md-6 text-center text-capitalize text-white">link</div>
		<div class="col-sm-12 col-md-6 text-center text-capitalize text-white">link</div><div class="col-sm-12 col-md-6 text-center text-capitalize text-white">link</div>
		<div class="col-sm-12 col-md-6 text-center text-capitalize text-white">link</div><div class="col-sm-12 col-md-6 text-center text-capitalize text-white">link</div>
		<div class="col-sm-12 col-md-6 text-center text-capitalize text-white">link</div><div class="col-sm-12 col-md-6 text-center text-capitalize text-white">link</div>
		<div class="col-sm-12 col-md-6 text-center text-capitalize text-white">link</div><div class="col-sm-12 col-md-6 text-center text-capitalize text-white">link</div>
		<div class="col-sm-12 col-md-6 text-center text-capitalize text-white">link</div><div class="col-sm-12 col-md-6 text-center text-capitalize text-white">link</div>
		<div class="col-sm-12 col-md-6 text-center text-capitalize text-white">link</div></div></div>
	</div>
	<div class="modal" id="modal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header"><div class="text-center text-capitalize display-4">Update your details</div></div>
				<div class="modal-body"><br><br>
					<form method="POST" >
						<label for="inputEmail4">Email</label>
						<input type="email" name="email" value="<?php echo $_SESSION['user'] ?>" class="form-control" id="inputEmail4">
						<label for="inputPassword4">Password</label>
						<input type="text" value=" <?php echo $_SESSION['password'] ?> " class="form-control"   name="password" id="inputPassword4">
						<label for="inputAddress">Address</label>
						<input type="text"  name="address" value=" <?php echo $_SESSION['address'] ?> " class="form-control" id="inputAddress" placeholder="1234 Main St">
						<label for="inputAddress2">Address 2</label>
						<input type="text" name="address2" value=" <?php echo $_SESSION['address2'] ?> " class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
						
						<label for="inputCity">City</label>
						<input type="text" name="city" value=" <?php echo $_SESSION['city'] ?> " class="form-control" id="inputCity">
						
						<label for="inputState">State</label>
						<input id="inputState" name="state" value=" <?php echo $_SESSION['state'] ?> " class="form-control">
						
						</input>
						
						
						<label for="inputZip">pin</label>
						<input type="text" name="pin" value=" <?php echo $_SESSION['pin'] ?> " class="form-control" id="inputZip">
						<br><br>
						
						
						<button type="submit" id="update" class="btn btn-primary">update</button>
					</form></div>
					<div class="modal-footer"><button style="font-size:1.9rem;" class="btn btn-outline-primary" data-dismiss="modal" >&times;</button></div>
				</div>
			</div>
		</div>
		<style>
			body{
				background: url('./img/ocean-3605547_1920.jpg')fixed center;
				background-size: cover;
			}
			header{
				display: flex;
				align-items: center;
				justify-content: center;
				height: 100vh;
				width: 100%;
		color: #ffffff!important;
				font-weight: 120!important;
				font-size: open sans;
			}
			.vga{
				opacity: 0;
			}
			.animated{
				opacity: 1;
			}
			html{
				scroll-behavior:smooth;
			}
		</style>
		<script>
			$('#har').waypoint(function(){
				$('.navbar').toggleClass('fixed-top animated fadeIndown ');
				$('.li-h').addClass('active')
				$('.li-s').removeClass('active')
		$('.li-c').removeClass('active')
			});
			
			
			
			$('#ct').waypoint(function(){
				
				$('.li-s').removeClass('active')
				$('.li-h').removeClass('active')
				$('.li-c').addClass('active')
				
			},{
				offset:'20%'
			});
			$('#ser').waypoint(function(){
				
				$('.li-h').removeClass('active')
				$('.li-s').addClass('active')
				$('.li-c').removeClass('active')
				$('.container-fluid.vga').addClass('animated fadeInup')
			});
			$('#ser').waypoint(function(){
		$('.container-fluid.vga').addClass('animated fadeInup')
		},{
			offset:"50%"
		});
			$('#ct').waypoint(function(){
				
				
				$('.bg-dark.vga').addClass('animated fadeInleft ')
				
			},{
				offset:'56%'
			});
		</script>
		<?php
		include('link/connect.php');
		$_SESSION['user'] = $_POST['email'];
		$_SESSION['password'] =  $_POST['password'];
		$_SESSION['address'] =  $_POST['address'];
		$_SESSION['address2'] = $_POST['address2'];
		$_SESSION['city'] = $_POST['city'];
		$_SESSION['state'] = $_POST['state'];
		$_SESSION['pin'] = $_POST['pin'];
		$emailcom = $_GET['emailcom'];
		$comment = $_GET['comment'];
		session_start();
		$data23 = "INSERT INTO commentbox  VALUES ('','$emailcom','$comment')";
		$ghardgsj = mysqli_query($con,$data23);session_start();
		?>