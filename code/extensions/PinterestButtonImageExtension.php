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
        $pinterestButtonData = new ArrayData(array(
            "Media" => urlencode($this->owner->getAbsoluteURL()),
            "Description" => urlencode($this->owner->Title),
            "URL" => urlencode(Director::absoluteURL(''))
        ));

        return $pinterestButtonData->renderWith("PinterestButton");
    }
}
