@extends('template.main')
@section('content')
    <section class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Brand</th>
                <th scope="col">Year</th>
                <th scope="col">Color</th>
                <th scope="col">Price</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">{{$car->brand}}</th>
                <td>{{$car->year}}</td>
                <td>{{$car->color}}</td>
                <td>
                  @if ($car->discount)
                  <del>{{$car->price}} €</del>
                  <span>{{$car->price - ((($car->price)/100)*$car->discount)}} €</span>
                  @else
                  <span>{{$car->price}} €</span>
                  @endif
                </td>
                <td>
                    <form action="/delete-car/{{$car->id}}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger text-white font-weight-bold">X</button>
                    </form>
                </td>
              </tr>
             
            </tbody>
          </table>
    </section>
@endsection