@extends('base')

@section('title', 'inscription')
@section('content')
    <div class="mt-5">
        <div class="text-end">
            <a class="btn btn-success mb-2" href="{{ route('region.create') }}"><i class="fa fa-plus"></i> Ajouter une
                région</a>
        </div>
        @if (!$regions->isEmpty())

            <table class="table table-bordered table-light table-hover">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($regions as $region)
                        <tr>
                            <td>{{ $region->id }}</td>
                            <td>{{ $region->label }}</td>
                            <td>
                                <a href="{{ route('region.edit', ['region' => $region]) }}" class="btn btn-secondary"><i
                                        class="fa fa-pencil me-2"></i></a>
                                <a href="{{ route('region.destroy', ['region' => $region]) }}" class="btn btn-danger"><i
                                        class="fa fa-trash me-2"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>

@endsection
