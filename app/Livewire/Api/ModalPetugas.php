<?php

namespace App\Livewire\Api;

use Livewire\Component;
use App\Models\Kejadian;
use Carbon\Carbon;
class ModalPetugas extends Component
{
    
    
        public $isOpen = false;
        public $model;
        public $isDisabled = false;
    
        public function openModal($id)
        {
            $this->model = Kejadian::findOrFail($id);
            $this->isOpen = true;
            $this->checkTimeDifference();
        }
    
        public function closeModal()
        {
            $this->isOpen = false;
        }
    
        public function checkwaktu()
        {
            $twoHoursAgo = Carbon::now()->subHours(2);
            if ($this->model->updated_at < $twoHoursAgo) {
                $this->isDisabled = true;
            }
        }
    
        public function update()
        {
            
        }
    
        public function render()
        {
            return view('livewire.update-modal-component');
        }
    }
