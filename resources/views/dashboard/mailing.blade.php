@extends('layout')
<div class="flex flex-row">
    <div class="w-1/6">
        <x-dashboard-navigation/>
    </div>
    <div class="p-8 bg-black w-5/6 text-gray-400">
        <div class="mb-12">
            <p>Gestion de mail  <span class="text-red-400"> > </span> </p>
        </div>

        <div class="" id="onglet">
            <div class="flex mb-2">
                <button class="bg-gray-800 text-white px-4 py-2 mx-1 border border-gray-700 rounded hover:bg-gray-700">Envoyer des emails</button>
                <button class="bg-gray-800 text-white px-4 py-2 mx-1 border border-gray-700 rounded hover:bg-gray-700">Mes listes</button>
                <button class="bg-gray-800 text-white px-4 py-2 mx-1 border border-gray-700 rounded hover:bg-gray-700">stats</button>
            </div>
            <div class="p-4 bg-gray-800 rounded-md">
                <!-- SENDING EMAIL SECTION -->
                <h2 class="text-lg"> Envoyer des emails </h2>

                <div>
                    <form action="{{ url('sendEmails') }}" method="post">
                        @csrf
                        <div class="form-group">
                           <input type="text" class="w-1/3 bg-gray-900 text-gray-100 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline border-4 border-indigo-600 m-4" 
                           id="recipients" name="recipients" placeholder="Entrer les adresses e-mail séparées par une virgule ou un espace">
                        </div>
                        <div class="form-group">
                           <input type="text" class="w-1/3 bg-gray-900 text-gray-100 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline border-4 border-indigo-600 m-4" 
                           id="subject" name="subject" placeholder="Objet">
                        </div>
                        <div class="form-group">
                           <textarea class="w-1/3 h-48 bg-gray-900 text-gray-100 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline border-4 border-indigo-600 m-4" 
                           id="message" name="message" rows="30" placeholder="Message"></textarea>
                        </div>
    
                        <div class="form-group">
                           <label for="mode">Mode d'envoi :</label>
                           <select class="form-control p-2 border-4 border-indigo-600 bg-gray-900 rounded-lg focus:outline-none focus:shadow-outline" id="mode" name="mode">
                              <!--<option value="perso">sacha6623@gmail.com</option>-->
                              <option class="mx-2" value="pro">sachadurand.fr</option>
                           </select>
                        </div>
                        <button type="submit"  id="submit" class="ml-4 p-4 border bg-black text-gray-200 visible rounded-lg mt-8 ">Envoyer</button>
                    </form>

                    @if (session('message'))
                        <div class="text-green-400 my-4">
                            {{ session('message') }}
                        </div>
                    @endif

                    <br/><br/><br/>
                    <ul>
                        <li class="text-red-400 text-sm">TODO: envoi sur une liste précise</li>
                    </ul>
                </div>

                 <br/><br/>
            </div>
            <div class="p-4 bg-gray-800 rounded-md">
                <!-- LIST SECTION -->
                <h2> Liste email </h2>

                <div class="my-4" id="listCreate">
                    <a class="align-right p-2 border-2 border-indigo-600" onClick="document.getElementById('addListForm').className += 'visible';"> Créer une liste</a>
                </div>
                <script>
                    
                </script>

                <div id="addListForm" class="invisible">
                    <form action="{{ route('lists.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                        
                                    <input type="text" name="name" class="border-2 border-indigo-600 m-2 bg-gray-900 text-gray-100 p-2" placeholder="Nom">
                                    @error('name')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
              
                                    <input type="text" name="description" class="border-2 border-indigo-600 m-2 bg-gray-900 text-gray-100 p-2" placeholder="Description">
                                    @error('description')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
               
                                    <input type="text" name="lang" class="border-2 border-indigo-600 m-2 bg-gray-900 text-gray-100 p-2" placeholder="Langue">
                                    @error('lang')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                        
                                    <input type="text" name="origin" class="border-2 border-indigo-600 m-2 bg-gray-900 text-gray-100 p-2" placeholder="origin">
                                    @error('origin')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <button type="submit" class="border-2 border-indigo-600 m-4 p-2">Créer</button>
                        </div>
                    </form>
                </div>

                <br/>

                <div class="w-full p-2 text-gray-400 py-4 my-2 grid grid-rows-1 grid-cols-5">
                    <div>Nom</div>
                    <div>Description</div>
                    <div>origine</div>
                    <div>langue</div>
                    <div>Action</div>
                </div>

                @foreach ($lists as $list)
                    <div class="w-full p-2 border-2 border-indigo-900 rounded-lg bg-gray-900 text-gray-400 py-4 my-2 grid grid-rows-1 grid-cols-5">
                        <div class="text-green-400">{{ $list->name}}</div>

                        <div class="">{{ $list->description}}</div>
                        <div class="">{{ $list->origin}}</div>
                        <div class="">Langue : {{ $list->lang}}</div>
                        <div class="hover:text-white"><a href="{{ route('lists.edit') }}">Editer</a></div>

                        <form action="{{ route('lists.edit',$list->id) }}" method="POST" enctype="multipart/form-data" class="">
                            @csrf
                            <!--@ method('PUT') -->
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                        
                                    <input type="text" name="name" class="border-2 border-indigo-600 m-2 bg-gray-900 text-gray-100 p-2" placeholder="{{$list->name}}">
                                    @error('name')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
              
                                    <input type="text" name="description" class="border-2 border-indigo-600 m-2 bg-gray-900 text-gray-100 p-2" placeholder="{{$list->description}}">
                                    @error('description')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
               
                                    <input type="text" name="lang" class="border-2 border-indigo-600 m-2 bg-gray-900 text-gray-100 p-2" placeholder="{{$list->lang}}">
                                    @error('lang')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
        
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                        
                                    <input type="text" name="origin" class="border-2 border-indigo-600 m-2 bg-gray-900 text-gray-100 p-2" placeholder="{{$list->origin}}">
                                    @error('origin')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <button type="submit" class="border-2 border-indigo-600 m-4 p-2">Mettre a jour</button>
                        </form>
                    </div>
                @endforeach

                

                <br/><br/><br/><br/>
                <ul>
                    <li class="text-red-400 text-sm">TODO: ajout de mail sur une liste</li>
                </ul>
            </div>
            <div class="p-4 bg-gray-800 rounded-md">
                <!-- STATS SECTION -->
                <h2> Statistiques </h2>

                <ul>
                    <li class="text-red-400 text-sm">TODO: nombre de liste</li>
                    <li class="text-red-400 text-sm">TODO: nombre d'email total par liste</li>
                    <li class="text-red-400 text-sm">TODO: taux d'ouverture</li>
                </ul>
            </div>
            
        </div>



    </div>
</div>


<script>
    const buttons = document.querySelectorAll("button:not([type='submit'])");
    const contents = document.querySelectorAll("#onglet .p-4:not([type='submit'])");

    console.log(buttons);
    console.log(contents);

    //console.log(buttons);

    buttons.forEach(function(button, index) {
    button.addEventListener("click", function() {
        buttons.forEach(function(button) {
        button.classList.remove("bg-gray-700");
        button.classList.add("bg-gray-800");
        });
        button.classList.remove("bg-gray-800");
        button.classList.add("bg-gray-700");
        
        contents.forEach(function(content) {
        content.style.display = "none";
        });
        contents[index].style.display = "block";
    });

    contents[1].style.display = "none";
    contents[2].style.display = "none";
    //contents[1].classList.add("invisible");
    //contents[2].classList.add("invisible");
    //document.getElementById('submit').style.display = "block";
    });
</script>
