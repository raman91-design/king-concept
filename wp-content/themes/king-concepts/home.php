<?php
//Template Name: Home page
?>
<?php get_header(); ?>
<main id="content">
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="entry-content">
<!-- slider-section -->
<div class="slider-section" >
	<div class="carousel-wrap">
		<div class="owl-carousel" id="home">
		<?php 
			if( have_rows('slider-section') ): 
		 	while( have_rows('slider-section') ): the_row(); 
	 		$sliderimg = get_sub_field('slider-img'); 
  			$sliderfirsttext =  get_sub_field('slider-first-text'); 
   			$slidersecondtext =  get_sub_field('slider-second-text'); 
     		$buttonlink =  get_sub_field('slider-button-link'); 
    		$sliderbutton =  get_sub_field('slider-btn');
    		$slidermobileimg =  get_sub_field('slider-mobile-img');
      	?>
			<div class="item">
				<div class="slider-bg" style="background-image: url('<?php echo $sliderimg; ?>');">
					<div class="container">
						<div class="row">
							<div class="col-md-7 col-sm-12 col-xs-12 slider-text">
						<?php
                        $a = 0;
                        if (!empty($sliderfirsttext)) { ?>
                        <h1><?php echo $sliderfirsttext; ?> </h1>
                     <?php }
                        ?>
              
               <?php
                        $a = 0;
                        if (!empty($slidersecondtext)) { ?>
                        <p><?php echo $slidersecondtext; ?> </p>
                     <?php }
                        ?>
                 <?php
                        $a = 0;
                        if (!empty($sliderbutton)) { ?>
                           <a href="<?php echo $buttonlink; ?>">
               <?php echo $sliderbutton; ?></a>
                     <?php }
                        ?>
					</div>
					<div class="col-md-5 col-sm-12 col-xs-12">
						<img src="<?php echo $slidermobileimg;?>" class="img-responsive slider-mobile-img">
					</div>
						</div>
					</div>
					
				</div>
			</div>
			<?php endwhile; ?>
             <?php endif;?>
             </div>
         </div>
     </div>
<!-- slider-section -->
<!-- power-box-section -->
<div class="power-box-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="power-box-header">
					<h6><?php echo the_field('power-section-heading');?></h6>
					<h1><?php echo the_field('power-section-paragraph');?></h1>
				</div>
			</div>
			<?php 
			if( have_rows('power-box') ): 
		 	while( have_rows('power-box') ): the_row(); 
	 		
      	?>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="power-box">
					<span class="icon"><?php echo get_sub_field('power-box-icon');?></span>
					<h6><?php echo get_sub_field('power-box-heading');?></h6>
					<p><?php echo get_sub_field('poer-box-text');?></p>
				</div>
			</div>
				<?php endwhile; ?>
             <?php endif;?>
		</div>
	</div>
</div>
<!-- power-box-section -->
<!-- increse-engagement-section -->
<div class="increase-engagement-section">
	<div class="carousel-wrap">
		<div class="owl-carousel" id="increase-section">
		<?php 
			if( have_rows('increase-section') ): 
		 	while( have_rows('increase-section') ): the_row(); 
	 		$increasesectionheader =  get_sub_field('increase-section-header'); 
   			$increasesectionparagraph =  get_sub_field('increase-section-paragraph'); 
     		$increasesectionbuttonlink =  get_sub_field('increase-section-button-link'); 
    		$increasesectionbutton =  get_sub_field('increase-section-button');
    		$increasesectionimage =  get_sub_field('increase-section-image');
      	?>
			<div class="item">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-sm-8 col-xs-12 increase-section-text">
						<?php
                        $a = 0;
                        if (!empty($increasesectionheader)) { ?>
                        <h2><?php echo $increasesectionheader; ?> </h2>
                     <?php }
                        ?>
              
               <?php
                        $a = 0;
                        if (!empty($increasesectionparagraph)) { ?>
                        <p><?php echo $increasesectionparagraph; ?> </p>
                     <?php }
                        ?>
                 <?php
                        $a = 0;
                        if (!empty($increasesectionbutton)) { ?>
                           <a href="<?php echo $increasesectionbuttonlink; ?>">
               <?php echo $increasesectionbutton; ?></a>
                     <?php }
                        ?>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12 increase-section-image">
							<img src="<?php echo $increasesectionimage;?>" class="img-responsive ">
						</div>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
             <?php endif;?>
             </div>
         </div>
</div>
<!-- increase-engagement-section -->
<!-- manage-users-section -->
<?php
$manageusersbutton = get_field('manage-users-button');
$manageusersbuttonlink = get_field('manage-users-button-link');
?>

