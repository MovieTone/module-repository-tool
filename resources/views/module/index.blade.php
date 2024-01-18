<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Module List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="py-4 px-4 relative overflow-x-auto shadow-md sm:rounded-lg">

                                <!-- Success Status -->
                                <x-success-status class="mb-4" :status="session('message')" />

                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <thead class="text-sm text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">Module Code</th>
                                            <th scope="col" class="px-6 py-3">Module Name</th>
                                            <th scope="col" class="px-6 py-3">Faculty</th>
                                            <th scope="col" class="px-6 py-3">Department</th>
                                            <th scope="col" class="px-6 py-3">Lecturer</th>
                                            <th scope="col" class="px-6 py-3">Credit value</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @forelse ($modules as $module)
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $module->code }}</th>
                                            <td class="px-6 py-4">{{ $module->name }}</td>
                                            <td class="px-6 py-4">{{ $module->faculty }}</td>
                                            <td class="px-6 py-4">{{ $module->department }}</td>
                                            <td class="px-6 py-4">{{ $module->lecturer }}</td>
                                            <td class="px-6 py-4">{{ $module->credit }}</td>
                                            <td class="px-0 py-4">
                                                <a href="{{ url('/edit-module/'.$module->code) }}" class="btn btn-primary">Edit</a>
                                            </td>
                                            <td class="py-4 pr-2 pl-0">
                                                <form action="{{ url('delete-module/'.$module->code) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr class="border-b dark:border-neutral-500">
                                            <td colspan="6" class="whitespace-nowrap px-6 py-4">No module available</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
