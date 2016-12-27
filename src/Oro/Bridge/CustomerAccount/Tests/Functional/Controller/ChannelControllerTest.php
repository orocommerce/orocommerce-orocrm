<?php

namespace Oro\Bridge\CustomerAccount\Tests\Functional\Functional\Controller;

use Oro\Bundle\ChannelBundle\Tests\Functional\Controller\ChannelControllerTest as BaseChannelControllerTest;

/**
 * @outputBuffering enabled
 * @dbIsolation
 */
class ChannelControllerTest extends BaseChannelControllerTest
{
    public function gridProvider()
    {
        $data = parent::gridProvider();
        $data['Channel grid'][0]['expectedResultCount'] = 2;

        return $data;
    }
}
