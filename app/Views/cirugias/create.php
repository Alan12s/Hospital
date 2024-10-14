<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php echo site_url('cirugias/store'); ?>" method="post">
    <label for="id_paciente">Paciente:</label>
    <select name="id_paciente" id="id_paciente" required>
        <?php foreach ($pacientes as $paciente): ?>
            <option value="<?php echo $paciente['id']; ?>"><?php echo $paciente['nombre']; ?></option>
        <?php endforeach; ?>
    </select>

    <label for="descripcion">Descripción:</label>
    <input type="text" name="descripcion" id="descripcion" required>

    <label for="id_medico">Médico:</label>
    <input type="text" name="id_medico" id="id_medico" required>

    <label for="fecha">Fecha:</label>
    <input type="date" name="fecha" id="fecha" required>

    <label for="sala">Sala:</label>
    <input type="text" name="sala" id="sala" required>

    <button type="submit">Guardar</button>

</form>

<a href="<?= base_url('cirugias'); ?>">Volver a la lista</a>
</body>
</html>