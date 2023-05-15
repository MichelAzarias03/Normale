@extends('base')

@section('title', 'inscription')
@section('content')
    <div class="mt-5">
        <div class="text-end">
            <a class="btn btn-success mb-2" href="{{ route('participants.create') }}"><i class="fa fa-plus"></i> Ajouter un
                participant</a>
        </div>
        @if (!$participants->isEmpty())

            <table class="table table-bordered table-light table-hover">
                <thead>
                    <tr>
                        <th scope="col">Login</th>
                        <th scope="col">Status</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Sexe</th>
                        <th scope="col">Email</th>
                        <th scope="col">Tel</th>
                        <th scope="col">Age</th>
                        <th scope="col">Region</th>

                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($participants as $participant)
                        <tr>
                            <td>{{ $participant->login }}</td>
                            <td>
                                @if ($participant->status === 'e')
                                    <span class="badge bg-primary">
                                        électeur
                                    </span>
                                @else
                                    <span class="badge bg-info">
                                        candidat
                                    </span>
                                @endif
                            </td>
                            <td>{{ $participant->nom }}</td>
                            <td>
                                @if ($participant->sexe === 'm')
                                    <span class="badge bg-primary">
                                        Homme
                                    </span>
                                @else
                                    <span class="badge bg-info">
                                        Femme
                                    </span>
                                @endif
                            </td>
                            <td>{{ $participant->email }}</td>
                            <td>{{ $participant->tel }}</td>
                            <td>{{ $participant->age }}</td>
                            <td>{{ $participant->region->label }}</td>

                            <td>
                                <a href="{{ route('participants.edit', ['participant' => $participant]) }}"
                                    class="btn btn-secondary"><i class="fa fa-pencil me-2"></i></a>
                                <a href="{{ route('participants.destroy', ['participant' => $participant]) }}"
                                    class="btn btn-danger"><i class="fa fa-trash me-2"></i></a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>

@endsection
