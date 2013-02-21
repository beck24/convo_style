<label><?php echo elgg_echo('mystyle:form:title'); ?></label><br>
 
    <select name="params[override]">
    <option value="0" <?php if ($vars['entity']->override == 0 || !$vars['entity']->override) echo " selected=\"yes\" "; ?>><?php echo elgg_echo('mystyle:override:false'); ?></option>
    <option value="1" <?php if ($vars['entity']->override == 1) echo " selected=\"yes\" "; ?>><?php echo elgg_echo('mystyle:override:true'); ?></option>
    </select>
    <br><br>
    
    <label><?php echo elgg_echo('mystyle:backgroundimage:title'); ?></label><br>
    <input type="radio" id="bgimagedefault" name="params[backgroundimage]" value="0" <?php if($vars['entity']->backgroundimage == 0 || !$vars['entity']->backgroundimage){ echo " checked=\"checked\""; } ?>>
    <label for="bgimagedefault"><?php echo elgg_echo('mystyle:backgroundimage:default'); ?></label><br>
    
    <input type="radio" id="bgimagenone" name="params[backgroundimage]" value="1" <?php if($vars['entity']->backgroundimage == 1){ echo " checked=\"checked\""; } ?>>
    <label for="bgimagenone"><?php echo elgg_echo('mystyle:backgroundimage:none'); ?></label><br>
    
    <input type="radio" id="bgimagecustom" name="params[backgroundimage]" value="2" <?php if($vars['entity']->backgroundimage == 2){ echo " checked=\"checked\""; } ?>>
    <label for="bgimagecustom"><?php echo sprintf(elgg_echo('mystyle:backgroundimage:custom'), "<a href=\"" . $vars['url'] . "pg/file/new/" . get_loggedin_user()->username . "\" target=\"_blank\">" . elgg_echo('mystyle:upload') . "</a>"); ?></label><br>
    <input type="text" id="bgimagecustom" name="params[backgroundimageurl]" value="<?php if(!is_numeric($vars['entity']->backgroundimage) && !empty($vars['entity']->backgroundimage)){ echo $vars['entity']->backgroundimage; } ?>" <?php if($vars['entity']->backgroundimage == 2){ echo " checked=\"checked\""; } ?>>
    

	<br><br>
	<label><?php echo elgg_echo('mystyle:backgroundimage:position'); ?></label><br>
	<div class="mystyle_bg">
		<?php echo elgg_echo('mystyle:horizontal'); ?><br>
		<input type="radio" id="bgimagehpositiondefault" name="params[backgroundimagehposition]" value="default" <?php if($vars['entity']->backgroundimagehposition == "default" || !$vars['entity']->backgroundimagehposition){ echo " checked=\"checked\""; } ?>>
		<label for="bgimagehpositiondefault"><?php echo elgg_echo('mystyle:default'); ?></label><br>
		<input type="radio" id="bgimagehpositionleft" name="params[backgroundimagehposition]" value="left" <?php if($vars['entity']->backgroundimagehposition == "left"){ echo " checked=\"checked\""; } ?>>
		<label for="bgimagehpositionleft"><?php echo elgg_echo('mystyle:left'); ?></label><br>
		<input type="radio" id="bgimagehpositioncenter" name="params[backgroundimagehposition]" value="center" <?php if($vars['entity']->backgroundimagehposition == "center"){ echo " checked=\"checked\""; } ?>>
		<label for="bgimagehpositioncenter"><?php echo elgg_echo('mystyle:center'); ?></label><br>
		<input type="radio" id="bgimagehpositionright" name="params[backgroundimagehposition]" value="right" <?php if($vars['entity']->backgroundimagehposition == "right"){ echo " checked=\"checked\""; } ?>>
		<label for="bgimagehpositionright"><?php echo elgg_echo('mystyle:right'); ?></label><br>
	</div>
	
	<div class="mystyle_bg">
		<?php echo elgg_echo('mystyle:vertical'); ?><br>
		<input type="radio" id="bgimagevpositiondefault" name="params[backgroundimagevposition]" value="default" <?php if($vars['entity']->backgroundimagevposition == "default" || !$vars['entity']->backgroundimagevposition){ echo " checked=\"checked\""; } ?>>
		<label for="bgimagevpositiondefault"><?php echo elgg_echo('mystyle:default'); ?></label><br>
		<input type="radio" id="bgimagevpositiontop" name="params[backgroundimagevposition]" value="top" <?php if($vars['entity']->backgroundimagevposition == "top"){ echo " checked=\"checked\""; } ?>>
		<label for="bgimagehpositiontop"><?php echo elgg_echo('mystyle:top'); ?></label><br>
		<input type="radio" id="bgimagevpositioncenter" name="params[backgroundimagevposition]" value="center" <?php if($vars['entity']->backgroundimagevposition == "center"){ echo " checked=\"checked\""; } ?>>
		<label for="bgimagevpositioncenter"><?php echo elgg_echo('mystyle:center'); ?></label><br>
		<input type="radio" id="bgimagevpositionbottom" name="params[backgroundimagevposition]" value="bottom" <?php if($vars['entity']->backgroundimagevposition == "bottom"){ echo " checked=\"checked\""; } ?>>
		<label for="bgimagehpositionright"><?php echo elgg_echo('mystyle:bottom'); ?></label><br>
	</div>
	
	<br><br>
	
	<label><?php echo elgg_echo('mystyle:backgroundimage:repeat'); ?></label><br>
	<input type="radio" id="bgimagerepeatdefault" name="params[backgroundimagerepeat]" value="default" <?php if($vars['entity']->backgroundimagerepeat == "default" || !$vars['entity']->backgroundimagerepeat){ echo " checked=\"checked\""; } ?>>
    <label for="bgimagerepeatdefault"><?php echo elgg_echo('mystyle:default'); ?></label><br>
    <input type="radio" id="bgimagerepeatnone" name="params[backgroundimagerepeat]" value="no-repeat" <?php if($vars['entity']->backgroundimagerepeat == "no-repeat"){ echo " checked=\"checked\""; } ?>>
    <label for="bgimagerepeatnone"><?php echo elgg_echo('mystyle:backgroundimage:no-repeat'); ?></label><br>
    <input type="radio" id="bgimagerepeatx" name="params[backgroundimagerepeat]" value="repeat-x" <?php if($vars['entity']->backgroundimagerepeat == "repeat-x"){ echo " checked=\"checked\""; } ?>>
    <label for="bgimagerepeatx"><?php echo elgg_echo('mystyle:backgroundimage:repeat-x'); ?></label><br>
    <input type="radio" id="bgimagerepeaty" name="params[backgroundimagerepeat]" value="repeat-y" <?php if($vars['entity']->backgroundimagerepeat == "repeat-y"){ echo " checked=\"checked\""; } ?>>
    <label for="bgimagerepeaty"><?php echo elgg_echo('mystyle:backgroundimage:repeat-y'); ?></label><br>
    <input type="radio" id="bgimagerepeatall" name="params[backgroundimagerepeat]" value="repeat" <?php if($vars['entity']->backgroundimagerepeat == "repeat"){ echo " checked=\"checked\""; } ?>>
    <label for="bgimagerepeatall"><?php echo elgg_echo('mystyle:backgroundimage:repeat-all'); ?></label><br>
	
	<br><br>
	
	<label><?php echo elgg_echo('mystyle:backgroundimage:attach'); ?></label><br>
	<input type="radio" id="bgimageattachdefault" name="params[backgroundimageattach]" value="default" <?php if($vars['entity']->backgroundimageattach == "default" || !$vars['entity']->backgroundimageattach){ echo " checked=\"checked\""; } ?>>
    <label for="bgimageattachdefault"><?php echo elgg_echo('mystyle:default'); ?></label><br>
    <input type="radio" id="bgimageattachfixed" name="params[backgroundimageattach]" value="fixed" <?php if($vars['entity']->backgroundimageattach == "fixed"){ echo " checked=\"checked\""; } ?>>
    <label for="bgimageattachfixed"><?php echo elgg_echo('mystyle:backgroundimage:attach:fixed'); ?></label><br>
    <input type="radio" id="bgimageattachscroll" name="params[backgroundimagerepeat]" value="scroll" <?php if($vars['entity']->backgroundimagerepeat == "scroll"){ echo " checked=\"checked\""; } ?>>
    <label for="bgimageattachscroll"><?php echo elgg_echo('mystyle:backgroundimage:attach:scroll'); ?></label><br>
	
	<br><br>
	
	<div class="mystyle_colorpicker">
		<div id="mystyle_bgcolorholder"></div>
		<label><?php echo elgg_echo('mystyle:backgroundcolor'); ?></label><br>
		<?php echo elgg_view('input/text', array('internalname' => 'mystyle_bgcolor', 'internalid' => 'mystyle_bgcolor', 'value' => $vars['entity']->mystyle_bgcolor, 'class' => 'mystyle_colorpicker')); ?>
	</div>
	
	<div class="mystyle_colorpicker">
		<div id="mystyle_textcolorholder"></div>
		<label><?php echo elgg_echo('mystyle:textcolor'); ?></label><br>
		<?php echo elgg_view('input/text', array('internalname' => 'mystyle_textcolor', 'internalid' => 'mystyle_textcolor', 'value' => $vars['entity']->mystyle_textcolor, 'class' => 'mystyle_colorpicker')); ?>
	</div>
	
	<div class="mystyle_colorpicker">
		<div id="mystyle_linkcolorholder"></div>
		<label><?php echo elgg_echo('mystyle:linkcolor'); ?></label><br>
		<?php echo elgg_view('input/text', array('internalname' => 'mystyle_linkcolor', 'internalid' => 'mystyle_linkcolor', 'value' => "#fca732", 'class' => 'mystyle_colorpicker')); ?>
	</div>
	
	
