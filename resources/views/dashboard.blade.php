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
    .xd{
        color: #dbbb07;
        padding: 10px;
        text-align: center;
    }
    .st{
                color: rgb(252, 252, 252);
                padding: 5px 50px;
                list-style-type: none;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                background-image: linear-gradient(rgb(2, 2, 2),#000000);
                font-size: 30px;
                text-shadow: 2px 2px 5px rgb(255, 9, 9);
               
            }
    </style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    

    <div class="py-12">
        <div class="xd text-red-900 dark:text-red-100">
            {{-- <label><strong> Click Here =></strong> </label> --}}
            <a href="{{ url('/post')}}"><strong>Home Page</strong></a>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <li class="st" style="float:left"> Logged In as User: {{ Auth::user()->name }}</li>
                </div>

                
            </div>
        </div>
    </div>
</x-app-layout>
