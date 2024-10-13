<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.css">
    <link href="<?php echo base_url(); ?>css/Estilo.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/Tablas.css">
    <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <title>Reporte de Consumos</title>
</head>
<body>
    <h1>Reporte de Consumo de Insumos</h1>
    <table class="pretty">
        <thead>
            <tr>
                <th>ID Insumo</th>
                <th>Nombre</th>
                <th>Total Consumido</th>
                <th>Última Fecha de Consumo</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($consumos)) : ?>
                <?php foreach ($consumos as $consumo) : ?>
                    <tr>
                        <td><?php echo $consumo->id; ?></td>
                        <td><?php echo $consumo->nombre; ?></td>
                        <td><?php echo $consumo->total_consumido; ?></td>
                        <td><?php echo $consumo->ultima_fecha; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="4">No hay datos de consumo disponibles.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
