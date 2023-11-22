<?php

namespace Laravel\Scout\Events;

use function count;

class SearchExecuted
{
    /**
     * The search query.
     *
     * @var string
     */
    public $query;

    /**
     * The number of milliseconds it took to execute the search.
     *
     * @var float
     */
    public $time;

    /**
     * The search's returned hit count.
     *
     * @var int
     */
    public $hits;

    /**
     * Create a new event instance.
     *
     * @param  array{hits:array,query:string,processingTimeMs:int,limit:int,offset:int,estimatedTotalHits:int,nbHits:int}  $metadata
     * @return void
     */
    public function __construct($metadata)
    {
        $this->query = $metadata['query'];
        $this->time = $metadata['processingTimeMs'];
        $this->hits = count($metadata['hits']);
    }
}
