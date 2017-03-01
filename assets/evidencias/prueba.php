<script>
    $( function() {
        $( "#draggable1, #draggable2" ).draggable();

        $( "#droppable1, #droppable2, #droppable3, #droppable4, #droppable5, #droppable6, #droppable7, #droppable8, #droppable9" ).droppable({
            drop: function(event, ui) {


                $(this).addClass("ui-state-highlight").find("p").html("Dropped!");

                if ($(this).find(".embalaje").length >= 1) {
                    ui.draggable.draggable('option', 'revert', true);
                    return;
                }

                ui.draggable.appendTo(this).css ({
                    top: '0',
                    left: '0'
                });
            },

            out: function(event, ui) {
                $(this).removeClass("ui-state-highlight").find("p").html("Drop here");
            }
        });

    });
</script>

<div class="row  border-bottom white-bg dashboard-header">
    <h2>Nuevo de vehículo</h2>
    <small>Registro de vehículos (patrullas, motos, autobús, bicicletas)</small>
    <br><br>
    <ol class="breadcrumb">
        <li><a href="?cargar=principal">Inicio</a></li>
        <li>Vehículo</li>
        <li class="active"><strong>Registro</strong></li>
    </ol>
</div>

<div class="wrapper wrapper-content animated fadeInRight">

    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-title">
                    <h5>Nuevo vehículo</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content" id="padre">
                    <div class="row">
                        <p>A continuación podrá arrastrar y soltar las cajas a un espacio disponible en la estantería.</p>
                        <br>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div id="imagen">
                                <img src="../img/estante.jpg" id="estante">
                            </div>

                            <div id="droppable1" class="ui-widget-header">
                                <p>Drop here</p>
                            </div>

                            <div id="droppable2" class="ui-widget-header">
                                <p>Drop here</p>
                            </div>

                            <div id="droppable3" class="ui-widget-header">
                                <p>Drop here</p>
                            </div>

                            <div id="droppable4" class="ui-widget-header">
                                <p>Drop here</p>
                            </div>

                            <div id="droppable5" class="ui-widget-header">
                                <p>Drop here</p>
                            </div>

                            <div id="droppable6" class="ui-widget-header">
                                <p>Drop here</p>
                            </div>

                            <div id="droppable7" class="ui-widget-header">
                                <p>Drop here</p>
                            </div>

                            <div id="droppable8" class="ui-widget-header">
                                <p>Drop here</p>
                            </div>

                            <div id="droppable9" class="ui-widget-header">
                                <p>Drop here</p>
                            </div>

                        </div>
                        <div class="col-lg-4">
                            <div id="draggable1" class="ui-widget-content embalaje">
                                <img src="../img/caja.png" class="caja">
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div id="draggable2" class="ui-widget-content embalaje">
                                <img src="../img/caja.png" class="caja">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="footer">
    <div class="pull-right">
        10GB of <strong>250GB</strong> Free.
    </div>
    <div>
        <strong>Copyright</strong> Example Company &copy; 2014-2015
    </div>
</div>
