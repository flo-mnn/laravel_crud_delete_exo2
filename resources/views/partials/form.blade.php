<section class="container bg-light rounded my-5 p-5">

    <h1>Add a Car</h1>
    <form action="/add-car" method="post">
        @csrf
        <div class="form-row">
          <div class="form-group col-md-6">
            <label >Brand</label>
            <input type="text" class="form-control" name="brand" required>
          </div>
          <div class="form-group col-md-6">
            <label>Color</label>
            <input type="text" class="form-control" name="color" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label >Year</label>
            <input type="number" class="form-control" name="year" min="1900" max="{{date('Y')}}" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label >Price</label>
            <input type="number" class="form-control" name="price"  required>
          </div>
          <div class="form-group col-md-6">
            <label>Discount</label>
            <input type="number" class="form-control" name="discount" min="1" max="100">
          </div>
        </div>
       
        <button type="submit" class="mb-5 btn btn-danger text-white">Add</button>
      </form>
      <button  class="my-5 btn btn-secondary text-white"><a href="/">Go back</a></button>
</section>