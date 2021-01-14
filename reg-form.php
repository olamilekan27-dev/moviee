<?php 

include('header.php');

?>


<body>

<div class="signup-form">
    <form action="register.php" method="post">
    <h2>Register</h2>
    <p class="hint-text">Create your account. It's free and only takes a minute.</p>
        <div class="form-group">
      <div class="row">
        <div class="col"><input type="text" class="form-control" name="customer_name" placeholder="customer name"></div>
        <div class="col"><input type="text" class="form-control" name="Username" placeholder="Username"></div>
      </div>          
        </div>
        <div class="form-group">
          <input type="email" class="form-control" name="emailaddress" placeholder="Email Address">
        </div>

        <div class="form-group">
          <input type="text" class="form-control" name="gender" placeholder="Gender">
        </div>
        
        <div class="form-group">
          <input type="number" class="form-control" name="customer_phone_number" placeholder="Phone number">
        </div>

    <div class="form-group" style="margin-top: 20px">
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
    <div class="form-group">
            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">
        </div>        
        <div class="form-group">
      <label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
    </div>
    <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>
    </form>
  <div class="text-center">Already have an account? <a href="#">Sign in</a></div>
</div>

</body>

    
              
        
  <?php include('footer.php') ?>





























 

