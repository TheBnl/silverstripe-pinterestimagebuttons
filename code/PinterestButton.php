<?php
/**
 * Created by PhpStorm.
 * User: bramdeleeuw
 * Date: 22-07-15
 * Time: 16:08
 */

class PinterestButton extends DataExtension
{

    /**
     * Retrieves the nececary data and returns it as rendered html
     *
     * @return HTMLText
     */
    public function PlacePinterestButton()
    {
        $baseURL = Director::absoluteBaseURL();
        $currentURL = Director::absoluteURL('');
        $filename = $this->owner->Filename;
        $completPath = $baseURL.$filename;
        $imagTitle = $this->owner->Title;
        
        $sendData = new ArrayData(array(
            "AbsoluteLink" => $completPath,
            "Description" => $imagTitle,
            "AbsoluteSiteLink" => $currentURL,
        ));

        return $sendData->renderWith('PinterestButton');
    }
}
