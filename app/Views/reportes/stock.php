<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.css">
    <link href="<?php echo base_url(); ?>css/Estilo.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/Tablas.css">
    <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <title>Reporte de Stock</title>
</head>
<body>
    <h1>Reporte de Stock de Insumos</h1>
    <table class="pretty">
        <thead>
            <tr>
                <th>ID Insumo</th>
                <th>Nombre</th>
                <th>Cantidad en Stock</th>
                <th>Fecha de Última Entrada</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($stock)) : ?>
                <?php foreach ($stock as $item) : ?>
                    <tr>
                        <td><?php echo $item->id; ?></td>
                        <td><?php echo $item->nombre; ?></td>
                        <td><?php echo $item->cantidad_stock; ?></td>
                        <td><?php echo $item->ultima_fecha_entrada; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="4">No hay datos de stock disponibles.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
