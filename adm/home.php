<?php
    include "topo.php";
?>

<div class="mt-1 p-5">
                <h2>Em Cartaz</h2>
              </div>

              <div class="container">
                <div class="row row-cols-1 row-cols-md-5 g-4 justify-content-center mt-4">
                  <div class="col-3 m-2">
                    <div class="card h-100 d-flex flex-column">
                      <img src=" img/challengers.jpg" class="card-img-top" alt="...">
                      <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Challengers</h5>
                        <p class="card-text">Challengers é um drama esportivo sobre um triângulo amoroso entre uma ex-tenista, seu marido e um ex-namorado, que se reencontram em uma competição acirrada.</p>
                        <div class="mt-auto">
                          <a tabindex="0" class="btn btn-lg btn-danger" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-title="Oops!" data-bs-content="Você precisa estar cadastrado para comprar um ingresso.">Comprar Ingressos</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-3 m-2">
                    <div class="card h-100 d-flex flex-column">
                      <img src=" img/barbie.jpg" class="card-img-top" alt="...">
                      <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Barbie</h5>
                        <p class="card-text">Barbie é uma aventura que segue a icônica boneca Barbie enquanto ela deixa seu mundo perfeito para explorar o mundo real, embarcando em uma jornada de autodescoberta e empoderamento.</p>
                        <div class="mt-auto">
                          <a tabindex="0" class="btn btn-lg btn-danger" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-title="Oops!" data-bs-content="Você precisa estar cadastrado para comprar um ingresso.">Comprar Ingressos</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-3 m-2">
                    <div class="card h-100 d-flex flex-column">
                      <img src=" img/kung fu.jpg" class="card-img-top" alt="...">
                      <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Kung-Fu Panda 4</h5>
                        <p class="card-text">Em Kung Fu Panda 4, Po enfrenta novos desafios enquanto treina a próxima geração de guerreiros, descobrindo mais sobre seu passado e o verdadeiro poder da sabedoria interior.</p>
                        <div class="mt-auto">
                          <a tabindex="0" class="btn btn-lg btn-danger" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-title="Oops!" data-bs-content="Você precisa estar cadastrado para comprar um ingresso.">Comprar Ingressos</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-3 m-2">
                    <div class="card h-100 d-flex flex-column">
                      <img src="https://image.tmdb.org/t/p/original/rrjoeR5m98ptkGUJ2Z7G4t2lXMg.jpg" class="card-img-top" alt="...">
                      <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Duna II</h5>
                        <p class="card-text">Em Duna II, Paul Atreides continua sua jornada épica em busca de vingança contra aqueles que destruíram sua família, enquanto se prepara para enfrentar novos inimigos e desafios no deserto de Arrakis.</p>
                        <div class="mt-auto">
                          <a tabindex="0" class="btn btn-lg btn-danger" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-title="Oops!" class="text-bg-danger" data-bs-content="Você precisa estar cadastrado para comprar um ingresso.">Comprar Ingressos</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>              
              
              <div class="mt-5 p-5">
                <h2>Favorito da <span class="text-warning">criançada</span></h2>
              </div>
              <div class="container">
                  <div id="carouselExampleCaptions1" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-bs-interval="5000">
                        <img src=" img/mariocarrossel.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Super Mario Bros</h5>
                          <p>Junte-se nessa aventura incrívels dos irmãos!</p>
                        </div>
                      </div>
                      <div class="carousel-item" data-bs-interval="5000">
                        <img src=" img/coralinecarrossel.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Coraline</h5>
                          <p>Você teria coragem para entrar neste novo mundo?</p>
                        </div>
                      </div>
                      <div class="carousel-item" data-bs-interval="5000">
                        <img src=" img/gatodebotascarrossel.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Gato de Botas 2</h5>
                          <p>Uma aventura incrível com o clássico Gato de Botas!.</p>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
              </div>

              <div class="mt-5 p-5">
                <h2>Favorito dos <span class="text-danger">cinéfilos</span></h2>
              </div>
              <div class="container">
                  <div id="carouselExampleCaptions2" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-bs-interval="5000">
                        <img src=" img/interstellarcarrossel.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Interestrelar</h5>
                          <p>Junte-se a Cooper no espaço, desbravando-se pelo universo.</p>
                        </div>
                      </div>
                      <div class="carousel-item" data-bs-interval="5000">
                        <img src=" img/gwhcarrossel.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Gênio Indomável</h5>
                          <p>Acompanhe Will e sua brilhante mente matemática.</p>
                        </div>
                      </div>
                      <div class="carousel-item" data-bs-interval="5000">
                        <img src=" img/comoeueracarrossel.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Como Eu Era Antes de Você</h5>
                          <p>Uma aventura incrível com o clássico Gato de Botas!.</p>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
              </div>

<?php
    include "rodape.php";
?>