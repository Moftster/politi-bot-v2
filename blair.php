<?php include('assets/partials/header.php'); ?>

<div id="main">

    <div class="inner">

      <div class="container">

                  <div class="row">
                      <div class="col-md-6">
                        <div class="card mb-4 box-shadow ">
                          <img class="card-img-top" src="images/blair-speaking.jpg" alt="Card image cap">
                        </div>
                      </div>
                      <div class="soundSnippets">
                        <div class="col-md-3">
                          <div class="form-group">
                            <div class="snippet">
                              <input type="button" class="btn" value="Iraq" onclick=play('audio1')>
                              <audio id="audio1" src="assets/sounds/Blair/iraq.wav"><audio>
                            </div>
                            <div class="snippet">
                              <input type="button" class="btn" value="Jobs" onclick=play('audio2')>
                              <audio id="audio2" src="assets/sounds/Blair/jobs.wav"><audio>
                            </div>
                            <div class="snippet">
                              <input type="button" class="btn" value="British people" onclick=play('audio3')>
                              <audio id="audio3" src="assets/sounds/Blair/british-people.wav"><audio>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
        </div>
        </div>
      </div>

  <?php include('assets/partials/footer.php'); ?>
