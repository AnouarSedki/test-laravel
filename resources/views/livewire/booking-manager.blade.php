<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12">
    <form wire:submit.prevent="submit">
        @csrf
        <div class="bg-white shadow-md rounded-lg p-6">
            <div class="mb-4">
                <label for="property" class="block text-sm font-medium text-gray-700">Propriété</label>
                <select
                    wire:model="selectedProperty"
                    id="property"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                    required
                >
                    <option value="">Sélectionnez une propriété</option>
                    @foreach($properties as $property)
                        <option value="{{ $property->id }}">{{ $property->name }}</option>
                    @endforeach
                </select>
                @error('selectedProperty')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="start-date" class="block text-sm font-medium text-gray-700">Date de début</label>
                <input
                    type="date"
                    wire:model="startDate"
                    id="start-date"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                    required
                >
                @error('startDate')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="end-date" class="block text-sm font-medium text-gray-700">Date de fin</label>
                <input
                    type="date"
                    wire:model="endDate"
                    id="end-date"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                    required
                >
                @error('endDate')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <button
                type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
            >
                Réserver
            </button>
        </div>
    </form>

    @if(session()->has('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mt-6" role="alert">
            <p>{{ session('success') }}</p>
        </div>
    @endif
</div>
