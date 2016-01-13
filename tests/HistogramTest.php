<?php
require 'histogram.php';

class HistogramTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider histogramData
     */
    public function test_histogram($input, $expected)
    {
        $this->assertEquals($expected, histogram($input));
    }

    public function histogramData()
    {
        return [
            [['a', 'a', '1', 1, 2], ['a' => 2, 1 => 2, 2 => 1]],
            [['A', 'a', 'a'], ['a' => 2, 'A' => 1]],
            [[], []]
        ];
    }

    public function test_histogram_only_accepts_arrays()
    {
        try {
            histogram('passing a string');
        } catch (Exception $e) {
            return;
        }

        $this->fail('histogram() should only accept an array');
    }
}
