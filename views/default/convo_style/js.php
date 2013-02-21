
function convo_style_decimalToHex(decimal) {
	  var hex = decimal.toString(16);
	  if (hex.length == 1) hex = '0' + hex;
	  return hex;
}

function convo_style_hexToDecimal(hex) {return parseInt(hex,16);}
	
function convo_style_returnOpposite(colour) {
	  return convo_style_decimalToHex(255 - convo_style_hexToDecimal(colour.substr(0,2))) 
	    + convo_style_decimalToHex(255 - convo_style_hexToDecimal(colour.substr(2,2))) 
	    + convo_style_decimalToHex(255 - convo_style_hexToDecimal(colour.substr(4,2)));
}

// takes a color in hex format #ffffff
function convo_style_brightness(color){
	// trim off the #
	var trimcolor = color.substring(1);
	// convert to rgb
	var red = convo_style_hexToDecimal(trimcolor.substr(0,2));
	var green = convo_style_hexToDecimal(trimcolor.substr(2,2));
	var blue = convo_style_hexToDecimal(trimcolor.substr(4,2));

	// calculate brightness - will be int between 0 and 255
	var brightness = Math.sqrt(red * red * .241 + green * green * .691 + blue * blue * .068);
	return brightness;
}

function convo_style_getContrastingTextColor(color){
	var brightness = convo_style_brightness(color);
	if(brightness > 130){
		var textcolor = '#000000';
	}
	else{
		var textcolor = '#ffffff';
	}
	return textcolor;
}