<?php 
    $type = $_GET['type'] ?? null;

    if (!$type) {
        http_response_code(400);
        echo "<p>Erro: Nenhuma seção especificada.</p>";
        exit;
    }

    switch ($type) {
        case 'titles':
            // TODO: Conexão com o BD
            
            //foreach ($titles as $title) {
                echo "
                <div class='title-card card'>
                    <h3>Card</h3>
                    <div class='btn-group'>
                        <button class='btn'>Equip</button>
                        <button class='btn'>Like</button>
                    </div>
                </div>";
            //}
            break;
        case 'games':
            //foreach($games as $game) {
                echo "
                    <div class='game-card card'>
                        <a href=''>
                            <img src='' alt=''>
                        </a>
                        <h3></h3>
                    </div>";
            //}
            break;

        case 'bio':
            echo "
                <h3>Tell us more about you...</h3>
                <textarea name='bio' id='bioInput' placeholder='I'm a Roprepian!'></textarea>
                <div class='char-listener'>
                    <span id='char-text'>Characters available: </span>
                    <span id='char-count'></span>
                </div>
                <button type='button' class='btn'>Confirm</button>
            ";
            break;
        case 'avatar':
            echo "
                <img id='pfp-preview' src='/assets/img/system/default.png' class='user-pfp modal-pfp' alt='Avatar Preview'>
                <div>
                    <label for='avatar-input' class='upload-label'>Select an image file</label>
                    <input type='file' name='avatar' id='avatar-input' accept='image/*'>
                </div>
                <button class='btn'>Change Profile Picture</button>";
            break;
        case 'users':
            // foreach($users as $user) {
                echo "
                    <div class='user-card card'>
                        <img src='' alt=''>
                        <h3></h3>
                    </div>";
            //}

            break;
        default:
            http_response_code(404);
            echo "<p>Seção inválida.</p>";
            break;
    }
?>