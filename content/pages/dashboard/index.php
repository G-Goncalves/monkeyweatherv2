  <div class="container-fluid mt-5 pt-5 mb-5 pb-5">
      <!--WELCOME-->
      <div class="container mt-5">
          <div class="row pt-5 pb-5">
              <div class="col-sm pr-5 welcome">
                  <h1>Welcome
                      <a href="dashboard.php?p=profile">
                          <?= $name ?></a>
                  </h1>
              </div>
              <div class="col-sm pl-5 text-center">
                  <img class="img-profile rounded-circle" style="width: 250px; height:250px; object-fit:cover" src="img/profile-img/<?php echo $image ?>">
              </div>
          </div>
      </div>
      <!--WELCOME END-->

      <!--OPTIONS-->
      <div class="container whatToDo">
          <h2 class="pt-5 pb-5 text-grey">What do you want to do?</h2>
          <div class="row">
              <div class="col-sm pt-2">
                  <h3>my places</h3>
                  <a href="dashboard.php?p=my-places">
                      <h5>view places</h5>
                  </a>
              </div>

              <div class="col-sm pt-2">
                  <h3>my profile</h3>
                  <a href="dashboard.php?p=profile">
                      <h5>edit profile</h5>
                  </a>
              </div>
          </div>
      </div>
  </div>

  <!--OPTIONS END-->