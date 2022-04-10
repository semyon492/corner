<?php
declare(strict_types=1);
namespace Tephida\Corner;

/**
 * Class Exception
 * @package Tephida\Corner
 */
class Exception extends \Exception implements CornerInterface
{
    use CornerTrait;
}
