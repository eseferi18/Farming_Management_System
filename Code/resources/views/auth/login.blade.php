<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <title>Login Page</title>
</head>
<body>
    <x-jet-validation-errors class="mb-4" />
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif
    <div class="fixed top-0 left-0 w-2/5 h-screen"  style="background-color: #1AEB61 ; z-index: 0"></div>
    <div class="w-full h-screen flex justify-center items-center  ">
        <div class="w-3/5 h-2/3 border-2 border-black rounded-sm shadow-2xl flex justify-center items-center" style="z-index: 2">
            <div class="w-2/5 flex-col text-center justify-center items-center">
                <i class="fa fa-leaf"></i>
                <h2 class="text-8xl">FMS</h2>
                <h2 class="text-2xl text-center pt-8">Best farm management system <br> web aplication</h2>
            </div>
            <div class="w-4/5 flex flex-col bg-gray-100 h-full border-l-2 border-black pt-10">
                <div class="flex justify-end">
                    @if (Route::has('register'))
                        <a class="text-sm flex justify-center text-white bg-green-500 w-1/4 h-full p-3  mr-8 rounded-sm hover:bg-green-900" href="{{ route('register') }}">
                            {{ __("Create account!") }}
                        </a>
                    @endif
            </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <h2 class="text-6xl text-center mb-8 mt-10">Login</h2>
                    <div class="mt-5 flex flex-col justify-center items-center">
                        <label for="email" value="{{ __('Email') }}">Email</label>
                        <input id="email" class="block mt-2 w-2/3" type="email" name="email" :value="old('email')" required autofocus />
                    </div>
                
                    <div class="mt-8 flex flex-col justify-center items-center">
                        <label for="password" value="{{ __('Password') }}" >Password</label>
                        <input id="password" class="w-2/3 mt-2" type="password" name="password" required autocomplete="current-password" />
                    </div>
                
                    <div class="flex flex-col justify-center items-center mt-8">
                        <label for="remember_me" class="flex items-center">
                            <x-jet-checkbox id="remember_me" name="remember" />
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                
                    <div class="flex items-center justify-center mt-8">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>
                
                    <div class="flex justify-center">
                        <x-jet-button class="text-3xl mt-8">
                            {{ __('Log in') }}
                        </x-jet-button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

