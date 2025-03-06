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
        $this->validate();

        Booking::create([
            'property_id' => $this->selectedProperty,
            'start_date' => $this->startDate,
            'end_date' => $this->endDate,
        ]);

        session()->flash('success', 'Réservation créée avec succès !');
        $this->reset(['selectedProperty', 'startDate', 'endDate']);
    }

    public function render()
    {
        return view('livewire.booking-manager')
            ->layout('components.layouts.app');
    }

}


