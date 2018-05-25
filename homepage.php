<?php 
/*
Template Name: Home Page
*/
get_header(); 

$page_id     = get_queried_object_id();
?> 
 <!-- START HOME -->
 <?php $banner_image = get_field('banner_image');
 if($banner_image): ?>
<section class="section header-bg-img h-100vh" id="<?php echo get_field('home_section_id');  ?>" style="background-image: url(<?php echo $banner_image['url']; ?>);">
	<div class="bg-overlay"></div>
	<div class="header-table">
		<div class="header-table-center">
			<div class="container position-relative z-index">
				<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="text-center header-content mx-auto">
							<?php $welcome_text = get_field('welcome_text');
							if($welcome_text):  ?>
							<h4 class="text-white first-title mb-4"><?php echo $welcome_text; ?></h4>
							<?php endif; ?>
							
							<?php $typing_text_s = get_field('typing_text_s');
							if( $typing_text_s ): ?>
							<h1 class="header-name text-white text-capitalize mb-0">I'M <span class="element font-weight-bold" data-elements="
							<?php foreach($typing_text_s as $typing_single): ?>
							<?php echo $typing_single['typing_text'].', '; ?>
							
							<?php endforeach; ?>
							
							
							"></span></h1>
							<?php endif; ?>
							<?php $header_banner_text = get_field('header_banner_text');
							if($header_banner_text): ?>
							<p class="text-white mx-auto header-desc mt-4"><?php echo $header_banner_text; ?></p>
							<?php endif; ?>
							
							<?php $call_to_action_button = get_field('call_to_action_button');
							if($call_to_action_button): ?>
							<div class="mt-4 pt-2">
								<a target="_blank" href="<?php echo $call_to_action_button['url']; ?>" class="btn btn-outline-custom btn-round"><?php echo $call_to_action_button['title']; ?></a>
							</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END HOME -->
<?php endif; ?>



 <!-- START HOME 
        <section class="section header-bg-img h-100vh clippath_none" id="home">
            <div class="bg-overlay"></div>
            <div class="header-table">
                <div class="header-table-center">
                    <div class="container position-relative z-index">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="text-center header-content mx-auto">
                                    <h4 class="text-white first-title mb-4">Welcome</h4>
                                    <h1 class="header-name text-white text-capitalize mb-0">I'M <span class="element font-weight-bold" data-elements="Kerri Deo.,A Graphic Designer.,A Photographer."></span></h1>
                                    <p class="text-white mx-auto header-desc mt-4">It is a long established fact that a reader will be of a page when established fact looking at its layout.</p>
                                    <div class="mt-4 pt-2">
                                        <a href="#" class="btn btn-outline-custom btn-round">Download Cv</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- END HOME -->


<!-- START ABOUT -->
<section class="section" id="<?php echo get_field('about_section_id');  ?>">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="mt-3">
					<div class="porfile-pic"> 
						<?php $about_image = get_field('about_image');
						if($about_image): ?>
						<img src="<?php echo $about_image['url']; ?>" alt<?php echo $about_image['url']; ?> class="img-fluid mx-auto d-block img-thumbnail">
						<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="mt-3">
					<?php $about_text = get_field('about_text');
					if($about_text): echo  $about_text; ?>
					
					<?php endif; ?>
					<div>
						<ul class="mb-0 about-social list-inline mt-4">
							<li class="list-inline-item"><a href="#"><i class="mdi mdi-skype"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="mdi mdi-facebook"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="mdi mdi-linkedin"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="mdi mdi-twitter"></i></a></li>
						</ul> 
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END ABOUT -->

<!-- START SERVICES -->
<section class="section bg-light" id="services">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="text-center">
					<?php $service_title = get_field('service_title');
					if($service_title): echo  $service_title; ?>
					
					
					<?php endif; ?>
					
					<?php $sservice_subtitle = get_field('sservice_subtitle');
					if($sservice_subtitle ):  ?>
					<p class="text-muted mx-auto section-subtitle mt-3"><?php echo  $sservice_subtitle; ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="row mt-5">
		
		
			<?php $services_list = get_field('services_list'); 
			if($services_list): 
			foreach($services_list as $services): ?>
			<div class="col-lg-4">
				<div class="text-center services-boxes rounded p-4 mt-4">
					
					<?php echo $services['services_content']; ?>
					
				</div>
			</div>
			<?php endforeach; endif; ?>
		
		</div>
	</div>
</section>
<!-- END SERVICES -->

<!-- START CTA -->
<section class="section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="text-center">
					<?php $action_text = get_field('action_text');
					if($action_text):  ?>
					<h2><?php echo $action_text; ?></h2>
					<?php endif; ?>
				</div>
				<?php $action_link = get_field('action_link');
					if($action_link ):  ?>
				<div class="text-center mt-4">
					<a href="<?php echo $action_link['url'] ?>" class="btn btn-custom"><?php echo $action_link['title'] ?></a>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<!-- END CTA -->

