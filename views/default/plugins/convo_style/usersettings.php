<?php
  elgg_load_css('farbtastic.css');
  elgg_load_js('farbtastic.js');
  
  $results = array(
	  'override',
	  'backgroundimage',
	  'backgroundimageurl',
	  'backgroundimagehposition',
	  'backgroundimagevposition',
	  'backgroundimagerepeat',
	  'backgroundimageattach',
	  'bgcolor',
	  'bgcolordefault',
	  'textcolor',
	  'textcolordefault',
	  'linkcolor',
	  'linkcolordefault',
	  'linkhovercolor',
	  'linkhovercolordefault'
	  );
  
  $params = array();
  foreach ($results as $result) {
	$params[$result] = elgg_get_plugin_user_setting($result, elgg_get_logged_in_user_guid(), 'convo_style');
  }

?>

<label id="convo_stylesettings"><?php echo elgg_echo('convo_style:form:title'); ?></label><br>
 
    <select name="params[override]">
    <option value="0" <?php if (!$params['override']) echo " selected=\"yes\" "; ?>><?php echo elgg_echo('convo_style:override:false'); ?></option>
    <option value="1" <?php if ($params['override'] == 1) echo " selected=\"yes\" "; ?>><?php echo elgg_echo('convo_style:override:true'); ?></option>
    </select>
    <br><br>
    
    <label><?php echo elgg_echo('convo_style:backgroundimage:title'); ?></label><br>
    <input type="radio" id="bgimagedefault" name="params[backgroundimage]" value="0" <?php if(!$params['backgroundimage']){ echo " checked=\"checked\""; } ?>>
    <label for="bgimagedefault"><?php echo elgg_echo('convo_style:backgroundimage:default'); ?></label><br>
    
    <input type="radio" id="bgimagenone" name="params[backgroundimage]" value="1" <?php if($params['backgroundimage'] == 1){ echo " checked=\"checked\""; } ?>>
    <label for="bgimagenone"><?php echo elgg_echo('convo_style:backgroundimage:none'); ?></label><br>
    
    <input type="radio" id="bgimagecustom" name="params[backgroundimage]" value="2" <?php if($params['backgroundimage'] == 2){ echo " checked=\"checked\""; } ?>>
    <label for="bgimagecustom"><?php echo sprintf(elgg_echo('convo_style:backgroundimage:custom'), "<a href=\"" . elgg_get_site_url() . "file/add/" . elgg_get_logged_in_user_guid() . "\" target=\"_blank\">" . elgg_echo('convo_style:upload') . "</a>"); ?></label><br>
    <?php echo elgg_echo('convo_style:backgroundimage:instructions'); ?><br>
    <input type="text" id="bgimagecustomurl" name="params[backgroundimageurl]" value="<?php echo $params['backgroundimageurl']; ?>">
    

	<br><br>
	<label><?php echo elgg_echo('convo_style:backgroundimage:position'); ?></label><br>
	<div class="convo_style_bg">
		<?php echo elgg_echo('convo_style:horizontal'); ?><br>
		<input type="radio" id="bgimagehpositiondefault" name="params[backgroundimagehposition]" value="default" <?php if($params['backgroundimagehposition'] == "default" || !$params['backgroundimagehposition']){ echo " checked=\"checked\""; } ?>>
		<label for="bgimagehpositiondefault"><?php echo elgg_echo('convo_style:default'); ?></label><br>
		<input type="radio" id="bgimagehpositionleft" name="params[backgroundimagehposition]" value="left" <?php if($params['backgroundimagehposition'] == "left"){ echo " checked=\"checked\""; } ?>>
		<label for="bgimagehpositionleft"><?php echo elgg_echo('convo_style:left'); ?></label><br>
		<input type="radio" id="bgimagehpositioncenter" name="params[backgroundimagehposition]" value="center" <?php if($params['backgroundimagehposition'] == "center"){ echo " checked=\"checked\""; } ?>>
		<label for="bgimagehpositioncenter"><?php echo elgg_echo('convo_style:center'); ?></label><br>
		<input type="radio" id="bgimagehpositionright" name="params[backgroundimagehposition]" value="right" <?php if($params['backgroundimagehposition'] == "right"){ echo " checked=\"checked\""; } ?>>
		<label for="bgimagehpositionright"><?php echo elgg_echo('convo_style:right'); ?></label><br>
	</div>
	
	<div class="convo_style_bg">
		<?php echo elgg_echo('convo_style:vertical'); ?><br>
		<input type="radio" id="bgimagevpositiondefault" name="params[backgroundimagevposition]" value="default" <?php if($params['backgroundimagevposition'] == "default" || !$params['backgroundimagevposition']){ echo " checked=\"checked\""; } ?>>
		<label for="bgimagevpositiondefault"><?php echo elgg_echo('convo_style:default'); ?></label><br>
		<input type="radio" id="bgimagevpositiontop" name="params[backgroundimagevposition]" value="top" <?php if($params['backgroundimagevposition'] == "top"){ echo " checked=\"checked\""; } ?>>
		<label for="bgimagehpositiontop"><?php echo elgg_echo('convo_style:top'); ?></label><br>
		<input type="radio" id="bgimagevpositioncenter" name="params[backgroundimagevposition]" value="center" <?php if($params['backgroundimagevposition'] == "center"){ echo " checked=\"checked\""; } ?>>
		<label for="bgimagevpositioncenter"><?php echo elgg_echo('convo_style:center'); ?></label><br>
		<input type="radio" id="bgimagevpositionbottom" name="params[backgroundimagevposition]" value="bottom" <?php if($params['backgroundimagevposition'] == "bottom"){ echo " checked=\"checked\""; } ?>>
		<label for="bgimagehpositionright"><?php echo elgg_echo('convo_style:bottom'); ?></label><br>
	</div>
	
	<br><br>
	
	<label><?php echo elgg_echo('convo_style:backgroundimage:repeat'); ?></label><br>
	<input type="radio" id="bgimagerepeatdefault" name="params[backgroundimagerepeat]" value="default" <?php if($params['backgroundimagerepeat'] == "default" || !$params['backgroundimagerepeat']){ echo " checked=\"checked\""; } ?>>
    <label for="bgimagerepeatdefault"><?php echo elgg_echo('convo_style:default'); ?></label><br>
    <input type="radio" id="bgimagerepeatnone" name="params[backgroundimagerepeat]" value="no-repeat" <?php if($params['backgroundimagerepeat'] == "no-repeat"){ echo " checked=\"checked\""; } ?>>
    <label for="bgimagerepeatnone"><?php echo elgg_echo('convo_style:backgroundimage:no-repeat'); ?></label><br>
    <input type="radio" id="bgimagerepeatx" name="params[backgroundimagerepeat]" value="repeat-x" <?php if($params['backgroundimagerepeat'] == "repeat-x"){ echo " checked=\"checked\""; } ?>>
    <label for="bgimagerepeatx"><?php echo elgg_echo('convo_style:backgroundimage:repeat-x'); ?></label><br>
    <input type="radio" id="bgimagerepeaty" name="params[backgroundimagerepeat]" value="repeat-y" <?php if($params['backgroundimagerepeat'] == "repeat-y"){ echo " checked=\"checked\""; } ?>>
    <label for="bgimagerepeaty"><?php echo elgg_echo('convo_style:backgroundimage:repeat-y'); ?></label><br>
    <input type="radio" id="bgimagerepeatall" name="params[backgroundimagerepeat]" value="repeat" <?php if($params['backgroundimagerepeat'] == "repeat"){ echo " checked=\"checked\""; } ?>>
    <label for="bgimagerepeatall"><?php echo elgg_echo('convo_style:backgroundimage:repeat-all'); ?></label><br>
	
	<br><br>
	
	<label><?php echo elgg_echo('convo_style:backgroundimage:attach'); ?></label><br>
	<input type="radio" id="bgimageattachdefault" name="params[backgroundimageattach]" value="default" <?php if($params['backgroundimageattach'] == "default" || !$params['backgroundimageattach']){ echo " checked=\"checked\""; } ?>>
    <label for="bgimageattachdefault"><?php echo elgg_echo('convo_style:default'); ?></label><br>
    <input type="radio" id="bgimageattachfixed" name="params[backgroundimageattach]" value="fixed" <?php if($params['backgroundimageattach'] == "fixed"){ echo " checked=\"checked\""; } ?>>
    <label for="bgimageattachfixed"><?php echo elgg_echo('convo_style:backgroundimage:attach:fixed'); ?></label><br>
    <input type="radio" id="bgimageattachscroll" name="params[backgroundimageattach]" value="scroll" <?php if($params['backgroundimageattach'] == "scroll"){ echo " checked=\"checked\""; } ?>>
    <label for="bgimageattachscroll"><?php echo elgg_echo('convo_style:backgroundimage:attach:scroll'); ?></label><br>
	
	<br><br>
	<?php echo elgg_echo('convo_style:colorpicker:instructions'); ?>
	<br><br>
	
	<div class="convo_style_colorpicker">
		<div id="convo_style_bgcolorholder"></div>
		<label><?php echo elgg_echo('convo_style:backgroundcolor'); ?></label><br>
		<?php echo elgg_view('input/text', array('name' => 'params[bgcolor]', 'id' => 'convo_style_bgcolor', 'value' => $params['bgcolor'], 'class' => 'convo_style_colorpicker')); ?><br>
		    <select name="params[bgcolordefault]">
  			<option value="0" <?php if (!$params['bgcolordefault']) echo " selected=\"yes\" "; ?>><?php echo elgg_echo('convo_style:sitedefault'); ?></option>
    		<option value="1" <?php if ($params['bgcolordefault'] == 1) echo " selected=\"yes\" "; ?>><?php echo elgg_echo('convo_style:thisvalue'); ?></option>
    		</select>
	</div>
	
	<div class="convo_style_colorpicker">
		<div id="convo_style_textcolorholder"></div>
		<label><?php echo elgg_echo('convo_style:textcolor'); ?></label><br>
		<?php echo elgg_view('input/text', array('name' => 'params[textcolor]', 'id' => 'convo_style_textcolor', 'value' => $params['textcolor'], 'class' => 'convo_style_colorpicker')); ?><br>
			<select name="params[textcolordefault]">
  			<option value="0" <?php if (!$params['textcolordefault']) echo " selected=\"yes\" "; ?>><?php echo elgg_echo('convo_style:sitedefault'); ?></option>
    		<option value="1" <?php if ($params['textcolordefault'] == 1) echo " selected=\"yes\" "; ?>><?php echo elgg_echo('convo_style:thisvalue'); ?></option>
    		</select>
	</div>
	
	<div class="convo_style_colorpicker">
		<div id="convo_style_linkcolorholder"></div>
		<label><?php echo elgg_echo('convo_style:linkcolor'); ?></label><br>
		<?php echo elgg_view('input/text', array('name' => 'params[linkcolor]', 'id' => 'convo_style_linkcolor', 'value' => $params['linkcolor'], 'class' => 'convo_style_colorpicker')); ?><br>
			<select name="params[linkcolordefault]">
  			<option value="0" <?php if (!$params['linkcolordefault']) echo " selected=\"yes\" "; ?>><?php echo elgg_echo('convo_style:sitedefault'); ?></option>
    		<option value="1" <?php if ($params['linkcolordefault'] == 1) echo " selected=\"yes\" "; ?>><?php echo elgg_echo('convo_style:thisvalue'); ?></option>
    		</select>
	</div>
	
	<div class="convo_style_colorpicker">
		<div id="convo_style_linkhovercolorholder"></div>
		<label><?php echo elgg_echo('convo_style:linkcolor:hover'); ?></label><br>
		<?php echo elgg_view('input/text', array('name' => 'params[linkhovercolor]', 'id' => 'convo_style_linkhovercolor', 'value' => $params['linkhovercolor'], 'class' => 'convo_style_colorpicker')); ?><br>
			<select name="params[linkhovercolordefault]">
  			<option value="0" <?php if (!$params['linkhovercolordefault']) echo " selected=\"yes\" "; ?>><?php echo elgg_echo('convo_style:sitedefault'); ?></option>
    		<option value="1" <?php if ($params['linkhovercolordefault'] == 1) echo " selected=\"yes\" "; ?>><?php echo elgg_echo('convo_style:thisvalue'); ?></option>
    		</select>
	</div>
	
	
