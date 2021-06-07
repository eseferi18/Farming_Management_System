<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-3xl text-gray-800">
            <i class="fa fa-home"></i>
            {{ __('Home') }}
        </h2>
    </x-slot>
    
    <div class="w-full flex justify-center items-center">
        <div class="container w-full flex flex-col justify-evenly p-10 bg-white shadow">
            <div class="w-full flex justify-between ">
            <a href="/crops" class="card bg-green-500 rounded p-10 w-1/4 flex flex-col justify-center items-center">
                <i class="fa fa-pagelines m-4 h-1/3 text-6xl"></i>
                <h2 class="text-3xl mb-5 font-bold">Crops</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates, aperiam.</p>
            </a>
            <a href="/livestock" class="card bg-green-500 rounded p-10 w-1/4 flex flex-col justify-center items-center">
                <i class="fa fa-paw m-4 h-1/3 text-6xl"></i>
                <h2 class="text-3xl mb-5 font-bold">Livestock</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates, aperiam.</p>
            </a>
            <a href="/inventory" class="card bg-green-500 rounded p-10 w-1/4 flex flex-col justify-center items-center">
                <i class="fa fa-archive m-4 h-1/3 text-6xl"></i>
                <h2 class="text-3xl mb-5 font-bold">Inventory</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates, aperiam.</p>
            </a>
        </div>
        <div class="w-full flex justify-between mt-32">
            <a href="/market" class="card bg-green-500 rounded p-10 w-1/4 flex flex-col justify-center items-center">
                <i class="fa fa-shopping-cart m-4 h-1/3 text-6xl"></i>
                <h2 class="text-3xl mb-5 font-bold">Market</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates, aperiam.</p>
            </a>
            <a href="/weather" class="card bg-green-500 rounded p-10 w-1/4 flex flex-col justify-center items-center">
                <i class="fa fa-sun m-4 h-1/3 text-6xl"></i>
                <h2 class="text-3xl mb-5 font-bold">Weather</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates, aperiam.</p>
            </a>
            <a href="/user/profile" class="card bg-green-500 rounded p-10 w-1/4 flex flex-col justify-center items-center">
                <i class="fa fa-user m-4 h-1/3 text-6xl"></i>
                <h2 class="text-3xl mb-5 font-bold">Profile</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates, aperiam.</p>
            </a>
        </div>
        </div>
    </div>
</x-app-layout>
