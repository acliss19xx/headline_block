<?php

defined('C5_EXECUTE') or die(_("Access Denied."));

class KansaiugHeadlinePakage extends Package {
	
	protected $pkgHandle = 'kansaiug_headline';
	protected $appVersionRequired = '5.5';
	protected $pkgVersion ='1.0';

	public function getPackageDescription() {
		return '見出しブロック';
	}
	
	public function getPackgeName() {
		return 'kansaiug_headline';
	}
	
	public function install() {
		$pkg = parrent::install();
		
		BlockType::installBlockTypeFromPackage('kansaiug_headline', $pkg);
	}
}

?>