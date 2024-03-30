<?php pageAdd("include/header.php");
print_r($_SESSION);
?>
<section style="height:100vh" class="w-100 d-flex justify-content-center align-items-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-12 col-md-8">
        <div class="card my-3 p-3">
          <div class="card-text">
            <h2 class="mb-2 text-uppercase text-center">Set Password</h2>
          </div>
          <form class="card-body" action="/new-password" method="POST">
<input type="hidden" name="email" value="<?php if(isset($_SESSION['email'])){
  echo $_SESSION['email'];}?>">
            <div class="mb-2">
              <input class="form-control" type="password" name="password" placeholder="New password" required/>
            </div>
            <div class="mt-4 d-flex justify-content-between align-items-center">
              <button class="text-uppercase btn btn-success" type="submit" name="submit">
                <i class="bi bi-box-arrow-in-left"></i>Submit
              </button>
              <a class="btn btn-dark text-uppercase" href="/login">
                <i class="bi bi-box-arrow-right"></i>Login
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<?php pageAdd("include/footer.php"); ?>
