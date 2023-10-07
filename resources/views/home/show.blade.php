@extends('layout')

@section('content')

    <div class="bg-black h-full w-full text-white navSection"><!--TODO: #040812 and background image-->
        <div id="background-home">
            <x-navigation/>
            <div class="grid lg:h-screen place-items-center">
                <div class="text-center">
                    <br/><br/><br/><br/><br/><br/>
                    <div class="w-full grid grid-rows-8 grid-flow-col gap-4">
                        <div></div>
                        <div class="hidden lg:block"> 
                            <svg class="text-blue-400" width="48" height="48" viewBox="0 0 24 24"><path fill="currentColor" d="M15.78 15.84S18.64 13 19.61 12c3.07-3 1.54-9.18 1.54-9.18S15 1.29 12 4.36C9.66 6.64 8.14 8.22 8.14 8.22S4.3 7.42 2 9.72L14.25 22c2.3-2.33 1.53-6.16 1.53-6.16zm-1.5-9a2 2 0 0 1 2.83 0a2 2 0 1 1-2.83 0zM3 21a7.81 7.81 0 0 0 5-2l-3-3c-2 1-2 5-2 5z"/></svg>
                        </div>
                        <div></div>
                    </div>
                    <h1 class="font-extrabold text-transparent text-8xl bg-clip-text bg-gradient-to-r from-blue-400 to-green-400"> Sacha Durand</h1>
                    <h2 class="font-extrabold text-transparent text-4xl bg-clip-text bg-gradient-to-r from-blue-400 to-green-400">Développeur web Full-stack</h2>
                </div>
                <div> 

                </div>

                <div id="bottom-home" class="w-full grid grid-rows-8 grid-flow-col gap-4">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div id="socials-icons" class="flex flex-row hidden lg:flex">
                        <div class="px-2 hover:text-blue-300">
                            <a href="https://github.com/DurandSacha" target="blank">
                                <svg width="28" height="28" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2A10 10 0 0 0 2 12c0 4.42 2.87 8.17 6.84 9.5c.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34c-.46-1.16-1.11-1.47-1.11-1.47c-.91-.62.07-.6.07-.6c1 .07 1.53 1.03 1.53 1.03c.87 1.52 2.34 1.07 2.91.83c.09-.65.35-1.09.63-1.34c-2.22-.25-4.55-1.11-4.55-4.92c0-1.11.38-2 1.03-2.71c-.1-.25-.45-1.29.1-2.64c0 0 .84-.27 2.75 1.02c.79-.22 1.65-.33 2.5-.33c.85 0 1.71.11 2.5.33c1.91-1.29 2.75-1.02 2.75-1.02c.55 1.35.2 2.39.1 2.64c.65.71 1.03 1.6 1.03 2.71c0 3.82-2.34 4.66-4.57 4.91c.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0 0 12 2Z"/></svg>
                            </a>
                            </div>
                        <div class="px-2 hover:text-blue-300">
                            <a href="https://www.linkedin.com/in/m-durand-sacha/" target="blank">
                                <svg width="28" height="28" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M1 2.838A1.838 1.838 0 0 1 2.838 1H21.16A1.837 1.837 0 0 1 23 2.838V21.16A1.838 1.838 0 0 1 21.161 23H2.838A1.838 1.838 0 0 1 1 21.161V2.838Zm8.708 6.55h2.979v1.496c.43-.86 1.53-1.634 3.183-1.634c3.169 0 3.92 1.713 3.92 4.856v5.822h-3.207v-5.106c0-1.79-.43-2.8-1.522-2.8c-1.515 0-2.145 1.089-2.145 2.8v5.106H9.708V9.388Zm-5.5 10.403h3.208V9.25H4.208v10.54ZM7.875 5.812a2.063 2.063 0 1 1-4.125 0a2.063 2.063 0 0 1 4.125 0Z" clip-rule="evenodd"/></svg>
                            </a>
                            </div>
                        <div class="px-2 hover:text-blue-300"> 
                            <a href="https://connect.symfony.com/profile/sacha_durand" target="blank">
                                <svg width="28" height="28" viewBox="0 0 32 32"><path fill="currentColor" d="M16 3C8.832 3 3 8.832 3 16s5.832 13 13 13s13-5.832 13-13S23.168 3 16 3zm0 2c6.065 0 11 4.935 11 11s-4.935 11-11 11S5 22.065 5 16S9.935 5 16 5zm4.271 5.076c-.073.002-2.513-.134-3.945 4.065c-.388-.32-2.226-2.51-4.26-.995c-.73.546-1.212 1.848-.115 3.07c.653.7 1.03.977.858 1.536c-.353 1.148-2.141.622-1.965.053c.052-.17.135-.173.242-.504c.298-.976-1.045-1.454-1.334-.524c-.166.542.091 1.522 1.478 1.95c1.624.499 2.999-.387 3.194-1.54c.124-.722-.203-1.258-.801-1.949l-.486-.539c-.295-.297-.397-.798-.092-1.183c.257-.326.624-.464 1.225-.301c.877.238 1.267.847 1.92 1.338c-.048.154-.386 1.245-.702 3.158c-.466 2.446-.823 3.789-1.748 4.559c-.186.135-.452.333-.853.347c-.075.003-.544-.108-.078-.482c.587-.321.268-1.34-.575-1.31c-.38.011-.957.368-.935 1.023c.022.676.651 1.183 1.601 1.15c.508-.017 1.641-.223 2.758-1.55c1.535-1.8 1.827-3.938 2.242-6.231c1.991.236 2.977-.687 2.99-1.375c.022-.936-1.08-.903-1.234-.203c-.074.34.519.646.057.945c-.327.212-.914.361-1.74.24c.397-2.19.736-4.336 2.27-4.386c.104-.007.486.005.495.257c.005.208-.262.373-.252.727c.015.402.32.664.762.648c.591-.02.76-.594.75-.89c-.025-.696-.758-1.135-1.727-1.104z"/></svg>
                            </a>
                            </div>
                        <div class="px-2 hover:text-blue-300">
                            <a href="https://stackoverflow.com/users/16256154/sacha-durand" target="blank">
                                <svg width="28" height="28" viewBox="0 0 384 512"><path fill="currentColor" d="M290.7 311L95 269.7L86.8 309l195.7 41zm51-87L188.2 95.7l-25.5 30.8l153.5 128.3zm-31.2 39.7L129.2 179l-16.7 36.5L293.7 300zM262 32l-32 24l119.3 160.3l32-24zm20.5 328h-200v39.7h200zm39.7 80H42.7V320h-40v160h359.5V320h-40z"/></svg>
                            </a>
                        </div>
                        <div class="px-2 hover:text-blue-300">
                            <a href="mailto:sacha6623@gmail.com" target="blank">
                                <svg width="28" height="28" viewBox="0 0 24 24"><path fill="currentColor" d="M12 22q-2.05 0-3.875-.788q-1.825-.787-3.187-2.15q-1.363-1.362-2.15-3.187Q2 14.05 2 12q0-2.075.788-3.887q.787-1.813 2.15-3.175Q6.3 3.575 8.125 2.787Q9.95 2 12 2q2.075 0 3.887.787q1.813.788 3.175 2.151q1.363 1.362 2.15 3.175Q22 9.925 22 12v1.45q0 1.475-1.012 2.512Q19.975 17 18.5 17q-.9 0-1.675-.4t-1.275-1.05q-.675.675-1.587 1.063Q13.05 17 12 17q-2.075 0-3.537-1.463Q7 14.075 7 12t1.463-3.538Q9.925 7 12 7t3.538 1.462Q17 9.925 17 12v1.45q0 .725.45 1.137q.45.413 1.05.413q.6 0 1.05-.413q.45-.412.45-1.137V12q0-3.275-2.363-5.638Q15.275 4 12 4Q8.725 4 6.362 6.362Q4 8.725 4 12t2.362 5.637Q8.725 20 12 20h5v2Zm0-7q1.25 0 2.125-.875T15 12q0-1.25-.875-2.125T12 9q-1.25 0-2.125.875T9 12q0 1.25.875 2.125T12 15Z"/></svg>
                            </a>
                        </div>

                    </div>
                    <div></div>
                  </div>
                
            </div>
            
        </div>
    </div>

    <div class="sm:bg-black h-full w-full navSection" id="project">
        <div class="bg-gradient-to-br from-green-400 to-yellow-400 p-20 bg-gray-100 flex items-center">
            <div class="flex flex-row flex-wrap justify-around gap-4">
                <x-card-project title="Arthurimmo.com" description="Site national pour la franchise immobilière Arthurimmo.com, Sites agences et gestion en multi-site" picture="arthurimmo"/>
                <x-card-project title="Wikirun.io" description="Jeu de course sur les liens wikipedia dans un environnement adapté ( gestion d'infrastructure de jeu, back-end)" picture="wikirun"/>
                <x-card-project title="lesiteimmo.com" description="Site d'annonces immobilière, et gestion d'import/export d'annonce immobilière" picture="lesiteimmo"/>
                <x-card-project title="tic-tac-toe.io" description="Developpement d'un jeu de tictactoe, et projet de machine learning" picture="tic-tac-toe"/>
                <x-card-project title="takeQAIR project" description="Developpement d'une API dans le domaine de la santé. Construction d'un package pour le format metier HL7 et HPRIM" picture="takeqair2"/>
                <x-card-project title="Armada 2023" description="Projet R&D sur la conception de l'application Armada 2023" picture="armada"/>
            </div>
        </div>
    
    </div>



    <!--
    <div class="lg:bg-yellow-500  md:bg-orange-500 sm:bg-black h-full w-full navSection" id="project">
        <div class="">
            <div class="grid grid-cols-4 grid-rows-4 gap-1 p-8 pt-24">
                <div class="box col-span-2 w-80 h-96 bg-red-500 min-w-full min-h-full bg-portfolio" id="background-arthurimmo">Arthurimmo</div>
                <div class="box col-span-1 w-80 h-96 bg-red-500 min-w-full min-h-full bg-portfolio" id="background-wikirun">Wikirun</div>
                <div class="box col-span-1 w-80 h-96 bg-red-500 min-w-full min-h-full bg-portfolio" id="background-tic-tac-toe">IA Tic Tac Toe</div>
                <div class="box col-span-1 w-80 h-96 bg-red-500 min-w-full min-h-full bg-portfolio" id="background-takeqair">TakeQAIR</div>
                <div class="box col-span-1 w-80 h-96 bg-red-500 min-w-full min-h-full bg-portfolio" id="background-lesiteimmo">Lesiteimmo.com</div>
                <div class="box col-span-1 w-80 h-96 bg-red-500 min-w-full min-h-full bg-portfolio" id="background-qa">R&D QA</div>
                <div class="box col-span-1 w-80 h-96 bg-red-500 min-w-full min-h-full bg-portfolio" id="background-armada">Armada 2023 R&D</div>
            </div>
            
        </div>
    </div>
    -->

    <!--
    <div class="bg-black text-white lg:h-1/2 w-full" id="skill">
        <div class="pt-16">
            <div><h2 class="text-center text-3xl font-bold"> Compétences et skills</h2></div>
        </div>
    </div>
    -->

    <!--
    <div class="bg-black text-white lg:h-1/2 w-full" id="blog">
        <div class="pt-16">
            <div><h2 class="text-center text-3xl font-bold"> Blog</h2></div>
        </div>
    </div>
    -->

    <div class="bg-black text-white w-full navSection" id="contact">
        <div class="pt-20">
            <!--<div><h2 class="text-center text-3xl font-bold"> Contact</h2></div>-->
            <div class="flex flex-row pb-40 justify-center items-center">
                <div class="lg:w-1/2" >
                        <div class="container mx-auto pb-4 px-4 lg:px-20">
                        <form method="POST" action="{{ action('ContactController@send') }}">  <!--  -->
                            <div class="w-full">
                                <div class="flex">
                                    <h1 class="font-bold uppercase text-5xl">Contact</h1>
                                </div>
                                <div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-5">
                                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                    <input class="w-full bg-gray-900 text-gray-100 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline border-4 border-indigo-500"
                                        type="text" placeholder="Nom*" name="name" />
                                    <input class="w-full bg-gray-900 text-gray-100 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline border-4 border-indigo-600"
                                        type="email" placeholder="Email*" name="email" />
                            </div>
                            <div class="my-4">
                                <textarea placeholder="Message*" name="content"
                                class="w-full h-32 bg-gray-900 text-gray-100 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline border-4 border-indigo-600"></textarea>
                            </div>
                            <div class="my-2 w-1/2 lg:w-1/4">
                                <button class="uppercase text-sm font-bold tracking-wide text-gray-100 p-3 rounded-lg w-full 
                                    focus:outline-none focus:shadow-outline border-4 border-indigo-600">
                                    Envoyer
                                </button>
                            </div>

                            @if (\Session::has('message'))
                                <div class="alert alert-success">
                                    <ul>
                                        <li>{!! \Session::get('message') !!}</li>
                                    </ul>
                                </div>
                            @endif
                        </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>       
    
    <div class="bg-blue-400 text-white w-full navSection" id="copyright">
        <p class="text-center pt-1 pb-1">Sacha Durand @2023</p>
    </div>
    
    <!--
    <div class="bg-yellow-500 lg:h-1/3 w-full">
        <div class="pt-16">
            <div><h2 class="text-center text-3xl font-bold"> Footer</h2></div>
            <div class="p-4">
                <div class="flex flex justify-around">
                    <div class="">
                        <ul>
                            <li>Hello World</li>
                            <li>Hello World</li>
                            <li>Hello World</li>
                            <li>Hello World</li>
                        </ul>
                    </div>
                    <div class="">
                        <ul>
                            <li>Hello World</li>
                            <li>Hello World</li>
                            <li>Hello World</li>
                            <li>Hello World</li>
                        </ul>
                    </div>
                    <div class="">
                        <ul>
                            <li>Hello World</li>
                            <li>Hello World</li>
                            <li>Hello World</li>
                            <li>Hello World</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    -->

    <style>
        #project{
            height: 100vh;
        }
        .bg-portfolio{
            /*
            height: 50% !important;
            border: 2px solid green;
            */
        }
        #background-home {
            background: url('/img/svg/product-lines.svg');
            width: 100%;
            height: 100vh;
            filter: brightness(165%);
        }
        #background-arthurimmo{
            background: url('/img/projects/arthurimmo.jpg');
            width: 100%;
            height: 100%;
        }
        #background-wikirun{
            background: url('/img/projects/wikirun.jpg');
            width: 100%;
            height: 100%;
        }
        #background-tic-tac-toe{
            background: url('/img/projects/tic-tac-toe.jpg');
            width: 100%;
            height: 100%;
        }
        #background-takeqair{
            background: url('/img/projects/takeqair.jpg');
            width: 100%;
            height: 100%;
        }
        #background-lesiteimmo{
            background: url('/img/projects/lesiteimmo.jpg');
            width: 100%;
            height: 100%;
        }
        #background-qa{
            background: url('/img/projects/qa.jpg');
            width: 100%;
            height: 100%;
        }
        #background-armada{
            background: url('/img/projects/armada.jpg');
            width: 100%;
            /*height: 100%;*/
        }

        @media only screen and (max-width: 767px) {
        /* Styles spécifiques aux appareils mobiles vont ici */
        #project {
            height: auto;
        }
        }
    </style>


@endsection

@section('script')
    <script type="text/javascript">
    </script>
@endsection
