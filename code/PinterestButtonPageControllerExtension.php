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
				console.log('pinIt!',media,url,description);
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