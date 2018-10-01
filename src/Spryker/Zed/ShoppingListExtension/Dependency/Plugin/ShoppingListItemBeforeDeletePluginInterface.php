<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ShoppingListExtension\Dependency\Plugin;

use Generated\Shared\Transfer\ShoppingListItemTransfer;

interface ShoppingListItemBeforeDeletePluginInterface
{
    /**
     * Specification:
     * - This plugin executes before shopping list item deletion.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ShoppingListItemTransfer $shoppingListItemTransfer
     *
     * @return \Generated\Shared\Transfer\ShoppingListItemTransfer
     */
    public function execute(ShoppingListItemTransfer $shoppingListItemTransfer): ShoppingListItemTransfer;
}
