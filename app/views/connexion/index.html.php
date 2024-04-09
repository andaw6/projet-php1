<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?=PATH_CSS?>/connexion.css">
</head>
<body>
    <section id="connect" class="flex-cc">
        <form method="post" class="flex-col"  action="">
            <input type="hidden" name="page" value="1">
            <div class="header">
                <div class="logo">
                <img src="<?=PATH_IMG?>/logo.png">
                </div>
            </div>
            <div class="content flex-col">
                <div class="box msg-error error">
                    <span>Email et Mot de Passe Requis</span>
                </div>
                <div class="box">
                    <label for="email">Addresse Email <span>*</span></label>
                    <div class="box-input">
                        <input type="text" name="email" placeholder="Entrer votre addresse email">
                    </div>
                </div>
                <div class="box">
                    <label for="password">Mot de passe <span>*</span></label>
                    <div class="box-input">
                        <input type="password" name="password" placeholder="Entrer votre mot de passe">
                        <span class="icon flex-cc"><i class='bx bxs-hide' ></i></span>
                    </div>
                </div>
            </div>
            <div class="footer flex-col">
                <div class="flex-sbc">
                    <label class="check flex">
                        <input type="checkbox" name="remember">
                        <label for="remember">Remember me</label>
                    </label>
                    <a href="">Mot de passe oublié?</a>
                </div>
                <div>
                    <input type="submit" value="Log In" id="connecting" name="connect">
                </div>
            </div>
        </form>
    </section>
</body>
</html>