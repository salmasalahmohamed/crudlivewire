<?php

namespace App\Livewire;

use App\Models\Skill;
use Livewire\Component;

class SkillsCreate extends Component
{
    public $name,$progress;


public function rules(){
    return[
        'name'=>'required|string',
        'progress'=>'required'
    ];
}
    public function submit()

    {
       $data= $this->validate();
Skill::create($data);
$this->reset(['name','progress']);
        $this->dispatch('createmodeltoggle');
        $this->dispatch('refreshdata')->to(SkillsData::class);

    }

    public function render()
    {
        return view('livewire.skills-create');
    }
}
