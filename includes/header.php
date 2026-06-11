<?php 

?>

<header>
    <div class="roprepo-logo">
        <a href="/app/main/home.html" class="roprepo-link">
            <img class="roprepo-logo-img logo-text logo-white" src="/assets/icons/common/roprepo-title-dark.svg" alt="Roprepo Logo">
            <img class="roprepo-logo-img logo-text logo-black" src="/assets/icons/common/roprepo-title-light.svg" alt="Roprepo Logo">
            <img class="roprepo-logo-img logo-icon" src="/assets/icons/common/roprepo-icon.svg" alt="Roprepo Logo">
        </a>
    </div>
    <nav class="page-switch">
        <a href="/app/main/charts.html" class="nav-link">Charts</a>
        <a href="/app/main/catalog.html" class="nav-link">Marketplace</a>
        <a href="/app/main/robux.html" class="nav-link">Robux</a>
    </nav>
    <input type="search" name="search" class="search-bar" placeholder="Find our games..." autocomplete="off">
    <div class="user-section">
        <!-- O ícone exibido é baseado no registro do usuário no banco -->
        <a href="/app/main/profile.html" class="profile-src"><img src="https://avatars.githubusercontent.com/u/224140838?v=4" alt="profile picture" class="user-pfp"></a>
        <a class="robux-card" href="/app/main/robux.html">
            <img src="/assets/icons/external/robux.svg" alt="Robux Icon" class="robux">
            <p>0</p>
        </a>
        <button class="theme-mode">
            <img src="/assets/icons/external/theme.svg" alt="Change Theme" class="theme-mode-img">
        </button>
    </div>
</header>