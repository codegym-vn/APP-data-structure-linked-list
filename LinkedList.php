<?php


class LinkedList
{

    function __construct(private $firstNode = null,
                         private $lastNode = null,
                         private int $count = 0)
    {}

    function insertFirst($data): void
    {
        $node = new Node($data);
        $node->next = $this->firstNode;
        $this->firstNode = $node;
        if (is_null($this->lastNode)) {
            $this->lastNode = $node;
        }
        $this->count++;
    }

    function insertLast($data): void
    {
        if (!is_null($this->firstNode)) {
            $node = new Node($data);
            $currentLastNode = $this->lastNode;
            $currentLastNode->next = $node;
            $this->lastNode = $node;
            $this->count++;
        } else {
            $this->insertFirst($data);
        }
    }


    function totalNodes(): int
    {
        return $this->count;
    }

    function readList(): array
    {
        $listData = [];
        $current = $this->firstNode;

        while (!is_null($current)) {
            $listData[] = $current->readNode();
            $current = $current->next;
        }
        return $listData;
    }
}