<?php

declare(strict_types=1);

namespace Tephida\Corner;

/**
 * Class Error
 * @package Tephida\Corner
 */
class Error extends \Error implements CornerInterface
{
    use CornerTrait;
}
