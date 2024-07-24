@extends('layouts.app')

@section('title','Presentation du materiel')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Liste du Materiel</h1>
        <a href="{{route('materiel.create') }}"  class="btn btn-primary">Ajouter Materiel</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Code_Matériel</th>
                <th>Nom_Matériel</th>
                <th>Quantité disponible</th>
                <th>Etat</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if($materiel->count()>0)
                @foreach($materiel as $rs)
                    <tr>
                        <td class="align-middle">{{$loop->iteration}}</td>
                        <td class="align-middle">{{$rs->code}}</td>
                        <td class="align-middle">{{$rs->nom}}</td>
                        <td class="align-middle">{{$rs->quantite}}</td>
                        <td class="align-middle">{{$rs->etat}}</td>
                        <td class="align-middle">{{$rs->description}}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic-example">
                                <a href="{{route('materiel.show',$rs->id)}}" type="button" class="btn btn-secondary">Details</a>
                                <a href="{{route('materiel.edit',$rs->id)}}" type="button" class="btn btn-warning">Modifier</a>
                                <form action="{{route('materiel.destroy',$rs->id)}}" method="POST" type="button" class="btn btn-danger m-0">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Supprimer</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td class="text-center" colspan="5">Materiel non trouve</td>
                    </tr>
                @endif
        </tbody>

    </table>
@endsection