<!-- START CLIENT -->
<section class="section bg-light" id="client">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="text-center">
					<?php $section_title_client = get_field('section_title_client');
					if($section_title_client): echo $section_title_client;  ?>
					
					<?php endif; ?>
					<?php $section_subtitle_client = get_field('section_subtitle_client');
					if($section_subtitle_client):  ?>
					<p class="text-muted mx-auto section-subtitle mt-3"><?php echo $section_subtitle_client; ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="row mt-4 pt-4">
			<div class="col-lg-12">
				<div id="owl-demo" class="owl-carousel">
				
				
					<?php $review_client = get_field('review_client'); 
					if($review_client): 
					foreach($review_client as $review): ?>
					<div class="text-center testi_boxes mx-auto">
						<div class="tam_testi_icon text-custom">
							<i class="mbri-quote-left"></i>
						</div>
						<div class="mt-2">
							<div>
								<img src="<?php echo $review['client_image']['url']; ?>" alt="<?php echo $review['client_image']['title']; ?>" class="mx-auto img-thumbnail img-fluid d-block rounded-circle" style="width: 150px; height: 150px;">
							</div>
							<p class="client_review font-italic mt-4 text-center text-muted">" <?php echo $review['review']; ?>"</p>
							<p class="client_name text-center mb-0 mt-4">- <?php echo $review['client_name']; ?>, <span class="font-weight-bold"><?php echo $review['marketplace_name']; ?></span></p>
						</div>
					</div>
					<?php endforeach; endif; ?>
					
					
					
					
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END CLIENT -->

<!--START WORK -->   
<section class="section text-center" id="work">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="text-center">
					<?php $section_title_port = get_field('section_title_port');
					if($section_title_port): echo $section_title_port;  ?>
					
					<?php endif; ?>
					<?php $section_subtitle_port = get_field('section_subtitle_port');
					if( $section_subtitle_port):  ?>
					<p class="text-muted mx-auto section-subtitle mt-3"><?php echo $section_subtitle_port; ?></p>
					<?php endif; ?>
					
					
					
				</div>
			</div>
		</div>
		<div class="row mt-5 ">
			<ul class="col list-unstyled list-inline mb-0 text-uppercase work_menu" id="menu-filter">
				<li class="list-inline-item"><a class="active" data-filter="*">All</a></li>
				
				<?php $portfoliocategory =  get_terms('portfoliocategory');
				foreach( $portfoliocategory as $portfolio ): ?>
				<li class="list-inline-item"><a class="" data-filter=".<?php echo $portfolio->slug; ?>"><?php echo $portfolio->name; ?></a></li>
				<?php endforeach; ?>
				
				
			</ul>
		</div>
	</div>
	<div class="container">
		<div class="row mt-4 work-filter">
		
			<?php 

			$portfolio_number = get_field('portfolio_number');
			
			$portfoio = new WP_Query(array(
				'post_type'				=> 'portfolio',
				'posts_per_page'		=> $portfolio_number,
			));
			while($portfoio->have_posts()): $portfoio->the_post(); ?>
			<div class="col-lg-4 work_item 
			<?php $portfoliocategory =  get_the_terms(get_the_id(), 'portfoliocategory'); 
			
			foreach($portfoliocategory as $port){ echo $port->slug.' '; }
			
			?>
			
			
			
			">
				<a href="<?php echo get_the_post_thumbnail_url(); ?>" class="img-zoom">
					<div class="work_box">
						<div class="work_img port-img">
							<?php the_post_thumbnail('img-fluid mx-auto d-block rounded'); ?>
							
						</div>
						<div class="work_detail">
							<h4 class="mb-0"><?php the_title(); ?></h4>
							<?php $portfolio_url =  get_field('portfolio_url'); 
							if($portfolio_url): ?>
							<a target="_blank" href="<?php echo $portfolio_url['url']; ?>"><?php echo $portfolio_url['title']; ?></a>
							<?php endif; ?>
						</div>
					</div>
				</a>
			</div>
			<?php endwhile; ?>
			
			
			
		</div>
	</div>
</section>
<!--END WORK -->

