<?php

namespace AwesomeCoder\Contracts\Container;

use Exception;
use AwesomeCoder\Container\Interface\ContainerExceptionInterface;

class CircularDependencyException extends Exception implements ContainerExceptionInterface
{
    //
}
