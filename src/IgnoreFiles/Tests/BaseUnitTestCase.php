<?php

namespace IgnoreFiles\Tests;

use IgnoreFiles\Infrastructure\Disk\FileReader;

abstract class BaseUnitTestCase extends \PHPUnit_Framework_TestCase
{
    /**
     * @var FileReader
     */
    private $fileReader;

    /**
     * @param $class
     *
     * @return \Mockery\MockInterface
     */
    protected function mock($class)
    {
        return \Mockery::mock($class);
    }

    /**
     * @return \Mockery\MockInterface|FileReader
     */
    protected function getFileReader()
    {
        return $this->fileReader = $this->fileReader ?: $this->mock(FileReader::class);
    }

    /**
     * @param array $return
     */
    protected function shouldReadIgnoreData(array $return)
    {
        $this->getFileReader()
            ->shouldReceive('read')
            ->once()
            ->andReturn($return);
    }
}
