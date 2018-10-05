<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\ShoppingListExtension\Dependency\Plugin;

use Generated\Shared\Transfer\ShoppingListItemTransfer;

interface ShoppingListItemMapperPluginInterface
{
    /**
     * Specification:
     * - Maps ShoppingListItemTransfer with the given params.
     *
     * @api
     *
     * @param array $params
     * @param \Generated\Shared\Transfer\ShoppingListItemTransfer $shoppingListItemTransfer
     *
     * @return \Generated\Shared\Transfer\ShoppingListItemTransfer
     */
    public function map(array $params, ShoppingListItemTransfer $shoppingListItemTransfer): ShoppingListItemTransfer;
}
