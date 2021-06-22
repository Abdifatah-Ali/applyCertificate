  <div class="pcoded-main-container">
      <div class="pcoded-wrapper">
          <nav class="pcoded-navbar">
              <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
              <div class="pcoded-inner-navbar main-menu">
                  <div class="">
                      <div class="main-menu-header">
                          <img class="img-80 img-radius" src="<?php echo '../uploadImage/'.$_SESSION['userPhoto']?>"
                              alt="User-Profile-Image">
                          <div class="user-details">
                              <span id="more-details"><?php echo $_SESSION['userName']?><i
                                      class="fa fa-caret-down"></i></span>
                          </div>
                      </div>
                      <div class="main-menu-content">
                          <ul>
                              <li class="more-details">
                                  <a href="./user-profile"><i class="ti-user"></i>View Profile</a>
                                  <a href="#!"><i class="ti-settings"></i>Settings</a>
                                  <a href="./logout.php"><i class="ti-layout-sidebar-left"></i>Logout</a>
                              </li>
                          </ul>
                      </div>
                  </div>

                  <!-- <div class="pcoded-navigation-label">Navigation</div> -->
                  <ul class="pcoded-item pcoded-left-item mt-3">
                      <li class="active">
                          <a href="./index.php" class="waves-effect waves-dark">
                              <span class="pcoded-micon"><i class="ti-home"></i></span>
                              <span class="pcoded-mtext">Dashboard</span>
                              <span class="pcoded-mcaret"></span>
                          </a>
                      </li>
                  </ul>
                  <div class="pcoded-navigation-label ">Users Configuration</div>
                  <ul class="pcoded-item pcoded-left-item">
                      <li class="">
                          <a href="./createUser.php" class="waves-effect waves-dark">
                              <span class="pcoded-micon"><i class="fas fa-user-plus"></i></span>
                              <span class="pcoded-mtext">Create User</span>
                              <span class="pcoded-mcaret"></span>
                          </a>
                      </li>
                      <li class="">
                          <a href=" ./usersList.php" class="waves-effect waves-dark">
                              <span class="pcoded-micon"><i class="fas fa-list"></i></span>
                              <span class="pcoded-mtext">users List</span>
                              <span class="pcoded-mcaret"></span>
                          </a>
                      </li>
                      <li class="">
                          <a href="./userProfile.php" class="waves-effect waves-dark">
                              <!-- <i class=""></i> -->
                              <span class="pcoded-micon"><i class="ti-user"></i></span>
                              <span class="pcoded-mtext">user profile</span>
                              <span class="pcoded-mcaret"></span>
                          </a>
                      </li>
                  </ul>
                  <div class="pcoded-navigation-label">Students Info</div>
                  <ul class="pcoded-item pcoded-left-item">
                      <li class="">
                          <a href="./studentRecord" class="waves-effect waves-dark">
                              <span class="pcoded-micon"><i class="fa fa-wpforms"></i></span>
                              <span class="pcoded-mtext">Students Record</span>
                              <span class="pcoded-mcaret"></span>
                          </a>
                      </li>
                      <li class="">
                          <a href="./contactStudent" class="waves-effect waves-dark">
                              <span class="pcoded-micon"><i class="fas fa-comment-alt"></i></span>
                              <span class="pcoded-mtext">Contact students</span>
                              <span class="pcoded-mcaret"></span>
                          </a>
                      </li>
                  </ul>
                  <div class="pcoded-navigation-label">Payments</div>
                  <ul class="pcoded-item pcoded-left-item">
                      <li class="">
                          <a href="./studentsPayment" class="waves-effect waves-dark">
                              <span class="pcoded-micon"><i class="ti-receipt"></i></span>
                              <span class=" pcoded-mtext">Students Paynent</span>
                              <span class="pcoded-mcaret"></span>
                          </a>
                      </li>
                  </ul>
                  <div class="pcoded-navigation-label">Order List</div>
                  <ul class="pcoded-item pcoded-left-item">
                      <li class="">
                          <a href="./orderList.php" class="waves-effect waves-dark">
                              <span class="pcoded-micon"><i class="fas fa-check-square"></i></span>
                              <span class="pcoded-mtext">Ordered List</span>
                              <span class="pcoded-mcaret"></span>
                          </a>
                      </li>
                      <li class="">
                          <a href="./talkingVerify.php" class="waves-effect waves-dark">
                              <span class="pcoded-micon"><i class="fas fa-calendar-check"></i></span>
                              <span class="pcoded-mtext">Verify Taken</span>
                              <span class="pcoded-mcaret"></span>
                          </a>
                      </li>

                  </ul>
                  <div class="pcoded-navigation-label">setting</div>
                  <ul class="pcoded-item pcoded-left-item">
                      <li class="">
                          <a href="javascript:void(0)" class="waves-effect waves-dark">
                              <span class="pcoded-micon"><i class="ti-settings"></i></span>
                              <span class="pcoded-mtext">System role</span>
                              <span class="pcoded-mcaret"></span>
                          </a>

                      </li>
                      <li class="">
                          <a href="javascript:void(0)" class="waves-effect waves-dark">
                              <span class="pcoded-micon"><i class="fa fa-cogs"></i></span>
                              <span class="pcoded-mtext">user role</span>
                              <span class="pcoded-mcaret"></span>
                          </a>

                      </li>
                  </ul>
              </div>
          </nav>