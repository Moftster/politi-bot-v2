<?php include('assets/partials/header.php'); ?>

<div id="main">

    <div class="inner">

      <div class="container">

                  <div class="row">
                      <div class="col-md-6">
                        <form>

                          <h2 class="form-header form-group">Request a Politi-bot</h2>

                            <div class="form-group">
                              <input class="snippet" type="text" class="form-control" name="user-name" placeholder="Your name">
                            </div>

                            <div class="form-group">
                              <input class="snippet" type="text" class="form-control" name="request" placeholder="Who's missing?">
                            </div>

                            <div class="form-group">
                              <button type="submit" onclick="sendMail()" class="snippet" name="insert" class="form-control">Send</button>
                            </div>

                        </form>
                      </div>
                  </div>
        </div>
        </div>
      </div>


  <?php include('assets/partials/footer.php'); ?>
