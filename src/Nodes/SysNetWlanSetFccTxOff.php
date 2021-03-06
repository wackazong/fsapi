<?php

namespace FSAPI\Nodes;

/**
* SysNetWlanSetFccTxOff is a class type Node
*
* https://github.com/flammy/fsapi/blob/master/FSAPI.md#netremotesysnetwlansetfcctxoff
*
* see class Node for details
*
*/
class SysNetWlanSetFccTxOff extends Node implements Nodes
{
    public function __construct()
    {
        $this->path = 'netRemote.sys.net.wlan.setFccTxOff';
        $this->validation_method = false;
        $this->validation_rules = false;
        $this->call_methods = array('SET','GET');    
        $this->notification = false;
    }
}