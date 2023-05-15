@extends('base')

@section('title', 'Edition')
@section('content')
    <div class=" my-5 row">
        <div class="col-0 col-lg-3"></div>
        <div class="col-12 col-lg-6 border p-3 shadow rounded">
            <form action="{{ route('participants.update', ['participant' => $participant]) }}" method="post">
                <h4>Editer le participant</h4>
                @include('participant.creation_form')
            </form>
        </div>
        <div class="col-0 col-lg-3"></div>
    </div>

@endsection
