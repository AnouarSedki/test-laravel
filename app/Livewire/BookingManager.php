<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Property;
use App\Models\Booking;
use Carbon\Carbon;

class BookingManager extends Component
{
    public $properties;
    public $selectedProperty;
    public $startDate;
    public $endDate;

    protected $rules = [
        'selectedProperty' => 'required|exists:properties,id',
        'startDate' => 'required|date',
        'endDate' => 'required|date|after:startDate',
    ];

    public function mount()
    {
        $this->properties = Property::all();
    }

    public function submit()
    {
        $this->validate([
            'selectedProperty' => 'required|exists:properties,id',
            'startDate' => 'required|date|after_or_equal:today',
            'endDate' => 'required|date|after:startDate',
        ]);

        Booking::create([
            'user_id' => auth()->id(),
            'property_id' => $this->selectedProperty,
            'start_date' => $this->startDate,
            'end_date' => $this->endDate,
        ]);

        session()->flash('success', 'Réservation créée avec succès !');
        $this->reset(['selectedProperty', 'startDate', 'endDate']);
    }

    public function render()
    {
        return view('livewire.booking-manager'); // Ce chemin est bon
    }


}


