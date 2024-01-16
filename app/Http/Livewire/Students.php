<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;

class Students extends Base
{
    public $sortBy = 'name';
    public $school;

    public function mount($school)
    {
        $this->school = $school;
    }

    public function render()
    {
        if (!$this->school || empty($this->school)) {
            $query = Student::query();

            if ($this->search) {
                $this->applySearch($query);
            } else {
                $this->applySorting($query);
            }

            $students = $query->simplePaginate($this->perPage);
            return view('livewire.students', ['students' => $students]);
        }

        $query = Student::query()->where('school_id', $this->school);

        if ($this->search) {
            $this->applySearch($query);
        } else {
            $this->applySorting($query);
        }

        $students = $query->simplePaginate($this->perPage);

        return view('livewire.students', ['students' => $students]);
    }

    protected function applySearch($query)
    {
        $query->where('name', 'like', '%' . $this->search . '%')
              ->orWhere('gender', 'like', '%' . $this->search . '%')
              ->orWhere('date_of_birth', 'like', '%' . $this->search . '%');
        // Add more search criteria as needed
    }

    protected function applySorting($query)
    {
        $query->orderBy($this->sortBy, $this->sortDirection);
    }
}
