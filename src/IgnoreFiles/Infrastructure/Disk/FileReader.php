<?php

namespace IgnoreFiles\Infrastructure\Disk;

class FileReader
{
    /**
     * @var string
     */
    private $file;

    /**
     * FileReader constructor.
     *
     * @param string $file
     */
    public function __construct($file)
    {
        $this->file = $file;
    }

    /**
     * @return array
     */
    public function read()
    {
        if (false === $this->fileExists()) {
            return [];
        }

        return $this->getFileContent();
    }

    /**
     * @return bool
     */
    private function fileExists()
    {
        return file_exists($this->file);
    }

    /**
     * @return array
     */
    private function getFileContent()
    {
        return file($this->file);
    }


}
