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
        if($this->school && !empty($this->school)){
            if ($this->search) {
                $teachers = Teacher::query()
                    ->where('firstname', 'like', '%' . $this->search . '%')
                    ->Orwhere('lastname', 'like', '%' . $this->search . '%')
                    ->Orwhere('phone', 'like', '%' . $this->search . '%')
                    // ->Orwhere('email', 'like', '%' . $this->search . '%')
                    ->simplePaginate(10);
    
                return view(
                    'livewire.teachers',
                    ['teahers' => $teachers]
                );
            } else {
                $teachers = Teacher::query()->orderBy($this->sortBy, $this->sortDirection)
                    ->simplePaginate($this->perPage);
                return view(
                    'livewire.teachers',
                    ['teachers' => $teachers]
                );
            } 
        }else {
            dd('hmm');
        }
         
    }
}
