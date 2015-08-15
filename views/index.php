<?php $this->layout('layouts/master', ['title' => 'Test Site']) ?>
      
      <div class="row">
        <div class="small-12 medium-4 large-6 columns namelogo">
          <h1>Name/Logo/Brand</h1>
        </div>
        <div class="small-12 medium-8 large-6 columns">
          <div class="nav-bar">
            <ul class="button-group">
            <li><a href="<?= $this->slim()->baseUrl(); ?>" class="button">Home</a></li>
            <li><a href="<?= $this->slim()->siteUrl('/work'); ?>" class="button">Work</a></li>
            <li><a href="<?= $this->slim()->siteUrl('/contact'); ?>" class="button">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
        
      <div class="hero">
        <div class="row">
          <div class="large-12 columns intro-text">
            <p>Hi there!</p> 
          </div>
        </div>
      </div>

      <div class="row about">
        <div class="medium-6 large-8 columns">
          <h4>About This Project</h4>
          <p>This layout is just a default Foundation layout. This repo was created so I could suss out the qualities of using the Slim framework with the Plates template engine. I've included Foundation 5, jquery, and a CDN served version of Font Awesome. It also uses a cool library called slim-view-plates to support the Plates template engine with Slim.
          <p>To use this project clone it and run composer install</p>
        </div>
        <div class="medium-6 large-4 columns">
          <img src="http://placehold.it/550x300">
        </div>
      </div>

      <div class="row work">
        <hr>
        <div class="large-12 columns">
          <h4>Work</h4>
          <p>Click on each image to view my work!</p>

          <ul class="clearing-thumbs small-block-grid-1 medium-block-grid-2 large-block-grid-4" data-clearing>
            <li>
              <a href="http://placehold.it/550x300">
              <img data-caption="caption here" src="http://placehold.it/550x300"></a>
            </li>
            <li>
              <a href="http://placehold.it/550x300"><img data-caption="caption 2 here..." src="http://placehold.it/550x300"></a>
            </li>
            <li>
              <a href="http://placehold.it/550x300"><img data-caption="caption 3 here..." src="http://placehold.it/550x300"></a>
            </li>
            <li>
              <a href="http://placehold.it/550x300"><img data-caption="caption 4 here..." src="http://placehold.it/550x300"></a>
            </li>
          </ul>
        </div>
      </div>

      <div class="row contact">
        <hr>
        <div class="large-12 columns">
          <h4>Contact Me</h4>
          <div class="large-4 columns">
            <strong>Email</strong>: <a href="#"><span class="__cf_email__" data-cfemail="7b161e3b16020b14090f1d1417121455181416">[email protected]</span><script cf-hash='f9e31' type="text/javascript">
/* <![CDATA[ */!function(){try{var t="currentScript"in document?document.currentScript:function(){for(var t=document.getElementsByTagName("script"),e=t.length;e--;)if(t[e].getAttribute("cf-hash"))return t[e]}();if(t&&t.previousSibling){var e,r,n,i,c=t.previousSibling,a=c.getAttribute("data-cfemail");if(a){for(e="",r=parseInt(a.substr(0,2),16),n=2;a.length-n;n+=2)i=parseInt(a.substr(n,2),16)^r,e+=String.fromCharCode(i);e=document.createTextNode(e),c.parentNode.replaceChild(e,c)}}}catch(u){}}();/* ]]> */</script></a>
          </div>
          <div class="large-4 columns">
            <strong>Twitter</strong>: @twitterhandle
          </div>
          <div class="large-4 columns">
            <strong>Phone</strong>: 555-555-1234
          </div>
        </div>
      </div>

      <footer class="row">
        <div class="large-12 columns">
          <div class="row">
            <div class="large-6 columns">
              <p>© Copyright no one at all. Go to town.</p>
            </div>
            <div class="large-6 columns">
              <ul class="inline-list right">
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Suscribe</a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>