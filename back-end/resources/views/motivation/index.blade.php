@extends('base')

@section('title', 'inscription')
@section('content')
    <div class="mt-5">
        <div class="text-end">
            <a class="btn btn-success mb-2" href="{{ route('region.create') }}"><i class="fa fa-plus"></i> Ajouter une
                Motivation</a>
        </div>
        @if (!$motivations->isEmpty())

            <table class="table table-bordered table-light table-hover">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">libelle</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($motivations as $motivation)
                        <tr>
                            <td>{{ $motivation->id_mot }}</td>
                            <td>{{ $motivation->libelle }}</td>
                            <td>
                                <a href="{{ route('motivation.edit', ['motivation' => $motivation]) }}" class="btn btn-secondary"><i
                                        class="fa fa-pencil me-2"></i></a>
                                <a href="{{ route('motivation.destroy', ['motivation' => $motivation]) }}" class="btn btn-danger"><i
                                        class="fa fa-trash me-2"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>

@endsection
