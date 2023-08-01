<?php

/**
 * Do some testing here...
 */

require_once "../SortedLinkedList.php";

use PHPUnit\Framework\TestCase;

class SortedLinkedListTest extends TestCase
{
    public function testInsert()
    {
        $list = new SortedLinkedList();

        // Int test case

        $expectedResult = [];
        
        for($i = 0; $i < 200; $i++) {
            $r = random_int(-500, 500);
            $list->insert($r);
            $expectedResult[] = $r;
        }
        sort($expectedResult);

        ob_start();
        $list->print();
        $output = ob_get_clean();

        $actualResult = array_map('intval', explode(", ", $output));

        $this->assertSame($expectedResult, $actualResult);


        // String test case
        unset($list);
        $list = new SortedLinkedList();
        $expectedResult = [];

        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        
        for($i = 0; $i < 200; $i++) {
            $shuffledAlphabet = str_shuffle($alphabet);
            $randomString = substr($shuffledAlphabet, 0, 20);
            
            $list->insert($randomString);
            $expectedResult[] = $randomString;
        }
        sort($expectedResult);
        
        ob_start();
        $list->print();
        $output = ob_get_clean();

        $actualResult = array_map('strval', explode(", ", $output));

        $this->assertSame($expectedResult, $actualResult);
    }
}
