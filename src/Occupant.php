<?php declare(strict_types=1);

namespace OSRE\Assignment\RealEstate;

final class Occupant
{
    /** @var string */
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
