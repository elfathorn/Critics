<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        {{ get_title() }}
        {{ stylesheet_link('css/bootstrap/bootstrap.min.css') }}
        {{ stylesheet_link('css/blog.css') }}
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Your invoices">
        <meta name="author" content="Phalcon Team">
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              {{ link_to('', project_name, 'class' : 'navbar-brand') }}
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <form class="navbar-form navbar-right" role="form">
                <div class="form-group">
                  <input type="text" placeholder="Email" class="form-control">
                </div>
                <div class="form-group">
                  <input type="password" placeholder="Mot de passe" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Se connecter</button>
                <div class="form-group">
                  {{ link_to('inscription', "S'inscrire", 'class' : 'btn btn-primary', 'role' : 'button') }}
                </div>
              </form>
            </div><!--/.navbar-collapse -->
          </div>
        </nav>

        <div class="container">
            <div class="blog-header">
              <h1 class="blog-title">Critiques Littéraires</h1>
              <p class="lead blog-description">Blog recensant des critiques littéraires sur des livres de toutes sortes.</p>
              {% block blogSubtitle %}{% endblock %}
            </div>

            <div class="row">

              <div class="col-sm-8 blog-main">
                {{ flash.output() }}
                {{ content() }}
              </div><!-- /.blog-main -->

              <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
                <div class="sidebar-module sidebar-module-inset">
                  <h4>&Agrave; propos</h4>
                  <p>Critiques littéraires écrites et tenues à jour par Elodie Amour.</p>
                </div>
                <div class="sidebar-module">
                  <h4>Archives</h4>
                  <ol class="list-unstyled">
                    <li><a href="#">March 2014</a></li>
                    <li><a href="#">February 2014</a></li>
                    <li><a href="#">January 2014</a></li>
                  </ol>
                </div>
              </div><!-- /.blog-sidebar -->
            </div><!-- /.row -->
        </div><!-- /.container -->

        <footer class="blog-footer">
          <p>Template using {{ link_to('http://getbootstrap.com', 'Bootstrap') }}</p>
          <p>
            <a href="#">Back to top</a>
          </p>
        </footer>

        {{ javascript_include('js/jquery/jquery.min.js') }}
        {{ javascript_include('js/bootstrap/bootstrap.min.js') }}
    </body>
</html>