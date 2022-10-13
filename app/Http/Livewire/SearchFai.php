<?php

namespace App\Http\Livewire;

use App\Http\Controllers\Home;
use App\Models\Fai;
use Livewire\Component;

class SearchFai extends Component
{
    public $name;

    public $results = [];

    public $fais;

    public function mount()
    {
        $this->fais = Fai::all();
    }

    public function updatedName($value)
    {
        $this->results =  Home::search($value);
    }

    public function render()
    {
        return view('livewire.search-fai');
    }
}
