<style>
    .cardMargin{
        -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
        box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
    }
</style>
<div class="page">
    <div class="row" style="margin-top: 30px;">
        <div class="col-4">
            <div class="card cardMargin">
                <div class="card-body">
                    <div class="row" style="margin-left: 10px;">
                        <h3>Crear una nueva beca:</h3>
                        
                    </div>
                    <div class="responseText"></div>
                    <form style="margin-top: 10px;" id="formBecasAdd">
                        <div class="form-group">
                            <label >Pais :</label>
                            <input type="text" class="form-control" id="pais" name="pais">
                        </div>
                        <div class="form-group">
                            <label >Nombre de la beca:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre">
                        </div>
                        <div class="form-group">
                            <label >Link :</label>
                            <input type="text" class="form-control" id="link" name="link">
                        </div>
                        <div class="form-group">
                            <label >Apertura de Recepción Solicitudes :</label>
                            <input type="text" class="form-control" id="apertura" name="apertura">
                        </div>
                        <div class="form-group">
                            <label >Cierre :</label>
                            <input type="text" class="form-control" id="cierre" name="cierre">
                        </div>
                        <div class="form-group">
                            <label >Período de Evaluaci&oacute;n :</label>
                            <input type="text" class="form-control" id="periodoEvaluacion" name="periodoEvaluacion">
                        </div>
                        <div class="form-group">
                            <label >Resultados :</label>
                            <input type="text" class="form-control" id="resultados" name="resultados">
                        </div>
                        <div class="form-group">
                            <label >Proceso de Asignaci&oacute;n y Formalizaci&oacute;n :</label>
                            <input type="text" class="form-control" id="asignacion" name="asignacion">
                        </div>
                        <div class="form-group">
                            <label >Monto :</label>
                            <input type="text" class="form-control" id="monto" name="monto">
                        </div>
                        <div class="form-group">
                            <label >Programa :</label>
                            <input type="text" class="form-control" id="programa" name="programa">
                        </div>
                        <div class="form-group">
                            <label >Descripci&oacute;n :</label>
                            <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
                        </div>
                        <div class="form-group">
                            <label >Convenio Universidades :</label>
                            <input type="text" class="form-control" id="convenio" name="convenio">
                        </div>
                        <button type="submit" class="button btn btn-success" >Registrar</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="card cardMargin">
                <div class="card-body">
                    <div class="row">
                        <?php for ($i=0; $i < count($becasAll); $i++) { ?> 
                            <div class="col-4">
                                <div class="card cardMargin">
                                    <div class="card-body">
                                        <h5 class="card-title"><?=$becasAll[$i]['nombreBeca']?></h5>
                                        <h6 class="card-subtitle mb-2 text-muted"><?=$becasAll[$i]['paisBeca']?></h6>
                                        <p class="card-text"><?=$becasAll[$i]['descripcionBeca']?></p>
                                        <a href="<?=$becasAll[$i]['linkBeca']?>" class="card-link" target="__blank"><?=$becasAll[$i]['linkBeca']?></a>
                                        
                                        <div class="row" style="margin: 10px;">
                                            <button type="button" class="btn btn-info verMas-btn" id="<?=$becasAll[$i]['idBeca']?>">Ver mas</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form style="margin-top: 10px;" id="formBecasPut">
            <div class="form-group">
                <label >Pais :</label>
                <input type="text" class="form-control" id="paisPut" name="paisPut" disabled>
            </div>
            <div class="form-group">
                <label >Nombre de la beca:</label>
                <input type="text" class="form-control" id="nombrePut" name="nombrePut" disabled>
            </div>
            <div class="form-group">
                <label >Link :</label>
                <input type="text" class="form-control" id="linkPut" name="linkPut" disabled>
            </div>
            <div class="form-group">
                <label >Apertura de Recepción Solicitudes :</label>
                <input type="text" class="form-control" id="aperturaPut" name="aperturaPut" disabled>
            </div>
            <div class="form-group">
                <label >Cierre :</label>
                <input type="text" class="form-control" id="cierrePut" name="cierrePut" disabled>
            </div>
            <div class="form-group">
                <label >Período de Evaluaci&oacute;n :</label>
                <input type="text" class="form-control" id="periodoEvaluacionPut" name="periodoEvaluacionPut" disabled>
            </div>
            <div class="form-group">
                <label >Resultados :</label>
                <input type="text" class="form-control" id="resultadosPut" name="resultadosPut" disabled>
            </div>
            <div class="form-group">
                <label >Proceso de Asignaci&oacute;n y Formalizaci&oacute;n :</label>
                <input type="text" class="form-control" id="asignacionPut" name="asignacionPut" disabled>
            </div>
            <div class="form-group">
                <label >Monto :</label>
                <input type="text" class="form-control" id="montoPut" name="montoPut" disabled>
            </div>
            <div class="form-group">
                <label >Programa :</label>
                <input type="text" class="form-control" id="programaPut" name="programaPut" disabled>
            </div>
            <div class="form-group">
                <label >Descripci&oacute;n :</label>
                <textarea class="form-control" id="descripcionPut" name="descripcionPut" disabled></textarea>
            </div>
            <div class="form-group">
                <label >Convenio Universidades :</label>
                <input type="text" class="form-control" id="convenioPut" name="convenioPut" disabled>
            </div>
            <div class="btnsEdit">
                
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary edit-info">Editar info</button>
      </div>
    </div>
  </div>
</div>