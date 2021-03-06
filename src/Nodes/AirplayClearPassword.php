<?php

namespace FSAPI\Nodes;

/**
* AirplayClearPassword is a class type Node
*
* https://github.com/flammy/fsapi/blob/master/FSAPI.md#netremoteairplayclearpassword
*
* see class Node for details
*
*/
class AirplayClearPassword extends Node implements Nodes
{
    public function __construct()
    {
        $this->path = 'netRemote.airplay.clearPassword';
        $this->validation_method = false;
        $this->validation_rules = false;
        $this->call_methods = array('SET','GET');    
        $this->notification = false;
    }
}