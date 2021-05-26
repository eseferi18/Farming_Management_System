<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FMS Landing Page</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/landing_page.css') }}"  type="text/css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <div class="fixed top-0 left-0 flex justify-center w-full">
        <nav class="w-5/6 flex justify-between text-white bg-black bg-opacity-30 mt-1">
           <div class="p-3 text-4xl"><i class="fa fa-leaf"></i> FMS</div>
            <div class="flex justify-around p-3 w-1/3 text-gray-400">
                <a href="#home" class="p-2">Home</a>
                <a href="#about" class="p-2 ">About us</a>
                <a href="#contact" class="p-2 mr-4 ">Contact Us</a>
                @if (Route::has('login'))
                <div class="mt-2 p-0">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm bg-green-500 p-3 pl-8 pr-8">Login</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm bg-green-500 mt-1 p-2 pl-8 pr-8 h-full hover:bg-green-700 ">Log in</a>
                    @endauth
                </div>
            @endif
            </div>
        </nav>
    </div>

    <!--HOME PAGE -->
    <div id="home"class="h-screen w-full flex flex-col justify-center items-center text-center">
        <h1 class="text-8xl text-white">Best Farming Management System<br>Web Application</h1>
        <a href="#about" class="m-8 p-3 bg-green-500 text-white rounded-md text-2xl hover:bg-green-700">Check us out!</a>
    </div>

    <!--DIVIDER -->
    <div class="divider divider-1"></div>

    <!--ABOUT PAGE -->
    <div id="about"class=" w-full flex flex-col justify-between items-center p-10">

        <!--WHAT WE OFFER -->
        <h2 class="text-8xl border-b border-black w-1/3 text-green-900 text-center mt-10 mb-10">What we offer</h2>
        <div class="container flex m-10">
            <div class="first-part h-19 flex flex-col justify-evenly">
                <div class="card">
                    <h2 class="text-4xl text-green-500">Farm Management</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat, nihil?</p>
                </div>
                <div class="card">
                    <h2 class="text-4xl text-green-500">Farm Economics</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat, nihil?</p>
                </div>
            </div>
            <div class="sec-part w-3/5">
                <img src="{{ asset('images/8400.jpg') }}" alt="Girl Analizing">
            </div>
            <div class="first-part h-19 flex flex-col justify-evenly">
                <div class="card">
                    <h2 class="text-4xl text-green-500">Farm Inventory</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat, nihil?</p>
                </div>
                <div class="card">
                    <h2 class="text-4xl text-green-500">Weather API</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat, nihil?</p>
                </div>
            </div>
        </div>

        <!--OUR STAFF -->
        <h2 class="text-8xl border-b border-black w-1/3 text-green-900 text-center mt-10 mb-10">Our Staff</h2>
        <div class="container flex justify-between m-10">
            <div class="cont flex flex-col w-1/4 justify-center items-center ">
            <div class="avatar rounded-full h-64 w-64 flex items-center justify-center border-4 border-green-500">
            </div>
            <h2 class="text-4xl text-green-500 mt-10 mb-5 border-b border-green-500">Endri Seferi</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium atque laboriosam reiciendis nam tempore et molestias ipsam quam maxime ex! Eius neque aspernatur cupiditate exercitationem fuga hic excepturi omnis ipsam.</p>
        </div>
        <div class="cont flex flex-col w-1/4 justify-center items-center">
            <div class="avatar-k rounded-full h-64 w-64 flex items-center justify-center border-4 border-green-500">
            </div>
            <h2 class="text-4xl text-green-500 mt-10 mb-5 border-b border-green-500">Kejdi Domi</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium atque laboriosam reiciendis nam tempore et molestias ipsam quam maxime ex! Eius neque aspernatur cupiditate exercitationem fuga hic excepturi omnis ipsam.</p>
        </div>
        <div class="cont flex flex-col w-1/4 justify-center items-center ">
            <div class="avatar-a rounded-full h-64 w-64 flex items-center justify-center border-4 border-green-500">
            </div>
            <h2 class="text-4xl text-green-500 mt-10 mb-5 border-b border-green-500">Anila Hoxha</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium atque laboriosam reiciendis nam tempore et molestias ipsam quam maxime ex! Eius neque aspernatur cupiditate exercitationem fuga hic excepturi omnis ipsam.</p>
        </div>
        </div>
        <div class="container flex justify-between m-10">
            <div class="cont flex flex-col w-1/4 justify-center items-center ">
            <div class="avatar-s rounded-full h-64 w-64 flex items-center justify-center border-4 border-green-500">
            </div>
            <h2 class="text-4xl text-green-500 mt-10 mb-5 border-b border-green-500">Arber Sadushi</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium atque laboriosam reiciendis nam tempore et molestias ipsam quam maxime ex! Eius neque aspernatur cupiditate exercitationem fuga hic excepturi omnis ipsam.</p>
        </div>
        <div class="cont flex flex-col w-1/4 justify-center items-center">
            <div class="avatar-t rounded-full h-64 w-64 flex items-center justify-center border-4 border-green-500">
            </div>
            <h2 class="text-4xl text-green-500 mt-10 mb-5 border-b border-green-500">Alesia Toli</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium atque laboriosam reiciendis nam tempore et molestias ipsam quam maxime ex! Eius neque aspernatur cupiditate exercitationem fuga hic excepturi omnis ipsam.</p>
        </div>
        <div class="cont flex flex-col w-1/4 justify-center items-center ">
            <div class="avatar-b rounded-full h-64 w-64 flex items-center justify-center border-4 border-green-500">
            </div>
            <h2 class="text-4xl text-green-500 mt-10 mb-5 border-b border-green-500">Batjona Tahiraj</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium atque laboriosam reiciendis nam tempore et molestias ipsam quam maxime ex! Eius neque aspernatur cupiditate exercitationem fuga hic excepturi omnis ipsam.</p>
        </div>
        </div>
    </div>

    <!--DIVIDER -->
    <div class="divider divider-2"></div>

    <!--CONTACT PAGE -->
    <div id="contact"class="w-full flex flex-col justify-center items-center text-white">
       <h2 class="text-5xl m-10">GET IN TOUCH WITH US!</h2>
       <div class="container flex justify-around mt-10 mb-10">
           <div class="firs-cont h-64 flex flex-col justify-between">
               <h2>Phone:</h2>
               <h2>Mail:</h2>
               <h2>Location:</h2>
           </div>
           
           <div class="sec-cont">
            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2992.5738603422883!2d19.7036473154263!3d41.40505997926255!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1618847070196!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
           </div>
       </div>
    </div>
            </div>
        </div>
    </body>
</html>
