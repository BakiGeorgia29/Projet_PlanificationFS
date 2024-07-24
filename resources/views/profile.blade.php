@extends('layouts.app')

@section('title','Profil')

@section('contents')
    <h1 class = "mb-0">Profil</h1>
    <hr/>
    <form method="POST" enctype="multipart/form-data" id="profile_setup_frm" action="">
        <div class="row">
            <div class="col-md-12 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class=text-right>Paramétre du Profil</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label class="labels">Nom</label>
                            <input type="text" name="nom" class="form-control" placeholder="nom" value="{{auth()->user()->nom}}">
                        </div>                                              <br />
                        <div class="col-md-6">
                            <label class="labels">Matricule</label>
                            <input type="text" name="matricule" class="form-control" placeholder="matricule" value="{{auth()->user()->matricule}}">
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Email" value="{{auth()->user()->email}}">
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label class="labels">Téléphone</label>
                            <input type="text" name="phone" class="form-control"  placeholder ="Numero de Téléphone" value="{{auth()->user()->tel}}">
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Poste</label>
                            <input type="text" name="poste" class="form-control"  placeholder ="Poste" value="{{auth()->user()->poste}}">
                        </div>
                    </div>
                </div>
                <div class="mt-5 text-center"><button id="btn btn-primary profil-button" type="submit">Sauvegarde du Profil</button></div>
            </div>
        </div>
    </form>
@endsection