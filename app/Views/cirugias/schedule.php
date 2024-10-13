<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.css">
    <link href="<?php echo base_url(); ?>css/Estilo.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/Tablas.css">
    <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <title>Agendar Cirugía</title>
</head>
<body>
    <center>
        <table border="0" class="ventanas" width="650" cellspacing="0" cellpadding="0">
            <tr>
                <td class="tabla_ventanas_login" colspan="3">
                    <legend align="center">.: Agendar Nueva Cirugía :.</legend>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <?php echo form_open('cirugias/schedule', array('class' => 'form-horizontal')); ?>
                    <center>
                        <table border="0">
                            <tr>
                                <td><label for="paciente">Paciente:</label></td>
                                <td>
                                    <input type="text" name="paciente" id="paciente" size="50" placeholder="Nombre del paciente" required class="form-control">
                                </td>
                                <td><font color="red"><?php echo form_error('paciente'); ?></font></td>
                            </tr>
                            <tr>
                                <td><label for="tipo_cirugia">Tipo de Cirugía:</label></td>
                                <td>
                                    <input type="text" name="tipo_cirugia" id="tipo_cirugia" size="50" placeholder="Tipo de cirugía" required class="form-control">
                                </td>
                                <td><font color="red"><?php echo form_error('tipo_cirugia'); ?></font></td>
                            </tr>
                            <tr>
                                <td><label for="medico_responsable">Médico Responsable:</label></td>
                                <td>
                                    <input type="text" name="medico_responsable" id="medico_responsable" size="50" placeholder="Nombre del médico" required class="form-control">
                                </td>
                                <td><font color="red"><?php echo form_error('medico_responsable'); ?></font></td>
                            </tr>
                            <tr>
                                <td><label for="fecha">Fecha:</label></td>
                                <td>
                                    <input type="date" name="fecha" id="fecha" required class="form-control">
                                </td>
                                <td><font color="red"><?php echo form_error('fecha'); ?></font></td>
                            </tr>
                            <tr>
                                <td><label for="hora">Hora:</label></td>
                                <td>
                                    <input type="time" name="hora" id="hora" required class="form-control">
                                </td>
                                <td><font color="red"><?php echo form_error('hora'); ?></font></td>
                            </tr>
                            <tr>
                                <td colspan="3"><hr/></td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <center>
                                        <button type="submit" class="btn btn-success">Agendar</button>
                                    </center>
                                </td>
                            </tr>
                        </table>
                    </center>
                    <?php echo form_close(); ?>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>
