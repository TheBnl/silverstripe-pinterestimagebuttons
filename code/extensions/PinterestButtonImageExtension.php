<?php
/**
 * Bram de Leeuw
 * Date: 22-07-15
 * Time: 16:08
 */

class PinterestButtonImageExtension extends DataExtension
{

    /**
     * Retrieves the necessary data and returns it as rendered html
     *
     * @return HTMLText
     */
    public function PlacePinterestButton()
    {
        $baseURL = Director::absoluteBaseURL();
        $currentURL = Director::absoluteURL('');
        $filename = $this->owner->Filename;
        $completePath = $baseURL.$filename;
        $imageTitle = $this->owner->Title;
        
        $sendData = new ArrayData(array(
            "AbsoluteLink" => $completePath,
            "Description" => $imageTitle,
            "AbsoluteSiteLink" => $currentURL,
        ));

        return $sendData->renderWith('PinterestButton');
    }
}
