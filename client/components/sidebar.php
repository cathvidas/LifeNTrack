<?php
$currentURL = basename($_SERVER['PHP_SELF']);
?>

<aside class="sidebar user-nav">
    <div class="nav">
        <div class="top-corner">
            <!-- Your logo and toggle button -->
        </div>

        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link <?= ($currentURL === 'index.php') ? 'active' : 'collapsed' ?>" href="index.php">
                    <i class="bi bi-calendar-event"></i>
                    <span>Home</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link <?= ($currentURL === 'events.php') ? 'active' : 'collapsed' ?>" href="events.php">
                    <i class="bi bi-calendar-event"></i>
                    <span>Activities</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link <?= ($currentURL === 'friends.php') ? 'active' : 'collapsed' ?>" href="friends.php">
                    <i class="bi bi-calendar-event"></i>
                    <span>Friends</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link <?= ($currentURL === 'settings.php') ? 'active' : 'collapsed' ?>" href="settings.php">
                    <i class="bi bi-calendar-event"></i>
                    <span>Settings</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link <?= ($currentURL === 'announcements.php') ? 'active' : 'collapsed' ?>" href="announcements.php">
                    <i class="bi bi-calendar-event"></i>
                    <span>Announcements</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
