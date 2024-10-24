<?php

namespace App\Livewire;

use App\Models\Agenda;
use Livewire\Component;
use Livewire\WithPagination;

class AgendaTable extends Component
{
    use WithPagination;
    public $search ='';

    public function render()
    {
        $agendas = Agenda::where('title', 'like', '%' . $this->search . '%')->paginate(5);
        
        return view('livewire.agenda-table', [
            'agendas' => $agendas,
        ]);
    }
}
