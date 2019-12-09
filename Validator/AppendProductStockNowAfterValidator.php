<?php

namespace Modules\AppendProductStockNowAfter\Validator; 


class AppendProductStockNowAfterValidator
{


	public function rule($data){
		return [
			'available_now' => 'integer|min:0',
			'date_delivery_now' => 'string|date_format:Y-m-d',
			'available_after' => 'integer|min:0',
			'date_delivery_after' => 'string|date_format:Y-m-d'
		];
	}

	public function filterRules(){
		return [
			['rule' => ['date_delivery_now' => 'required|date_format:d/m/Y'], 'filter' => 'dateDMY'],
			['rule' => ['date_delivery_now' => 'required|date_format:j/n/Y'], 'filter' => 'dateDMY'],
			['rule' => ['date_delivery_after' => 'required|date_format:d/m/Y'], 'filter' => 'dateDMY'],
			['rule' => ['date_delivery_after' => 'required|date_format:j/n/Y'], 'filter' => 'dateDMY']
		];
	}


}
