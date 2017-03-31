<html>
	<head>
		<title>Gallery module</title>
		<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.bxslider.js"></script>
		<script type="text/javascript" src="js/jquery.colorbox.js"></script>
		
		<link rel="stylesheet" href="css/jquery.bxslider.css">
		<link rel="stylesheet" href="css/colorbox.css" />
	</head>
	<body>
		<h1 style="text-align:center;">Gallery Module</h1>
		<?php $images = glob('images/slide/' . "*jpg"); ?>
		<ul class="bxslider">
			<?php if(!empty($images)) {
				foreach($images as $image) { 
				/* onclick="window.open('<?php echo $image; ?>', 'newwindow', 'width=1400, height=800'); return false;" */
				$image_name = explode('/', $image); ?>
				<li><a class="popup" href="<?php echo $image; ?>" title="<?php echo end($image_name); ?>"><img height="500" src="<?php echo $image; ?>" /></a></li>
			<?php } } ?>
		</ul>
		
		<div id="bx-pager">
			<?php if(!empty($images)) { $thm = 0;
				foreach($images as $image) { ?>
				<a data-slide-index="<?php echo $thm; ?>" href="javascript:;"><img width="100" src="<?php echo $image; ?>" /></a>
			<?php $thm++; } } ?>
		</div>
		
		<script type="text/javascript">
			$(document).ready(function(){
					$('.bxslider').bxSlider({
						mode: 'fade',
						speed: 500,
						pause: 4000,
						auto: true,
						pagerCustom: '#bx-pager',
						autoHover: true
					});
					$(".popup").colorbox({ rel: 'popup', current:false});
			});
		</script>
	</body>
</html>