<?php

namespace Sminnee\SilverStripeIntercom;

use LogicException;
use Intercom\IntercomBasicAuthClient;
use Member;

/**
 * Reference to a bulk job result
 */
class IntercomBulkJob
{

    protected $client;
    protected $id;

    public function __construct($client, $id)
    {
        $this->client = $client;
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getInfo()
    {
        return $this->client->getJob(['id' => $this->id]);
    }

    public function getErrors()
    {
        return $this->client->getJobErrors(['id' => $this->id]);
    }
}
