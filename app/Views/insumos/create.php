<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Insumo</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.css') ?>">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('css/Estilo.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/Tablas.css') ?>">

    <!-- jQuery -->
    <script src="<?= base_url('js/jquery.js') ?>"></script>

    <!-- Bootstrap JS -->
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

    <!-- DataTables JS -->
    <script src="<?= base_url('js/jquery.dataTables.js') ?>"></script>
</head>
<body>
    <center>
        <table border="0" class="ventanas" width="650" cellspacing="0" cellpadding="0">
            <tr>
                <td class="tabla_ventanas_login" colspan="3">
                    <legend align="center">.: Agregar Insumo :.</legend>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <!-- Formulario -->
                    <form action="<?= site_url('insumos/store') ?>" method="post" class="form-horizontal">
                        <center>
                            <table border="0">

                            <tr>
                                    <td><label for="nombre">Codigo:</label></td>
                                    <td>
                                        <input type="text" name="codigo" id="codigo" size="50" placeholder="Codigo" required class="form-control">
                                    </td>
                                    <td>
                                        <font color="red"><?= isset($validation) ? $validation->getError('nombre') : '' ?></font>
                                    </td>
                                </tr>
                                <!-- Articulo -->
                                <tr>
                                    <td><label for="nombre">Articulo:</label></td>
                                    <td>
                                        <input type="text" name="articulo" id="articulo" size="50" placeholder="Nombre del Insumo" required class="form-control">
                                    </td>
                                    <td>
                                        <font color="red"><?= isset($validation) ? $validation->getError('nombre') : '' ?></font>
                                    </td>
                                </tr>


                                <!-- Cantidad -->
                                <tr>
                                    <td><label for="cantidad">Cantidad:</label></td>
                                    <td>
                                        <input type="number" name="cantidad" id="cantidad" size="50" placeholder="Cantidad" required class="form-control">
                                    </td>
                                    <td>
                                        <font color="red"><?= isset($validation) ? $validation->getError('cantidad') : '' ?></font>
                                    </td>
                                </tr>
                                <!-- Ubicacion -->
                                <tr>
                                    <td><label for="nombre">Ubicacion:</label></td>
                                    <td>
                                        <input type="text" name="ubicacion" id="ubicacion" size="50" placeholder="Ubicacion" required class="form-control">
                                    </td>
                                    <td>
                                        <font color="red"><?= isset($validation) ? $validation->getError('ubicacion') : '' ?></font>
                                    </td>
                                </tr>




                                <!-- Unidad de medida -->
                                <tr>
                                    <td><label for="nombre">Unidad de medida:</label></td>
                                    <td>
                                        <input type="text" name="unidad_medida" id="unidad_medida" size="50" placeholder="Unidad de medida" required class="form-control">
                                    </td>
                                    <td>
                                        <font color="red"><?= isset($validation) ? $validation->getError('nombre') : '' ?></font>
                                    </td>
                                </tr>





                              <!-- Observaciones-->
                                <tr>
                                    <td><label for="nombre">observaciones:</label></td>
                                    <td>
                                        <input type="text" name="observaciones" id="observaciones" size="50" placeholder="Observacion" required class="form-control">
                                    </td>
                                    <td>
                                        <font color="red"><?= isset($validation) ? $validation->getError('nombre') : '' ?></font>
                                    </td>
                                </tr>












                                <!--Lote -->
                                <tr>
                                    <td><label for="lote">lote:</label></td>
                                    <td>
                                        <input type="text" name="lote" id="lote" size="50" placeholder="lote" required class="form-control">
                                    </td>
                                    <td>
                                        <font color="red"><?= isset($validation) ? $validation->getError('lote') : '' ?></font>
                                    </td>
                                </tr>

                                <!-- Fecha de Ingreso -->
                                <tr>
                                    <td><label for="fecha_ingreso">Fecha de vencimiento:</label></td>
                                    <td>
                                        <input type="date" name="fecha_vencimiento" id="fecha_vencimiento" size="50" required class="form-control">
                                    </td>
                                    <td>
                                        <font color="red"><?= isset($validation) ? $validation->getError('fecha_ingreso') : '' ?></font>
                                    </td>
                                </tr>

                                <!-- Separador -->
                                <tr>
                                    <td colspan="3"><hr/></td>
                                </tr>

                                <!-- Botón de guardar -->
                                <tr>
                                    <td colspan="3">
                                        <center>
                                            <button type="submit" class="btn btn-success">Guardar</button>
                                        </center>
                                    </td>
                                </tr>
                            </table>
                        </center>
                    </form>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>
