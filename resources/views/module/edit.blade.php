<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Module') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <!-- Validation Errors -->
                <x-validation-errors class="mb-4" :errors="$errors" />

                <form action="{{ url('update-module/'.$module->code) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Module Code -->
                    <div>
                        <x-input-label for="code" :value="__('Module Code')" />
                        <x-text-input id="code" class="block mt-1 w-full" type="text" name="code" :value="$module->code" required autofocus readonly />
                    </div>
                    <!-- Module Name -->
                    <div>
                        <x-input-label for="name" :value="__('Module name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$module->name" required autofocus />
                    </div>
                    <!-- Module Faculty -->
                    <div>
                        <x-input-label for="faculty" :value="__('Faculty')" />
                        <x-text-input id="faculty" class="block mt-1 w-full" type="text" name="faculty" :value="$module->faculty" required autofocus />
                    </div>
                    <!-- Module Department -->
                    <div>
                        <x-input-label for="department" :value="__('Department')" />
                        <x-text-input id="department" class="block mt-1 w-full" type="text" name="department" :value="$module->department" required autofocus />
                    </div>
                    <!-- Module Lecturer -->
                    <div>
                        <x-input-label for="lecturer" :value="__('Lecturer')" />
                        <x-text-input id="lecturer" class="block mt-1 w-full" type="text" name="lecturer" :value="$module->lecturer" required autofocus />
                    </div>
                    <!-- Module Credits -->
                    <div>
                        <x-input-label for="credit" :value="__('Credit value')" />
                        <x-text-input id="credit" class="block mt-1 w-full" type="text" name="credit" :value="$module->credit" required autofocus />
                    </div>

                    <x-primary-button class="ml-3 my-3 float-right">
                        {{ __('Update Module') }}
                    </x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
