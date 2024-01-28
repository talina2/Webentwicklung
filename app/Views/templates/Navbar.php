<nav class="navbar navbar-expand-md mb-4">
    <div class="container-fluid">
        <a class="navbar-brand ps-4" href="<?php echo base_url();?>">
            <img src="<?php echo base_url();?>resources/images/MinMaxLogo.svg" alt="logo.svg" height="60">
        </a>


        <div class="navbar-collapse collapse" id="navbarDropdown">
            <?php $title ?? $title = 'No Title Set'; ?>
            <ul class="navbar-nav nav-underline me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link <?php echo ($title == 'Tasks') ? 'active" aria-current="page"' : '"' ?> href="<?php echo base_url('tasks');?>">Tasks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($title == 'Boards') ? 'active" aria-current="page"' : '"' ?> href="<?php echo base_url('boards');?>">Boards</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($title == 'Spalten') ? 'active" aria-current="page"' : '"' ?> href="<?php echo base_url('spalten');?>">Spalten</a>
                </li>
            </ul>
        </div>
        <span class="navbar-text me-4" data-bs-toggle="collapse" href="#userCollapse" aria-expanded="false" aria-controls="userCollapse">
            <?php echo isset($_COOKIE['userid']) ?  $_COOKIE['username'].' '.$_COOKIE['userlastname'] : 'Gast' ?>
            <?php if($_COOKIE['permissionLevel'] == '2') { ?>
                <a href="<?php echo base_url('dashboard'); ?>">
                    <i class="fa-solid fa-user-shield" style="color: #e21d1d;"></i>
                </a>
            <?php } else if($_COOKIE['permissionLevel'] == '1') { ?>
                <a href="<?php echo base_url('benutzer/'.$_COOKIE['userid']); ?>">
                    <i class="fa-solid fa-user" style="color: #0d46d5;"></i>
                </a>
            <?php } else { ?>
                <i class="fa-solid fa-user" style="color: #21d50d;"></i>
            <?php } ?>

            <!--                <i class="fa-solid fa-user" style="color: #e21d1d;"></i>-->
            <div class="collapse" id="userCollapse">
                <a class="" href="<?php echo base_url();?>">Logout</a>
            </div>
        </span>

        <button class="navbar-toggler custom-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDropdown"
                aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>