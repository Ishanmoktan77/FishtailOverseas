<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Team Member') }}
        </h2>
    </x-slot>

    <div class="py-12 mx-auto sm:px-6 lg:px-8">
        <div class="p-4 text-gray-900">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                @if ($errors->any())
                    <div class="bg-white p-4 rounded-md mb-4" role="alert">
                        <div class="flex">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="font-bold text-red-600">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="text-right">
                            <button class="text-red-600 hover:text-red-900" aria-label="Close"
                                onclick="this.parentElement.parentElement.remove();">Close</button>
                        </div>
                    </div>
                @endif
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <form action="{{ route('admin.team.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                <input type="text" name="name" id="name"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="mt-4">
                                <label for="post" class="block text-sm font-medium text-gray-700">Post</label>
                                <input type="text" name="post" id="post"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="mt-4">
                                <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                                <textarea name="message" id="message" rows="3"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                            </div>

                            <div class="mt-4">
                                <label for="image" class="block text-sm font-medium text-gray-700">Team Member
                                    Image</label>
                                <input
                                    class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-gray-300 bg-clip-padding py-[0.32rem] px-3 text-base font-normal text-gray-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-gray-100 file:px-3 file:py-[0.32rem] file:text-gray-700 file:transition file:duration-150 file:ease-in-out file:[margin-inline-end:0.75rem] file:[border-inline-end-width:1px] hover:file:bg-gray-200 focus:border-primary focus:text-gray-700 focus:shadow-[0_0_0_1px] focus:shadow-primary focus:outline-none"
                                    type="file" id="image" name="image" />
                            </div>

                            <div class="mt-4">
                                <button type="submit"
                                    class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
