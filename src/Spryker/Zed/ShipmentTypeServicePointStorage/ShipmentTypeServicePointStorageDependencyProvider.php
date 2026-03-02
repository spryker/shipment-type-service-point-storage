<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ShipmentTypeServicePointStorage;

use Spryker\Zed\Kernel\AbstractBundleDependencyProvider;
use Spryker\Zed\Kernel\Container;
use Spryker\Zed\ShipmentTypeServicePointStorage\Dependency\Facade\ShipmentTypeServicePointStorageToShipmentTypeServicePointFacadeBridge;

/**
 * @method \Spryker\Zed\ShipmentTypeServicePointStorage\ShipmentTypeServicePointStorageConfig getConfig()
 */
class ShipmentTypeServicePointStorageDependencyProvider extends AbstractBundleDependencyProvider
{
    /**
     * @var string
     */
    public const FACADE_SHIPMENT_TYPE_SERVICE_POINT = 'FACADE_SHIPMENT_TYPE_SERVICE_POINT';

    public function provideBusinessLayerDependencies(Container $container): Container
    {
        $container = parent::provideBusinessLayerDependencies($container);
        $container = $this->addShipmentTypeServicePointFacade($container);

        return $container;
    }

    protected function addShipmentTypeServicePointFacade(Container $container): Container
    {
        $container->set(static::FACADE_SHIPMENT_TYPE_SERVICE_POINT, function (Container $container) {
            return new ShipmentTypeServicePointStorageToShipmentTypeServicePointFacadeBridge(
                $container->getLocator()->shipmentTypeServicePoint()->facade(),
            );
        });

        return $container;
    }
}
