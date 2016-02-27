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
        $content = file($this->file);

        return $this->trimContent($content);
    }

    /**
     * @param array $contentData
     *
     * @return array
     */
    private function trimContent(array $contentData)
    {
        $data = [];

        foreach ($contentData as $item) {
            $data[] = trim($item);
        }

        return $data;
    }
}
