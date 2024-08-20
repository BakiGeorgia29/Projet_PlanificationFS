@extends('layouts.app')

@section('title','Presentation des materiaux defecteux')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Liste des Materiaux Defecteux</h1>
    </div>
    <hr />
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Code_Matériel</th>
                <th>Nom_Matériel</th>
                <th>Quantité</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if($materieldef->count()>0)
                @foreach($materieldef as $rs)
                    <tr>
                        <td class="align-middle">{{$loop->iteration}}</td>
                        <td class="align-middle">{{$rs->code}}</td>
                        <td class="align-middle">{{$rs->nom}}</td>
                        <td class="align-middle">{{$rs->quantitemauvais}}</td>
                        <td class="align-middle">
                                <a href="{{route('materiel.show',$rs->id)}}" type="button" class="btn btn-secondary">Details</a>
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
