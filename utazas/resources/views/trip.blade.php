@extends('front')

@section('content')
    <h1 class="mt-5">{{ $travels->title }}</h1>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Nyitóoldal</a></li>
            <li class="breadcrumb-item active"
                aria-current="page">{{ $travels->title }}
            </li>
        </ol>
    </nav>

    <p class="lead">{{ $travels->lead }}</p>
    <div class="content">
        {{ $travels->description }}
    </div>
    <hr>
     <div class=" row">
    <div class="col-6">{{ date('Y.m.d', $travels->start )}}</div>
    <div class="col-6">{{date('Y.m.d', $travels->end) }}</div>
     </div>
    <hr>

    <form action="/jelentkezes/{{ $travels->id }}" method="POST">
        {{ csrf_field() }}


        <h1 class="mt-5">Új utazó felvitele</h1>



        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="name">Név</label>
                    <input required type="text" name="name" id="name"
                           class="form-control">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="mail">E-mail cím</label>
                    <input type="email" name="mail" id="mail" required
                           class="form-control">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="phone">Telefonszám (Opcionális)</label>
                    <input type="text" name="phone" id="phone"
                           class="form-control">
                </div>
            </div>


            <div class="col-12">
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Mentés
                    </button>
                </div>
            </div>

            <div class="col-12">
                 @foreach($errors->all() as $error)
                      <p class="text-center text-danger">  {{$error}}</p>
                    @endforeach
            </div>
        </div>
    </form>
@endsection
