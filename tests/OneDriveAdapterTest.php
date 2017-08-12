<?php

namespace NicolasBeauvais\FlysystemOneDrive\Test;

use Microsoft\Graph\Graph;
use Microsoft\Graph\Http\GraphRequest;
use NicolasBeauvais\FlysystemOneDrive\OneDriveAdapter;
use PHPUnit\Framework\TestCase;

class OneDriveAdapterTest extends TestCase
{
    /** @var \Microsoft\Graph\Graph|\PHPUnit_Framework_MockObject_MockObject */
    protected $graph;

    /** @var \Microsoft\Graph\Http\GraphRequest|\PHPUnit_Framework_MockObject_MockObject */
    public $graphRequest;

    /** @var \NicolasBeauvais\FlysystemOneDrive\OneDriveAdapter */
    protected $oneDriveAdapter;

    public function setUp()
    {
        $this->graph = $this->getMockBuilder(Graph::class)->getMock();
        $this->graphRequest = $this->getMockBuilder(GraphRequest::class)->getMock();

        $this->graph->method('createRequest')->willReturn($this->graphRequest);

        $this->oneDriveAdapter = new OneDriveAdapter($this->graph);
    }

    /** @test */
    public function it_can_run_tests()
    {
        $this->assertTrue(true);
    }
}
