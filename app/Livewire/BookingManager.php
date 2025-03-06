<?php
namespace App\Http\Livewire;

use Livewire\Component;

class BookingManager extends Component
{
    public $propertyId;

    public function book()
    {
        dd("Réservation pour la propriété ID: " . $this->propertyId);
    }

    public function render()
    {
        return view('livewire.booking-manager');
    }
}

