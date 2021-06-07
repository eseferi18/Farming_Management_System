<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<x-app-layout>
    <div class="w-5/6 mx-auto mt-4 mb-4 text-center pt-2 pb-2 bg-gray-100 border border-green-500 rounded-xl shadow-lg">
        <h2 class="font-bold text-3xl text-gray-800">
            <i class="fa fa-home"></i>
            {{ __('Farming Managment System') }}
        </h2>
    </div>
    
    <div class="w-5/6 mx-auto mt-4  shadow-lg">
        <div class="container w-full flex flex-col justify-evenly p-16 bg-gray-100 rounded-xl border border-green-400">
            <div class="w-full flex justify-between ">
            <a href="/crops" class="card bg-green-500 rounded p-10 w-1/4 flex flex-col justify-center items-center">
                <i class="fa fa-pagelines m-2 h-1/3 text-5xl"></i>
                <h2 class="text-3xl mb-2 font-bold">Crops</h2>
                <p class="text-xs text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates, aperiam.</p>
            </a>
            <a href="/livestock" class="card bg-green-500 rounded p-10 w-1/4 flex flex-col justify-center items-center">
                <i class="fa fa-paw m-2 h-1/3 text-5xl"></i>
                <h2 class="text-3xl mb-2 font-bold">Livestock</h2>
                <p class="text-xs text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates, aperiam.</p>
            </a>
            <a href="/inventory" class="card bg-green-500 rounded p-10 w-1/4 flex flex-col justify-center items-center">
                <i class="fa fa-archive m-2 h-1/3 text-5xl"></i>
                <h2 class="text-3xl mb-2 font-bold">Inventory</h2>
                <p class="text-xs text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates, aperiam.</p>
            </a>
        </div>
        <div class="w-full flex justify-between mt-16">
            <a href="/market" class="card bg-green-500 rounded p-10 w-1/4 flex flex-col justify-center items-center">
                <i class="fa fa-shopping-cart m-2 h-1/3 text-5xl"></i>
                <h2 class="text-3xl mb-2 font-bold">Market</h2>
                <p class="text-xs text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates, aperiam.</p>
            </a>
            <a href="/weather_api" class="card bg-green-500 rounded p-10 w-1/4 flex flex-col justify-center items-center">
                <i class="fa fa-sun m-2 h-1/3 text-5xl"></i>
                <h2 class="text-3xl mb-2 font-bold">Weather</h2>
                <p class="text-xs text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates, aperiam.</p>
            </a>
            <a href="/user/profile" class="card bg-green-500 rounded p-10 w-1/4 flex flex-col justify-center items-center">
                <i class="fa fa-user m-2 h-1/3 text-5xl"></i>
                <h2 class="text-3xl mb-2 font-bold">Profile</h2>
                <p class="text-xs text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates, aperiam.</p>
            </a>
        </div>
        </div>
    </div>
</x-app-layout>
