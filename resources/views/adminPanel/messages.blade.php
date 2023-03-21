<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Messages') }}
        </h2>
    </x-slot>

    <div class="py-12 mx-auto sm:px-6 lg:px-8">
        @if (session()->has('success') || session()->has('failure'))
            <div class="bg-white p-4 rounded-md mb-4" role="alert">
                <div class="flex">
                    <div>
                        <p class="font-bold {{ session()->has('success') ? 'text-green-600' : 'text-red-600' }}">
                            {{ session()->has('success') ? 'Success!' : 'Failure!' }}</p>
                        <p class="text-sm">
                            {{ session()->has('success') ? session()->get('success') : session()->get('failure') }}</p>
                    </div>
                </div>
                <div class="text-right">
                    <button class="text-red-600 hover:text-red-900" aria-label="Close"
                        onclick="this.parentElement.parentElement.remove();">Close</button>
                </div>
            </div>
        @endif
        <div class="max-w-full">
            <div class="p-4 text-gray-900">
                <table class="w-full table-auto divide-y divide-gray-200 mt-2">
                    <thead class="bg-gray-50 text-gray-500 uppercase tracking-wider text-xs">
                        <tr>
                            <th class="px-6 py-3 text-left">Date</th>
                            <th class="px-6 py-3 text-left">Name</th>
                            <th class="px-6 py-3 text-left">Email</th>
                            <th class="px-6 py-3 text-left">Subject</th>
                            <th class="px-6 py-3 text-left">Message</th>
                            <th class="px-6 py-3 text-right"></th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700 text-sm divide-y divide-gray-200 bg-white">
                        @foreach ($messages as $message)
                            <tr class="border-t border-gray-200">
                                <td class="px-6 py-4 whitespace-nowrap">{{ $message->created_at->toDateString() }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $message->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $message->email }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $message->subject }}</td>
                                <td class="px-6 py-4">{{ $message->message }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-right">
                                    <a onclick="return confirm('Delete Message?')"
                                        href="{{ route('messageDelete', $message->id) }}"
                                        class="text-red-600 hover:text-red-900">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        {{ $messages->links('pagination::tailwind') }}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
