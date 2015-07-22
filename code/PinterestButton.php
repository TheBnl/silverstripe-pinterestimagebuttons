<?php
/**
 * Created by PhpStorm.
 * User: bramdeleeuw
 * Date: 22-07-15
 * Time: 16:08
 */

class PinterestButton extends DataExtension {

	public function PlacePinterestButton() {

		$baseURL = Director::absoluteBaseURL();
		$currentURL = Director::absoluteBaseURL();
		$filename = $this->owner->Filename;
		$completPath = $baseURL.$filename;
		$imagTitle = $this->owner->Title;
		
		$sendData = new ArrayData(Array(
			"AbsoluteLink" => $completPath,
			"Description" => $imagTitle,
			"AbsoluteSiteLink" => $currentURL,
		));

		return $sendData->renderWith('PinterestButton');
	}

}