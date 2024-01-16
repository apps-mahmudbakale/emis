<?php

namespace App\Http\Livewire;

use App\Models\Facility as ModelsFacility;
use Livewire\Component;

class Facility extends Base
{
    public $sortBy = 'id';
    public $school;

    public function mount($school)
    {
        $this->school = $school;
    }

    public function render()
    {
        if (!$this->school || empty($this->school)) {
            $query = ModelsFacility::query();

            if ($this->search) {
                $this->applySearch($query);
            } else {
                $this->applySorting($query);
            }

            $facilities = $query->simplePaginate($this->perPage);
            return view('livewire.facility', ['facilities' => $facilities]);
        }

        $query = ModelsFacility::query()->where('school_id', $this->school);

        if ($this->search) {
            $this->applySearch($query);
        } else {
            $this->applySorting($query);
        }

        $facilities = $query->simplePaginate($this->perPage);

        return view('livewire.facility', ['facilities' => $facilities]);
    }

    protected function applySearch($query)
    {
        $query->where('id', 'like', '%' . $this->search . '%');
            //   ->orWhere('gender', 'like', '%' . $this->search . '%')
            //   ->orWhere('date_of_birth', 'like', '%' . $this->search . '%');
        // Add more search criteria as needed
    }

    protected function applySorting($query)
    {
        $query->orderBy($this->sortBy, $this->sortDirection);
    }
}
