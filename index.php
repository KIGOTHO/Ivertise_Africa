<?php
session_start();

 require_once 'templates/header.php'; ?>

		<link rel="stylesheet" type="text/css" href="Grid/css/default.css" />
		<link rel="stylesheet" type="text/css" href="Grid/css/component.css" />

		<script src="Grid/js/modernizr.custom.js"></script>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<style type="text/css">
#submit{
	margin-left:-5px;
	border-radius:5px;
	padding:5px;
}
#register{
	border-radius:5px;
	color:black;
	border:1px solid #177856;
	margin-top:25px;



}

</style>
</head>
<body>
	<?php
	 $page_title="Index";
	?>
	<div class="header">
		<div class="container">
			<div class="logo">
				<h1><a href="#"><img src="assets/img/logo.png" alt=""></a></h1>
			</div>
			<div class="top_right" style="color:#177856!important;">
				<ul>
					<li><a href="register.php">Register</a></li>|
					<li class="login">
						<div id="loginContainer"><a href="users/login.php" id="loginButton"><span>Login</span></a>
							<div id="loginBox">
								<form id="loginForm" method="post">
									<fieldset id="body">
										<fieldset>
											<label for="usernmae">Email Address</label>
											<input type="text" name="username" id="email">
										</fieldset>
										<fieldset>
											<label for="password">Password</label>
											<input type="password" name="password" id="password">
										</fieldset>

										<label for="checkbox">
											<input type="checkbox" name="remember" id="checkbox"> <i>Remember me</i></label>
										<input type="submit" id="login" value="Sign in">
									</fieldset>
									<span><a href="#">Forgot your password?</a></span>
								</form>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="modify">
							<div class="navbar-collapse collapse">
									<ul class="nav navbar-nav">

										<li <?php echo $page_title=="Cart" ? "class='active'" : ""; ?> >
												<a href="templates/cart.php">
														<?php
							// count products in cart
														$cart_count=count($_SESSION['cart_items']);
														?>
														Cart <span class="badge" id="comparison-count"><?php echo $cart_count; ?></span>
												</a>
									</li>
								</ul>
							</div><!--/.nav-collapse -->
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="banner">
		<div class="container">
			<div class="span_1_of_1">
					<div class="search">
						<ul class="nav1">
								<li id="search">
                                            <li id="options">
						<a href="#">All Images</a>
						<ul class="subnav">
							<li><a href="#">Photography</a></li>
							<li><a href="#">Models</a></li>
							<li><a href="#">MUA</a></li>
						</ul>
					</li>
						<form action="stock.php" method="post">

							<div class="ui-widget">
							  <input type="text" id="tags" name="search_text" placeholder="Search"> <button id="submit" type="submit" class=" button btn-primary">Search</button>

							</div>

						</form>
					</li>


								</ul>
							</div>

			</div>
		</div>



		<h3 id="h3">African Commercial Photography through Stock Photography and Assignment Photography. We also provide Models and Makeup artist services for your advertising needs.</h3>
	</div>


<div class="grid_1">

	<div class="col-md-10 sap_tabs">
		<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
			<ul class="resp-tabs-list">
				<li class="resp-tab-item" aria-controls="all_searches" role="tab"><span>All</span></li>
				<li class="resp-tab-item" aria-controls="photography" role="tab"><span>Photography</span></li>
				<li class="resp-tab-item" aria-controls="models" role="tab"><span>Models</span></li>
				<li class="resp-tab-item" aria-controls="mui" role="tab"><span>MUI</span></li>
				<div class="clearfix"></div>
			</ul>
			<div class="resp-tabs-container">
				<div class="tab-0 resp-tab-content" aria-labelledby="all_searches">
					<ul class="tab_img">
					 <li>
						 <a href="#">
								 </a>
													 </li>

														 <div class="clearfix"></div>
													 </ul>
												 </div>

												 <div class="tab-1 resp-tab-content" aria-labelledby="photography">
													 <ul class="tab_img">
														 <div class="clearfix"></div>
													 </ul>
												 </div>

												 <div class="tab-2 resp-tab-content" aria-labelledby="models">
													 <ul class="tab_img">
														 <li class="last">
															 <a href="single.php">
																 <img src="assets/images/original/time.jpg" class="img-responsive" alt="" />
																 <div class="tab_desc">
																	 <p>There are many variations</p>
																	 <h4>#25478921</h4>
																 </div>
															 </a>
														 </li>
														 <div class="clearfix"></div>
													 </ul>
												 </div>

												 <div class="tab-3 resp-tab-content" aria-labelledby="mui">
													 <ul class="tab_img">
														 <li class="last">
															 <a href="single.php">
																 <img src="assets/images/original/time.jpg" class="img-responsive" alt="" />
																 <div class="tab_desc">
																	 <p>There are many variations</p>
																	 <h4>#25478921</h4>
																 </div>
															 </a>
														 </li>
														 <div class="clearfix"></div>
													 </ul>
												 </div>
											 </div>
										 </div>

									 </div>
									<div class="clearfix"> </div>
		</div>



