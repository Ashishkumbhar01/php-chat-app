<?php pageAdd("include/header.php"); ?>
<section style="height:100vh" class="w-100 d-flex justify-content-center align-items-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-12 col-md-8">
        <div class="card my-3 p-3">
          <div class="card-text">
            <h2 class="mb-2 text-uppercase text-center">Login page</h2>
          </div>
          <form class="card-body" action="/submit-login" method="POST">
          <div class="mb-2">
            <input class="form-control"type="email"name="email" placeholder="Email" required/>
          </div>
          <div class="mb-2">
            <input class="form-control" type="password" name="password" placeholder="Password" required/>
          </div>
          <div class="mt-4 d-flex justify-content-between align-items-center">
            <button class="text-uppercase btn btn-success" type="submit"name="register">
              <i class="bi bi-box-arrow-in-left"></i> login
            </button>
            <a class="text-center btn btn-link" href="/forget">Forget password?</a>
            <a class="btn btn-dark text-uppercase" href="/register">
              <i class="bi bi-box-arrow-right"></i>Register
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</section>
<?php pageAdd("include/footer.php"); ?>
