<?php 
defined('IGLOO') or die("Twilight Sparkle does not approve."); 

class Module_News extends Module {
	private $_article = 0;
	function initialize() {
		if(is_numeric($_GET['id'])) {
			//How recent must news be?
			//$newslatest = time()-(14*24*60*60);
			$newslatest = 0;
			$news = Database::summon()->select_one()->from('news')->where("id = ".$_GET['id'])->execute('fetchArray');
			$news['fancydate'] = date('M j, Y',$news['timestamp']);
			$news['body'] = nl2br(bbcode_parse($news['body']));
			Page::summon()->set('article', $news);
			if($news['id'] > 0)
				$this->_article = $news['id'];
		}
		if($this->_article == 0) {
			$newslatest = 0;
			$news = Database::summon()->select_perfect()->from('news')->where("timestamp >= ".$newslatest)->execute('fetchArray');
			for($x=0;$x<count($news);$x++) {
				$news[$x]['fancydate'] = date('M j, Y',$news[$x]['timestamp']);
			}
			Page::summon()->set('news', $news);
		}
	}
	function hook_renderer_end() {
		if($this->_article > 0) {
			$this->setTemplate("frontend_news-article.tpl");
		}
	}
}

?>
