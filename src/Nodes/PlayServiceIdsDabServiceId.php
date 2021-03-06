<?php

namespace FSAPI\Nodes;

/**
* PlayServiceIdsDabServiceId is a class type Node
*
* https://github.com/flammy/fsapi/blob/master/FSAPI.md#netremoteplayserviceidsdabserviceid
*
* see class Node for details
*
*/
class PlayServiceIdsDabServiceId extends Node implements Nodes
{
    public function __construct()
    {
        $this->path = 'netRemote.play.serviceIds.dabServiceId';
        $this->validation_method = false;
        $this->validation_rules = false;
        $this->call_methods = array('GET');    
        $this->notification = false;
        $this->api_level = 1;
    }
}