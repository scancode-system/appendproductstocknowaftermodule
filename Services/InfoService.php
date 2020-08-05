<?php

namespace Modules\AppendProductStockNowAfter\Services; 


use Modules\Portal\Services\Validation\Data\InfoValidationService;
use Modules\Portal\Services\Validation\Data\InfoValidationsService;
 

class InfoService extends InfoValidationService
{




	public function rule($data, $index, $columns)
	{
		return [
			'available_now' => 'integer|min:0',
			'date_delivery_now' => 'date',/*'string|date_format:Y-m-d',*/
			'available_after' => 'integer|min:0',
			'date_delivery_after' => 'date'/*'string|date_format:Y-m-d'*/
		];
	}

	public function modifiers()
	{
		/*return [
			['rule' => ['date_delivery_now' => 'required|date_format:d/m/Y'], 'filter' => 'dateDMY'],
			['rule' => ['date_delivery_now' => 'required|date_format:j/n/Y'], 'filter' => 'dateDMY'],
			['rule' => ['date_delivery_after' => 'required|date_format:d/m/Y'], 'filter' => 'dateDMY'],
			['rule' => ['date_delivery_after' => 'required|date_format:j/n/Y'], 'filter' => 'dateDMY']
		];*/
	}


	public function columnsFormat()
	{
		return ['date_delivery_now' => InfoValidationsService::DATE_FORMAT, 'date_delivery_after' => InfoValidationsService::DATE_FORMAT];
	}

}