<!-- START BLOG 
<section class="section bg-light" id="blog">
	<div class="container">   
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="text-center">
					<h2>Our <span class="font-weight-bold">Blog</span></h2>
					<p class="text-muted mx-auto section-subtitle mt-3">It is a long established fact that a reader will be of a page when established fact looking at its layout.</p>
				</div>
			</div>
		</div>                 
		<div class="row mt-5">
			<div class="col-lg-4 mt-3">
				<div class="rounded bg-white p-2">
					<div class="img_blog">
						<img src="<?php echo get_template_directory_uri(); ?>/images/blog/blog-1.jpg" alt="" class="img-fluid rounded mx-auto d-block">
					</div>
					<div class="content_blog pt-3 pb-3">
						<div>
							<h5 class="font-weight-bold mb-0"><a href="#" class="text-dark">There are many variations</a></h5>
						</div>
						<div class="mt-3">
							<p class="h6 text-muted date_blog mb-0">11 March 2018 <a href="#" class="text-custom font-weight-bold">By Kerri</a></p>
							<p class="mt-3 desc_blog text-muted">Sit sagittis vulputate laoreet sodales tortor nulla lobortis bibendum netus primis fames. Lobortis ultricies.</p>
							<p class="h6 mb-0"><a href="#" class="text-muted font-weight-bold">Read More...</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 mt-3">
				<div class="rounded bg-white p-2">
					<div class="img_blog">
						<img src="<?php echo get_template_directory_uri(); ?>/images/blog/blog-2.jpg" alt="" class="img-fluid rounded mx-auto d-block">
					</div>
					<div class="content_blog pt-3 pb-3">
						<div>
							<h5 class="font-weight-bold mb-0"><a href="#" class="text-dark">Contrary to popular belief</a></h5>
						</div>
						<div class="mt-3">
							<p class="h6 text-muted date_blog mb-0">18 March 2018 <a href="#" class="text-custom font-weight-bold">By Kerri</a></p>
							<p class="mt-3 desc_blog text-muted">Sit sagittis vulputate laoreet sodales tortor nulla lobortis bibendum netus primis fames. Lobortis ultricies.</p>
							<p class="h6 mb-0"><a href="#" class="text-muted font-weight-bold">Read More...</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 mt-3">
				<div class="rounded bg-white p-2">
					<div class="img_blog">
						<img src="<?php echo get_template_directory_uri(); ?>/images/blog/blog-3.jpg" alt="" class="img-fluid rounded mx-auto d-block">
					</div>
					<div class="content_blog pt-3 pb-3">
						<div>
							<h5 class="font-weight-bold mb-0"><a href="#" class="text-dark">Lorem Ipsum is not simply</a></h5>
						</div>
						<div class="mt-3">
							<p class="h6 text-muted date_blog mb-0">22 March 2018 <a href="#" class="text-custom font-weight-bold">By Kerri</a></p>
							<p class="mt-3 desc_blog text-muted">Sit sagittis vulputate laoreet sodales tortor nulla lobortis bibendum netus primis fames. Lobortis ultricies.</p>
							<p class="h6 mb-0"><a href="#" class="text-muted font-weight-bold">Read More...</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
 END BLOG -->


<!-- START CONTACT -->
<section class="section" id="contact">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="text-center">
				
				
					<?php 
					
					$page_id     = get_queried_object_id();
					
					$section_title_contact = get_field('section_title_contact', $page_id );
					if($section_title_contact): echo $section_title_contact;  ?>
					
					<?php endif; ?>
					<?php $section_subtitle_contact = get_field('section_subtitle_contact', $page_id );
					if($section_subtitle_contact):  ?>
					<p class="text-muted mx-auto section-subtitle mt-3"><?php echo $section_subtitle_contact; ?></p>
					<?php endif; ?>
					
				
				
					
					
				</div>
			</div>
		</div> 
		<div class="row mt-5">
			<div class="col-lg-4">
				<?php $phone_number = get_field('phone_number', $page_id );
				if( $phone_number ):  ?>
				<div class="text-center">
					<div>
						<i class="mbri-mobile2 text-custom h1"></i>
					</div>
					<div class="mt-3">
						<h5 class="mb-0 contact_detail-title font-weight-bold">Phone Number</h5>
						<p class="text-muted">+880 <?php echo $phone_number; ?></p>
					</div>
				</div>
				<?php endif; ?>
			</div>
			<div class="col-lg-4">
			
			<?php $email_address = get_field('email_address', $page_id );
				if($email_address):  ?>
				<div class="text-center">
					<div>
						<i class="mbri-letter text-custom h1"></i>
					</div>
					<div class="mt-3">
						<h5 class="mb-0 contact_detail-title font-weight-bold">Email Address</h5>
						<p class="text-muted"><?php echo  $email_address; ?></p>
					</div>
				</div>
				<?php endif; ?>
			</div>
			<div class="col-lg-4">
				<?php $office_address = get_field('office_address', $page_id );
				if($office_address):  ?>
				<div class="text-center">
					<div>
						<i class="mbri-pin text-custom h1"></i>
					</div>
					<div class="mt-3">
						<h5 class="mb-0 contact_detail-title font-weight-bold">Office Address</h5>
						<p class="text-muted"><?php echo $office_address ; ?></p>
					</div>
				</div>
				<?php endif; ?>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-12">
				<div class="form-kerri">
					<?php 
					
					
					$contact_form = get_field('contact_form', $page_id );
					if($contact_form): echo $contact_form; endif;  ?>
					
				</div>  
			</div>
		</div>
	</div>
</section>
<!-- END CONTACT -->
<?php get_footer(); ?>