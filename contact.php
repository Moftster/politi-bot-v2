<?php include('assets/partials/header.php'); ?>

<div id="main">

    <div class="inner">

      <div class="container">

                  <div class="row">
                      <div class="col-md-6">
                        <form action="core/database/request.php" method="POST">

                          <h2 class="form-header form-group">What do you want?</h2>

                          <?php

                          if(isset($_GET['msg'])) {

                          echo "<p class='text-danger'>" . $_GET['msg'] . "</p>";

                          }

                          ?>

                          <div class="form-group">
                          <textarea rows="5" cols="30" class="snippet" class="form-control" name="query"></textarea>
                          </div>

                          <div class="form-group">
                          <button class="snippet" type="submit" name="insert" class="form-control">Send</button>
                          </div>

                        </form>
                      </div>
                  </div>
        </div>
        </div>
      </div>


<script>



</script>

  <?php include('assets/partials/footer.php'); ?>
