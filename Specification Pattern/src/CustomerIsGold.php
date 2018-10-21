<?php

class CustomerIsGold {

	public function isSatisfiedBy(Customer $customer)
	{
		$customer->type() == 'gold';
	}

}