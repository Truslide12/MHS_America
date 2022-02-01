<?php 
defined('IGLOO') or die("Twilight Sparkle does not approve.");
defined('IS_ADMINCP') or die("Do you even admin, bro?");

class Module_Welcome extends Module {
	function initialize() {
		/* The page of inifinite database queries :D */
		if(defined('IS_ADMINCP') && !isUserLoggedIn()) {
			Page::summon()->set('stylesheet','signin');
			Page::summon()->set('libraries',array('font-awesome'));
		}else{
			Page::summon()->set('stylesheet','index');
			Page::summon()->set('libraries',array('jquery-ui-1.10.2.custom','font-awesome','morris'));
		}
		$dash_analytics = phpFastCache::get("dash_analytics");

		if($dash_analytics == null){
			/* Piwik */
			define('PIWIK_INCLUDE_PATH', realpath('../public/piwik'));
			define('PIWIK_USER_PATH', realpath('../public/piwik'));
			define('PIWIK_DOCUMENT_ROOT', realpath('../public/piwik'));
			define('PIWIK_ENABLE_DISPATCH', false);
			define('PIWIK_ENABLE_ERROR_HANDLER', false);
			define('PIWIK_ENABLE_SESSION_START', false);
			require_once PIWIK_INCLUDE_PATH . "/libs/upgradephp/upgrade.php";
			require_once PIWIK_INCLUDE_PATH . "/core/Loader.php";
			require_once PIWIK_INCLUDE_PATH . "/core/API/Request.php";
			Piwik_FrontController::getInstance()->init();
			$apikey = '2512247b807fcaa0570271672c3b5889';
			$dash_analytics = array();
			$thirty_ago_sorta = time()-(86400*30);
			$thirty_days_timestamp = mktime(0,0,0,date('n',$thirty_ago_sorta),date('j',$thirty_ago_sorta),date('Y',$thirty_ago_sorta));
			$month_timestamp = mktime(0,0,0,date('n'),1,date('Y'));
			$week_timestamp = mktime(0,0,0,date('n'),intval(date('j'))-intval(date('w')),date('Y'));
			$dash_analytics['users_this_month'] = Database::summon()->select("id")->from('users')->where('sign_up_stamp > '.$month_timestamp)->execute('fetchCount');
			$dash_analytics['orders_this_week'] = Database::summon()->select("id")->from('orders')->where('date >'.$week_timestamp)->execute('fetchCount');
			list($sales_30_days) = Database::summon()->select("SUM(amount) as total")->from('orders')->where('date >'.$thirty_days_timestamp)->execute('fetchArray');
			$dash_analytics['sales_30_days'] = $sales_30_days;

			$now = strtotime('midnight',time());
			/* Today */
			/* Yesterday */
			$dash_analytics['day_before_1'] = $day_before_1 = $now-(86400*2);
			$dash_analytics['day_before_2'] = $day_before_2 = $now-(86400*3);
			$dash_analytics['day_before_3'] = $day_before_3 = $now-(86400*4);
			$dash_analytics['day_before_4'] = $day_before_4 = $now-(86400*5);
			$dash_analytics['day_before_5'] = $day_before_5 = $now-(86400*6);

			$param_visits = new Piwik_API_Request('
				method=VisitsSummary.getVisits
				&idSite=1
				&date=today
				&period=day
				&format=original
				&filter_limit=-1
				&token_auth='.$apikey);
			$param_visits_yesterday = new Piwik_API_Request('
				method=VisitsSummary.getVisits
				&idSite=1
				&date=yesterday
				&period=day
				&format=original
				&filter_limit=-1
				&token_auth='.$apikey);
			$param_visits_day_before_1 = new Piwik_API_Request('
				method=VisitsSummary.getVisits
				&idSite=1
				&date='.date("m/d/Y",$day_before_1).'
				&period=day
				&format=original
				&filter_limit=-1
				&token_auth='.$apikey);
			$param_visits_day_before_2 = new Piwik_API_Request('
				method=VisitsSummary.getVisits
				&idSite=1
				&date='.date("m/d/Y",$day_before_2).'
				&period=day
				&format=original
				&filter_limit=-1
				&token_auth='.$apikey);
			$param_visits_day_before_3 = new Piwik_API_Request('
				method=VisitsSummary.getVisits
				&idSite=1
				&date='.date("m/d/Y",$day_before_3).'
				&period=day
				&format=original
				&filter_limit=-1
				&token_auth='.$apikey);
			$param_visits_day_before_4 = new Piwik_API_Request('
				method=VisitsSummary.getVisits
				&idSite=1
				&date='.date("m/d/Y",$day_before_4).'
				&period=day
				&format=original
				&filter_limit=-1
				&token_auth='.$apikey);
			$param_visits_day_before_5 = new Piwik_API_Request('
				method=VisitsSummary.getVisits
				&idSite=1
				&date='.date("m/d/Y",$day_before_5).'
				&period=day
				&format=original
				&filter_limit=-1
				&token_auth='.$apikey);
			$param_refs = new Piwik_API_Request('
				method=Referers.getRefererType
				&idSite=1
				&date=today
				&period=month
				&format=SJSON
				&filter_limit=-1
				&token_auth='.$apikey);
			$visits_origin = json_decode($param_refs->process());
			$origin_total = 0;
			$visits_by_origin = array();
			$i = 0;
			foreach($visits_origin as $origin){
				if($origin->label) $origin_total += $origin->nb_visits;
			}
			foreach($visits_origin as $origin){
				if($origin->label) {
					$visits_by_origin[$i] = array('label' => $origin->label, 'visits' => round($origin->nb_visits / $origin_total*100, 2));
					$i++;
				}
			}
			$dash_analytics['visits_by_origin'] = $visits_by_origin;
			/* Process the rest of the Piwik requests and queue for caching */
			$dash_analytics['param_visits'] = $param_visits->process();
			$dash_analytics['param_visits_yesterday'] = $param_visits_yesterday->process();
			$dash_analytics['param_visits_day_before_1'] = $param_visits_day_before_1->process();
			$dash_analytics['param_visits_day_before_2'] = $param_visits_day_before_2->process();
			$dash_analytics['param_visits_day_before_3'] = $param_visits_day_before_3->process();
			$dash_analytics['param_visits_day_before_4'] = $param_visits_day_before_4->process();
			$dash_analytics['param_visits_day_before_5'] = $param_visits_day_before_5->process();
			
			/* User signups for main line graph */
			$dash_analytics['su_dbt'] = Database::summon()->select("id")->from('users')->where('sign_up_stamp >= '.$now)->execute('fetchCount');
			$dash_analytics['su_dby'] = Database::summon()->select("id")->from('users')->where('sign_up_stamp >= '.($now-86400).' AND sign_up_stamp < '.$now)->execute('fetchCount');
			$dash_analytics['su_db1'] = Database::summon()->select("id")->from('users')->where('sign_up_stamp >= '.$day_before_1.' AND sign_up_stamp < '.($now-86400))->execute('fetchCount');
			$dash_analytics['su_db2'] = Database::summon()->select("id")->from('users')->where('sign_up_stamp >= '.$day_before_2.' AND sign_up_stamp < '.$day_before_1)->execute('fetchCount');
			$dash_analytics['su_db3'] = Database::summon()->select("id")->from('users')->where('sign_up_stamp >= '.$day_before_3.' AND sign_up_stamp < '.$day_before_2)->execute('fetchCount');
			$dash_analytics['su_db4'] = Database::summon()->select("id")->from('users')->where('sign_up_stamp >= '.$day_before_4.' AND sign_up_stamp < '.$day_before_3)->execute('fetchCount');
			$dash_analytics['su_db5'] = Database::summon()->select("id")->from('users')->where('sign_up_stamp >= '.$day_before_5.' AND sign_up_stamp < '.$day_before_4)->execute('fetchCount');
			
			phpFastCache::set("dash_analytics",$dash_analytics,600); /* Hold on to things for ten minutes before recheck */
		} /* END OF if($dash_analytics == null) */

		Page::summon()->set('visits_today',$dash_analytics['param_visits']);
		Page::summon()->set('visits_yesterday',$dash_analytics['param_visits_yesterday']);
		Page::summon()->set('visits_day_before_1',$dash_analytics['param_visits_day_before_1']);
		Page::summon()->set('visits_day_before_1_label',date('l',$dash_analytics['day_before_1']));
		Page::summon()->set('visits_day_before_2',$dash_analytics['param_visits_day_before_2']);
		Page::summon()->set('visits_day_before_2_label',date('l',$dash_analytics['day_before_2']));
		Page::summon()->set('visits_day_before_3',$dash_analytics['param_visits_day_before_3']);
		Page::summon()->set('visits_day_before_3_label',date('l',$dash_analytics['day_before_3']));
		Page::summon()->set('visits_day_before_4',$dash_analytics['param_visits_day_before_4']);
		Page::summon()->set('visits_day_before_4_label',date('l',$dash_analytics['day_before_4']));
		Page::summon()->set('visits_day_before_5',$dash_analytics['param_visits_day_before_5']);
		Page::summon()->set('visits_day_before_5_label',date('l',$dash_analytics['day_before_5']));
		Page::summon()->set('visits_origin',$dash_analytics['visits_by_origin']);
		Page::summon()->set('users_this_month',$dash_analytics['users_this_month']);
		Page::summon()->set('orders_this_week',$dash_analytics['orders_this_week']);
		Page::summon()->set('sales_30_days',$dash_analytics['sales_30_days']);

		Page::summon()->set('signups_today',$dash_analytics['su_dbt']);
		Page::summon()->set('signups_yesterday',$dash_analytics['su_dby']);
		Page::summon()->set('signups_day_before_1',$dash_analytics['su_db1']);
		Page::summon()->set('signups_day_before_2',$dash_analytics['su_db2']);
		Page::summon()->set('signups_day_before_3',$dash_analytics['su_db3']);
		Page::summon()->set('signups_day_before_4',$dash_analytics['su_db4']);
		Page::summon()->set('signups_day_before_5',$dash_analytics['su_db5']);
	}
	function hook_renderer_end() {
		$this->setTemplate("master_full.tpl");
	}
}



?>