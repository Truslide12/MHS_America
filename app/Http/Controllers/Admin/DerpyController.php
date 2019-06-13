<?php namespace App\Http\Controllers\Admin;

use Artisan;
use Response;
use Exception;
use App\Http\Controllers\Pony;
use App\Handlers\Api\BaseHandler;

class DerpyController extends Pony {

	protected $apiHandlers = [
		'company' => 'CompanyHandler',
		'company-user' => 'CompanyUserHandler'
	];

	public function postDown()
	{
		Artisan::call('down');

		return Response::json(['status' => 'down']);
	}

	public function postUp()
	{
		Artisan::call('up');

		return Response::json(['status' => 'up']);
	}

	public function postAction($action, $relation, $id, $param = null)
	{
		if(array_key_exists($relation, $this->apiHandlers)) {
			$handler_name = '\\App\\Handlers\\Api\\Admin\\'.$this->apiHandlers[$relation];
			try {
				$handler = new $handler_name;
				$action_name = camel_case($action);

				if(($handler instanceof BaseHandler) && in_array($action, $handler->listActions()) && method_exists($handler, $action_name) && $handler->boot($id)) {
					$data = (is_null($param)) ? $handler->{$action_name}() : $handler->{$action_name}($param);

					return Response::json(['data' => $data], 200);
				}
			} catch (Exception $e) {
				return Response::json(['errors' => [$e]], 500);
			}
			return Response::json(['errors' => [['code' => 400, 'title' => $action_name]]], 400);
		}
	}

}