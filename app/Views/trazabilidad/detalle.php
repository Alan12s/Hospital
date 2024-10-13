<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.css">
    <link href="<?php echo base_url(); ?>css/Estilo.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/Tablas.css">
    <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <title>Detalles de Trazabilidad</title>
</head>
<body>
    <h1>Detalles de Trazabilidad para Cirugía ID <?php echo $cirugia->id; ?></h1>
    <table class="pretty">
        <thead>
            <tr>
                <th>ID Insumo</th>
                <th>Nombre</th>
                <th>Cantidad Utilizada</th>
                <th>Fecha de Uso</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($insumos)) : ?>
                <?php foreach ($insumos as $insumo) : ?>
                    <tr>
                        <td><?php echo $insumo->id; ?></td>
                        <td><?php echo $insumo->nombre; ?></td>
                        <td><?php echo $insumo->cantidad_utilizada; ?></td>
                        <td><?php echo $insumo->fecha_uso; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="4">No se han utilizado insumos en esta cirugía.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
