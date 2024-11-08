<?php

namespace App\Livewire;

use App\Models\Skill;
use Livewire\Component;
use Livewire\WithPagination;

class SkillsData extends Component
{
    use WithPagination;
    public $search;
    public function updatingSearch(){
        $this->resetPage();
    }
    protected $listeners=['refreshdata'=>'$refresh'];

    public function render()
    {
        return view('livewire.skills-data',[
            'data'=>Skill::where('name','LIKE','%'.$this->search.'%')->paginate(10)
        ]);
    }
}
