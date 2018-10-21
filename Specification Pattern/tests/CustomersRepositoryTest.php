<?php

class CustomersRespositoryTest extends PHPUnit_Framework_TestCase
{

	/** @test */
	function it_fetches_all_customers_who_match_a_given_specification()
	{
		$customer = new CustomersRepository(
			[
				new Customer('gold'),
				new Customer('bronze'),
				new Customer('silver'),
				new Customer('gold'),
			]
		);
		$specification = new CustomerIsGold;

		$results = $customers->bySpecification(new CustomerIsGold);

		$this->assertCount(2, $result);
	}
}