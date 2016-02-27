<?php

namespace IgnoreFiles\Service;

class TrimContentTransformer
{
    /**
     * @param array $contentData
     *
     * @return array
     */
    public static function trim(array $contentData)
    {
        $data = [];

        foreach ($contentData as $item) {
            $data[] = trim($item);
        }

        return $data;
    }
}
