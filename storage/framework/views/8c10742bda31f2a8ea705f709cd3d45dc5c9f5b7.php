 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dejanos un mensaje</title>
</head>
<body>
    <form action="<?php echo e(route('/insert-provincias')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label>
            Nombre:
        <input type="text" name="name"></inpit>
        </label>
        <label>
            Correo:
        <input type="text" name="email"></inpit>
        </label>
        <label>
            Mensaje:
      <textarea name="mensaje"></textarea>
      </label>
      <button type="submit">Enviar aqui:</button>
    </form> 
     
</body>
</html><?php /**PATH C:\xampp\htdocs\mailsito\resources\views/contactanos/index.blade.php ENDPATH**/ ?>