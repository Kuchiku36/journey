@extends('layouts.taches')

@section('content')
edit
<form action="{{route('tache.modifier',$tache)}}" method="post">
    @csrf
    <div class='flex items-center justify-center bg-black p-10'>
        <div class="flex items-center max-w-md mx-auto bg-white rounded-lg " x-data="{ search: '' }">
            <div class="w-full">
                <input type="text" name="title" class="w-full px-4 py-1 text-gray-800 rounded-full focus:outline-none"
                    value="{{$tache->title}}" >
                <textarea name="description" id="" cols="30" rows="10">{{$tache->description}}</textarea>
            </div>
            <div>
                <button type="submit" class="flex items-center bg-blue-500 justify-center w-12 h-12 text-white rounded-r-lg">
                    modifier
                </button>
            </div>
        </div>
    </div>
</form>

@endsection
