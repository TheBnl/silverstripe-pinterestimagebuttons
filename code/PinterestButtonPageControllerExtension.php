<?php
/**
 * Created by PhpStorm.
 * User: bramdeleeuw
 * Date: 22-07-15
 * Time: 16:45
 */

class PinterestButtonPageControllerExtension extends Extension {

	/**
	 * Add the required javascript line to pop up the pinterest share dialogue
	 */
	public function onBeforeInit()
	{
		Requirements::customScript(<<<JS
			var pinterestShare = function() {
				var media = this.getAttribute("data-media");
				var url = this.getAttribute("data-url");
				var description = this.getAttribute("data-description");
				var windowURL = "http://pinterest.com/pin/create/button/" +
												"?url="+ escape(url) +
												"&media="+ escape(media) +
												"&description="+ escape(description);

				PopupCenter(windowURL, "Pin It", 750, 550);
				console.log('pinIt!',media,url,description);
				return false;
			}

			function PopupCenter(url, title, w, h) {
				var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left;
				var dualScreenTop = window.screenTop != undefined ? window.screenTop : screen.top;
				var width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
				var height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;

				var left = ((width / 2) - (w / 2)) + dualScreenLeft;
				var top = ((height / 2) - (h / 2)) + dualScreenTop;
				var newWindow = window.open(url, title, 'toolbar=no, location=no, resizable=no, scrollbars=no, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);

				if (window.focus) {
						newWindow.focus();
				}
			}

			var pinButtons = document.getElementsByClassName("pinIt");
			for (var i = 0; i < pinButtons.length; i++) {
				console.log(pinButtons[i]);
			 	pinButtons[i].onclick = pinterestShare;
			}
JS
		);
	}
}