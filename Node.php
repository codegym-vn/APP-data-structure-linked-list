<?php


class Node
{

    function __construct(public $data,
                         public $next = null)
    {
    }

    function readNode()
    {
        return $this->data;
    }
}