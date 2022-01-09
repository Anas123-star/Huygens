<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #002233;">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">HUYGENS</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html"><i class="fa fa-home" aria-hidden="true">&nbsp;</i>Home</a>
                  </li>
                  <li class="nav-item">
                    <?php
                      if (isset($_SESSION["email"])) {
                        ?>
                        <li class="nav-item active">
                          <a class="nav-link" href="logout.php"><i class="fa fa-user">&nbsp;</i>Logout</a>
                        </li>
                      <?php
                      }
                    ?>
                  </li>
                </ul>
              </div>
            </div>
</nav>
