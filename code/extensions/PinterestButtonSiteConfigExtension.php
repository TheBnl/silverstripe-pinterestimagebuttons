<?php
/**
 * PinterestButtonSiteConfigExtension.php
 *
 * @author Bram de Leeuw
 * Date: 31/03/16
 */

class PinterestButtonSiteConfigExtension extends DataExtension
{
	private static $db = array(
		"PinterestDomainVerifyID" => "Varchar(255)"
	);

	/**
	 * Add the PinterestDomainVerifyID field if it is not already set in the config.yml
	 * @param FieldList $fields
	 */
	public function updateCMSFields(FieldList $fields)
	{
		if (PinterestButton::use_site_config()) {
			$fields->addFieldToTab("Root.Pinterest",
				TextField::create("PinterestDomainVerifyID", "PinterestDomainVerifyID")
					->setDescription("Place your pinterest ID here"));
		} else {
			$fields->removeByName("PinterestDomainVerifyID");
		}
	}
}