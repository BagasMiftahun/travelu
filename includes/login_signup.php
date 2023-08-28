<div id="tg-loginsingup" class="tg-loginsingup" data-vide-bg="poster: images/singup-img.jpg" data-vide-options="position: 0% 50%">
		<div class="tg-contentarea tg-themescrollbar">
			<div class="tg-scrollbar">
				<button type="button" class="close">x</button>
				<div class="tg-logincontent">
					<nav id="tg-loginnav" class="tg-loginnav">
						<ul>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">My Account</a></li>
							<li><a href="#">My Wishlist</a></li>
						</ul>
					</nav>
					<div class="tg-themetabs">
						<ul class="tg-navtbs" role="tablist">
							<li role="presentation" class="active"><a href="#home" data-toggle="tab">Already Registered</a></li>
							<li role="presentation"><a href="#profile" data-toggle="tab">New to Travel ?</a></li>
						</ul>
						<div class="tg-tabcontent tab-content">
							<div role="tabpanel" class="tab-pane active fade in" id="home">
								<form class="tg-formtheme tg-formlogin" action="../proses_login.php" method="post">
									<fieldset>
										<div class="form-group">
											<label>Username <sup>*</sup></label>
											<input type="text" name="username" class="form-control" placeholder="Username" required>
										</div>
										<div class="form-group">
											<label>Password <sup>*</sup></label>
											<input type="password" name="password" class="form-control" placeholder="Password" required>
										</div>
										<button class="tg-btn tg-btn-lg" type="submit" value="Login"><span>Login</span></button>
									</fieldset>
								</form>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="profile">
								<form class="tg-formtheme tg-formlogin" method="POST" action="../proses_register.php">
									<fieldset>
										<div class="form-group">
											<label for="username">Username</label>
											<input type="text" name="username" class="form-control" placeholder="Username">
										</div>
										<div class="form-group">
											<label for="password">Password</label>
											<input type="password" name="password" class="form-control" placeholder="Password">
										</div>
										<button type="submit" name="register" class="tg-btn tg-btn-lg"><span>Register</span></button>
									</fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>