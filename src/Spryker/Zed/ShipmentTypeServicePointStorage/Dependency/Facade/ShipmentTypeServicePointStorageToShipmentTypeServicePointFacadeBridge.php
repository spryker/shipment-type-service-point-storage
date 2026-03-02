<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ShipmentTypeServicePointStorage\Dependency\Facade;

use Generated\Shared\Transfer\ShipmentTypeServiceTypeCollectionTransfer;
use Generated\Shared\Transfer\ShipmentTypeServiceTypeCriteriaTransfer;

class ShipmentTypeServicePointStorageToShipmentTypeServicePointFacadeBridge implements ShipmentTypeServicePointStorageToShipmentTypeServicePointFacadeInterface
{
    /**
     * @var \Spryker\Zed\ShipmentTypeServicePoint\Business\ShipmentTypeServicePointFacadeInterface
     */
    protected $shipmentTypeServicePointFacade;

    /**
     * @param \Spryker\Zed\ShipmentTypeServicePoint\Business\ShipmentTypeServicePointFacadeInterface $shipmentTypeServicePointFacade
     */
    public function __construct($shipmentTypeServicePointFacade)
    {
        $this->shipmentTypeServicePointFacade = $shipmentTypeServicePointFacade;
    }

    public function getShipmentTypeServiceTypeCollection(
        ShipmentTypeServiceTypeCriteriaTransfer $shipmentTypeServiceTypeCriteriaTransfer
    ): ShipmentTypeServiceTypeCollectionTransfer {
        return $this->shipmentTypeServicePointFacade->getShipmentTypeServiceTypeCollection($shipmentTypeServiceTypeCriteriaTransfer);
    }
}
