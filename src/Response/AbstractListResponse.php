<?php

declare(strict_types=1);

namespace Zaxbux\BackblazeB2\Response;

use Zaxbux\BackblazeB2\Traits\ObjectIterableTrait;


abstract class AbstractListResponse extends AbstractResponse {
	use ObjectIterableTrait;
}
