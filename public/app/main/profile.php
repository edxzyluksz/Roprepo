<?php
    if (!defined('ROPREPO_ACCESS')) {
        http_response_code(404);
        include __DIR__ . '/../../not_index.php';
        exit;
    }

    $user_id = $_SESSION['user_id']; // Shortcut para obter o id
    try {
        $sql = "SELECT u.bio, u.is_plus, u.active_title, u.created_at,
                    t.name AS title_name, t.color_hex AS title_color
                FROM users u LEFT JOIN titles t ON u.active_title = t.id
                WHERE u.id = :user_id";

        $stmtProfile = $pdo->prepare($sql);
        $stmtProfile->bindValue(":user_id", $user_id);
        $stmtProfile->execute();

        $profileData = $stmtProfile->fetch(PDO::FETCH_ASSOC);

        $sql = "SELECT t.name, t.color_hex 
                FROM user_titles ut 
                INNER JOIN titles t ON ut.title_id = t.id   
                WHERE ut.user_id = :user_id";
                
        $stmtTitles= $pdo->prepare($sql);
        $stmtTitles->bindValue(":user_id", $user_id);
        $stmtTitles->execute();

        $userTitles = $stmtTitles->fetchAll(PDO::FETCH_ASSOC);

    } catch(PDOException $e) {
        error_log("Error loading profile data: " . $e->getMessage());
    }
?>

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
        <img src="/assets/icons/external/pen.svg" class="mono-icon">
        <span>Biography</span>
    </button>
    <button class="btn">
        <img src="/assets/icons/external/avatar.svg" class="mono-icon">
        <span>Avatar</span>
    </button>
    <button class="btn">
        <img src="/assets/icons/external/lock.svg" class="mono-icon">
        <span>???</span>
    </button>
    <button class="btn js-theme-toggle">
        <img src="/assets/icons/external/theme.svg" class="mono-icon">
        <span>Theme</span>
    </button>
    <!-- Botão destinado a cargos privilegiados  -->
    <button class="btn">
        <img src="/assets/icons/external/profile.svg" class="mono-icon">
        <span>Users</span>
    </button>
    <button class="btn" id="logout-btn">
        <img src="/assets/icons/external/gear.svg" class="mono-icon">
        <span>Logout</span>
    </button>
</aside>
<main>
    <div class="user-profile-display">
        <h1>My Profile</h1>
        <img src= <?=$user_pfp?> alt="Profile Picture" class="user-pfp">
        <div class="user-info">
            <h2>@<?=$user_name?></h2>
            <h2>Title: Player</h2>
            <h2>Robux: <?=$user_robux?></h2>
            <h2>Created at: MM/DD/YYYY</h2>
        </div>
    </div>
</main>