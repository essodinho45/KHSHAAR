<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('edit_category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800">
                <div class="overflow-hidden overflow-x-auto border-b border-gray-200 bg-white dark:border-gray-900 dark:bg-gray-800 p-6">
                    <form action="{{ route('categories.update', $category) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mt-2">
                            <x-input-label for="name" :value="__('name')" />
                            <x-text-input id="name" name="name" value="{{ old('name', $category->name) }}" type="text" class="block mt-1 w-full" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <div class="mt-2">
                            <x-input-label for="description" :value="__('description')" />
                            <x-text-input id="description" name="description" value="{{ old('description', $category->description) }}" type="text" class="block mt-1 w-full" />
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>
                        <div class="mt-2">
                            <x-input-label for="brand_id" :value="__('brand')" />
                            <select id="brand_id" name="brand_id" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block w-full">
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}" @selected($category->brand_id == $brand->id)>{{ $brand->name }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('brand_id')" class="mt-2" />
                        </div>
                        <div class="mt-2">
                            <div class="flex items-center">
                                <input type="checkbox" id="active" name="active" class="relative w-[3.25rem] h-7 p-px bg-gray-100 border-transparent text-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:ring-blue-600 disabled:opacity-50 disabled:pointer-events-none checked:bg-none checked:text-blue-600 checked:border-blue-600 focus:checked:border-blue-600 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-600
                                before:inline-block before:size-6 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:rounded-full before:shadow before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-neutral-400 dark:checked:before:bg-blue-200" @checked($category->active)>
                                <label for="active" class="text-sm text-gray-500 ms-3 dark:text-neutral-400">{{ __('active') }}</label>
                            </div>
                        </div>

                        <div class="mt-4">
                            <x-primary-button>
                                {{ __('save') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
