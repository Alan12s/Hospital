<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.css">
<link href="<?php echo base_url();?>css/Estilo.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/Tablas.css">
<script type="text/javascript" language="javascript" src="<?php echo base_url();?>js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url();?>js/jquery.dataTables.js"></script>    
<title>Editar Insumo</title>
</head>
<body>


    <center>
        <table border="0" class="ventanas" width="650" cellspacing="0" cellpadding="0">
            <tr>
                <td class="tabla_ventanas_login" colspan="3">
                    <legend align="center">.: Editar Insumo :.</legend>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <form method="post" action="<?php echo site_url('insumos/edit/'.$insumo->id); ?>" class="form-horizontal">
                    <center>
        <table border="0" class="ventanas" width="650" cellspacing="0" cellpadding="0">
            <tr>
                <td class="tabla_ventanas_login" colspan="3">
                    <legend align="center">.: Editar Insumo :.</legend>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <form method="post" action="<?php echo site_url('insumos/edit'.$insumo->id); ?>" class="form-horizontal">
                        <center>
                            <table border="0">

                                <tr>
                                    <td><label for="codigo">Código:</label></td>
                                    <td>
                                        <input type="text" name="codigo" id="codigo" size="50" value="<?php echo $insumo->codigo; ?>" placeholder="Código" required class="form-control">
                                    </td>
                                    <td><font color="red"><?php echo isset($validation) ? $validation->getError('codigo') : ''; ?></font></td>
                                </tr>

                                <tr>
                                    <td><label for="articulo">Artículo:</label></td>
                                    <td>
                                        <input type="text" name="articulo" id="articulo" size="50" value="<?php echo $insumo->articulo; ?>" placeholder="Nombre del Insumo" required class="form-control">
                                    </td>
                                    <td><font color="red"><?php echo isset($validation) ? $validation->getError('articulo') : ''; ?></font></td>
                                </tr>

                                <tr>
                                    <td><label for="cantidad">Cantidad:</label></td>
                                    <td>
                                        <input type="number" name="cantidad" id="cantidad" size="50" value="<?php echo $insumo->cantidad; ?>" placeholder="Cantidad" required class="form-control">
                                    </td>
                                    <td><font color="red"><?php echo isset($validation) ? $validation->getError('cantidad') : ''; ?></font></td>
                                </tr>

                                <tr>
                                    <td><label for="unidad_medida">Unidad de medida:</label></td>
                                    <td>
                                        <input type="text" name="unidad_medida" id="unidad_medida" size="50" value="<?php echo $insumo->unidad_medida; ?>" placeholder="Unidad de medida" required class="form-control">
                                    </td>
                                    <td><font color="red"><?php echo isset($validation) ? $validation->getError('unidad_medida') : ''; ?></font></td>
                                </tr>

                                <tr>
                                    <td><label for="ubicacion">Ubicación:</label></td>
                                    <td>
                                        <input type="text" name="ubicacion" id="ubicacion" size="50" value="<?php echo $insumo->ubicacion; ?>" placeholder="Ubicación" required class="form-control">
                                    </td>
                                    <td><font color="red"><?php echo isset($validation) ? $validation->getError('ubicacion') : ''; ?></font></td>
                                </tr>

                                <tr>
                                    <td><label for="lote">Lote:</label></td>
                                    <td>
                                        <input type="text" name="lote" id="lote" size="50" value="<?php echo $insumo->lote; ?>" placeholder="Lote" required class="form-control">
                                    </td>
                                    <td><font color="red"><?php echo isset($validation) ? $validation->getError('lote') : ''; ?></font></td>
                                </tr>

                                <tr>
                                    <td><label for="observaciones">observaciones:</label></td>
                                    <td>
                                        <textarea name="observaciones" id="observaciones" rows="3" cols="50" placeholder="Descripción del Insumo" required class="form-control"><?php echo $insumo->observaciones; ?></textarea>
                                    </td>
                                    <td><font color="red"><?php echo isset($validation) ? $validation->getError('observaciones') : ''; ?></font></td>
                                </tr>

                                <tr>
                                    <td><label for="fecha_vencimiento">Fecha de vencimiento:</label></td>
                                    <td>
                                        <input type="date" name="fecha_vencimiento" id="fecha_vencimiento" size="50" value="<?php echo $insumo->fecha_vencimiento; ?>" required class="form-control">
                                    </td>
                                    <td><font color="red"><?php echo isset($validation) ? $validation->getError('fecha_vencimiento') : ''; ?></font></td>
                                </tr>
                                <tr>
                                    <td colspan="3"><hr/></td>
                                </tr>
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
