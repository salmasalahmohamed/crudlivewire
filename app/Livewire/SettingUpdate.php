<?php

namespace App\Livewire;

use App\Models\Setting;
use Livewire\Component;

class SettingUpdate extends Component
{
    public   $settings;
    public function mount(){
        $this->settings=Setting::find(1);
    }
    public function rules(){
        return
            ['settings.name'=>'required',
            'settings.email'=>'required',
            'settings.phone'=>'required',
            'settings.facebook'=>'nullable',
            'settings.instagram'=>'nullable',
            'settings.linkedin'=>'nullable',
            'settings.twitter'=>'nullable',
            'settings.address'=>'required',
            ];
    }
    public function submit(){
        $this->validate();
        $this->settings->save();
        session()->flash('message','success updated ');

    }
    public function render()
    {
        return view('livewire.setting-update');
    }
}
