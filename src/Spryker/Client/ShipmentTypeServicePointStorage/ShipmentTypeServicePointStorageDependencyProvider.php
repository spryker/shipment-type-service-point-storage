<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\ShipmentTypeServicePointStorage;

use Spryker\Client\Kernel\AbstractDependencyProvider;
use Spryker\Client\Kernel\Container;
use Spryker\Client\ShipmentTypeServicePointStorage\Dependency\Client\ShipmentTypeServicePointStorageToServicePointStorageClientBridge;

class ShipmentTypeServicePointStorageDependencyProvider extends AbstractDependencyProvider
{
    /**
     * @var string
     */
    public const CLIENT_SERVICE_POINT_STORAGE = 'CLIENT_SERVICE_POINT_STORAGE';

    public function provideServiceLayerDependencies(Container $container): Container
    {
        $container = parent::provideServiceLayerDependencies($container);
        $container = $this->addServicePointStorageClient($container);

        return $container;
    }

    protected function addServicePointStorageClient(Container $container): Container
    {
        $container->set(static::CLIENT_SERVICE_POINT_STORAGE, function (Container $container) {
            return new ShipmentTypeServicePointStorageToServicePointStorageClientBridge(
                $container->getLocator()->servicePointStorage()->client(),
            );
        });

        return $container;
    }
}
