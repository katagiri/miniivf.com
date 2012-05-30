<?php $offset = ''; require ($offset.'includes/inc_lib.php'); $page = 'home'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Mini-IVF&trade; || Minimal Stimulation IVF</title>
<?php include ($offset.'includes/links.php'); ?>
</head>
<body>
<?php
$home_page = 'yes';
include ($offset.'includes/header.php'); ?>
<div class="content">

<div id="slider-wrapper">
    <div id="slider" class="nivoSlider">
        <a href="<?php echo $domain ?>"><img src="img/what-is-mini-ivf.png" alt="" /></a>
        <a href="<?php echo $domain ?>"><img src="img/mini-ivf-clinics-new-york.png" alt="" /></a>
        <a href="<?php echo $domain ?>"><img src="img/is-mini-ivf-for-me.png" alt="" /></a>
        <a href="<?php echo $domain ?>"><img src="img/why-mini-ivf.png" alt="" /></a>
    </div>
</div>             
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({
			effect: 'random', // Specify sets like: 'fold,fade,sliceDown'
			slices: 15, // For slice animations
			boxCols: 8, // For box animations
			boxRows: 4, // For box animations
			animSpeed: 800, // Slide transition speed
			pauseTime: 10000, // How long each slide will show
			startSlide: 0, // Set starting Slide (0 index)
			directionNav: true, // Next & Prev navigation
			directionNavHide: true, // Only show on hover
			controlNav: true, // 1,2,3... navigation
			controlNavThumbs: false, // Use thumbnails for Control Nav
			controlNavThumbsFromRel: false, // Use image rel for thumbs
			controlNavThumbsSearch: '.jpg', // Replace this with...
			controlNavThumbsReplace: '_thumb.jpg', // ...this in thumb Image src
			keyboardNav: true, // Use left & right arrows
			pauseOnHover: true, // Stop animation while hovering
			manualAdvance: false, // Force manual transitions
			captionOpacity: 0.8, // Universal caption opacity
			prevText: 'Prev', // Prev directionNav text
			nextText: 'Next', // Next directionNav text
			beforeChange: function(){}, // Triggers before a slide transition
			afterChange: function(){}, // Triggers after a slide transition
			slideshowEnd: function(){}, // Triggers after all slides have been shown
			lastSlide: function(){}, // Triggers when last slide is shown
			afterLoad: function(){} // Triggers when slider has loaded
		});
    });
</script>
</div>
<?php include ($offset.'includes/footer.php'); ?>
</body>
</html>