


<!-- Header -->
  <img src="/img/header.jpg" ><br /><br /><br />
<!-- End Header -->
     

<!-- Main Section -->
<section id="container" class="row" style="padding: 10px;">
  <div class="twelve columns">
    <div class="three columns sidebar">
      <img src="http://placehold.it/500x500&text=Image">

      
      <h4 class="title">Escuinapa</h4>

      <p>Del Nahualt <b>itz-cui-na-pan</b> el cual esta compuesto por itzquintli "perro" a de atl "agua" y pan "en"; el topónimo significa por lo tanto "en el agua del perro" o "donde hay perros del agua"</p><hr>

      
    </div> 

    <div class="six columns pull-one" >
      <div class="row">
        <h4>Noticias</h4>
        <?php for ($i =0 ; $i<3; $i++): ?>
        <article class="news twelve columns">
          <div class="three columns"><img src="http://placehold.it/500x500&text=Image"></div>
          <div class="nine columns">
            <h5>Header</h5>
            <p>Donut danish chocolate cake tiramisu. Sweet roll brownie apple pie tart. Fruitcake jelly beans jelly sugar plum chocolate pudding macaroon liquorice. Sweet fruitcake pie ice cream muffin. Chocolate cake tootsie roll fruitcake cheesecake chocolate cupcake chupa chups gingerbread.  [...]</p>
          </div>
        </article>
       
      <?php endfor; ?>
      </div>
      <br />
      <br />

      <div class="advert-long" >
          <img src="http://placehold.it/640x80&text=long-ads">
      </div>
      <br />
      <br />
          
        
      <div>
        <ul class="block-grid three-up ">
          <?php for ($i =0 ; $i<10; $i++): ?>
            <li>
              <img src="http://placehold.it/200x113&text=Image">
              <h5>Header pa ver como funciona con un texto demasiado largo.</h5>
              <p>Donut danish chocolate cake tiramisu. Sweet roll brownie apple pie tart. Fruitcake jelly beans jelly sugar plum chocolate pudding macaroon liquorice. Sweet fruitcake pie ice cream muffin. Chocolate cake tootsie roll fruitcake cheesecake chocolate cupcake chupa chups gingerbread.[...]</p>
            </li>
          <?php endfor; ?>
           <li>
              <img src="http://placehold.it/200x113&text=Image">
              <h5>Header pa ver como funciona con un texto demasiado largo y este distinto por que YOLO</h5>
              <p>Donut danish chocolate cake tiramisu. Sweet roll brownie apple pie tart. Fruitcake jelly beans jelly sugar plum chocolate pudding macaroon liquorice. Sweet fruitcake pie ice cream muffin. Chocolate cake tootsie roll fruitcake cheesecake chocolate cupcake chupa chups gingerbread.[...]</p>
            </li>
          
        </ul>
      </div>
    </div> 

     <div id="right-sidebar" class="three columns  sidebar">
        <div>
          <h5>Categorías</h5>
          <ul class="side-nav">
            <li><a href="#">News</a></li>
            <li><a href="#">Code</a></li>
            <li><a href="#">Design</a></li>
            <li><a href="#">Fun</a></li>
            <li><a href="#">Weasels</a></li>
          </ul>
        </div>
        

        <div class="panel">
          <h5>Featured</h5>
          <p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow.</p>
          <a href="#">Read More &rarr;</a>
        </div>

        <div class="twelve columns">
          <h5>Publicidad</h5>
          <div>
            <ul class="block-grid two-up ">
              <?php for ($i =0 ; $i<4; $i++): ?>
                <li><img src="http://placehold.it/200x200&text=side-ad"></li>
              <?php endfor; ?>
              
            </ul>
          </div>
        </div>
        <br>
        <div class="twelve columns">
          <h5>Enlaces</h5>
          <ul class="side-nav">
            <?php for ($i =0 ; $i<4; $i++): ?>
              <li><a href="#">Blog #<?=$i?></a></li>
            <?php endfor; ?>
          </ul>
        </div>
        

     </div> 
     <!-- END Right Sidebar -->

  </div> 
</section>
<!-- End Main Section -->
  

<!-- Footer -->

<footer>
  <div class="twelve columns"><hr />
    <div >

      <div class="six columns">
        <p>&copy; Copyright no one at all. Go to town.</p>
      </div>

      <div class="six columns">
        <ul class="link-list right">
          <li><a href="#">Link 1</a></li>
          <li><a href="#">Link 2</a></li>
          <li><a href="#">Link 3</a></li>
          <li><a href="#">Link 4</a></li>
        </ul>
      </div>

    </div>
  </div>
</footer>

<!-- End Footer -->