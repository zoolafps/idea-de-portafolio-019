<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container">
  <div class="row">
    <div class="">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD TASK FORM -->
      <div class="card card-body m-3">
        <form enctype="multipart/form-data" action="save_task.php" method="POST">
          <div class="form-group">
            <input class="form-control" type="file" name="img" id="img">
          </div>
          <div class="form-group">
            <input class="form-control" type="text" name="title" id="title" placeholder="title">
          </div>
          <div class="form-group">
            <textarea class="form-control" name="text" id="text" cols="10" rows="5" placeholder="description"></textarea>
          </div>
          <div class="form-group">
            <input class="form-control" type="url" name="code" id="code" placeholder="code">
          </div>
          <div class="form-group">
            <input class="form-control" type="url" name="demo" id="demo" placeholder="demo">
          </div>
          <input type="submit" name="save_task" class="btn btn-success btn-block" value="Save Task">
        </form>
      </div>
    </div>
    <div class="">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Created At</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM proyectos";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><img src="../images/<?php echo $row['img']; ?>" width='100'></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['text']; ?></td>
            <td><?php echo $row['code']; ?></td>
            <td><?php echo $row['demo']; ?></td>
            <td>
              <a href="delete-item.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>
