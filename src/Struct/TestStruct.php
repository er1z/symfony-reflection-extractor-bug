<?php


namespace App\Struct;


use Symfony\Component\Validator\Constraints\GroupSequence;
use Symfony\Component\Validator\GroupSequenceProviderInterface;

class TestStruct implements GroupSequenceProviderInterface
{
    public int $field1;
    public string $field2;

    public function getGroupSequence()
    {
        return ['nothing-interesting'];
    }
}
