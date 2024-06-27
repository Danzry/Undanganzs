<x-app-layout>
    <div class="py-12">
        <div class="flex mx-auto flex-between max-w-7xl sm:px-6 lg:px-8">
            {{-- <div class="p-8 overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg"> --}}

            <x-ts-tab wire:model.live="tab" selected="Add">
                <x-ts-tab.items tab="Add">
                    <livewire:football-add>
                        {{-- <hr class="h-px my-6 bg-gray-300 border-0" /> --}}
                </x-ts-tab.items>
                <x-ts-tab.items tab="Manage">
                    <livewire:football-manage-table />
                </x-ts-tab.items>
                <x-ts-tab.items tab="List">
                    <livewire:football-list-table />
                </x-ts-tab.items>
            </x-ts-tab>
        </div>
    </div>
    <script data-navigate-once>
        document.addEventListener('livewire:navigated', () => {

            const input = document.querySelector("#phone");
            const output = document.querySelector("#output");

            const iti = window.intlTelInput(input, {
                initialCountry: "auto",
                geoIpLookup: callback => {
                    fetch("https://ipapi.co/json")
                        .then(res => res.json())
                        .then(data => callback(data.country_code))
                        .catch(() => callback("my"));
                },
                strictMode: true,
                nationalMode: true,
                separateDialCode: true,
                utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.10/build/js/utils.js",
            });

            const handleChange = () => {
                let text;
                if (input.value) {
                    if (iti.isValidNumber()) {
                        text = "Valid number! Full international format: " + iti.getNumber();
                    } else {
                        text = "Invalid number - please try again";
                    }
                } else {
                    text = "Please enter a valid number below";
                }
                output.textContent = text;

                Livewire.dispatch('footbal-add', {fullNumber: iti.getNumber()});
            };

            input.addEventListener('change', handleChange);
            input.addEventListener('keyup', handleChange);

            handleChange();
        });
    </script>
</x-app-layout>
