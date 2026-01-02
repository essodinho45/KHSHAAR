<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Brands') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">
                <div class="overflow-hidden overflow-x-auto border-b border-gray-200 dark:border-gray-900 dark:bg-gray-800 bg-white p-6">

                    <a href="{{ route('brands.create') }}"
                       class="mb-4 inline-flex items-center rounded-md border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-gray-700 dark:text-gray-300 shadow-sm transition duration-150 ease-in-out hover:bg-gray-50 dark:hover:bg-gray-950 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25">
                        {{ __('create_brand') }}
                    </a>

                    <div class="min-w-full align-middle">
                        <table class="min-w-full border divide-y divide-gray-200 dark:divide-gray-700 dark:border-gray-700">
                            <thead>
                            <tr>
                                <th class="bg-gray-50 dark:bg-gray-950 px-6 py-3 text-start">
                                    <span class="text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">{{ __('name') }}</span>
                                </th>
                                <th class="w-56 bg-gray-50 dark:bg-gray-950 px-6 py-3 text-start">
                                    <span class="text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">{{ __('actions') }}</span>
                                </th>
                            </tr>
                            </thead>

                            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700 divide-solid">
                                @foreach($brands as $brand)
                                    <tr class="bg-white dark:bg-gray-800">
                                        <td class="px-6 py-4 text-sm leading-5 text-gray-900 dark:text-gray-100 whitespace-no-wrap">
                                            {{ $brand->name }}
                                        </td>
                                        <td class="px-6 py-4 text-sm leading-5 text-gray-900 dark:text-gray-100 whitespace-no-wrap">
                                            <a href="{{ route('brands.edit', $brand) }}"
                                               class="inline-flex items-center rounded-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-gray-700 dark:text-gray-200 shadow-sm transition duration-150 ease-in-out hover:bg-gray-50 dark:hover:bg-gray-950 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25">
                                                {{ __('edit') }}
                                            </a>
                                            <form action="{{ route('brands.destroy', $brand) }}" method="POST" onsubmit="return confirm('{{ __('are_you_sure') }}')" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <x-danger-button>
                                                    {{ __('delete') }}
                                                </x-danger-button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $brands->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