<script type="text/javascript">
  $(document).ready(function() {
	  // div id, input id
    $('#mystyle_bgcolorholder').farbtastic( function(color){
    	var textcolor = mystyle_getContrastingTextColor(color);
		document.getElementById('mystyle_bgcolor').value = color;
		document.getElementById('mystyle_bgcolor').style.backgroundColor = color;
		document.getElementById('mystyle_bgcolor').style.color = textcolor;
    });
    $('#mystyle_textcolorholder').farbtastic( function(color){
    	var textcolor = mystyle_getContrastingTextColor(color);
		document.getElementById('mystyle_textcolor').value = color;
		document.getElementById('mystyle_textcolor').style.backgroundColor = color;
		document.getElementById('mystyle_textcolor').style.color = textcolor;
    });
    $('#mystyle_linkcolorholder').farbtastic( function(color){
    	var textcolor = mystyle_getContrastingTextColor(color);
		document.getElementById('mystyle_linkcolor').value = color;
		document.getElementById('mystyle_linkcolor').style.backgroundColor = color;
		document.getElementById('mystyle_linkcolor').style.color = textcolor;
    });

  //  document.getElementById('mystyle_bgcolor').value = <?php echo $vars['entity']->mystyle_bgcolor; ?>;
//    document.getElementById('mystyle_bgcolor').style.backgroundColor = <?php echo $vars['entity']->mystyle_bgcolor; ?>;
    //document.getElementById('mystyle_bgcolor').style.color = getContrastingTextColor(<?php echo $vars['entity']->mystyle_bgcolor; ?>);
  });
</script>