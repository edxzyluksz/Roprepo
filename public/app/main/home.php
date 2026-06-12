
<link rel="stylesheet" href="/assets/css/pages/main/home.css">
<main class="home-main">
    <section class="user-greetings">
        <img src=<?=$user_pfp?> alt="Your Profile Picture" class="user-pfp">
        <h1>Greetings, User!</h1>
    </section>
    <h1>What's your next step?</h1>
    <section class="user-steps">
        <a href="/index.php?page=charts" class="step-option mono-icon">
            <img src="/assets/icons/external/charts.svg" alt="Charts">
            <h2>Charts</h2>
        </a>
        <a href="/index.php?page=catalog" class="step-option mono-icon">
            <img src="/assets/icons/external/catalog.svg" alt="Catalog">
            <h2>Catalog</h2>
        </a>
        <a href="/index.php?page=profile" class="step-option mono-icon">
            <img src="/assets/icons/external/profile.svg" alt="Profile">
            <h2>Profile</h2>
        </a>
    </section>
</main>
