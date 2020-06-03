
	<footer>
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 ml-auto text-center">
						<form action=" <?php echo get_template_directory_uri(); ?>/inc/mail.php " method="POST">
						  <div class="form-group">
						    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Your Name" required="required">
						  </div>
						  <div class="form-group">
						    <input type="email" class="form-control" id="email" name="email" placeholder="Your valid Email" required="required">
						  </div>
						  <div class="form-group">
						    <input type="phone" class="form-control" id="phone" name="phone" placeholder="Your Phone No">
						  </div>
						  <div class="form-group form-check">
						    <input type="checkbox" class="form-check-input" id="exampleCheck1" required="required">
						    <label class="form-check-label" for="exampleCheck1">Agree Terms</label>
						  </div>
						  <button type="submit" name="submit" class="btn btn-block btn-dark rounded-pill shadow-lg">Get A call</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<section class="developer bg-dark p-3 text-success text-center">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						Design & Developed By <a href="https://sites.google.com/view/al-amin-khan">Dedom</a>
					</div>
				</div>
			</div>
		</section>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>
