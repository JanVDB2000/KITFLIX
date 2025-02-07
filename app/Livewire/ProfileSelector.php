<?php


namespace App\Livewire;

use Illuminate\Support\Facades\Cookie;
use Livewire\Component;

class ProfileSelector extends Component
{
    public $profiles;
    public $selectedProfile = null;
    public $showModal = true;

    public function mount(): void
    {
        $this->profiles = Auth()->user()->profiles()->get();
        $this->selectedProfile = Cookie::get('profilesSession', null);
        if ($this->selectedProfile) {
            $this->showModal = false;
        }
    }

    public function selectProfile($id): void
    {
        $this->selectedProfile = $id;
        Cookie::queue('profilesSession', $id, 60 * 24 * 30); // 30 dagen
        $this->showModal = false;
    }

    public function render()
    {
        return view('livewire.profile-selector');
    }
}
