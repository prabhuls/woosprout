<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="lemonade">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WooSprout</title>
    
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/woosprout-leaf.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/woosprout-leaf.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/woosprout-leaf.png') }}">
    <link rel="manifest" href="{{ asset('img/woosprout-leaf.png') }}">
    <link rel="mask-icon" href="{{ asset('img/woosprout-leaf.png') }}" color="#5bbad5">
    <link rel="shortcut icon" href="{{ asset('img/woosprout-leaf.png') }}">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="{{ asset('img/woosprout-leaf.png') }}">
    <meta name="theme-color" content="#ffffff">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body class="bg-gradient-to-b from-stone-100 min-h-screen antialiased">
    <div class="container mx-auto">
        <div class="navbar">
            <div class="navbar-start">
              <div class="dropdown">
                <label tabindex="0" class="btn btn-ghost lg:hidden">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
                </label>
                <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a href="{{ url("/login") }}">Login</a></li>
                </ul>
              </div>
              <a href="/" class="normal-case text-xl px-4"><img src="{{ asset("img/woosprout-logo.png") }}" alt="WooSprout" class="w-40"></a>
            </div>
            <div class="navbar-end ">
                <div class="hidden lg:flex">
                <ul class="menu menu-horizontal px-1">
                    <li><a href="{{ url("/login") }}">Login</a></li>
                </ul>
                </div>
                
                <a class="btn btn-primary text-white" href="{{ url("/signup") }}">Sign up</a>
            </div>
        </div>

        <div class="my-4 lg:my-24 flex flex-col justify-center text-center p-4" style="min-height:80vh">
            <img src="{{ asset("img/home-hero-t.png") }}" width="128" height="137" alt="" class=" w-28 lg:w-32 mx-auto m-2">
            <h1 class="md:text-4xl max-w-3xl my-2 mx-auto capitalize">Ignite your marketing journey with powerful solutions tailored for SMBs</h1>
            <div class="max-w-3xl my-2 mx-auto text-xl">Supercharge your marketing efforts. Drive conversions, engage customers, and achieve remarkable growth without compromising your budget.</div>
            <a href="{{ url("/signup") }}" class="btn btn-primary w-72 mt-4 mx-auto my-2">Try WooSprout free for 14 days</a>
            <div class="mx-auto mb-2 text-sm">No credit card required. Cancel anytime.</div>
            <div class="mx-auto my-2 text-sm text-primary">You need an invite code to create an account.</div>
        </div>

        </div>
      

        </div>
        <div class=" p-4 lg:p-8 bg-stone-50">
            <footer class="footer items-center container mx-auto">
                <div class=" justify-center grid-flow-col w-full text-center md:text-left">
                  <a href="/" alt="WooSprout"><img src="{{ asset("img/woosprout-leaf.png") }}" alt="" class="w-8"></a>
                  
                  <p>Copyright © 2023 - WooSprout. All right reserved</p>
                </div> 
                {{-- <div class="grid-flow-col gap-4 place-self-center md:justify-self-end">
                  <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg>
                  </a> 
                  <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path></svg></a>
                  <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path></svg></a>
                </div> --}}
            </footer>
        </div>
    
</body>
</html>