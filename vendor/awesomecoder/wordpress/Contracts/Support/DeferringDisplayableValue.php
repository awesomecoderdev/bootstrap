<?php

namespace AwesomeCoder\Contracts\Support;

interface DeferringDisplayableValue
{
    /**
     * Resolve the displayable value that the class is deferring.
     *
     * @return \AwesomeCoder\Contracts\Support\Htmlable|string
     */
    public function resolveDisplayableValue();
}
