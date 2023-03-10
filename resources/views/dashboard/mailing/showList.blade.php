@extends('layout')
<div class="flex flex-row">
    <div class="w-1/6">
        <x-dashboard-navigation/>
    </div>

    <div class="bg-black w-5/6">
        <div class="flex flex-row space-between">
            <div class="p-8 bg-gray-800 text-gray-400 rounded-md m-4 mt-20 ml-12 w-1/4">
                <h2 class="m-4 text-green-400">Liste Email : {{ $list->name }}</h2>
                <p class="m-4">{{ $list->description}}</p>

                <hr class="w-1/3 m-4 border-top border-blue-400">

                <p class="m-4">Origine : {{ $list->origin}}</p>
                <p class="m-4">Langue : {{ $list->lang}}</p>
                <p class="m-4"> Nombre d'abonnés : {{ $list->getEmailNumber() }}
                <p class="m-4"> Nombre de désinscrit : {{ $list->getEmailUnsubscribed() }}  <span class="text-blue-400 ml-2">  ({{ $list->getEmailUnsubscribed() / $list->getEmailNumber() * 100 }}%)</span>
            </div>
            <div class="p-8 bg-gray-800 text-gray-400 m-4 mt-20 ml-20 w-1/2 rounded-md">
                <h3 class="text-gray-200 font-bold m-4">Action</h3>
                <div class="flex justify-end items-end mt-60">
                  <a class="bg-green-400 p-2 text-white m-2 rounded-md hover:cursor-pointer">TODO: export</a>
                  <a class="bg-green-400 p-2 text-white m-2 rounded-md hover:cursor-pointer">TODO: Nettoyage</a>
                </div>
            </div>
        </div>
    </div>
</div>