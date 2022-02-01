<?php
defined('IGLOO') or die("Twilight Sparkle does not approve.");
defined('IS_ADMINCP') or die("Do you even admin, bro?");
Page::summon()->set('stylesheet','order-list');
Page::summon()->set('libraries',array('font-awesome'));

class Command_Admin_Orders_List extends Listener {
	function action_orders_list() {
		$order_count = Database::summon()->select('id')->from('orders')->execute('fetchCount');
		$cnt = 10;
		$statuses = array('Completed','Pending','Void');
		$status_classes = array('success','info','danger');

		$page_count = ceil($order_count/$cnt);

		if($_GET['p'] && !is_int($_GET['p'])) die("Whatcha up to, Willis!?");

		$p = (is_int($_GET['p']) && intval($_GET['p']) > 0 && intval($_GET['p']) <= $page_count) ? intval($_GET['p']) : 1;
		Page::summon()->set('current_page',$p);

		$x = ceil($p/5);
		switch($x){
			case 1:
				$pages = array($x, $x+1, $x+2, $x+3, $x+4);
				break;
			case (ceil($page_count/5)):
				$pages = array($x-4, $x-3, $x-2, $x-1, $x);
				break;
			default:
				$pages = array($x-2, $x-1, $x, $x+1, $x+2);
		}
		Page::summon()->set('pages',$pages);

		$p--;
		$orders = Database::summon()->select_perfect()->from('orders')->limit(strval($_GET['p']*$cnt).', '.strval($cnt))->execute('fetchArray');
		for($x=0;$x<count($orders);$x++) {
			$orders[$x]['user'] = Database::summon()->select()->from('users')->where('id = '.$orders[$x]['uid'])->execute('fetchArray');
			$orders[$x]['plan_info'] = Database::summon()->select()->from('plans')->where('id = '.$orders[$x]['plan'])->execute('fetchArray');
			$orders[$x]['status_message'] = $statuses[$orders[$x]['status']];
			$orders[$x]['status_class'] = $status_classes[$orders[$x]['status']];
		}

		Page::summon()->set('orders',$orders);
		Page::summon()->set('order_count',$order_count);
		Page::summon()->set('page_count',$page_count);
	}
}

?>