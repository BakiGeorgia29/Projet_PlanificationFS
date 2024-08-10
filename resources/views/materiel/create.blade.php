 @extends('layouts.app')

@section ('title','Enregistrement d un Materiel')

@section('contents')
<h1 class = "mb-0">Ajouter un Materiel</h1>
<hr/>
<form action="{{route ('materiel.store')}}" method="POST" enctype="multipart/form-data" >
    @csrf
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Code du Matériel</label>
            <input type="text" name="code" class="form-control" placeholder="Code_matériel">
         </div>  
        <div class="col">
            <label class="form-label">Nom du Matériel</label>
            <input type="text" name="nom" class="form-control" placeholder="Nom_matériel">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Quantité</label>
            <input type="number" name="quantite" class="form-control" placeholder="Quantité" >
        </div>  
        <div class="col">
            <label class="form-label">Etat </label>
            <input type="text" name="etat" class="form-control" placeholder="Etat_matériel">
        </div>
        <div class="col">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" placeholder="Déscription_matériel" ></textarea>
        </div> 
    </div>
    <div class="row">
        <div class="d-grid">
            <button type="submit" id="btn btn-primary">Ajouter matériel </button>
        </div>
    </div>
</form>
@endsection