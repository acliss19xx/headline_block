<?php  defined('C5_EXECUTE') or die("Access Denied.");

class KansaiugHeadlineBlockController extends BlockController {
	
	protected $btName = '見出し';
	protected $btDescription = '';
	protected $btTable = 'btKansaiugHeadline';
	
	protected $btInterfaceWidth = "350";
	protected $btInterfaceHeight = "250";
	
	protected $btCacheBlockRecord = true;
	protected $btCacheBlockOutput = true;
	protected $btCacheBlockOutputOnPost = true;
	protected $btCacheBlockOutputForRegisteredUsers = false;
	protected $btCacheBlockOutputLifetime = CACHE_LIFETIME;
	
	public function getSearchableContent() {
		return $this->content;
	}


	public function view() {
		$c = Page::getCurrentPage();
		$this->set('pagename',$c->getCollectionName());

	}



}
