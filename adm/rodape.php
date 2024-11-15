<footer class="footer mt-5">
<style>
      @charset "UTF-8";

      * {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }

      .carousel-inner img {
        height: 500px;
        object-fit: cover;
      }

      .footer {
        background-color: #0f0f0f;
        color: #ffffff;
        padding: 40px 0;
      }
      .footer a {
        color: #ffffff;
        text-decoration: none;
      }
      .footer a:hover {
        color: #d6d6d6;
        text-decoration: underline;
      }
      .footer .social-icons a {
        margin-right: 15px;
        font-size: 24px;
      }
      .footer .social-icons a:hover {
        color: #d6d6d6;
      }
      .footer .newsletter input[type="email"] {
        border: none;
        border-radius: 0;
        padding: 10px;
        width: 75%;
      }
      .footer .newsletter button {
        border-radius: 0;
        padding: 10px;
        background-color: #dc3545;
        border: none;
        color: #ffffff;
      }
      .footer .newsletter button:hover {
        background-color: #c82333;
      }

      #logofooter {
        width: 100px;
        height: 100px;
      }

      #botaomenu {
        width: 50px;
        height: 50px;
      }
      
      #titulo{
        font-weight: lighter;
        font-style: italic;
        color: #c82333;
      }

      #header {
        background-color: #181818;
      }

      .card {
        background-color: rgb(128, 128, 128);
      }

      .links {
        text-decoration: none;
        color: white;
        font-weight: 200;
        margin: 5px;
        margin-top: 20px;

        display: flex;
        flex-direction: row;
      }

      .imgmenu {
        width: 30px;
        height: 30px;
        margin-right: 10px;
      }
    </style>

                <div class="container">
                  <div class="row">
                    <div class="col-md-4">
                      <img src="img/logo-removebg-preview.png" alt="" id="logofooter">
                      <p>&copy; 2024 Cinephile. Todos os direitos reservados.</p>
                    </div>
                    <div class="col-md-4">
                      <h5>Links Rápidos</h5>
                      <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Filmes</a></li>
                        <li><a href="#">Eventos</a></li>
                        <li><a href="#">Contato</a></li>
                      </ul>
                    </div>
                    <div class="col-md-4">
                      <h5>Contato</h5>
                      <p>Email: contato@cinephile.com.br</p>
                      <p>Telefone: (21) 1234-5678</p>
                      <div class="social-icons">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-youtube"></a>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="col-md-12">
                      <h5>Assine nosso Newsletter!</h5>
                      <div class="newsletter d-flex">
                        <input type="email" placeholder="Seu email">
                        <button type="button">Inscrever-se</button>
                      </div>
                    </div>
                  </div>
                </div>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <script>
      const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
      const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))

      const popover = new bootstrap.Popover('.popover-dismiss', {
        trigger: 'focus'
      })
    </script>
  </body>
</html>