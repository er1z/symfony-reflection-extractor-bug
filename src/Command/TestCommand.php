<?php
namespace App\Command;

use App\Struct\TestStruct;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\PropertyInfo\PropertyInfoExtractorInterface;

class TestCommand extends Command
{
    protected static $defaultName = 'app:test';
    private $extractor;

    public function __construct(PropertyInfoExtractorInterface $extractor)
    {
        parent::__construct();
        $this->extractor = $extractor;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $types = $this->extractor->getProperties(TestStruct::class);

        dd($types);

        /**
         * array:3 [
        0 => "field1"
        1 => "field2"
        2 => "groupSequence"
        ]
         */
    }


}
