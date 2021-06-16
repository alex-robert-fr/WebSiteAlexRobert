<input type="checkbox" id="nav-toggle">
<div class="sidebar">
    <div class="sidebar__brand">
        <a href="<?=$router->url('home')?>">
            <h2>Admin<span>Panel</span></h2>
        </a>
        <a href="<?=$router->url('home')?>">
            <h2 class="hidden">AP</h2>
        </a>
    </div>

    <div class="sidebar__menu">
        <ul>
            <li><a href="<?=$router->url('dashboard')?>"<?php if($_GET['url'] === 'admin/dashboard'){echo 'class="active"';} ?>><i class="fa fa-tachometer-alt"></i><span>Dashboard</span></a></li>

            <li><a href="<?=$router->url('projects')?>"<?php if($_GET['url'] === 'admin/projects'){echo 'class="active"';} ?>><i class="fa fa-file"></i><span>Projects</span></a></li>

            <li><a href="#"><i class="fa fa-chart-pie"></i><span>Statistiques</span></a></li>

            <li><a href="#"><i class="fa fa-sliders-h"></i><span>Settings</span></a></li>

        </ul>
    </div>
</div>

<div class="main-content">
    <header>
        <h2>
            <label for="nav-toggle">
                <i class="fas fa-bars"></i>
            </label>
            Dashboard
        </h2>

        <div class="search-wrapper">
            <i class="fas fa-search"></i>
            <input type="search" placeholder="Search here">
        </div>

        <div class="user-wrapper">
            <img src="<?= $router->fileUrl('/Src/Views/img/'). 'photo_profil.jpg'?>" width="40px" height="40px" alt="">
            <div>
                <h4>Alex Robert</h4>
                <small class="small-profil">Super admin</small>
            </div>
        </div>
    </header>