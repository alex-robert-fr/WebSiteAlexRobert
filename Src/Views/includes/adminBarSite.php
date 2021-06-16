<?php
if (session_status() === PHP_SESSION_ACTIVE && isset($_SESSION['admin']) && $_SESSION['admin']) {?>
    <div class="bar">
        <aside class="bar__dashboard">
            <button><a href="<?=$router->url('dashboard')?>">Back to dashboard</a></button>
            <form action="" method="post">
                <button type="submit" name="disconnection">Disconnection</button>
            </form>
        </aside>
    </div>

<?php } ?>