<div class="manage-users-section">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-5 col-xs-12">
				<div class="manage-users-img">
					<img src="<?php echo the_field('manage-users-img');?>">
				</div>
			</div>
			<div class="col-md-7 col-sm-7 col-xs-12">
				<div class="manage-users-text">
					<h2><?php echo the_field('manage-users-heading');?></h2>
					<p><?php echo the_field('manage-users-paragraph');?></p>
					 <?php
                        $a = 0;
                        if (!empty($manageusersbuttonlink)) { ?>
                      <a href="<?php echo $manageusersbuttonlink; ?>">
                      	<?php echo $manageusersbutton; ?>
                      </a>
                     <?php }
                        ?>
					
				</div>
			</div>
		</div>
	</div>
</div>
<!-- manage-users-section -->
<!-- one-build-section -->
<div class="one-build-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="one-build-header">
					<h2><?php echo the_field('one-build-header');?></h2>
				</div>
			</div>
				<?php 
			if( have_rows('one-build-box') ): 
		 	while( have_rows('one-build-box') ): the_row(); 
	 		$onebuildimage =  get_sub_field('one-build-image'); 
   			$onebuildheader =  get_sub_field('one-build-header'); 
     		$onebuildtext =  get_sub_field('one-build-text'); 
    	?>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="one-build-box">
					<div class="one-build-box-header">
						<img src="<?php echo $onebuildimage ;?>" class="img-responsive">
						<h4><?php echo $onebuildheader;?></h4>
					</div>
					<p><?php echo $onebuildtext;?></p>
				</div>
			</div>
		<?php endwhile; ?>
             <?php endif;?>	
		</div>
	</div>
</div>
<!-- one-build-section -->
<!-- drive-engagement-section -->
<div class="drive-engagement-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="drive-engagement-text">
					<h1><?php echo the_field('driver-engagement-header');?></h1>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="group-management-text">
						<?php 
						if( have_rows('group-management-first-box') ): 
		 				while( have_rows('group-management-first-box') ): the_row(); 
	 					$groupmanagementboxicon =  get_sub_field('group-management-box-icon'); 
   						$groupmanagementboxheader =  get_sub_field('group-management-box-header'); 
     					$groupmanagementboxtext =  get_sub_field('group-management-box-text'); 
    					?>
					<ul class="textright">
						<li><div class="group-management-box">
							<img src="<?php echo $groupmanagementboxicon;?>">
							<h5><?php echo $groupmanagementboxheader;?></h5>
							<p><?php echo $groupmanagementboxtext;?></p>
						</div></li>
						<?php endwhile; ?>
             			<?php endif;?>	
					</ul>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="group-management-img">
					<img src="<?php echo the_field('drive-engagement-img');?>">
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="drive-engagement-text">
					<?php 
						if( have_rows('group-management-second-box') ): 
		 				while( have_rows('group-management-second-box') ): the_row(); 
	 					$groupmanagementsecondboxicon =  get_sub_field('group-management-second-box-icon'); 
   						$groupmanagementsecondboxheader =  get_sub_field('group-management-second-box-header'); 
     					$groupmanagementsecondboxboxtext =  get_sub_field('group-management-second-box-text'); 
    					?>
					<ul class="textleft">
						<li><div class="group-management-box">
							<img src="<?php echo $groupmanagementsecondboxicon; ?>">
							<h5><?php echo $groupmanagementsecondboxheader; ?></h5>
							<p><?php echo $groupmanagementsecondboxboxtext; ?></p>
						</div></li>
						<?php endwhile; ?>
             			<?php endif;?>	
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- drive-engagement-section -->
<!-- integrate-section -->
<?php
$integratesectionbg = get_field('integrate-section-bg');
$integratesectionheader = get_field('integrate-section-header');
$integratesectiontext = get_field('integrate-section-paragraph');
?>
<div class="integrate-section" style="background-image: url('<?php echo $integratesectionbg; ?>');">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="integrate-section-header">
					<h2><?php echo $integratesectionheader; ?></h2>
					<p><?php echo $integratesectiontext; ?></p>
				</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="integrate-social-icons">
					<div class="carousel-wrap">
						<div class="owl-carousel" id="integrate-social-icons">
									<?php 
						if( have_rows('integrate-socialicons-box') ): 
		 				while( have_rows('integrate-socialicons-box') ): the_row(); 
	 					$soundcloudicon =  get_sub_field('soundcloud-icon'); 
   						$twittericon =  get_sub_field('twitter-icon');  
     					$instagramicon =  get_sub_field('instagram-icon'); 
     					$adnicon =  get_sub_field('adn-icon'); 
     					$youtubeicon =  get_sub_field('youtube1-icon'); 
     					$yelpicon =  get_sub_field('yelp-icon');
						$amazonicon =  get_sub_field('amazon-icon');
     				?>
							<div class="item">
								<ul>
									<li><?php echo $soundcloudicon; ?></li>
									<li><?php echo $twittericon; ?></li>
									<li><?php echo $instagramicon; ?></li>
									<li><?php echo $adnicon; ?></li>
									<li><?php echo $youtubeicon; ?></li>
									<li><?php echo $yelpicon; ?></li>
									<li><?php echo $amazonicon; ?></li>
								</ul>

							</div>
							<?php endwhile; ?>
             			<?php endif;?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- integrate-section -->
