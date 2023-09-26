<?php

$logo  = './images/logo.png';

?>

<nav class="sidebar">
    <div class="sidebar-header-logo">
        <img src="{{ $logo }}"
        class="header-logo">
    </div>
    <ul class="sidebar-menu">
        <li class="menu-item active">
            <a href="#">
                <i class="fa fa-home"></i>
                <span>Home</span>
            </a>
        </li>
        <li class="menu-item">
            <a href="#">
                <i class="fa fa-users"></i>
                <span>Users</span>
            </a>
        </li>
        <li class="menu-item">
            <a href="#">
                <i class="fa fa-cog"></i>
                <span>Settings</span>
            </a>
        </li>
        <li class="menu-item">
            <a href="#">
                <i class="fa fa-envelope"></i>
                <span>Messages</span>
            </a>
        </li>
        <li class="menu-item">
            <a href="#">
                <i class="fa fa-chart-bar"></i>
                <span>Analytics</span>
            </a>
        </li>
    </ul>
    <div class="sidebar-footer">
        <ul class="sidebar-menu">
            <li class="menu-item">
                <a href="#">
                    <i class="fa fa-cog"></i>
                    <span>Settings</span>
                </a>
            </li>
        </ul>
    </div>
</nav>