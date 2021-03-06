<?php
/**
 * @defgroup api_v1_contexts Context API requests
 */
/**
 * @file api/v1/contexts/index.php
 *
 * Copyright (c) 2014-2018 Simon Fraser University
 * Copyright (c) 2003-2018 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup api_v1_contexts
 * @brief Handle API requests for contexts (presses).
 */
import('lib.pkp.api.v1.contexts.PKPContextHandler');
return new PKPContextHandler();
