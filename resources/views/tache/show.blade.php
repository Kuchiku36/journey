@auth
    
@foreach ($taches as $tache)
<ul>
    <li>
        <div>
            <h1>
                {{$tache->title}}
            </h1>
        </div>
        
        <div>
            <p>
                {{$tache->description}}
                <a href="{{route('tache.ajouter',$tache)}}">ajouter</a>
                <a href="{{route('tache.delete',$tache)}}">suprimer</a>
                <a href="{{route('tache.edit',$tache)}}">modifier</a>
                <a href="{{route('tache.update',$tache)}}">update {{$tache->state}}</a>
            </p>
        </div>
    </li>
</ul>
@endforeach
@endauth