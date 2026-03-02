<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ShipmentTypeServicePointStorage\Dependency\Facade;

use Generated\Shared\Transfer\ShipmentTypeServiceTypeCollectionTransfer;
use Generated\Shared\Transfer\ShipmentTypeServiceTypeCriteriaTransfer;

interface ShipmentTypeServicePointStorageToShipmentTypeServicePointFacadeInterface
{
    public function getShipmentTypeServiceTypeCollection(
        ShipmentTypeServiceTypeCriteriaTransfer $shipmentTypeServiceTypeCriteriaTransfer
    ): ShipmentTypeServiceTypeCollectionTransfer;
}
