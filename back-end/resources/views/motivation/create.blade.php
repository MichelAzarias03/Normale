@extends('base')

@section('title', 'inscription')
@section('content')
    <div class=" my-5 row">
        <div class="col-0 col-lg-3"></div>
        <div class="col-12 col-lg-6 border p-3 shadow rounded">
            <h4>Créer une nouvelle Motivation</h4>
            <form action="{{ route('region.store') }}" method="post">
                @include('motivation.creation_form')
            </form>
        </div>
        <div class="col-0 col-lg-3"></div>

    </div>

@endsection
