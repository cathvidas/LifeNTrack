 <!-- ======= Header ======= -->
 <header id="header" class="header fixed-top d-flex align-items-center">

     <div class="d-flex align-items-center justify-content-between">
         <a href="../../public" class="logo d-flex align-items-center">
             <!-- <img src="../../assets/img/logo.png" alt=""> -->
             <span class="d-none d-lg-block">LifeNTrack</span>
         </a>
         <i class="bi bi-list toggle-sidebar-btn"></i>
     </div><!-- End Logo -->

     <div class="search-bar">
         <form class="search-form d-flex align-items-center" method="POST" action="#">
             <input type="text" name="query" placeholder="Search" title="Enter search keyword">
             <button type="submit" title="Search"><i class="bi bi-search"></i></button>
         </form>
     </div><!-- End Search Bar -->

     <nav class="header-nav ms-auto">
         <ul class="d-flex align-items-center">

             <li class="nav-item d-block d-lg-none">
                 <a class="nav-link nav-icon search-bar-toggle " href="#">
                     <i class="bi bi-search"></i>
                 </a>
             </li><!-- End Search Icon-->

             <li class="nav-item dropdown">
                 <?php
                    $sql = "SELECT * FROM notification WHERE notifReceiverID = $userID ORDER BY notifCreated DESC";
                    $result = mysqli_query($conn, $sql);
                    $countNotif = 0;
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            if ($row['notifStatus'] == 'unseen') {
                                $countNotif++;
                            }
                        }
                    }
                    ?>

                 <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                     <i class="bi bi-bell"></i>
                     <?php
                     if($countNotif>0) {
                        echo '<span class="badge bg-primary badge-number">'. $countNotif. '</span>';
                     }
                     ?>
                 </a><!-- End Notification Icon -->

                 <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                     <li class="dropdown-header">
                         <?= "You have " . $countNotif . " new notification(s)";?>
                         <!-- You have 4 new notifications -->
                         <a href="../../../server/controllers/updateNotif.php"><span class="badge rounded-pill bg-primary p-2 ms-2">Mark All as Read</span></a>
                     </li>
                     <li>
                         <hr class="dropdown-divider">
                     </li>
                     <?php
                        $result = mysqli_query($conn, $sql);
                        include_once('../../../server/controllers/getTimeGap.php');
                        if (mysqli_num_rows($result) > 0) :
                            while ($row = mysqli_fetch_assoc($result)) :
                                $storedDate = $row['notifCreated'];
                                $timeGap = getTimeGap($storedDate);

                                if ($row['notifStatus'] == 'unseen') {
                                    echo '<li class="notification-item unseen">';
                                } else {
                                    echo '<li class="notification-item">';
                                }
                        ?>
                             <i class="bi bi-exclamation-circle text-warning"></i>
                             <div>
                                 <h4><?= $row['notifTitle'] ?></h4>
                                 <p><?= $row['notifMessage'] ?></p>
                                 <p><?= $timeGap ?></p>
                             </div>
             </li>

             <li>
                 <hr class="dropdown-divider">
             </li>

     <?php
                            endwhile;
                        else :
                            echo "0 results";
                        endif;
                        closeConnection($conn);
        ?>
     <!-- <li class="notification-item">
         <i class="bi bi-exclamation-circle text-warning"></i>
         <div>
             <h4>Lorem Ipsum</h4>
             <p>Quae dolorem earum veritatis oditseno</p>
             <p>30 min. ago</p>
         </div>
     </li>

     <li>
         <hr class="dropdown-divider">
     </li>

     <li class="notification-item">
         <i class="bi bi-x-circle text-danger"></i>
         <div>
             <h4>Atque rerum nesciunt</h4>
             <p>Quae dolorem earum veritatis oditseno</p>
             <p>1 hr. ago</p>
         </div>
     </li>

     <li>
         <hr class="dropdown-divider">
     </li>

     <li class="notification-item">
         <i class="bi bi-check-circle text-success"></i>
         <div>
             <h4>Sit rerum fuga</h4>
             <p>Quae dolorem earum veritatis oditseno</p>
             <p>2 hrs. ago</p>
         </div>
     </li>

     <li>
         <hr class="dropdown-divider">
     </li>

     <li class="notification-item">
         <i class="bi bi-info-circle text-primary"></i>
         <div>
             <h4>Dicta reprehenderit</h4>
             <p>Quae dolorem earum veritatis oditseno</p>
             <p>4 hrs. ago</p>
         </div>
     </li>

     <li>
         <hr class="dropdown-divider">
     </li> -->
     <li class="dropdown-footer">
         <a href="events.php">Show all notifications</a>
     </li>

         </ul><!-- End Notification Dropdown Items -->

         </li><!-- End Notification Nav -->

         <li class="nav-item dropdown">

             <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                 <i class="bi bi-chat-left-text"></i>
                 <span class="badge bg-success badge-number">3</span>
             </a><!-- End Messages Icon -->

             <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                 <li class="dropdown-header">
                     You have 3 new messages
                     <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                 </li>
                 <li>
                     <hr class="dropdown-divider">
                 </li>

                 <li class="message-item">
                     <a href="#">
                             <p>Under Maintenance...</p>
                         </div>
                     </a>
                 </li>
                 <li>
                     <hr class="dropdown-divider">
                 </li>


                 <li class="dropdown-footer">
                     <a href="#">Show all messages</a>
                 </li>

             </ul><!-- End Messages Dropdown Items -->

         </li><!-- End Messages Nav -->

         <li class="nav-item dropdown pe-3">

             <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                 <img src="../../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                 <span class="d-none d-md-block dropdown-toggle ps-2"><?= $userData['Fullname'] ?></span>
             </a><!-- End Profile Iamge Icon -->

             <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                 <li class="dropdown-header">
                     <h6><?= $userData['Fullname'] ?></h6>
                     <span>Web Designer</span>
                 </li>
                 <li>
                     <hr class="dropdown-divider">
                 </li>

                 <li>
                     <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                         <i class="bi bi-person"></i>
                         <span>My Profile</span>
                     </a>
                 </li>
                 <li>
                     <hr class="dropdown-divider">
                 </li>

                 <li>
                     <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                         <i class="bi bi-gear"></i>
                         <span>Account Settings</span>
                     </a>
                 </li>
                 <li>
                     <hr class="dropdown-divider">
                 </li>

                 <li>
                     <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                         <i class="bi bi-question-circle"></i>
                         <span>Need Help?</span>
                     </a>
                 </li>
                 <li>
                     <hr class="dropdown-divider">
                 </li>

                 <li>
                     <a class="dropdown-item d-flex align-items-center" href="../../../server/controllers/signout.php">
                         <i class="bi bi-box-arrow-right"></i>
                         <span>Sign Out</span>
                     </a>
                 </li>

             </ul><!-- End Profile Dropdown Items -->
         </li><!-- End Profile Nav -->

         </ul>
     </nav><!-- End Icons Navigation -->

 </header><!-- End Header -->