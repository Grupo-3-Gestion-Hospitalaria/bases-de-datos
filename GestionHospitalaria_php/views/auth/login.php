<?php
$this->layout('layouts/base', ['title' => 'Iniciar Sesión']);
$this->start('content');
?>
<!-- Formulario HTML -->
<form method="POST" action="/login">
    <input type="text" name="user_id" placeholder="Documento de Identidad">
    <input type="password" name="password" placeholder="Contraseña">
    <button type="submit">Iniciar Sesión</button>
</form>
<?php $this->end(); ?>