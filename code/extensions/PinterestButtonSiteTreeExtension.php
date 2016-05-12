<?php
/**
 * PinterestButtonSiteTreeExtension.php
 *
 * @author Bram de Leeuw
 * Date: 31/03/16
 */

class PinterestButtonSiteTreeExtension extends DataExtension
{
	/**
	 * Add additional Pinterest Meta Tags
	 * @param $tags
	 */
	public function MetaTags(&$tags)
	{
		$pinterestDomainVerifyID = PinterestButton::get_pinterest_domain_verify_id();
		if ($pinterestDomainVerifyID != null) $tags .= sprintf("<meta name='p:domain_verify' content='%s'>", $pinterestDomainVerifyID);
	}
}