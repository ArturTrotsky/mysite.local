<form name="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <div>
        <p><textarea name="text"></textarea></p>  <!-- Введеный текст запишется в $_POST['text'] -->
        <input type="submit" name="form" value="Отправить" />
    </div>
</form>
