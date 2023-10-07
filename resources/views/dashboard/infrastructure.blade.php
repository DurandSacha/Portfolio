@extends('layout')
<div class="flex flex-row">
    <div class="w-1/6">
        <x-dashboard-navigation/>
    </div>
    <div class="p-8 bg-black w-5/6 text-gray-400">
        <div class="mb-12">
            <p>Infrastructure  <span class="text-red-400"> > </span> </p>
        </div>

        <div class="" id="onglet-infra">
            <div class="flex mb-2">
                <button class="bg-gray-800 text-white px-4 py-2 mx-1 border border-gray-700 rounded hover:bg-gray-700">Mes sites</button>
                <button class="bg-gray-800 text-white px-4 py-2 mx-1 border border-gray-700 rounded hover:bg-gray-700">Informations</button>
            </div>
            <div class="p-4 bg-gray-800 rounded-md">
                <br/>
                <h2 class="text-lg text-bold text-white"> Mes sites </h2>
                <br>
                <div>
                    <p>
                        <li> <a class="text-green-400" href="https://sachadurand.fr">https://sachadurand.fr</a> : Site portfolio, Back-end CRM</li>
                        <li> <a class="text-green-400" href="https://migrainesolution.fr">https://migrainesolution.fr</a> : Site d'autorité WP (Affiliation, produit digitaux, publicité)</li>
                    </p>
                    <br/><br/>
                </div>
            </div>
            <div class="p-4 bg-gray-800 rounded-md">
                <h2 class="text-xl text-bold text-white"> Informations </h2>

                <div>
                    <br/>
                    <h3 class="text-white text-bold"> Infrastructure Portfolio </h3>
                    <p> Le portfolio est développé avec laravel 8. L'instance de l'application est dockerisé, tandis que la base de donnée est du postgresSQL non dockerisé</p>
                    <br/>

                    <br/>
                    <h3 class="text-white text-bold"> Infrastructure WP </h3>
                    <p> L'infrastructure Wordpress est dockérisé, et managé via le docker-compose de la stack. Les DBs sont déployés sur du docker. Voici les plugins essentiels</p>
                        <li>YoastSEO</li>
                        <li>Shop page WP</li>
                        <li>Wp-Optimize et Updraft +</li>
                        <li>Latest Post Shortcode</li>
                        <li>Classic Editor</li>
                    <br/>
                    <p> Autre informations sur les WP</p>
                        <li>Thême SEO : Neve ( + template patterns collection )</li>
                        <li>Synchro avec mailerLite</li>
                    <br/>

                    <br/>
                    <h3 class="text-white text-bold"> Routage et réseaux</h3>
                    <p> Le trafic est dirigé en fonction du domaine, avec une instance docker traefik.</p>
                    <br/>

                    <br/><br/><br/><br/>
                </div>
          
            </div>
        </div>



    </div>
</div>


<script>
    const buttons = document.querySelectorAll("button:not([type='submit'])");
    const contents = document.querySelectorAll("#onglet-infra .p-4:not([type='submit'])");

    console.log(buttons);
    //console.log(contents);

    buttons.forEach(function(button, index) {
        button.addEventListener("click", function() {
            console.log(button);
            console.log(index);
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

        // change array key if tab change
        contents[1].style.display = "none";
        //contents[2].style.display = "none";
    });
</script>
