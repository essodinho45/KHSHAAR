@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'mt-1 p-1 block w-full rounded-md text-sm leading-6 shadow-sm border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 file:bg-gray-900 file:text-gray-300 file:dark:bg-gray-200 file:dark:text-gray-800 file:border-none file:px-4 file:py-1 file:mr-6 file:rounded-md hover:file:bg-gray-800 hover:dark:file:bg-gray-300']) }}>
