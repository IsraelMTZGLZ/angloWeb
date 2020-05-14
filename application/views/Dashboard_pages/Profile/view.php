<style>@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,600);
@import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);
.snip1344 {
  font-family: 'Open Sans', Arial, sans-serif;
  position: relative;
  overflow: hidden;
  margin: 10px;
  min-width: 230px;
  max-width: 315px;
  width: 100%;
  color: #ffffff;
  text-align: center;
  line-height: 1.4em;
  background-color: #141414;
}
.snip1344 * {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.25s ease;
  transition: all 0.25s ease;
}
.snip1344 .background {
  width: 100%;
  vertical-align: top;
  opacity: 0.2;
  -webkit-filter: grayscale(100%) blur(10px);
  filter: grayscale(100%) blur(10px);
  -webkit-transition: all 2s ease;
  transition: all 2s ease;
}
.snip1344 figcaption {
  width: 100%;
  padding: 15px 25px;
  position: absolute;
  left: 0;
  top: 50%;
}
.snip1344 .profile {
  border-radius: 50%;
  position: absolute;
  bottom: 50%;
  left: 50%;
  max-width: 100px;
  opacity: 1;
  box-shadow: 3px 3px 20px rgba(0, 0, 0, 0.5);
  border: 2px solid rgba(255, 255, 255, 0.5);
  -webkit-transform: translate(-50%, 0%);
  transform: translate(-50%, 0%);
}
.snip1344 h3 {
  margin: 0 0 5px;
  font-weight: 400;
}
.snip1344 h3 span {
  display: block;
  font-size: 0.6em;
  color: #f39c12;
  opacity: 0.75;
}
.snip1344 i {
  padding: 10px 5px;
  display: inline-block;
  font-size: 32px;
  color: #ffffff;
  text-align: center;
  opacity: 0.65;
}
.snip1344 a {
  text-decoration: none;
}
.snip1344 i:hover {
  opacity: 1;
  -webkit-transition: all 0.35s ease;
  transition: all 0.35s ease;
}
.snip1344:hover .background,
.snip1344.hover .background {
  -webkit-transform: scale(1.3);
  transform: scale(1.3);
}
.snip1344:hover .profile {
  opacity: 0.3;
}

.snip1344:hover .middle {
  opacity: 1;
}
.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}
</style>
<?=var_dump($user)?>
<div class="page">
    <div class="page-content container-fluid">
      <div class="row">
          <div class="col-lg-4 col-sm-12">
            <figure class="snip1344">
                <img src="<?=@($user->photoUrl!='NULL') ? @$user->photoUrl : base_url("resources/assets/Anglo/AngloLatino-sintexto.png") ;?>" alt="profile-sample1" class="background"/>
                <img src="<?=@($user->photoUrl!='NULL') ? @$user->photoUrl : base_url("resources/assets/Anglo/AngloLatino-sintexto.png") ;?>" alt="profile-sample1" class="profile"/>
                <div class="middle" style="margin-top: -15%">
                    <div class="text"><a type="button" class="add-foto" alt="Cambiar Foto" title="Cambiar Foto"><i class="fas fa-plus-circle"></i></a></div>
                </div>
                <figcaption>
                    <h3 style="color: white"><?=$user->fullname?><span><?=$user->email?></span></h3>
                    <div class="icons"><a href="#"><i class="ion-social-reddit-outline"></i></a><a href="#"> <i class="ion-social-twitter-outline"></i></a><a href="#"> <i class="ion-social-vimeo-outline"></i></a></div>
                </figcaption>
            </figure>
          </div>
      </div>

    </div>
</div>

<div class="modal fade" id="examplePositionCenter" aria-hidden="true" aria-labelledby="examplePositionCenter" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-simple modal-center">
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Cambiar Foto</h4>
        </div>
        <div class="modal-body">
            <input type="hidden" name="photo" id="photo" value="<?=@$user->photo?>">
            <form id="photoUserForm">
                <ul class="list-group list-group-bordered">
                    <li class="list-group-item list-group-item-action active" style="font-size: 16px;">1. Inserta la foto que deseas utilizar.</li>
                </ul>
                <div class="photoUserAlert">
                </div>
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <input type="file" id="input-file-now" data-plugin="dropify" data-default-file="" id="PhotoUser" name="PhotoUser">

                    </div>
                    <div class="col-md-4 col-sm-12 vertical-align-middle">
                    <button type="button" class="btn btn-block btn-info" style="margin-top:20%" id="btn-photoUser">Subir</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
