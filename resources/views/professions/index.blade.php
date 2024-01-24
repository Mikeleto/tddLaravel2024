@extends('layout')

@section('title', 'Profesiones')

@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h1 class="pb-1">Listado de profesiones</h1>
    </div>
    <form method="get" >
<div class="dropdown">
    <button type="button" class="btn btn-secondary btn-sm btn-block dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Profesiones
    </button>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton" style="width: 100%; max-height: 200px; overflow-y: auto; text-align: left;">
        @foreach($professions as $profession)
            <div class="form-check">
                <input name="professions[]" type="checkbox" class="form-check-input"
                       id="profession_{{ $profession->id }}" value="{{ $profession->id }}"
                        {{ $checkedProfessions->contains($profession->id) ? 'checked' : '' }}
                >
                <label class="form-check-label" for="profession_{{ $profession->id }}">{{ $profession->title }}</label>
            </div>
        @endforeach
    </div>
</div>
<button type="submit" class="btn btn-sm btn-primary">Filtrar</button>
</form>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col"><a
                                href="{{ $sortable->url('title') }}"
                                class="{{ $sortable->classes('title') }}">Nombre</a></th>
            <th scope="col">Nivel de educación</th>
            <th scope="col">Salario</th>
            <th scope="col">Experiencia</th>
            <th scope="col">Perfiles</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($professions as $profession)
            <tr>
                <td scope="row">{{ $profession->id }}</td>
                <td>{{ $profession->title }}<span class="note">{{ $profession->sector }}</span></td>
                <td>{{ $profession->education_level }}</td>
                <td>{{ $profession->salary }}</td>
                <td>{{ $profession->experience_required }}</td>
                <td>{{ $profession->profiles_count }}</td>
                <td>
                    @if($profession->profiles_count == 0)
                        <form action="{{ url('profesiones/' . $profession->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-link"><span
                                        class="material-symbols-outlined">delete</span>
                            </button>
                        </form>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
