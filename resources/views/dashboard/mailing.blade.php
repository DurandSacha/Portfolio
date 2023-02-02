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
                           <select class="form-control p-2 border-4 border-indigo-600 bg-gray-900 rounded-lg focus:outline-none focus:shadow-outline px-4" id="mode" name="mode">
                              <option value="perso">sacha6623@gmail.com</option>
                              <option value="pro">sachadurand.fr</option>
                           </select>
                        </div>
                        <button type="submit"  id="submit" class="ml-4 p-4 border bg-black text-gray-200 visible rounded-lg mt-8 ">Envoyer</button>
                    </form>

                    @if (session('message'))
                        <div class="text-green-400 my-4">
                            {{ session('message') }}
                        </div>
                    @endif

                    <ul>
                        <li class="text-red-400 text-sm">TODO: envoi sur une liste précise</li>
                        <li class="text-red-400 text-sm">TODO: Option d'envoi ( Envoi doux, directe... )</li>
                    </ul>
                </div>

                 <!-- TODO: envoi sur une liste précise -->
                 <!-- TODO: option envoi sur email de plus d'un mois -->

                 <br/><br/>
            </div>
            <div class="p-4 bg-gray-800 rounded-md">
                <!-- LIST SECTION -->
                <h2> Liste email </h2>

                <ul>
                    <li class="text-red-400 text-sm">TODO: ajout de liste</li>
                    <li class="text-red-400 text-sm">TODO: ajout de mail sur une liste</li>
                    <li class="text-red-400 text-sm">TODO: blacklist d'envoi ( désinscription )</li>
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
