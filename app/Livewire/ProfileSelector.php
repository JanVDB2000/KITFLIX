<?php


namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class ProfileSelector extends Component
{
    public $profiles;
    public $selectedProfile = null;
    public $showModal = true;

    public function mount(): void
    {
        $this->profiles = Auth()->user()->profiles()->get();
        $this->selectedProfile = Session::get('profilesSession', null);
        if ($this->selectedProfile) {
            $this->showModal = false;
        }
    }

    public function selectProfile($id): void
    {
        $this->selectedProfile = $id;
        Session::put('profilesSession',$id);
        $this->showModal = false;
    }

    public function render()
    {
        return view('livewire.profile-selector');
    }
}
