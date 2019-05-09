@extends('front')

@section('content')
    <form action="/ujutazasmentes" method="post">
        {{ csrf_field() }}

        <h1 class="mt-5">Új utazás felvitele</h1>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Nyitóoldal</a></li>
                <li class="breadcrumb-item active" aria-current="page">Új utazás felvitele
                </li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="title">Megnevezés</label>
                    <input type="text" name="title" id="title"
                           class="form-control" required>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label for="lead">Beveztő</label>
                    <textarea required name="lead" id="lead"
                              class="form-control"></textarea>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="form-group">
                    <label for="daterange">Dátum</label>
                    <input type="text" name="daterange" id="daterange"
                              class="form-control">
                </div>
                <input type="hidden" id="start" name="start">
                <input type="hidden" id="end" name="end">
            </div>

            <div class="col-lg-12">
                <div class="form-group">
                    <label for="max">Maximális létszám</label>
                    <input type="number" name="max" id="max" min="1"
                           class="form-control" required>

                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="description">Leírás</label>
                    <textarea required name="description" id="description"
                              class="form-control"></textarea>
                </div>
            </div>

            <div class="col-12">
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Mentés
                    </button>
                </div>
            </div>


        </div>
    </form>

    @endsection