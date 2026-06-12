<?php 
 $dark_mode = true;
 $user_pfp = '/assets/img/system/default.png';
 $user_robux = 0;
?>

<body <?php if ($dark_mode) echo 'class="dark-mode"'?>>
    <header>
        <div class="roprepo-logo">
            <a href="/index.php?page=home" class="roprepo-link">
                <img class="roprepo-logo-img logo-text logo-white" src="/assets/icons/common/roprepo-title-dark.svg" alt="Roprepo Logo">
                <img class="roprepo-logo-img logo-text logo-black" src="/assets/icons/common/roprepo-title-light.svg" alt="Roprepo Logo">
                <img class="roprepo-logo-img logo-icon" src="/assets/icons/common/roprepo-icon.svg" alt="Roprepo Logo">
            </a>
        </div>
        <nav class="page-switch">
            <a href="/index.php?page=charts" class="nav-link">Charts</a>
            <a href="/index.php?page=catalog" class="nav-link">Marketplace</a>
            <a href="/index.php?page=robux" class="nav-link">Robux</a>
        </nav>
        <input type="search" name="search" class="search-bar" placeholder="Find our games..." autocomplete="off">
        <div class="user-section">
            <a href="/index.php?page=profile" class="profile-src"><img src= <?=$user_pfp?> alt="profile picture" class="user-pfp"></a>
            <a class="robux-card" href="/index.php?page=robux">
                <img src="/assets/icons/external/robux.svg" alt="Robux Icon" class="robux">
                <p><?=$user_robux?></p>
            </a>
            <button class="theme-mode">
                <img src="/assets/icons/external/theme.svg" alt="Change Theme" class="theme-mode-img">
            </button>
        </div>
    </header>