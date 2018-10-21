<?php

class CustomersRepository {
	protected $customers;

	public function __construct($customers)
	{
		$this->customers = $customers;
	}

	public function bySpecification($specification)
	{
		$matches = [];

		foreach($this->customers as $customer) {

			if($specification->isSatisfiedBy($customer)) {
				$matches[] = $customer;
			}

		}

		return $matches;
	}

	public function all()
	{
		return $this->customers;
	}
}