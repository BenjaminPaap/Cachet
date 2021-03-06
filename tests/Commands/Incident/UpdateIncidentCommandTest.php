<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Commands\Incident;

use CachetHQ\Cachet\Commands\Incident\UpdateIncidentCommand;
use CachetHQ\Cachet\Handlers\Commands\Incident\UpdateIncidentCommandHandler;
use CachetHQ\Cachet\Models\Incident;
use CachetHQ\Tests\Cachet\Commands\AbstractCommandTestCase;

/**
 * This is the update incident command test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class UpdateIncidentCommandTest extends AbstractCommandTestCase
{
    protected function getObjectAndParams()
    {
        $params = [
            'incident'         => new Incident(),
            'name'             => 'Test',
            'status'           => 1,
            'message'          => 'Foo bar baz',
            'visible'          => 1,
            'component_id'     => 1,
            'component_status' => 1,
            'notify'           => false,
            'incident_date'    => null,
        ];
        $object = new UpdateIncidentCommand(
            $params['incident'],
            $params['name'],
            $params['status'],
            $params['message'],
            $params['visible'],
            $params['component_id'],
            $params['component_status'],
            $params['notify'],
            $params['incident_date']
        );

        return compact('params', 'object');
    }

    protected function objectHasRules()
    {
        return true;
    }

    protected function getHandlerClass()
    {
        return UpdateIncidentCommandHandler::class;
    }
}
