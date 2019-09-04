<?php include('assets/partials/header.php'); ?>

<div id="main">

    <div class="inner">

      <div class="container">

                  <div class="row">
                      <div class="col-md-6">
                        <div class="card mb-4 box-shadow ">
                          <img class="card-img-top" src="images/johnson-speaking.jpg" alt="Card image cap">
                        </div>
                      </div>
                      <div class="soundSnippets">
                        <div class="col-md-3">
                          <div class="form-group">

                            <div class="snippet">
                              <input type="button" class="btn" value="&quot;Deal&quot;" onclick=play('audio2')>
                              <audio id="audio2" src="assets/sounds/Johnson/deal.wav"><audio>
                            </div>
                            <div class="snippet">
                              <input type="button" class="btn" value="&quot;Ping-pong&quot;" onclick=play('audio3')>
                              <audio id="audio3" src="assets/sounds/Johnson/ping-pong.wav"><audio>
                            </div>
                            <div class="snippet">
                              <input type="button" class="btn" value="&quot; ...and ...&quot;" onclick=play('audio1')>
                              <audio id="audio1" src="assets/sounds/Johnson/and.wav"><audio>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
        </div>
        </div>
      </div>

  <?php include('assets/partials/footer.php'); ?>
