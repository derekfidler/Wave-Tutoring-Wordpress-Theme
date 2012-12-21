<?php get_header(); ?>
<section role="main" class="grid clearfix">
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class('grid_16 align-left') ?> id="post-<?php the_ID(); ?>">
			<header><hgroup role="heading"><h2><?php the_title(); ?></h2></hgroup></header>
			<?php endwhile; ?>
			<?php endif; ?>
			<?php rewind_posts(); ?>
			
			<div class="entry form clearfix">
				<nav>
					<h4>Student Info</h4>
					<h4>Courses</h4>
					<h4>Availability</h4>
				</nav>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="text">
					<?php the_content(); ?>
					<a href="#" class="btn orange align-right next">Get Started!</a>
				</div>
					<?php endwhile; ?>
					<?php endif; ?>
				<form id="registration">
					<div id="info" class="text">
						<h3>Basic Information</h3>
						<div class="student ">
							<h5>Student Info</h5>
							<label for="student-name">Name</label>
							<input type="text" name="student-name" id="student-name" required />
							
							<label for="student-email">E-mail</label>
							<input type="email" name="student-email" id="student-email" required />
							

							<label for="student-grade">Grade</label>
							<input type="text" name="student-grade" id="student-grade" required />
						</div>
						<div class="parent clearfix">
							<h5>Parent Info <small>(Optional)</small></h5>
							<label for="parent-name">Name</label>
							<input type="text" name="parent-name" id="parent-name" />
							
							<label for="parent-email">E-mail</label>
							<input type="email" name="parent-email" id="parent-email" />
							

							<label for="parent-phone">Phone</label>
							<input type="tel" name="parent-phone" id="parent-phone" />
						</div>
						<a href="#" class="btn green align-right next">Next</a>
					</div>
					

					<div id="courses" class="text clearfix">
						<h3>Select the Courses You Want to Enroll In</h3>
						<div class="courses">
							<label for="sat">SAT</label>
							<input type="checkbox" name="course" value="SAT" class="regular-checkbox" />
							<label for="sat">SAT II</label>
							<input type="checkbox" name="course" value="SAT" class="regular-checkbox" />
							<label for="sat">PSAT</label>
							<input type="checkbox" name="course" value="SAT" class="regular-checkbox" />
							<label for="sat">ACT</label>
							<input type="checkbox" name="course" value="SAT" class="regular-checkbox" />
							<label for="sat">ISEE</label>
							<input type="checkbox" name="course" value="SAT" class="regular-checkbox" />
							<label for="tutoring">Academic Tutoring <small>(Please Specify Below)</small></label>
							<input type="checkbox" name="course" value="SAT" class="regular-checkbox" />
							<label for="sat">College Essays</label>
							<input type="checkbox" name="course" value="SAT" class="regular-checkbox" />
						</div>
						<div class="details">
							<label for="details">Further Details:</label>
							<textarea name="text"></textarea>  
						</div>
						<a href="#" class="btn green align-left back">Back</a><a href="#" class="btn green align-right next">Next</a>
					</div>

					<div id="availability" class="text clearfix">
						<h3>Select the Times You're Available</h3>
						<div class="time-table">
							<table border="0">
								<thead>
									<td></td>
									<td>Mon</td>
									<td>Tue</td>
									<td>Wed</td>
									<td>Thu</td>
									<td>Fri</td>
									<td>Sat</td>
									<td>Sun</td>
								</thead>
								<tr>
									<td>Morning</td>
									<td><input type="checkbox" id="checkbox-2-1" class="regular-checkbox big-checkbox" /></td>
								    <td><input type="checkbox" id="checkbox-2-2" class="regular-checkbox big-checkbox" /></td>
								    <td><input type="checkbox" id="checkbox-2-3" class="regular-checkbox big-checkbox" /></td>
								    <td><input type="checkbox" id="checkbox-2-4" class="regular-checkbox big-checkbox" /></td>
								    <td><input type="checkbox" id="checkbox-2-4" class="regular-checkbox big-checkbox" /></td>
								    <td><input type="checkbox" id="checkbox-2-4" class="regular-checkbox big-checkbox" /></td>
								    <td><input type="checkbox" id="checkbox-2-4" class="regular-checkbox big-checkbox" /></td>
								</tr>
								<tr>
									<td>Afternoon</td>
									<td><input type="checkbox" id="checkbox-2-1" class="regular-checkbox big-checkbox" /></td>
								    <td><input type="checkbox" id="checkbox-2-2" class="regular-checkbox big-checkbox" /></td>
								    <td><input type="checkbox" id="checkbox-2-3" class="regular-checkbox big-checkbox" /></td>
								    <td><input type="checkbox" id="checkbox-2-4" class="regular-checkbox big-checkbox" /></td>
								    <td><input type="checkbox" id="checkbox-2-4" class="regular-checkbox big-checkbox" /></td>
								    <td><input type="checkbox" id="checkbox-2-4" class="regular-checkbox big-checkbox" /></td>
								    <td><input type="checkbox" id="checkbox-2-4" class="regular-checkbox big-checkbox" /></td>
								</tr>
								<tr>
									<td>Evening</td>
									<td><input type="checkbox" id="checkbox-2-1" class="regular-checkbox big-checkbox" /></td>
								    <td><input type="checkbox" id="checkbox-2-2" class="regular-checkbox big-checkbox" /></td>
								    <td><input type="checkbox" id="checkbox-2-3" class="regular-checkbox big-checkbox" /></td>
								    <td><input type="checkbox" id="checkbox-2-4" class="regular-checkbox big-checkbox" /></td>
								    <td><input type="checkbox" id="checkbox-2-4" class="regular-checkbox big-checkbox" /></td>
								    <td><input type="checkbox" id="checkbox-2-4" class="regular-checkbox big-checkbox" /></td>
								    <td><input type="checkbox" id="checkbox-2-4" class="regular-checkbox big-checkbox" /></td>
								</tr>
							</table>
						</div>
						<a href="#" class="btn green align-left back">Back</a><input type="submit" value="SUBMIT" class="btn orange align-right submit">
					</div>

				</form>

			</div>

				
			<div class="extra">
				<?php wp_reset_query();
					  wp_reset_postdata(); 
				?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="align-left">
				<?php echo get_post_meta($post->ID, 'left', true); ?>
				</div>
				<div class="align-right">
				<?php echo get_post_meta($post->ID, 'right', true); ?>
				</div>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</article>	

</section>

<script type="text/javascript">
	var itemNumber = 0;
	$('a.btn.next').click(function(e){
		e.preventDefault();
		var $this = $(this);
		var entries = $('div.entry div.text');
		var titles =  $('div.entry h4');
		itemNumber++;
		entries.hide();
		entries.eq(itemNumber).show();
		titles.eq(itemNumber-1).css('opacity','1');
	});
	$('a.btn.back').click(function(e){
		e.preventDefault();
		var $this = $(this);
		var entries = $('div.entry div.text');
		var titles =  $('div.entry h4');
		itemNumber--;
		entries.hide();
		entries.eq(itemNumber).show();
		titles.eq(itemNumber).css('opacity','.1');
	});
</script>

<?php get_footer(); ?>