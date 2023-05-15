@extends('base')

@section('title', 'elections')
@section('content')
    <div class="mt-5">
        <div class="text-end">
            <a class="btn btn-success mb-2" href="{{ route('participants.create') }}"><i class="fa fa-plus"></i> Ajouter une
                election</a>
        </div>
        

            <table class="table table-bordered table-light table-hover">
                <thead>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Label</th>
                        <th scope="col">Description</th>
                        <th scope="col">status</th>
                        <th scope="col">created at</th>
                        <th scope="col">Updated at</th>

                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>

                        <td>
                            
                        </td>

                    </tr>

                </tbody>
            </table>
        
    </div>

@endsection