<!-- get-mobileapp-section -->
<?php
$getmobileappbutton = get_field('getmobile-app-button');
$getmobileappbuttonlink = get_field('getmobile-app-button-link');
?>
<div class="get-mobileapp-section ">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="get-mobileapp-box">
					<h1><?php echo the_field('get-mobile-header');?></h1>
					<p><?php echo the_field('getmobile-text');?></p>
					 <?php
                        $a = 0;
                        if (!empty($getmobileappbuttonlink)) { ?>
                           <a href="<?php echo $getmobileappbutton; ?>">
               <?php echo $getmobileappbutton; ?></a>
                     <?php }
                        ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- get-mobileapp-section -->
<!-- just-few-section -->
<div class="just-few-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="just-few-section-header">
					<h1><?php the_field('just-few-section-header');?></h1>
				</div>
				<div class="just-few-tab-section">
					<nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active" id="nav-law-tab" data-toggle="tab" href="#nav-law" role="tab"><i class="fa fa-university" aria-hidden="true"></i><h4>Law</h4></a>
                      <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"><i class="fa fa-home" aria-hidden="true"></i><h4>HOA</h4></a>
                      <a class="nav-item nav-link" id="nav-sports-tab" data-toggle="tab" href="#nav-sports" role="tab"><i class="fa fa-futbol-o" aria-hidden="true"></i><h4>Sports Team</h4></a>
                      <a class="nav-item nav-link" id="nav-education-tab" data-toggle="tab" href="#nav-education" role="tab"><i class="fa fa-graduation-cap" aria-hidden="true"></i><h4>Education</h4></a>
                       <a class="nav-item nav-link" id="nav-trade-tab" data-toggle="tab" href="#nav-trade" role="tab"><i class="fa fa-file-text" aria-hidden="true"></i><h4>Trade Groups</h4></a>
                       <a class="nav-item nav-link" id="nav-food-tab" data-toggle="tab" href="#nav-food" role="tab"><i class="fa fa-cutlery" aria-hidden="true"></i><h4>Food and Bev</h4></a>
                       <a class="nav-item nav-link" id="nav-podcast-tab" data-toggle="tab" href="#nav-podcast" role="tab" ><i class="fa fa-podcast" aria-hidden="true"></i><h4>Podcast</h4></a>
                    </div>
                  </nav>
                  <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-law" role="tabpanel" aria-labelledby="nav-law-tab">
                    	<div class="row">
                    		 <div class="col-md-5 col-sm-5 col-xs-12">
                      	<div class="tab-img">
                      		<img src="<?php echo get_template_directory_uri();?>/images/tab-img.png">
                      	</div>
                      </div>
                      <div class="col-md-7 col-sm-7 col-xs-12">
                      	<div class="tab-text">
                      		<h2>Episten Grinnel & Howell</h2>
                      		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      		quis nostrud exercitation ullamco.</p>
                      	</div>
                      </div>
                    	</div>
                     
                    </div>
                    <div class="tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">
                    		 <div class="col-md-5 col-sm-5 col-xs-12">
                      	<div class="tab-img">
                      		<img src="<?php echo get_template_directory_uri();?>/images/tab-img.png">
                      	</div>
                      </div>
                      <div class="col-md-7 col-sm-7 col-xs-12">
                      	<div class="tab-text">
                      		<h2>Episten Grinnel & Howell</h2>
                      		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      		quis nostrud exercitation ullamco.</p>
                      	</div>
                      </div>
                    	</div>
                    </div>
                    <div class="tab-pane fade" id="nav-sports" role="tabpanel" aria-labelledby="nav-sports-tab">
                  <div class="row">
                    		 <div class="col-md-5 col-sm-5 col-xs-12">
                      	<div class="tab-img">
                      		<img src="<?php echo get_template_directory_uri();?>/images/tab-img.png">
                      	</div>
                      </div>
                      <div class="col-md-7 col-sm-7 col-xs-12">
                      	<div class="tab-text">
                      		<h2>Episten Grinnel & Howell</h2>
                      		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      		quis nostrud exercitation ullamco.</p>
                      	</div>
                      </div>
                    	</div>
                    </div>
                    <div class="tab-pane fade" id="nav-education" role="tabpanel" aria-labelledby="nav-education-tab">
                   <div class="row">
                    		 <div class="col-md-5 col-sm-5 col-xs-12">
                      	<div class="tab-img">
                      		<img src="<?php echo get_template_directory_uri();?>/images/tab-img.png">
                      	</div>
                      </div>
                      <div class="col-md-7 col-sm-7 col-xs-12">
                      	<div class="tab-text">
                      		<h2>Episten Grinnel & Howell</h2>
                      		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      		quis nostrud exercitation ullamco.</p>
                      	</div>
                      </div>
                    	</div>
                    </div>
                      <div class="tab-pane fade" id="nav-education" role="tabpanel" aria-labelledby="nav-education-tab">
                    <div class="row">
                    		 <div class="col-md-5 col-sm-5 col-xs-12">
                      	<div class="tab-img">
                      		<img src="<?php echo get_template_directory_uri();?>/images/tab-img.png">
                      	</div>
                      </div>
                      <div class="col-md-7 col-sm-7 col-xs-12">
                      	<div class="tab-text">
                      		<h2>Episten Grinnel & Howell</h2>
                      		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      		quis nostrud exercitation ullamco.</p>
                      	</div>
                      </div>
                    	</div>
                    </div>
                      <div class="tab-pane fade" id="nav-trade" role="tabpanel" aria-labelledby="nav-trade-tab">
                  <div class="row">
                    		 <div class="col-md-5 col-sm-5 col-xs-12">
                      	<div class="tab-img">
                      		<img src="<?php echo get_template_directory_uri();?>/images/tab-img.png">
                      	</div>
                      </div>
                      <div class="col-md-7 col-sm-7 col-xs-12">
                      	<div class="tab-text">
                      		<h2>Episten Grinnel & Howell</h2>
                      		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      		quis nostrud exercitation ullamco.</p>
                      	</div>
                      </div>
                    	</div>
                    </div>
                     <div class="tab-pane fade" id="nav-food" role="tabpanel" aria-labelledby="nav-food-tab">
                   <div class="row">
                    		 <div class="col-md-5 col-sm-5 col-xs-12">
                      	<div class="tab-img">
                      		<img src="<?php echo get_template_directory_uri();?>/images/tab-img.png">
                      	</div>
                      </div>
                      <div class="col-md-7 col-sm-7 col-xs-12">
                      	<div class="tab-text">
                      		<h2>Episten Grinnel & Howell</h2>
                      		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      		quis nostrud exercitation ullamco.</p>
                      	</div>
                      </div>
                    	</div>
                    </div>
                      <div class="tab-pane fade" id="nav-podcast" role="tabpanel" aria-labelledby="nav-podcast-tab">
                  <div class="row">
                    		 <div class="col-md-5 col-sm-5 col-xs-12">
                      	<div class="tab-img">
                      		<img src="<?php echo get_template_directory_uri();?>/images/tab-img.png">
                      	</div>
                      </div>
                      <div class="col-md-7 col-sm-7 col-xs-12">
                      	<div class="tab-text">
                      		<h2>Episten Grinnel & Howell</h2>
                      		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      		quis nostrud exercitation ullamco.</p>
                      	</div>
                      </div>
                    	</div>
                    </div>
                  </div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- just-few-section -->
