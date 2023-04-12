<?php

namespace App\Http\Livewire;

use App\Models\School;
use Livewire\Component;

class Schools extends Base
{
    public $sortBy = 'name';
    public function render()
    {
        if ($this->search) {
            $schools = School::query()
                ->where('name', 'like', '%' . $this->search . '%')
                // ->Orwhere('email', 'like', '%' . $this->search . '%')
                ->simplePaginate(10);

            return view(
                'livewire.schools',
                ['schools' => $schools]
            );
        } else {
            $schools = School::query()->orderBy($this->sortBy, $this->sortDirection)
                ->simplePaginate($this->perPage);
            return view(
                'livewire.schools',
                ['schools' => $schools]
            );
        }
    }
}
