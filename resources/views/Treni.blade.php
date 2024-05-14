@extends('layout.main')

@section('content')
<div class="container-xl">
    <h1 class="text-center">Treni</h1>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
              <th scope="col">Azienda</th>
              <th scope="col">Stazione di partenza</th>
              <th scope="col">Orario Partenza</th>
              <th scope="col">Stazione di Arrivo</th>
              <th scope="col">Orario Arrivo</th>
              <th scope="col">Cod. Treno</th>
              <th scope="col">In Orario</th>
              <th scope="col">Cancellato</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($trains as $train)
            <tr>
              <th scope="row">{{ $train->agency }}</th>
              <td>{{ $train->departure_station }}</td>
              <td>{{ $train->departure_time }}</td>
              <td>{{ $train->arrival_station }}</td>
              <td>{{ $train->arrival_time }}</td>
              <td>{{ $train->train_code }}</td>
              @if ($train->in_time)
								<td>In Orario</td>
							@else
								<td>In Ritardo</td>
							@endif
              @if ($train->cancelled)
								<td>Cancellato</td>
							@else
								<td>Regolare</td>
							@endif

            </tr>
            @endforeach


          </tbody>

    </table>
</div>

@endsection
