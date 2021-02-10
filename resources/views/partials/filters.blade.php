<div class="container">
    <div class="row">
        @foreach ($categories as $btn)
        <div class="col-3 d-flex align-items-center flex-column "><!-- Button trigger modal -->
            <button type="button" class="btn btn-secondary text-white font-weight-bold" data-toggle="modal" data-target="#cars{{$loop->iteration}}">
                @if ($loop->iteration==1)
                    All Cars
                @elseif($loop->iteration==2)
                    -4000€
                @elseif($loop->iteration==3)
                    4000€+
                @else
                    Promo
                @endif
              </button>
        </div>
        @endforeach
       
    </div>
</div>