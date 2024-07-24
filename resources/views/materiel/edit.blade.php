@extends('layouts.app')

@section('title','Modification du matériel')

@section('contents')

    <h1 class="mb-0">Modification d'un matériel</h1>
    <hr />
    <form action="{{route('materiel.update',$materiel->id) }}" method="POST" enctype="multipart/form-data" >
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Code du Matériel</label>
                <input type="text" name="code" class="form-control" placeholder="code_matériel" value="{{$materiel->code}}">
            </div>  
            <div class="col">
                <label class="form-label">Nom du Matériel</label>
                <input type="text" name="nom" class="form-control" placeholder="nom_matériel" value="{{$materiel->nom}}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Quantité</label>
                <input type="number" name="quantite" class="form-control" placeholder="quantité" value="{{$materiel->quantite}}">
            </div>  
            <div class="col">
                <label class="form-label">Etat </label>
                <input type="text" name="etat" class="form-control" placeholder="état_matériel" value="{{$materiel->etat}}">
            </div>
            <div class="col">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" placeholder="description_matériel" >{{{$materiel->description}}}</textarea>
            </div> 
        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" id="btn btn-primary">Mise à jour du materiel </button>
            </div>
        </div>
    </form>
@endsection