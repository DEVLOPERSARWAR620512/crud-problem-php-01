<?php
 session_start();
 ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Post System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav m-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Add post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">All post</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <div class="col-6 m-auto mt-5">
        <div class="card">
            <div class="card-header">
               wrtting the post
            </div>
            <div class="card-body">
                  <form action="./controller/post_store.php" method="POST">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Post Title</label>
                      <input type="text" name="title" class="form-control" id="exampleInputEmail1">
                      <?php
                        if(isset($_SESSION['errors']['title'])){
                      ?>
                          <span class="text-danger">
                             <?= $_SESSION['errors']['title'] ?>
                          </span>
                      <?php
                        }
                      ?>
                   </div>
                   <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Post detail</label>
                      <textarea name="detail" class="form-control" ></textarea>
                      <?php
                         if($_SESSION['errors']['detail']){
                       ?>
                            <span class="text-danger">
                              <?= $_SESSION['errors']['detail'] ?>
                            </span>
                      <?php
                         }
                      ?>
                   </div>
                   <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Author name</label>
                      <input type="text" name="author" class="form-control" id="exampleInputEmail1">
                      <?php
                         if($_SESSION['errors']['author']){
                       ?>
                          <span class="text-danger">
                             <?php echo $_SESSION['errors']['author'] ?>
                          </span>
                      ?>
                      <?php
                        }
                      ?>
                   </div>
                    <button type="submit" name="submit" value="submited" class="btn btn-primary w-100">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
<?php
session_unset();
?>