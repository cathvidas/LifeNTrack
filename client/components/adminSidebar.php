<?php
$currentURL = basename($_SERVER['PHP_SELF']);
?>


<!-- ======= Sidebar ======= -->


<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link <?= ($currentURL === 'index.php') ? 'active' : 'collapsed' ?>" href="index.php">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?= ($currentURL === 'usersList.php') ? 'active' : 'collapsed' ?>" href="usersList.php">
                <i class="bi bi-calendar-event"></i>
                <span>Users List</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?= ($currentURL === 'announcements.php') ? 'active' : 'collapsed' ?>" href="announcements.php">
                <i class="bi bi-calendar-event"></i>
                <span>Announcements</span>
            </a>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link " href="index.php">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="usersList.php">
                <i class="bi bi-grid"></i>
                <span>Users List</span>
            </a>
        </li> -->





        <!-- <li class="nav-heading">Pages</li> -->

        <!-- <li class="nav-item">
            <a class="nav-link" href="announcements.php">
                <i class="bi bi-person"></i>
                <span>Announcement</span>
            </a>
        </li> -->


        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#announcementForm">Add Announcement</button>




    </ul>

</aside><!-- End Sidebar-->