<?php

namespace App\Livewire;

use App\Models\Skill;
use Livewire\Component;

class SkillsUpdate extends Component
{
    public $skill, $name, $progress;
    protected $listeners = ['skillupdate','skilldelete'];


    public function skillupdate($id){
       $this->skill= Skill::find($id);
       $this->name=$this->skill->name;
        $this->progress=$this->skill->progress;
        $this->resetValidation();

        $this->dispatch('createmodeltoggle');
    }
    public function skilldelete($id){
        $this->skill= Skill::find($id);
        $this->skill->delete();
        $this->reset('skill');
        $this->dispatch('refreshdata')->to(SkillsData::class);


    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'progress' => 'required'
        ];
    }

    public function submit()
    {

        $data= $this->validate();
       $this->skill->update($data);
        $this->dispatch('updatemodeltoggle');
        $this->dispatch('refreshdata')->to(SkillsData::class);

    }
    public function render()
    {
        return view('livewire.skills-update');
    }
}
