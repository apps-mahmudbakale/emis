<?php

namespace App\Http\Livewire;

use App\Models\Teacher;
use Livewire\Component;

class Teachers extends Base
{
    public $sortBy = 'firstname';
    public $school;

    public function mount($school)
    {
        $this->school = $school;
    }

    public function render()
    {
        if (!$this->school || empty($this->school)) {
            $query = Teacher::query();

            if ($this->search) {
                $this->applySearch($query);
            } else {
                $this->applySorting($query);
            }

            $teachers = $query->simplePaginate($this->perPage);
            return view('livewire.teachers', ['teachers' => $teachers]);
        }

        $query = Teacher::query()->where('school_id', $this->school);

        if ($this->search) {
            $this->applySearch($query);
        } else {
            $this->applySorting($query);
        }

        $teachers = $query->simplePaginate($this->perPage);

        return view('livewire.teachers', ['teachers' => $teachers]);
    }

    protected function applySearch($query)
    {
        $query->where('firstname', 'like', '%' . $this->search . '%')
              ->orWhere('lastname', 'like', '%' . $this->search . '%')
              ->orWhere('phone', 'like', '%' . $this->search . '%');
        // Add more search criteria as needed
    }

    protected function applySorting($query)
    {
        $query->orderBy($this->sortBy, $this->sortDirection);
    }
}