<div class="main">
			<ul id="og-grid" class="og-grid">
						<?php
						;
							/* Attempt MySQL server connection. Assuming you are running MySQL
							server with default setting (user 'root' with no password) */
							$link = mysql_connect("localhost", "mjedevel_kev", "Token2016");

							mysql_select_db( "mjedevel_ia", $link);

							// Check connection
							if($link === false){
								die("ERROR: Could not connect. " . mysqli_connect_error());
								}





						 // Attempt select query execution
						  $sql = "SELECT * FROM images";
							if($result = mysql_query($sql)){
										if(mysql_num_rows($result) > 0){
											while($row = mysql_fetch_array($result)){

												$file_path_thumb = 'assets/images/thumbs/';
												$file_path_small = 'assets/images/small/';
												$file_path_medium = 'assets/images/medium/';
												$file_path_large= 'assets/images/original/';

												$start =  $row['url'];
												$title = $row['title'];
												$id  = $row['id'];

												$price = '$'.' '.$row['price'];
												$price_medium = '$'.' '.$row['price'];
												$price_large = '$'.' '.$row['price'];

												$copywrite = $row['author'];
												$description = $row['description'];

												$src_water=$file_path_small.$start;
												$src_medium=$file_path_medium.$start;
												$src_large=$file_path_large.$start;
						 						$src = $file_path_thumb.$start;

										 		$test = getimagesize($file_path_thumb.$start);
										 		$test_medium = getimagesize($file_path_medium.$start);
										 		$test_large = getimagesize($file_path_large.$start);

												$filesize = round(filesize($src_water) * .0009765625)."kb";
												$size = round(filesize($src_water) * .0009765625)."kb";
												$size_medium = round(filesize($src_medium) * .0009765625)."kb";
												$size_large = round(filesize($src_large) * .0009765625* .0009765625)."mb";


					           		$width = $test[0];
					           		$height = $test[1];
					           		$width_medium = $test_medium[0];
					           		$height_medium = $test_medium[1];
					           		$width_large = $test_large[0];
					           		$height_large = $test_large[1];



 								   			$dimension_small = $width."x".$height."px". " "."(72dpi)";
 								   			$dimension_medium = $width_medium."x".$height_medium.""."px"."  "."(150dpi)";
 								   			$dimension_large = $width_large."x".$height_large.""."px". " "."(300dpi)";

									 $image_category = "<form>
  							 													<input type='radio' name='gender' value='male' checked> small<br>
  																				<input type='radio' name='gender' value='female'> medium<br>
  																				<input type='radio' name='gender' value='other'> large
              												</form>";
											  $download ="<a id='download' href='templates/add_to_cart.php?id={$id}&name={$title}'>Add To Cart</a>";




                      ?>
											<li>
													<a href="" data-largesrc="<?php echo $src_water ?>" data-title="<?php echo $title ?>"
														data-price="<?php echo $price ?>" data-price_medium="<?php echo $price_medium ?>" data-price_large="<?php echo $price_large ?>"
														 data-size="<?php echo $size ?>"  data-size_medium="<?php echo $size_medium ?>"   data-size_large="<?php echo $size_large ?>"
															data-description="<?php echo $description  ?>" data-copywrite="<?php echo $copywrite ?>"
														data-image_category="<?php echo $image_category  ?>" data-dimension_small="<?php echo $dimension_small ?>"
 													data-dimension_medium="<?php echo $dimension_medium ?>"    data-dimension_large="<?php echo $dimension_large ?>"
														 data-download="<?php echo $download ?>"
														 data><img src="<?php echo $src ?>" alt="not in folder"/>
													</a>
												</li>
<?php

											}
											// Close result set
											mysql_free_result($result);
										} else{
									}
								} else{
						}
						// Close connection
						mysql_close($link);
					?>
			</ul>
	</div>

	<script src="Grid/js/grid.js"></script>
	<script>
		$(function(){
			Grid.init();
		});
	</script>

	<?php require_once 'templates/footer.php'; ?>
</body>
</html>
