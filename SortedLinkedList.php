<?php

class Node 
{
    /**
     * Class Node
     * $data int | string
     * $next Node
     */

    private $data;
    private $next;

    public  function __construct($value=null) 
    {
        $this->data = ($value == null) ? 0 : $value;
        $this->next = null;
    }

    public function setData($data) : void 
    {
        $this->data = $data;
    }

    public function getData() : int | string
    {
        return $this->data;
    }

    public function setNext($next) : void 
    {
        $this->next = $next;
    }

    public function getNext() 
    {
        return $this->next;
    }
}


class SortedLinkedList 
{
    /**
     * Class SortedLinkedList
     * $start Node
     */

    private $start;

    public function __construct() 
    {
        $this->start = null;
    }

    public function insert($data) : void 
    {
        $newNode = new Node($data);
        
        if($this->start) 
        {
            $currentNode = $this->start;

            if($newNode->getData() < $currentNode->getData()) 
            {
                $newNode->setNext($currentNode);
                $this->start = $newNode;
                return;
            }

            while($currentNode->getNext() != null) 
            {
                $nextNode = $currentNode->getNext();

                if($data >= $currentNode->getData() && $data <= $nextNode->getData()) 
                {
                    $currentNode->setNext($newNode);
                    $newNode->setNext($nextNode);
                    return;
                }
                $currentNode = $nextNode;
            }
            $currentNode->setNext($newNode);
        }
        
        else
        {
            $this->start = $newNode;
        }
    }

    public function print() : void 
    {
        $res = [];
        
        if($this->start) 
        {
            $currentNode = $this->start;
            while($currentNode->getNext() != null) 
            {
                $res[] = $currentNode->getData();
                $currentNode = $currentNode->getNext();
            }
            $res[] = $currentNode->getData();
        }

        echo join(", ", $res);
    } 
}


?>