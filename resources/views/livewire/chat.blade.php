<div>
    {{-- In work, do what you enjoy. --}}
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Chat') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Manage your profile and account settings') }}
        </flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    <div class="flex h-[550px] text-sm border rounded-xl shadow overflow-hidden bg-white">
        {{-- Left Side Users List --}}
        <div class="w-1/4 border-r bg-gray-50">
            <div class="p-4 font-bold text-gray-700 border-b">Users</div>
            <div class="divide-y">
                @foreach ($users as $item)
                    <div wire:click="selectUser({{ $item->id }})"
                        class="p-3 cursor-pointer hover:bg-blue-100 transition {{ $selectedUser->id === $item->id ? 'bg-blue-50 font-semibold' : '' }}">

                        <div class="text-gray-800">{{ $item->name }}</div>
                        <div class="text-xs text-gray-500">{{ $item->email }}</div>
                    </div>
                @endforeach

            </div>
        </div>

        {{-- Right Chat Section --}}
        <div class="w-3/4 flex flex-col">
            {{-- Header --}}
            <div class="p-4 border-b bg-gray-50">
                <div class="text-lg font-semibold text-gray-800">{{ $selectedUser->name }}</div>
                <div class="text-xs text-gray-500">{{ $selectedUser->email }}</div>
            </div>

            {{-- Messages --}}
            <div class="flex-1 p-4 overflow-y-auto space-y-2 bg-gray-50">
                <div class="flex justify-end">
                    <div class="max-w-xs px-4 py-2 rounded-2xl shadow bg-blue-600 text-white">
                        Hi, This is test
                    </div>
                </div>
            </div>

            {{-- Input field --}}
            <form action="" class="p-4 border-t bg-white flex items-center gap-2">
                <input type="text"
                    class="flex-1 border border-gray-300 rounded-full px-4 py-2 text-sm focus:outline">
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white text-sm px-4 py-2 rounded-full">Send</button>
            </form>
        </div>
    </div>

</div>
