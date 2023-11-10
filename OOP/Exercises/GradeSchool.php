<?php

declare(strict_types=1);

class School
{

    public $students = [];
    public function add(string $name, int $grade): void

    {
        $this->students[$grade][] = $name;    
        
    }

    // public function grade($grade) : array
    // {
        // $currentStudents = array_map(fn ($student) => $student === $name, $this->students);
    // }

    public function studentsByGradeAlphabetical(): array
    {
        return $this ->students;
    }
}

$school = new School();

$school->add('Viktor', 5);
$school->add('Elena', 5);


print_r( $school->studentsByGradeAlphabetical());
