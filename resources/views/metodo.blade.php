@extends('layouts.app')
@section('title', $title)
@section('meta_description', $description)

@section('content')
  <div class="jambo_metodo">
    <div class="cont">
      <h1>Una vera scuola, a casa tua</h1>
        <p>Prendiamo il meglio dell'esperienza in aula e lo uniamo al mondo online  <br>
        per portare a casa tua la migliore esperienza di apprendimento possibile</p>
    </div>
  </div>

  <div class="jumbo">
    <div class="container">
      <div class="jumbo_left">
        <h1>L'aula Boolean</h1>
        <p>Le lezioni si svolgono online sulla piattaforma Boolean che permette agli alunni di seguire in diretta le lezioni del maestro, interagendo con domande e commenti, condividendo gli schermi e lavorando contemporaneamente sugli stessi file</p>
        <ul>
          <li><a>Segui da dove vuoi</a> </li>
          <li><a>interazione e cooperazione</a> </li>
          <li><a>Assistenza dedicata</a> </li>
        </ul>
      </div>
      <div class="jumbo_right">
        <img src="{{ asset('img/pc_blank.png')}}" alt="">
      </div>
    </div>
  </div>
@endsection
