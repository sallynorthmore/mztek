<?php
/*
Template Name: Chi-TEK
*/
?>

<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="Author" content="MzTEK - http://www.mztek.org" />
<meta name="MSSmartTagsPreventParsing" content="true" />
<meta name="Date-Creation-yyyymmdd" content="20090101" />
<meta name="Keywords" content="new media digital arts physical computing web design arduinos toy hacking workshops women feminism computing computer art sally northmore sophie mcdonald space media charity peer-to-peer p2p london" />
<meta name="copyright" content="MzTEK" />


<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<!--
	///////////////////////////////////////////////////////////////////
	Designed, written, produced and programmed by MzTEK in London, 2009
	///////////////////////////////////////////////////////////////////
-->


<!--<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
-->
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />

<link rel="shortcut icon" href="http://mztek.org/wp-content/themes/sally2/images/pico.ico" />

<script type="text/javascript" src="http://www.mztek.org/wp-content/themes/sally2/js/jquery-1.3.2.min.js"></script> 


<script type="text/javascript" src="http://www.mztek.org/wp-content/themes/sally2/js/jquery.pngFix.js"></script> 


<script type="text/javascript" src="http://www.mztek.org/wp-content/themes/sally2/js/jquery.colorAnimations.js"></script>

<link rel="stylesheet" href="http://www.mztek.org/wp-content/themes/sally2/sifr3/css/sifr.css" type="text/css" />

<link rel="stylesheet" href="http://www.mztek.org/wp-content/themes/sally2/chi-tek.css" type="text/css" />



<script src="http://www.mztek.org/wp-content/themes/sally2/sifr3/js/sifr.js" type="text/javascript"></script>
<script src="http://www.mztek.org/wp-content/themes/sally2/sifr3/js/sifr-config.js" type="text/javascript"></script>

<script type="text/javascript"> 
    $(document).ready(function(){ 
        $(document).pngFix(); 
		spectrum();  
   
		function spectrum(){  
			var hue = 'rgb(' + (Math.floor(Math.random() * 256)) + ',' + (Math.floor(Math.random() * 256)) + ',' + (Math.floor(Math.random() * 256)) + ')';  
			//var hue = 'rgb(' + (Math.floor(Math.random() * 0)) + ',' + (Math.floor(Math.random() * 256)) + ',' + (Math.floor(Math.random() * 256)) + ')';  
		 	$('#header').animate( { backgroundColor: hue }, 5000);  
		  	spectrum(); 
			console.log(hue); 
		  }  
    }); 
</script>

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<style type="text/css" media="screen">

<?php
// Checks to see whether it needs a sidebar or not
if ( !empty($withcomments) && !is_single() ) {
?>
	#page { border: none; }
<?php } else { // No sidebar ?>
	#page { border: none; }
<?php } ?>

</style>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>
</head>
<body>
<div onclick="javascript:location='http://www.mztek.org'"  id="header">&nbsp;</div>
<div  onclick="javascript:location='http://www.mztek.org'"  id="header-img"></div>
<div id="page">
    <div id="stuff">
        <div id="menu">
            <h5>Chi-TEK TEAPARTY!</h5>
         
        </div><!-- end #menu -->

        
        
        
        
        
        
        
        
        
        
        
        
        
        

	<div style="width:auto;" class="narrowcolumn">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<h2 class="bell"><?php the_title(); ?></h2>
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
		</div>
		<?php endwhile; endif; ?>
	<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
	</div>


<?php get_footer(); ?>