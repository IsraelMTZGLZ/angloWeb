<body>
    <!-- preloader Start -->
    <!-- preloader Start -->
    <div id="preloader" style="background-color: #30a3f0;">
        <div id="status">
            <img src="https://pa1.narvii.com/6557/19b849c62b3f8e6ef9413f4fe9ac214ae6b99657_hq.gif" id="preloader_image" alt="loader">
        </div>
    </div>
    <div  class="cursor"></div>
    <!-- Top Scroll Start -->
<a href="javascript:" id="return-to-top"><img src="<?=base_url('resources/assets/Informativa/images/scroll.png');?>" alt="img"></a>

<!--Redes sociales bar-->

<div class="icon-bar">
  <a href="https://www.facebook.com/AngloLatino/" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a>
  <a href="#" class="whatsapp"><i class="fab fa-whatsapp"></i></a>
  <a href="#" class="linkedin"><i class="fab fa-linkedin"></i></a>
  <a href="#" class="instagram"><i class="fab fa-instagram"></i></i></a>
  <a href="tel:4422609090" class="google"><i class="fas fa-phone-volume"></i></a>
</div>

     <!-- chat start-->
  <div class="chat-popup">
   <div class="chat-windows">
     <div class="chat-window-one">
     <div id="chatContainer" style="height: 600px;">
       <iframe width="370" height="455" allow="microphone;" src="https://console.dialogflow.com/api-client/demo/embedded/88670589-0d1c-4d08-9ca8-0df56768162f"></iframe>
       </div>   
       
     </div>
   </div>
 </div>
 
<!--bar idioma-->
<div class="share-bar right"><!-- Set position: top,left,right,bottom -->
  <ul>
    <li class="<?php echo ($this->session->userdata('site_lang') == 'spanish') ? 'spanishActivo' : 'spanish'; ?>">
      <a href="<?php echo base_url(); ?>LanguageSwitcher/switchLang/spanish">
        <i class="flag-icon flag-icon-mx" aria-hidden="true"></i>
      </a>
    </li>
    <li class="<?php echo ($this->session->userdata('site_lang') == 'english') ? 'englishActivo' : 'english'; ?>">
      <a href="<?php echo base_url(); ?>LanguageSwitcher/switchLang/english">
        <i class="flag-icon flag-icon-gb" aria-hidden="true"></i>
      </a>
    </li>
    <li class="idioma">
      <a target="_self">
      <i class="fas fa-language fa-2x" aria-hidden="true"></i>
      </a>
    </li>
  </ul>
</div>

<div class="">
  <div id="iframeHolder"></div>
	<!-- <a href="https://wa.me/5211234567890?text=Me%20gustaría%20saber%20el%20precio%20del%20coche"  id="postYourAdd"  class="whatsapp" target="_blank"><img src="<?=base_url('resources/assets/Informativa/images/england.png');?>" alt="img"></a> -->
<!-- <button id="button"  class="whatsapp" target="_blank"><img src="<?=base_url('resources/assets/Informativa/images/england.png');?>" alt="img">OPEN</button> -->
<button type="button" class="chat-open-dialog" data-toggle="popover" data-content="<?=$this->lang->line('ayudar')?> </br><?=$this->lang->line('escribenos')?>"> <span class="fa fa-question"></span> </button>
<button class="chat-button-destroy"> <span class="fas fa-window-close fa-2x" style="color: white;"></span> </button>
</div>
    
