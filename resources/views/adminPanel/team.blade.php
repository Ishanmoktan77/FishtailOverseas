<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Team Members') }}
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
            <a href="{{route('admin.team.add')}}"><button
                class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 bg-opacity-100 hover:bg-indigo-700">
                Add Team Member
            </button></a>

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
                    @foreach ($teams as $team)
                                <tr class="border-t border-gray-200">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <img src="{{ asset('storage/' .$team->image_url) }}" alt="{{ $team->name }}" height="200px" width="200px">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $team->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $team->post }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $team->message }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right">
                                        <a onclick="return confirm('Delete Team Member?')"
                                            href="{{route('admin.team.delete', $team->id)}}"
                                            class="text-red-600 hover:text-red-900">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            {{ $teams->links('pagination::tailwind') }}
                </tbody>
            </table>
        </div>
    </div>

</x-app-layout>
