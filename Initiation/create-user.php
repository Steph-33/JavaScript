<?php

if (strtolower($_SERVER['REQUEST_METHOD']) === 'get') {
    header('Content-Type', 'text/html');
    echo '
        <form action="/create-user.php" method="post">
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name">
            </div>
            <div>
                <label for="age">Age</label>
                <input type="text" name="age" id="age">
            </div>
    
            <div>
                <input type="submit">
            </div>
        </form>
    ';
    exit;
}

if (strtolower($_SERVER['REQUEST_METHOD']) === 'post') {
    if (isset($_POST['name']) && isset($_POST['age']) && $_POST['name'] !== "" && $_POST['age'] !== "") {
        $response = [
            "success" => true,
            "message" => "Votre message a bien été transmis"
        ];
    } else {
        $response = [
            "message" => "Il y a des erreurs dans le formulaire"
        ];
    }

    echo json_encode($response);
    exit;
}
?>