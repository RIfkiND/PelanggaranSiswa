<?php

namespace App\Livewire\Api;

use App\Models\Pelanggaran;
use Livewire\Component;

class ModalAdmin extends Component
{   


    public $isOpen = false ;
    public $modal ;

    public function OpenModal($id){

        $this->modal = Pelanggaran::findOrFail($id);
        $this->isOpen = true;
    }


    public function closeModal(){
        $this->isOpen= false;
    }

    public function update(){
        
    }
    public function render()
    {
        return view('');
    }
}
