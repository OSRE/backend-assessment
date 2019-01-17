<?php declare(strict_types=1);

namespace OSRE\Assignment\RealEstate;

final class Portfolio
{
    /** @var string */
    private $title;

    public function __construct(string $title)
    {
        $this->title = $title;
    }
}
