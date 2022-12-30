<title>User Profile</title>
<style>
    div{
        font-size:16px;
        height:auto;
        background-image: linear-gradient(#000000, rgb(2, 162, 255));
      
        

    }
    .header{
        font-size:16px;
        height:auto;
        background-image: linear-gradient(#fd0f0f, black);
        color: aqua;

    }
    .h2{
        font-size:16px;
        height:auto;
        background-image: linear-gradient(#dbbb07, black);
        color: aqua;

    }
    .p-4{
        font-size:16px;
        height:auto;
        background-image: linear-gradient(#000000, rgb(2, 162, 255));
        color: aqua;
        text-decoration-color: aqua;
    }
    .py-12 max-w-7xl{
        font-size:16px;
        height:auto;
        background-image: linear-gradient(#fd0fc2, black);
        color: aqua;
    }
    </style>
   
<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-red dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-blue-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>
