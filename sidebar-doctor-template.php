<?php global $post; ?>
<!---------- Photo --------->
<?php if(get_field('upload_photo',$post->ID)) { ?>
<div class="photo"><?php $photo = get_field('upload_photo',$post->ID); ?><img src="<?php echo $photo['url']; ?>" alt="<?php echo  $photo['alt']; ?>"></div><?php } ?>

<!---------- Video --------->
<?php if(get_field('video_content',$post->ID)) { ?>
<div class="video">
	<?php the_field('video_content',$post->ID); ?>
</div>
<?php } ?>

<!---------- sideLocations --------->
<?php if(get_field('links',$post->ID)) { ?>
<div id="sideLocations">
	<?php the_field('links',$post->ID); ?>
</div>
<?php } ?>

<!---------- blockquote --------->
<?php if(get_field('content',$post->ID)) { ?>
<blockquote>
<?php the_field('content',$post->ID); ?>
</blockquote>
<?php } ?>