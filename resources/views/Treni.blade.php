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
								<td class="text-success">In Orario</td>
							@else
								<td class="text-danger">In Ritardo</td>
							@endif
              @if ($train->cancelled)
								<td class="text-danger">Cancellato</td>
							@else
								<td class="text-success">Regolare</td>
							@endif

            </tr>
            @endforeach


          </tbody>

    </table>
</div>
<div class="container-xxl d-flex justify-content-center ">

    <div class="paginator ">{{$trains->links()}}</div>
</div>

@endsection
