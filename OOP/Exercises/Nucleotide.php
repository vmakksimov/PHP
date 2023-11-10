<?php


declare(strict_types=1);

class DNA {
    static public function nucleotideCount(string $input)
    {
        return [
            "A"=> substr_count($input, "A"),
            "T"=> substr_count($input, "T"),
            "C"=> substr_count($input, "C"),
            "G"=> substr_count($input, "G")
           

        ];

    }
}

$DNA = new DNA();

print_r($DNA ->nucleotideCount("ATTACG"));