<!-- clients-section -->
<div class="clients-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<h2><?php the_field('clients-section-header');?></h2>
				<div class="clients-box">
								<?php 
						if( have_rows('clients-box-images') ): 
		 				while( have_rows('clients-box-images') ): the_row(); 
	 					$clientimg =  get_sub_field('client-img'); 
   					?>
					<ul>
						<li><img src="<?php echo $clientimg; ?>"></li>
						<?php endwhile; ?>
             			<?php endif;?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- clients-section -->
<!-- address-section -->
<div class="address-section">
	<div class="container">
		<div class="row">
			<?php 
						if( have_rows('address-box') ): 
		 				while( have_rows('address-box') ): the_row(); 
	 					$addressboximg =  get_sub_field('address-box-img'); 
	 					$addressboxheader =  get_sub_field('address-box-header'); 
	 					$addressboxtext =  get_sub_field('address-box-text'); 
   					?>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="address-box">
					<img src="<?php echo $addressboximg; ?>" class="img-responsive">
					<h6><?php echo $addressboxheader; ?></h6>
					<p><?php echo $addressboxtext; ?></p>
				</div>
			</div>
			<?php endwhile; ?>
            <?php endif;?>
		</div>
	</div>
</div>
<!-- address-section -->
<!-- contact-section -->
<div class="contact-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="contact-section-header">
					<h2><?php echo the_field('contact-section-header');?></h2>
					<p><?php echo the_field('contact-section-text');?></p>
				</div>
				<div class="contact-box">
					<?php echo do_shortcode('[contact-form-7 id="160" title="Contact form"]');?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- contact-section -->
</div>
</article>
<?php //if ( comments_open() && ! post_password_required() ) { comments_template( '', true ); } ?>
<?php endwhile; endif; ?>
</main>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>