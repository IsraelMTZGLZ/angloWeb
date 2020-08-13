<style media="screen">
.card-c{

  background: white;
  width: auto;
  display: inline-block;

  text-align: center;
  box-shadow: -1px 1px 20px -12px #3e8ef7;
}

</style>
<div class="page">
  <div class="page-header">
    <h1 class="page-title">Becas</h1>
  </div>

  <div class="page-content">
    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title">Becas</h3>
      </div>
      <div class="panel-body">
        <div class="row row-lg">

        <div class="col-xl-4 col-lg-6">
              <div class="example-wrap">
                <h4 class="example-title">Documento</h4>
                <div class="example">
                  <form id="docBeca">
                    <input type="file" id="input-file-beca" name="Beca.pdf" data-plugin="dropify"  />
                  </form>
                </div>
              </div>
        </div>
        <div class="col-xl-4 col-lg-6">
          <div class="example-wrap">
            <h4 class="example-title ">Documento extra</h4>
            <div class="example">
              <form id="docBecaExtra">
                <input type="file" id="input-file-extra-beca" name="BecaExtra.pdf" data-plugin="dropify"  />
              </form>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6">
          <!-- Example Animation -->
          <div class="example-wrap">
            <h4 class="example-title">Tipos de estudio</h4>
            <p>Selecciona una opción</p>
            <div class="example">
              <select class="form-control" data-plugin="select2" data-placeholder="Select a State"
                data-allow-clear="true" id="tipoEstudio" name="tipoEstudio">
                <option></option>
                <option class="dropdown-item" href="javascript:void(0)" role="menuitem" value="Universidad">Universidad</option>
                <option class="dropdown-item" href="javascript:void(0)" role="menuitem" value="Preparatoria">Preparatoria</option>
                <option class="dropdown-item" href="javascript:void(0)" role="menuitem" value="CursoIngles">CursoIngles</option>
                <option class="dropdown-item" href="javascript:void(0)" role="menuitem" value="CursoVeranoIngles">CursoVeranoIngles</option>
                <option class="dropdown-item" href="javascript:void(0)" role="menuitem" value="CursoVeranoAcademico">CursoVeranoAcademico</option>
              </select>
            </div>


          </div>

        </div>

          <!-- Example Animation -->
          <div class="col-md-6 col-xl-12 col-lg-6">
            <!-- Example Basic Form (Form row) -->
            <div class="example-wrap">
              <h4 class="example-title"></h4>
              <div class="example">
                <form autocomplete="off">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label class="form-control-label" for="inputBasicFirstName">Descripción</label>
                        <textarea class="form-control" id="descriptionBeca" rows="1" ></textarea>
                    </div>
                    <div class="form-group col-md-6">
                      <label class="form-control-label" for="inputBasicLastName">Estados</label>
                      <input type="text" class="form-control" id='estadosId' data-plugin="tokenfield" value=""
                      />
                    </div>
                  </div>

                  <div class="form-group text-center">
                    <button type="button" class="btn btn-primary btn-subir-info-becas">Subir </button>
                  </div>
                </form>
              </div>
            </div>
            <!-- End Example Basic Form (Form row) -->
          </div>


        </div>
        <div class="text-center" id="showInstSelected">
         <ul class="blocks blocks-100 blocks-xxl-4 blocks-lg-3 blocks-md-2" data-plugin="filterable"
          data-filters="#exampleFilter" >

          <!-- <li data-type="animal">

            <div class="card card-shadow">
              <label for="<?=$i?>">

              <img class="card-img-top img-fluid w-full" src="<?=base_url('resources/assets/Informativa/images/uk_universities.jpg');?>"
                alt="Card image cap">
                <div class="checkbox-custom checkbox-success checkbox-lg checkA">
                  <input type="checkbox" class="selectable-item uni checkboxc"  id="<?=$i?>" value="<?=@$instituciones[$i]['idInstitucion']?>">
                  <label for="media_1"></label>
                </div>
              <div class="card-block">
                <h4 class="card-title"><?=@$instituciones[$i]['nombreInstitucion'];?></h4>
              </div>
              <ul class="list-group list-group-dividered px-20 mb-0">
                <li class="list-group-item px-0"><?=@$instituciones[$i]['abreviacionEdad'];?> <?=@$instituciones[$i]['nombreEdad'];?> <?=@$instituciones[$i]['edadEdad'];?></li>
                <li class="list-group-item px-0"><?=@$instituciones[$i]['abreviacionCampamento'];?> <?=@$instituciones[$i]['nombreCampamento'];?></li>
                <li class="list-group-item px-0"><?=@$instituciones[$i]['abreviacionTipoAlojamiento'];?> <?=@$instituciones[$i]['nombreTipoAlojamiento'];?></li>
              </ul>

                </label>
            </div>
          </li> -->

        </ul>
        </div>
      </div>
    </div>
