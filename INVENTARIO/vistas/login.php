<div class="main-container" style="display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #f5f5f5;">

    <form class="box login" action="" method="POST" autocomplete="off" style="width: 400px;">
        <!-- Logo de la empresa -->
        <div class="has-text-centered mb-4">
            <img src="img/logolatino.jpeg" alt="Logo Empresa" style="max-width: 150px;">
        </div>

        <h5 class="title is-5 has-text-centered is-uppercase">Sistema de inventario</h5>

        <div class="field">
            <label class="label">Usuario</label>
            <div class="control">
                <input class="input" type="text" name="login_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required >
            </div>
        </div>

        <div class="field">
            <label class="label">Clave</label>
            <div class="control">
                <input class="input" type="password" name="login_clave" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required >
            </div>
        </div>

		<p class="has-text-centered mb-4 mt-3">
            <button type="submit" class="button is-info is-rounded" style="transition: background-color 0.3s, transform 0.3s;" onmouseover="this.style.backgroundColor='#209cee'; this.style.transform='scale(1.1)';" onmouseout="this.style.backgroundColor='#3273dc'; this.style.transform='scale(1)';">Iniciar sesión</button>
        </p>

        <?php
            if(isset($_POST['login_usuario']) && isset($_POST['login_clave'])){
                require_once "./php/main.php";
                require_once "./php/iniciar_sesion.php";
            }
        ?>
    </form>

</div>
