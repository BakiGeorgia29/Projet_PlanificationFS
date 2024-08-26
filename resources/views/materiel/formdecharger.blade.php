@extends('layouts.app')

@section('Formulaire de decharge du materiel par un individu')
    <form>
        <div class="col">
            <label class="form-label">Role</label>
            <input type="text" name="role" class="form-control" placeholder="Role">
        </div>
        <div class="col">
            <label class="form-label">Nom de la personne effectuant le retrait</label>
            <input type="text" name="nom" class="form-control" placeholder="Nom">
        </div>
        <div class="col">
            <label class="form-label">Materiel a retire</label>
            <input type="text" name="materiel" class="form-control" placeholder="Materiel">
         </div>
        <div class="col">
            <label class="form-label">Quantite</label>
            <input type="number" name="quantitem" class="form-control" placeholder="Quantite Materiel">
        </div>
        <button value="ajoutm" type="button">Ajouter un materiel</button>
    </form>
@endsection
