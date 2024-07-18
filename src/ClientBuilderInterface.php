<?php declare(strict_types=1);

namespace Elastic\Client;

use OpenSearch\Client;

interface ClientBuilderInterface
{
    public function default(): Client;

    public function connection(string $name): Client;
}
