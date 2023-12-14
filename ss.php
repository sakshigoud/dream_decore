    








    <div class="w-50 m-auto">
      <form action="bookinginfo.php" method="post">
        <div class="form-group">
          <label>Person Name: </label><input type="text" name="fullname" >
        </div>
        <div class="form-group">
          <label>Email: </label><input type="email" name="email" required>
        </div>

        <div class="input-group">
                <div class="input-box">
                    <h4>Payment Details</h4>

        <div class="form-group">
         <label>Card_name: </label>

     Credit card<input type="radio" id="Card_name" name="gender" value="Credit card">
     Paypal<input type="radio" id="Card_name" name="gender" value="Paypal">
  </div>

  <div class="form-group">
          <label>Card_Number.: </label><input type="text" name="number">
        </div>

<div class="form-group">
          <label>Card_CVC: </label><input type="text" name="cvc">
        </div>
