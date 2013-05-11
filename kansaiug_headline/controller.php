<?php

defined('C5_EXECUTE') or die(_("Access Denied."));

class KansaiugHeadlinePackage extends Package {
	
	protected $pkgHandle = 'kansaiug_headline';
	protected $appVersionRequired = '5.5';
	protected $pkgVersion ='1.0';

	public function getPackageDescription() {
		return '見出しブロック';
	}
	
	public function getPackageName() {
		return 'kansaiug_headline';
	}
	
	public function install() {
		$pkg = parent::install();
		
		BlockType::installBlockTypeFromPackage('kansaiug_headline', $pkg);
	}
}

?>