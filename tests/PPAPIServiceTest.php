<?php


/**
 * Test class for PPAPIService.
 *
 */
class PPAPIServiceTest extends PHPUnit_Framework_TestCase
{

	/**
	 * @var PPAPIService
	 */
	protected $object;



	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp()
	{
		$this->object = new PPAPIService;
	}



	/**
	 *
	 */
	public function testSetServiceName()
	{
		$this->object->setServiceName('Invoice');
		$this->assertEquals('Invoice', $this->object->serviceName);
		$object = new PPAPIService('ServiceName');
		$this->assertEquals('ServiceName', $object->serviceName);
	}



	/**
	 *
	 */
	public function testMakeRequest()
	{
		$this->markTestIncomplete("Not implemented");
	}
}


