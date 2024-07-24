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
            <label class="form-label">Quantité</label>
            <input type="number" name="quantite" class="form-control" placeholder="Quantite" value="{{$materiel->quantite}}" readonly>
        </div>  
        <div class="col">
            <label class="form-label">Etat </label>
            <input type="text" name="etat" class="form-control" placeholder="Etat_matériel" value="{{$materiel->etat}}" readonly>
        </div>
        <div class="col">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" placeholder="Description_matériel" readonly>{{{$materiel->description}}}</textarea>
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