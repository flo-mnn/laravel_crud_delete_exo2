
  <!-- Modal -->
  <div class="modal fade" id="cars{{$loop->iteration}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
            @if ($loop->iteration==1)
            All Cars
            @elseif($loop->iteration==2)
                -4000€
            @elseif($loop->iteration==3)
                4000€+
            @else
                Promo
            @endif
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Brand</th>
                    <th scope="col">Price</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($categories[$loop->iteration -1] as $car)
                  <tr>
                    <th scope="row">{{$car->brand}}</th>
                    <td>
                      @if ($car->discount)
                      <del>{{$car->price}} €</del>
                      <span>{{$car->price - ((($car->price)/100)*$car->discount)}} €</span>
                      @else
                      <span>{{$car->price}} €</span>
                      @endif
                    </td>
                    <td><button type="submit" class="btn btn-primary"><a href="/car/{{$car->id}}" class="text-white">details</a></button></td>
                    <td><button type="submit" class="btn btn-warning"><a href="/edit/{{$car->id}}" class="text-white">edit</a></button></td>
                  </tr>
                  @endforeach
                 
                </tbody>
              </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>