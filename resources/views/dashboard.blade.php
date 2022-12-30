<title>User Dashboard</title>
<style>
    div{
         
        font-size:16px;
        height:auto;
        background-image: linear-gradient(#02ffab, black);
        
    }
    .header{
        font-size:16px;
        height:auto;
        background-image: linear-gradient(#0751db, black);
        color: aqua;

    }
    .h2{
        font-size:16px;
        height:auto;
        background-image: linear-gradient(#dbbb07, black);
        color: aqua;

    }
    </style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
