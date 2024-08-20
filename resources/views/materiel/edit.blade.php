@extends('layouts.app')

@section('title','Modification du matériel')

@section('contents')

    <h1 class="mb-0">Modification du matériel</h1>
    <hr />
    <form action="{{route('materiel.update',$materiel->id) }}" method="POST" enctype="multipart/form-data" >
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Code du Matériel</label>
                <input type="text" name="code" class="form-control" placeholder="Code_matériel" value="{{$materiel->code}}">
            </div>
            <div class="col">
                <label class="form-label">Nom du Matériel</label>
                <input type="text" name="nom" class="form-control" placeholder="Nom_matériel" value="{{$materiel->nom}}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Quantité du matériel en bon état</label>
                <input type="number" name="quantitebon" class="form-control" placeholder="Quantité du matériel en bon état" value="{{$materiel->quantitebon}}">
            </div>
            <div class="col">
                <label class="form-label">Quantité du matériel en mauvais état</label>
                <input type="number" name="quantitemauvais" class="form-control" placeholder="Quantité du matériel en mauvais état" value="{{$materiel->quantitemauvais}}">
            </div>
            <div class="col">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" placeholder="Description_matériel" >{{{$materiel->description}}}</textarea>
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" id="btn btn-primary">Mise à jour du materiel </button>
            </div>
        </div>
    </form>
@endsection
