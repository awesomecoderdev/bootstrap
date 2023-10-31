<?php

namespace AwesomeCoder\Contracts\Support;

use ArrayAccess;
use IteratorAggregate;
use AwesomeCoder\Contracts\Support\Arrayable;

interface ValidatedData extends Arrayable, ArrayAccess, IteratorAggregate
{
    //
}
