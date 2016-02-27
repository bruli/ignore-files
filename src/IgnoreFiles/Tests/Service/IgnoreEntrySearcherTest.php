<?php

namespace IgnoreFiles\Tests\Service;

use IgnoreFiles\Service\IgnoreEntrySearcher;
use IgnoreFiles\Tests\BaseUnitTestCase;

class IgnoreEntrySearcherTest extends BaseUnitTestCase
{
    /**
     * @var IgnoreEntrySearcher
     */
    private $ignoreEntrySearcher;

    protected function setUp()
    {
        $this->ignoreEntrySearcher = new IgnoreEntrySearcher($this->getFileReader());
    }

    /**
     * @return array
     */
    public function ignoreDataProvide()
    {
        return [
            'file1.php',
            'dir1/file2.php',
            'dir2',
            'dir3/',
        ];
    }

    /**
     * @return array
     */
    public function fileExistsDataProvider()
    {
        return [
            [
                $this->ignoreDataProvide(),
                'file1.php',
            ],
            [
                $this->ignoreDataProvide(),
                'dir1/file2.php',
            ],
            [
                $this->ignoreDataProvide(),
                'dir2/file3.php',
            ],
            [
                $this->ignoreDataProvide(),
                'dir3/file4.php',
            ],
            [
                $this->ignoreDataProvide(),
                'dir3/subdir1/file4.php',
            ],
            [
                $this->ignoreDataProvide(),
                'dir3/subdir1/subdir2/file4.php',
            ],
        ];
    }

    /**
     * @return array
     */
    public function fileNotExistsDataProvider()
    {
        return [
            [
                [],
                'file_valid.php',
            ],[
                $this->ignoreDataProvide(),
                'file_valid.php',
            ],
            [
                $this->ignoreDataProvide(),
                'dir_valid/file_valid.php',
            ],
            [
                $this->ignoreDataProvide(),
                'dir_valid/subdir_valid/file_valid.php',
            ],
        ];
    }

    /**
     * @test
     *
     * @dataProvider fileExistsDataProvider
     */
    public function itShouldReturnTrue($ignoredFiles, $entry)
    {
        $this->shouldReadIgnoreData($ignoredFiles);
        $this->assertTrue($this->ignoreEntrySearcher->search($entry));
    }

    /**
     * @test
     *
     * @dataProvider fileNotExistsDataProvider
     */
    public function itShouldReturnFalse($ignoredFiles, $entry)
    {
        $this->shouldReadIgnoreData($ignoredFiles);
        $this->assertFalse($this->ignoreEntrySearcher->search($entry));
    }
}
