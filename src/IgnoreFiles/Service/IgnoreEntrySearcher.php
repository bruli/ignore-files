<?php

namespace IgnoreFiles\Service;

use IgnoreFiles\Infrastructure\Disk\FileReader;

class IgnoreEntrySearcher
{
    /**
     * @var FileReader
     */
    private $fileReader;

    /**
     * @param string $entry
     *
     * @return bool
     */
    public function search($entry)
    {
        $data = $this->fileReader->read();

        if (in_array($entry, $data)) {
            return true;
        }

        foreach ($data as $item) {
            if (0 === strpos($entry, $item)) {
                return true;
            }
        }

        return false;
    }

    /**
     * IgnoreEntrySearcher constructor.
     *
     * @param FileReader $fileReader
     */
    public function __construct(FileReader $fileReader)
    {
        $this->fileReader = $fileReader;
    }
}
