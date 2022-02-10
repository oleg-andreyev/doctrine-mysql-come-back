<?php

declare(strict_types=1);

namespace Facile\DoctrineMySQLComeBack\Doctrine\DBAL;

use Doctrine\DBAL\Connection as DBALConnection;

class Connection extends DBALConnection implements ConnectionInterface
{
    use ConnectionTrait;
}
