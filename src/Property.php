<?php declare(strict_types=1);

namespace OSRE\Assignment\RealEstate;

final class Property
{
    /** @var string */
    private $propertyId;

    private $postalCode;

    public function __construct(string $propertyId, $postalCode)
    {
        $this->propertyId = $propertyId;
        $this->postalCode = $postalCode;
    }
}
