<?php
include_once('Node.php');
include_once('LinkedList.php');

$linkedList = new LinkedList();

$linkedList->insertFirst(11);
$linkedList->insertFirst(22);
$linkedList->insertLast(44);
$linkedList->insertLast(13);
$linkedList->insertFirst(10);
$linkedList->insertLast(33);

$totalNodes = $linkedList->totalNodes();
$linkData = $linkedList->readList();
echo $totalNodes;
echo "<pre>";
print_r($linkedList);
echo "</pre>";
echo "<br>";
echo implode('-', $linkData);
