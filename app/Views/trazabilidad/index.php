<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.css">
    <link href="<?php echo base_url(); ?>css/Estilo.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/Tablas.css">
    <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <title>Trazabilidad de Cirugías</title>
</head>
<body>
    <h1>Trazabilidad de Cirugías</h1>
    <table id="cirugias" class="pretty">
        <thead>
            <tr>
                <th>ID Cirugía</th>
                <th>Paciente</th>
                <th>Tipo de Cirugía</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($cirugias)) : ?>
                <?php foreach ($cirugias as $cirugia) : ?>
                    <tr>
                        <td><?php echo $cirugia->id; ?></td>
                        <td><?php echo $cirugia->paciente; ?></td>
                        <td><?php echo $cirugia->tipo_cirugia; ?></td>
                        <td><?php echo $cirugia->fecha; ?></td>
                        <td>
                            <a href="<?php echo site_url('trazabilidad/detalle/'.$cirugia->id); ?>" class="btn btn-info">Ver Detalles</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="5">No hay cirugías registradas.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
