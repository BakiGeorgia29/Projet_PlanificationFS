@extends ('layouts.app')

@section('title','Materiel')

@section('contents')

    <h1 class="mb-0">Detail du materiel</h1>
    <hr />
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Code du Matériel</label>
            <input type="text" name="code" class="form-control" placeholder="code_matériel" value="{{$materiel->code}}"readonly>
        </div>
        <div class="col">
            <label class="form-label">Nom du Matériel</label>
            <input type="text" name="nom" class="form-control" placeholder="nom_matériel" value="{{$materiel->nom}}" readonly>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Quantité du matériel en bon état</label>
            <input type="text" name="quantitebon" class="form-control" placeholder="Quantité du matériel en bon état" value="{{$materiel->quantitebon}}">
        </div>
        <div class="col">
            <label class="form-label">Quantité du matériel en mauvais état</label>
            <input type="text" name="quantitemauvais" class="form-control" placeholder="Quantité du matériel en mauvais état" value="{{$materiel->quantitemauvais}}">
        </div>
        <div class="col">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" placeholder="Description_matériel" readonly>{{$materiel->description}}</textarea>
        </div>
        <div class="col">
            <label class="form-label">Probleme des materiaux defecteux</label>
            <textarea name="descriptiondef" class="form-control" placeholder="Description_Probleme" readonly>{{ $materiel->descriptiondef }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Créer le </label>
            <input type="text" name="created_at" class="form-control" placeholder="Créer à" value="{{$materiel->created_at}}" readonly>
        </div>
        <div class="col  mb-sm-3">
            <label class="form-label">Mise à jour le</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Mise à jour à" value="{{$materiel->updated_at}}" readonly>
        </div>
    </div>
@endsection
