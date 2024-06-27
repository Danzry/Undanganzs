<div class="w-full mx-auto overflow-hidden bg-white rounded-lg shadow-xl">
    <div class="relative p-5">
        <div class="text-center">
            <div class="flex items-center justify-center w-10 h-10 mx-auto mb-5 text-yellow-500 bg-yellow-100 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-question-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.475 5.458c-.284 0-.514-.237-.47-.517C4.28 3.24 5.576 2 7.825 2c2.25 0 3.767 1.36 3.767 3.215 0 1.344-.665 2.288-1.79 2.973-1.1.659-1.414 1.118-1.414 2.01v.03a.5.5 0 0 1-.5.5h-.77a.5.5 0 0 1-.5-.495l-.003-.2c-.043-1.221.477-2.001 1.645-2.712 1.03-.632 1.397-1.135 1.397-2.028 0-.979-.758-1.698-1.926-1.698-1.009 0-1.71.529-1.938 1.402-.066.254-.278.461-.54.461h-.777ZM7.496 14c.622 0 1.095-.474 1.095-1.09 0-.618-.473-1.092-1.095-1.092-.606 0-1.087.474-1.087 1.091S6.89 14 7.496 14"/>
                  </svg>
            </div>
            <div>
                <h3 class="text-lg font-medium text-secondary-900">Invite Guest</h3>
                <span class="mt-2 text-sm text-secondary-900" x-text="window.pgBulkActions.count('FootballListTable') + ' Guests Selected.'"></span>
                <div class="mt-2 text-sm text-secondary-500">Messages will be sent via WhatsApp.</div>
            </div>
        </div>
        <div class="flex justify-end gap-3 mt-5">
            <button type="button" wire:click="$dispatch('closeModal')"
                class="flex-1 px-4 py-2 text-sm font-medium text-center text-gray-700 transition-all bg-white border border-gray-300 rounded-lg shadow-sm hover:bg-gray-100 focus:ring focus:ring-gray-100 disabled:cursor-not-allowed disabled:border-gray-100 disabled:bg-gray-50 disabled:text-gray-400">Cancel</button>
            <button type="button" wire:click="invite"
                class="flex-1 px-4 py-2 text-sm font-medium text-center text-white transition-all bg-red-500 border border-red-500 rounded-lg shadow-sm hover:border-red-700 hover:bg-red-700 focus:ring focus:ring-red-200 disabled:cursor-not-allowed disabled:border-red-300 disabled:bg-red-300">Invite</button>
        </div>
    </div>
</div>
