<div>
    <form wire:submit.prevent="submit">
        @csrf
        <div>
            <label>Propriété :</label>
            <select wire:model="selectedProperty">
                <option value="">Sélectionnez une propriété</option>
                @foreach($properties as $property)
                    <option value="{{ $property->id }}">{{ $property->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label>Date de début :</label>
            <input type="date" wire:model="startDate">
        </div>

        <div>
            <label>Date de fin :</label>
            <input type="date" wire:model="endDate">
        </div>

        <button type="submit">Réserver</button>
    </form>

    @if(session()->has('success'))
        <div>{{ session('success') }}</div>
    @endif
</div>
