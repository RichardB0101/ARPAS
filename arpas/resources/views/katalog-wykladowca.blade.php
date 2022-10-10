@extends('layouts.arpas-home')


@section('main_content')
    <h2 class="text-center mb-5">Katalog prac (wykładowca)</h2>
    {{--    Buttons above catalog--}}
    <div class="d-flex flex-wrap justify-content-around container " id="upper-buttons">
        <div class="mb-3">
           
            <select id="disabledSelect" class="form-select">
            
                @for ($i = 1; $i < 12; $i++)
                    <option>Przedmiot nr.{{ $i }}</option>
                @endfor
            </select>
        </div>
        <div class="mb-3">
           
            <select id="disabledSelect" class="form-select">
            
                @for ($i = 1; $i < 8; $i++)
                    <option>Semestr {{ $i }}</option>
                @endfor
            </select>
        </div>
        <div class="mb-3">
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Wyszukaj">
          </div>
        <button type="button" class="btn btn-primary">Szukaj</button>
        <button type="button" class="btn btn-primary">Wybierz pracę</button>
        <button type="button" class="btn btn-primary">Dodaj nową pracę</button>
    </div>

    {{--    START OF THE CATALOG--}}
    <div class="d-flex flex-row flex-wrap mt-5 pt-2 pb-5 shadow-lg p-3 mb-5 rounded" id="catalog">

        @for($i = 0; $i < 12; $i++)
            <div class="container d-flex flex-column mt-5 py-5 bg-dark rounded" style="width: 300px; height: 250px;">
                <div class="container d-flex flex-wrap =" id="buttons">
                    <button type="button" class="btn btn-primary">Nazwa</button>
                    <button type="button" class="btn btn-primary">Autor</button>
                    <div class="btn btn-primary">Ocena:brak</div>
                    <button type="button" class="btn btn-primary">Oceń</button>
                </div>
            </div>
        @endfor

    </div>
    {{--    END OF THE CATALOG--}}

@endsection
