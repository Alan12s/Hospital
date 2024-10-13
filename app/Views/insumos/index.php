<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Insumos</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link href="http://localhost/hospital_cirugias/css/Estilo.css" rel="stylesheet" type="text/css"/>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            if (!$.fn.DataTable.isDataTable('#insumos')) {
                $('#insumos').dataTable({
                    "sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>",
                });
            }
        });
    </script>
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Insumos</h1>
        <a href="<?php echo site_url('insumos/create'); ?>" class="btn btn-primary mb-3">Agregar Insumo</a>
        <table id="insumos" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Código</th>
                    <th>Artículo</th>
                    <th>Cantidad</th>
                    <th>Unidad de Medida</th>
                    <th>Ubicación</th>
                    <th>Lote</th>
                    <th>Fecha de Vencimiento</th>
                    <th>Observaciones</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($insumos)) : ?>
                    <?php foreach ($insumos as $insumo) : ?>
                        <tr>
                            <td><?php echo $insumo->id; ?></td>
                            <td><?php echo $insumo->codigo; ?></td>
                            <td><?php echo $insumo->articulo; ?></td>
                            <td><?php echo $insumo->cantidad; ?></td>
                            <td><?php echo $insumo->unidad_medida; ?></td>
                            <td><?php echo $insumo->ubicacion; ?></td>
                            <td><?php echo $insumo->lote; ?></td>
                            <td><?php echo $insumo->fecha_vencimiento; ?></td>
                            <td><?php echo $insumo->observaciones; ?></td>
                            <td>
                                <a href="<?php echo site_url('insumos/edit/'.$insumo->id); ?>" class="btn btn-success">Editar</a>
                                <a href="<?php echo site_url('insumos/delete/'.$insumo->id); ?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="10">No hay insumos.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
