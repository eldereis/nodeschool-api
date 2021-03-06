<?php
/**
 * This file is part of the Imbo package
 *
 * (c) Christer Edvartsen <cogo@starzinger.net>
 *
 * For the full copyright and license information, please view the LICENSE file that was
 * distributed with this source code.
 */

use Imbo\Auth\AccessControl\Adapter\MongoDB as MongoAclAdapter;

return [
    'accessControl' => function() {
        return new MongoAclAdapter([
            'databaseName' => 'imbo_testing',
        ]);
    }
];
