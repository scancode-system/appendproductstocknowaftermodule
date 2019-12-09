<?php

namespace Modules\AppendProductStockNowAfter\Services;


class AppendProductStockNowAfterService {
	
	public function fields(){
		return config('appendproductstocknowafter.fields');
	}

	public function sample(){
		return config('appendproductstocknowafter.sample');
	}

}
