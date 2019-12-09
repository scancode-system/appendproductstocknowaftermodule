<?php

return [
    'name' => 'AppendProductStockNowAfter', 
    'fields' => ['available_now', 'date_delivery_now', 'available_after', 'date_delivery_after'],
	'sample' => [
		[
			'name' => 'available_now',
			'observation' => 'Quantidade atual disponibilizada de produtos para geração de pedidos.',
			'filled' => false
		], 
		[
			'name' => 'date_delivery_now',
			'observation' => 'Data atual aproximada em que o produto será entregue.',
			'filled' => false
		],
		[
			'name' => 'available_after',
			'observation' => 'Quantidade futura disponibilizada de produtos para geração de pedidos.',
			'filled' => false
		], 
		[
			'name' => 'date_delivery_after',
			'observation' => 'Data futura aproximada em que o produto será entregue.',
			'filled' => false
		]
	]
];