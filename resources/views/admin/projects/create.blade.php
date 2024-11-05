@extends('layouts.app')

@section('page-title', 'Crea nuovo progetto')

@section('main-content')
    <div class="row">
        <div class="col">
            <h1 class="text-center text-success mb-3">
                Inserisci nuovo progetto
            </h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
              <form action="{{ route('admin.projects.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="title" class="form-label">Titolo <span class="text-danger">*</span></label>
                  <input
                    type="text"
                    class="form-control"
                    id="title"
                    name="title"
                    required
                    placeholder="Inserisci il titolo...">
                </div>
                <div class="mb-3">
                  <label for="url" class="form-label">Url</label>
                  <input
                    type="text"
                    class="form-control"
                    id="url"
                    name="url"
                    placeholder="Inserisci il link al progetto...">
                </div>
                <div class="mb-3">
                  <label for="description" class="form-label">Descrizione <span class="text-danger">*</span></label>
                  <textarea 
                    type="text"
                    class="form-control"
                    id="description"
                    name="description"
                    required
                    placeholder="Inserisci la descrizione..."></textarea>
                </div>
                <div class="mb-3">
                  <label for="type_id" class="form-label">Categoria</label>
                  <select name="type_id" id="type_id" class="form-control">
                    <option selected disabled>Seleziona una categoria...</option>
                    @foreach ($types as $type)
                      <option value="{{ $type->id }}">{{ $type->title }}</option>
                      
                    @endforeach
                  </select>
                </div>
                
                <button type="submit" class="btn btn-success mb-3">+ Aggiungi</button>
              </form> 
              <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary mb-3">Annulla</a>
            </div>
        </div>
    </div>
@endsection
