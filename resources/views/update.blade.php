<!doctype html>
<html>
    <header>
            <link href="{{ asset('css/main.css') }}" rel="stylesheet">

        </header>
        <body>
<div class="login-box">
  <h2>Shipping</h2>

          <form method="post" action="update" >
    @csrf

    <div class="user-box">
      <input type="text" name="ItemNumber" required="">
      <label>Item</label>
    </div>

    <div class="user-box">
      <input type="text" name="Weight" required="">
      <label>Weight</label>
    </div>

    <div class="user-box">
      <input type="text" name="Dimension" required="">
      <label>Dimension</label>
    </div>
    <div class="user-box">
      <input type="text" name="Insurance_Amount" required="">
      <label>Insurance Amount	</label>
    </div>
    <div class="user-box">
      <input type="text" name="Destination" required="">
      <label>Destination</label>
    </div>

    <div class="user-box">
      <input type="date" id="date" name="delivery_date">
      <label>Delivery Date</label>
    </div>

    <div class="user-box">
 <label>Type</label>
  <br><br>
      <select name="type" id="types">
    <option value="type1">Type1</option>
    <option value="type2">Type2</option>

  </select>

    </div>

<hr>

    <div class="user-box">
      <input type="text" name="Address" required="">
      <label>Address</label>
    </div>

    <div class="user-box">
      <input type="text" name="Delivery_Route" required="">
      <label>Delivery Route	</label>
    </div>
     <div class="user-box">

      <label>Delivery Type	</label>
         <br>
           <br>

      <select name="Delivery_Type" id="types">

    <option value="flight">flight</option>
    <option value="truck">truck</option>

  </select>
    </div>
    <a>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
<input class="btn" type="submit" value="Update">
</a>
  </form>
</div>
</body>
</html>
