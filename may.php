<?php include('assets/partials/header.php'); ?>

<div id="main">

    <div class="inner">

      <div class="container">

                  <div class="row">
                      <div class="col-md-6">
                        <div class="card mb-4 box-shadow ">
                          <img class="card-img-top" src="images/may-speaking.jpg" alt="Card image cap">
                        </div>
                      </div>
                      <div class="soundSnippets">
                        <div class="col-md-3">
                          <div class="form-group">
                            <div class="snippet">
                              <input type="button" class="btn btn-lg" value="Farmers" onclick=play('audio1')>
                              <audio id="audio1" src="assets/sounds/may/farmers.wav"><audio>
                            </div>
                            <div class="snippet">
                              <input type="button" class="btn btn-lg" value="Difficult woman" onclick=play('audio2')>
                              <audio id="audio2" src="assets/sounds/may/difficult-woman.wav"><audio>
                            </div>
                            <div class="snippet">
                              <input type="button" class="btn btn-lg" value="Persevere" onclick=play('audio3')>
                              <audio id="audio3" src="assets/sounds/may/persevere.wav"><audio>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
        </div>
        </div>
      </div>


  <?php include('assets/partials/footer.php'); ?>
