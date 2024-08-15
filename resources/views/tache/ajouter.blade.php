@extends('layouts.taches')
@section('content')
    
ajouter
<form action="{{route('tache.store')}}" method="post">
    @csrf
    <div class='flex items-center justify-center bg-black p-10'>
        <div class="flex items-center max-w-md mx-auto bg-white rounded-lg " x-data="{ search: '' }">
            <div class="w-full">
                
                <input type="text" name="title" class="w-full px-4 py-1 text-gray-800 rounded-full focus:outline-none"
                    placeholder="Ajouter une tache" >

                <input type="text" name="description" class="w-full px-4 py-1 text-gray-800 rounded-full focus:outline-none"
                    placeholder="Ajouter une description" >
            </div>
            <div>
                <button type="submit" class="flex items-center bg-blue-500 justify-center px-3 py-2 text-white rounded-r-lg">
                   ajouter
                </button>
            </div>
        </div>
    </div>
</form>
@endsection
