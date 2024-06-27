<form method="post" class="space-y-5" id="form" wire:submit.prevent="create" x-data="{ resetOutput() { document.getElementById('output').textContent = 'Please enter a valid number below'; } }">
    @csrf
    <div class="grid items-center grid-cols-3">
        <x-label for="name" value="{{ __('Name') }}" />
        <div class="col-span-2">
            <x-ts-input id="name" name="guest_name" :value="old('guest_name')" autofocus autocomplete="name"
                wire:model="guest_name" />
        </div>
    </div>
    <div class="grid items-center grid-cols-3">
        <x-label for="phone" value="{{ __('Phone Number') }}" />
        <div class="col-span-2" wire:ignore>
            <p id="output">Please enter a valid number below</p>
            <x-ts-input id="phone" type="tel" wire:model="phone_number" />
        </div>
    </div>
    <div class="grid items-center grid-cols-3">
        <div class="col-span-2 col-start-2">
            <x-ts-button color="blue" @click="resetOutput()">Add</x-ts-button>
        </div>
    </div>
</form>
