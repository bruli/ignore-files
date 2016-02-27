<?php

namespace IgnoreFiles;

use IgnoreFiles\Service\IgnoreEntrySearcher;

class IgnoreFiles
{
    /**
     * @var Container
     */
    private $container;

    /**
     * IgnoreFiles constructor.
     */
    public function __construct()
    {
        $this->container = new Container();
    }

    /**
     * @param string $entry
     *
     * @return bool
     */
    public function isIgnored($entry)
    {
        /** @var IgnoreEntrySearcher $service */
        $service = $this->container->get('ignore.entry.searcher');

        return $service->search($entry);
    }
}
