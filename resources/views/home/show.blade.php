@extends('layout')

@section('content')
    <style>
        #background-home {
            background: url('/img/svg/product-lines.svg');
            width: 100%;
            height: 100vh;
            /*filter: blur(150%);*/ /* TODO*/
        }
    </style>

    <div class="bg-black h-full w-full text-white"><!--TODO: #040812 and background image-->
        <div id="background-home">
            <x-navigation/>
            <div class="grid h-screen place-items-center">
                <div class="text-center">
                    <p> 
                        <svg class="text-blue-400" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M15.78 15.84S18.64 13 19.61 12c3.07-3 1.54-9.18 1.54-9.18S15 1.29 12 4.36C9.66 6.64 8.14 8.22 8.14 8.22S4.3 7.42 2 9.72L14.25 22c2.3-2.33 1.53-6.16 1.53-6.16zm-1.5-9a2 2 0 0 1 2.83 0a2 2 0 1 1-2.83 0zM3 21a7.81 7.81 0 0 0 5-2l-3-3c-2 1-2 5-2 5z"/></svg>
                    </p>
                    <h1 class="font-extrabold text-transparent text-8xl bg-clip-text bg-gradient-to-r from-blue-400 to-green-400"> Sacha Durand</h1>
                    <h2 class="font-extrabold text-transparent text-4xl bg-clip-text bg-gradient-to-r from-blue-400 to-green-400">Développeur web Full-stack</h2>
                </div>
                <div> 

                </div>

            </div>
        </div>
    </div>

    <div class="bg-yellow-500 h-full w-full">
        <p> Project</p>
    </div>

    <div class="bg-red-500 h-full w-full">
        <p> Skill and award</p>
    </div>

    <div class="bg-blue-500 h-full w-full">
        <p> Blog</p>
    </div>

    <div class="bg-gray-700 h-1/3 w-full">
        <p> Footer</p>
    </div>



@endsection

@section('script')
    <script type="text/javascript">
    </script>
@endsection
