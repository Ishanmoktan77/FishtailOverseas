<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Team') }}
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
        <div class="flex justify-end px-4">
            {{-- <button
                class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 bg-opacity-100 hover:bg-blue-700"
                onclick="showModal()">
                Add Team Member
            </button> --}}

        </div>

        <div class="p-4 text-gray-900">
            <table class="w-full table-auto divide-y divide-gray-200 mt-2 rounded-md">
                <thead class="bg-gray-50 text-gray-500 uppercase tracking-wider text-xs">
                    <tr>
                        <th class="px-6 py-3 text-left">Image</th>
                        <th class="px-6 py-3 text-left">Name</th>
                        <th class="px-6 py-3 text-left">Position</th>
                        <th class="px-6 py-3 text-left">Message</th>
                        <th class="px-6 py-3">
                        </th>
                    </tr>
                </thead>
                <tbody class="text-gray-700 text-sm divide-y divide-gray-200 bg-white">
                    {{-- @foreach ($messages as $message)
                                <tr class="border-t border-gray-200">
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $message->created_at->toDateString() }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $message->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $message->email }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $message->subject }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $message->message }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right">
                                        <a onclick="return confirm('Delete Message?')"
                                            href="{{ route('messageDelete', $message->id) }}"
                                            class="text-red-600 hover:text-red-900">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            {{ $messages->links('pagination::tailwind') }} --}}
                </tbody>
            </table>
        </div>
    </div>
    <!-- Add Team Member Modal -->
    {{-- <div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true"
        id="addTeamMemberModal">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                role="dialog" aria-modal="true" aria-labelledby="modal-title">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">Add Team Member</h3>
                    <div class="mt-5">
                        <form method="POST" action="{{ route('team.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div>
                                <x-label for="name" :value="__('Name')" />
                                <x-input id="name" class="block mt-1 w-full" type="text" name="name" required
                                    autofocus />
                            </div>

                            <div class="mt-4">
                                <x-label for="position" :value="__('Position')" />
                                <x-input id="position" class="block mt-1 w-full" type="text" name="position"
                                    required />
                            </div>

                            <div class="mt-4">
                                <x-label for="message" :value="__('Message')" />
                                <textarea id="message" name="message" class="form-input rounded-md shadow-sm mt-1 block w-full" required></textarea>
                            </div>

                            <div class="mt-4">
                                <x-label for="image" :value="__('Image')" />
                                <x-input id="image" class="block mt-1 w-full" type="file" name="image"
                                    required />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-button class="ml-4">
                                    {{ __('Add') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

</x-app-layout>
