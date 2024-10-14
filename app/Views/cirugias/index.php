<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link href="<?= base_url('css/Estilo.css'); ?>" rel="stylesheet" type="text/css"/>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript">
        /* CIRUGÍAS */
        $(document).ready(function() {
            if (!$.fn.DataTable.isDataTable('#cirugias')) {
                $('#cirugias').dataTable({
                    "sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>",
                });
            }
        });
    </script>

    <title>Listar Cirugías</title>
</head>


<body>
    <h1>Cirugías</h1>

    <a href="<?= base_url('cirugias/create'); ?>" class="btn btn-primary">Agregar Cirugía</a>
    <table id="cirugias" class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Paciente</th>
                <th>Tipo de Cirugía</th>
                <th>Médico Responsable</th>
                <th>Fecha</th>
                <th>Sala</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php if (!empty($cirugias)) : ?>
            <?php foreach ($cirugias as $cirugia) : ?>
                <tr>
                    <td><?php echo $cirugia['id']; ?></td>
                    <td><?php echo isset($pacientes[$cirugia['id_paciente']]) ? $pacientes[$cirugia['id_paciente']]['nombre'] : 'Desconocido'; ?></td>
                    <td><?php echo $cirugia['descripcion']; ?></td>
                    <td><?php echo $cirugia['id_medico']; ?></td>
                    <td><?php echo $cirugia['fecha']; ?></td>
                    <td><?php echo $cirugia['sala']; ?></td>
                    <td>
                        <a href="<?php echo site_url('cirugias/edit/' . $cirugia['id']); ?>" class="btn btn-success">Editar</a>
                        <a href="<?php echo site_url('cirugias/delete/' . $cirugia['id']); ?>" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td colspan="7">No hay cirugías programadas.</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
</body>
</html>