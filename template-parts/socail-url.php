<ul class="mb-0 about-social list-inline mt-4">

	<?php $social_url = get_field('social_url','option'); 
	if($social_url): 
	
	foreach($social_url as $social): ?>
	<li class="list-inline-item"><a href="<?php echo $social['social_url_link']['url']; ?>"><i class="mdi mdi-<?php echo $social['social_url_link']['title']; ?>"></i></a></li>
	<?php endforeach; endif; ?>
	
</ul> 