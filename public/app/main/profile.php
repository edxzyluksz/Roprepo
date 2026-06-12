
<link rel="stylesheet" href="/assets/css/pages/main/profile.css">
<aside class="profile-control">
    <button class="btn">
        <img src="/assets/icons/external/backpack.svg" class="mono-icon">
        <span>My Titles</span>
    </button>
    <button class="btn">
        <img src="/assets/icons/external/charts.svg" class="mono-icon">
        <span>Played Games</span>
    </button>
    <button class="btn">
        <img src="/assets/icons/external/lock.svg" class="mono-icon">
        <span>???</span>
    </button>
    <button class="btn">
        <img src="/assets/icons/external/lock.svg" class="mono-icon">
        <span>???</span>
    </button>
    <button class="btn">
        <img src="/assets/icons/external/lock.svg" class="mono-icon">
        <span>???</span>
    </button>
    <button class="btn">
        <img src="/assets/icons/external/lock.svg" class="mono-icon">
        <span>???</span>
    </button>
    <button class="btn">
        <img src="/assets/icons/external/theme.svg" class="mono-icon">
        <span>Theme</span>
    </button>
    <!-- Botão destinado a cargos privilegiados  -->
    <button class="btn">
        <img src="/assets/icons/external/profile.svg" class="mono-icon">
        <span>Users</span>
    </button>
</aside>
<main>
    <div class="user-profile-display">
        <h1>My Profile</h1>
        <img src= <?=$user_pfp?> alt="Profile Picture" class="user-pfp">
        <div class="user-info">
            <h2>@user</h2>
            <h2>Title: Player</h2>
            <h2>Robux: <?=$user_robux?></h2>
            <h2>Created at: MM/DD/YYYY</h2>
        </div>
    </div>
</main>