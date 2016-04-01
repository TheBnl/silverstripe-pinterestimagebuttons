<?php
/**
 * PinterestButton.php
 *
 * @author Bram de Leeuw
 * Date: 31/03/16
 */
 
 class PinterestButton {

	 /**
	  * The Pinterest Domain Verify ID
	  * @config
	  */
	 private static $pinterest_domain_verify_id = "SiteConfig";

	 /**
	  * Get the pinterest domain verify id
	  * @return String
	  */
	 public static function get_pinterest_domain_verify_id() {
		 $domainVerifyID = Config::inst()->get("PinterestButton", "pinterest_domain_verify_id");
		 if ($domainVerifyID === "SiteConfig") {
			 $domainVerifyID = SiteConfig::current_site_config()->getField("PinterestDomainVerifyID");
		 }
		 return $domainVerifyID;
	 }

	 /**
	  * Check whether or not to use the site config to set the ID
	  * @return String
	  */
	 public static function use_site_config() {
		 $domainVerifyID = Config::inst()->get("PinterestButton", "pinterest_domain_verify_id");
		 return $domainVerifyID === "SiteConfig" ? true : false;
	 }
 }