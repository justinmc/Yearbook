/**
 * @author justin
 */


function getImageWidth(myImage) {
	var x, obj;
	if (document.layers) {
		var img = getImage(myImage);
		return img.width;
	} else {
		return getElementWidth(myImage);
	}
	return -1;
}

function getImageHeight(myImage) {
	
	return 500;
	
	/*
	var y, obj;
	if (document.layers) {
		var img = getImage(myImage);
		return img.height;
	} else {
		return getElementHeight(myImage);
	}
	return -1;
	*/
}

