<?php
namespace FSAPI\Tests\Unit\Nodes;


use FSAPI\Nodes\SysNetWlanInterfaceEnable;

class SysNetWlanInterfaceEnableTest extends NodeTestCase implements NodeTests
{
    protected $node = null;
    public function __construct()
    {
        $this->node = new SysNetWlanInterfaceEnable();
        parent::__construct();
    }
}