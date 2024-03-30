<nav class="navbar navbar-expand-sm bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">
<img src="/resources/images/android-chrome-512x512.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top"> Dove</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
<?php
if(!isset($_SESSION['user'])){
?>
<a class="btn btn-sm btn-dark" href="/dashboard">Dashboard</a>
<a style="display:none;" class="btn btn-sm btn-outline-danger" href="/logout">Logout</a>
<?php
} else {
  if($_SERVER['REQUEST_URI'] === "/dashboard"){
?>
<a style="display:none;" class="btn btn-sm btn-dark" href="/dashboard">Dashboard</a>
<?php
  }else{
?>
<a class="btn btn-sm btn-dark" href="/dashboard">Dashboard</a>
<?php
  }
?>
<a class="ms-1 btn btn-sm btn-outline-danger" href="/logout">Logout</a>
<?php
}
?>
    </div>
  </div>
</nav>
