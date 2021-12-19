<!doctype html>
<html>
    <header>
            <link href="{{ asset('css/main.css') }}" rel="stylesheet">

        </header>
        <body>
<div class="login-box">
  <h2>Shipping</h2>
<hr>

    <div class="items">
      @foreach($items as $item)
      <br>
      <div class="item">{{$item->ItemNumber}}</div>
    @method('delete')

<div class="col-xs-4">
    <a href="shipping/{{$item->id}}/edit">Update</a><br><br>
<a href="delete/{{$item->id}}" >Delete</a>
</div>
    </div>
    <hr>
    @endforeach

</div>
<div class="btn-add">
    <a href="add/shipping">Add To Shipping</a>
</div>
</body>
</html>