<script type="text/javascript">

  $(document).ready(function() {
	  // div id, input id
    $('#convo_style_bgcolorholder').farbtastic( function(color){
    	var textcolor = convo_style_getContrastingTextColor(color);
		document.getElementById('convo_style_bgcolor').value = color;
		document.getElementById('convo_style_bgcolor').style.backgroundColor = color;
		document.getElementById('convo_style_bgcolor').style.color = textcolor;
    });
    $('#convo_style_textcolorholder').farbtastic( function(color){
    	var textcolor = convo_style_getContrastingTextColor(color);
		document.getElementById('convo_style_textcolor').value = color;
		document.getElementById('convo_style_textcolor').style.backgroundColor = color;
		document.getElementById('convo_style_textcolor').style.color = textcolor;
    });
    $('#convo_style_linkcolorholder').farbtastic( function(color){
    	var textcolor = convo_style_getContrastingTextColor(color);
		document.getElementById('convo_style_linkcolor').value = color;
		document.getElementById('convo_style_linkcolor').style.backgroundColor = color;
		document.getElementById('convo_style_linkcolor').style.color = textcolor;
    });
    $('#convo_style_linkhovercolorholder').farbtastic( function(color){
    	var textcolor = convo_style_getContrastingTextColor(color);
		document.getElementById('convo_style_linkhovercolor').value = color;
		document.getElementById('convo_style_linkhovercolor').style.backgroundColor = color;
		document.getElementById('convo_style_linkhovercolor').style.color = textcolor;
    });

    <?php
    if($vars['entity']->bgcolor){
    ?>
	  	document.getElementById('convo_style_bgcolor').value = "<?php echo $vars['entity']->bgcolor; ?>";
    	document.getElementById('convo_style_bgcolor').style.backgroundColor = "<?php echo $vars['entity']->bgcolor; ?>";
    	document.getElementById('convo_style_bgcolor').style.color = convo_style_getContrastingTextColor('<?php echo $vars['entity']->bgcolor; ?>');
    <?php
    }
    ?>
    <?php
  	if($vars['entity']->textcolor){
    ?>
  	  	document.getElementById('convo_style_textcolor').value = "<?php echo $vars['entity']->textcolor; ?>";
   	    document.getElementById('convo_style_textcolor').style.backgroundColor = "<?php echo $vars['entity']->textcolor; ?>";
   	    document.getElementById('convo_style_textcolor').style.color = convo_style_getContrastingTextColor('<?php echo $vars['entity']->textcolor; ?>');
    <?php
    }
    ?>
    <?php
  	if($vars['entity']->linkcolor){
  	?>
  	  	document.getElementById('convo_style_linkcolor').value = "<?php echo $vars['entity']->linkcolor; ?>";
  	    document.getElementById('convo_style_linkcolor').style.backgroundColor = "<?php echo $vars['entity']->linkcolor; ?>";
  	    document.getElementById('convo_style_linkcolor').style.color = convo_style_getContrastingTextColor('<?php echo $vars['entity']->linkcolor; ?>');
  	<?php
  	}
  	?>
    <?php
    if($vars['entity']->linkhovercolor){
    ?>
      	document.getElementById('convo_style_linkhovercolor').value = "<?php echo $vars['entity']->linkhovercolor; ?>";
        document.getElementById('convo_style_linkhovercolor').style.backgroundColor = "<?php echo $vars['entity']->linkhovercolor; ?>";
        document.getElementById('convo_style_linkhovercolor').style.color = convo_style_getContrastingTextColor('<?php echo $vars['entity']->linkhovercolor; ?>');
    <?php
    }
    ?>
  });
</script>









