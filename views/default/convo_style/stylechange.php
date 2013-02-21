
<script>
$(document).ready( function(){
<?php
//get all of our settings in individual variables - $override, $backgroundimage, etc.
$fields = array('override', 'backgroundimage', 'backgroundimageurl', 'backgroundimagehposition', 'backgroundimagevposition', 'backgroundimagerepeat', 'backgroundimageattach', 'bgcolor', 'bgcolordefault', 'textcolor', 'textcolordefault', 'linkcolor', 'linkcolordefault', 'linkhovercolor', 'linkhovercolordefault');

foreach($fields as $field){
	$$field = elgg_get_plugin_user_setting($field, elgg_get_logged_in_user_guid(), 'convo_style');	
}

if($override == 1){
	$style = array();
	if(!empty($backgroundimage) && $backgroundimage != 0){
		// overwrite bgimage
		if($backgroundimage == 1){
			$style[] =  "'background-image': 'none !important'";
		}
		else{
			$style[] = "'background-image': 'url(" . $backgroundimageurl . ")'";	
		}
	}
	
	if(($backgroundimagehposition != "default" || $backgroundimagevposition != "default") && !empty($backgroundimagehposition)){
		if($backgroundimagehposition == "default"){
			$style[] = "'background-position': '" . $backgroundimagevposition . "'"; 
		}
		elseif($backgroundvposition == "default"){
			$style[] = "'background-position': '" . $backgroundimagehposition . "'";
		}
		else{
			$style[] = "'background-position': '" . $backgroundimagehposition . " " . $backgroundimagevposition . "'";
		}
	}
	
	if(!empty($backgroundimagerepeat) && $backgroundimagerepeat != "default"){
		$style[] = "'background-repeat': '" . $backgroundimagerepeat . "'";
	}
	
	if(!empty($backgroundimageattach) && $backgroundimageattach != "default"){
		$style[] = "'background-attachment': '" . $backgroundimageattach . "'";
	}
	
	if(!empty($bgcolordefault) && $bgcolordefault != "default"){
		$style[] = "'background-color': '" . $bgcolor . "'";	
	}
	
	if(!empty($textcolordefault) && $textcolordefault != "default"){
		$style[] = "'color': '" . $textcolor . "'";	
	}
	
	$linkstyle = array();
	if(!empty($linkcolordefault) && $linkcolordefault != "default"){
		$linkstyle[] = "'color': '" . $linkcolor . "'";
	}
	
	$linkhoverstyle = array();
	if(!empty($linkhovercolordefault) && $linkhovercolordefault != "default"){
		$linkhoverstyle[] = "'color': '" . $linkhovercolor . "'";
	}
}
?>

<?php 
	if(is_array($style) && count($style) > 0){
		$bodystyle = implode(',', $style);
?>
$('body').css({<?php echo $bodystyle; ?>});

<?php
	}
	
	if(is_array($linkstyle) && count($linkstyle) > 0){
		$link = implode(',', $linkstyle);
?>
$('a').css({<?php echo $link; ?>});

<?php 
	}
	
		if(is_array($linkhoverstyle) && count($linkhoverstyle) > 0){
		$linkhover = implode(',', $linkhoverstyle);
?>
var convo_styleLinkColor = $('a').css('color');
		
$('a').hover(
function() {
	$(this).css({<?php echo $linkhover; ?>});
},
function() {
	$(this).css({'color' : convo_styleLinkColor });
}
);
<?php 
	}
?>
});
</script>
<?php
