<?php

declare(strict_types=1);

class School
{

    private $students = [];
    public function add(string $name, int $grade): void

    {
        $this->students[$grade][] = $name;    
        
    }

    public function grade($grade) : array
    {
        return $this->students[$grade] ?? [];
       
    }

    public function studentsByGradeAlphabetical(): array
    {
       
        ksort($this->students);

        return array_map(function ($grade) {
            sort($grade);
            return $grade;
        }, $this->students);
      
    }
}

$school = new School();

$school->add('Anna', 12);
$school->add('BBB', 8);
$school->add('VVV', 1);

echo '</br>';
print_r( $school->grade(12));
echo '</br>';
print_r($school->studentsByGradeAlphabetical());

