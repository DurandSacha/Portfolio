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
                <h2> Envoyer des emails </h2>
            </div>
            <div class="p-4 bg-gray-800 rounded-md">
                <!-- LIST SECTION -->
                <h2> Liste email </h2>
            </div>
            <div class="p-4 bg-gray-800 rounded-md">
                <!-- STATS SECTION -->
                <h2> Statistiques </h2>
            </div>
        </div>



    </div>
</div>


<script>
    const buttons = document.querySelectorAll("#onglet button");
    const contents = document.querySelectorAll("#onglet .p-4");

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
    });
</script>
