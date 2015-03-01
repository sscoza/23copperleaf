<?php

/* C:\xampp\htdocs\23copperleaf/themes/23copperleaf/layouts/cover.htm */
class __TwigTemplate_caea8b2d8552d399cf1f4319cbaa000dcfd7882a71b232e4785b70f92d6ba0d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">

    <title>23 Copperleaf Drive</title>

    ";
        // line 13
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 14
        echo "    <link href=\"";
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/bootstrap.min.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/cover.css");
        echo "\" rel=\"stylesheet\">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>

  <body>

    <div class=\"site-wrapper\">

      <div class=\"site-wrapper-inner\">

        <div class=\"cover-container\">

          <div class=\"masthead clearfix\">
            <div class=\"inner\">
              <h3 class=\"masthead-brand\">Cover</h3>
              <nav>
                <ul class=\"nav masthead-nav\">
                  <li class=\"active\"><a href=\"#\">Home</a></li>
                  <li><a href=\"#\">Floor Plan</a></li>
                  <li><a href=\"#\">Photos</a></li>
                  <li><a href=\"#\">Newtown FAQ</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class=\"inner cover\">
            <h1 class=\"cover-heading\">Cover your page.</h1>
            <p class=\"lead\">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
            <p class=\"lead\">
              <a href=\"#\" class=\"btn btn-lg btn-default\">Learn more</a>
            </p>
          </div>

          <div class=\"mastfoot\">
            <div class=\"inner\">
              <p>Cover template for <a href=\"http://getbootstrap.com\">Bootstrap</a>, by <a href=\"https://twitter.com/mdo\">@mdo</a>.</p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"";
        // line 69
        echo $this->env->getExtension('CMS')->themeFilter("assets/javascript/jquery.min.js");
        echo "\"></script>
    <script src=\"";
        // line 70
        echo $this->env->getExtension('CMS')->themeFilter("assets/javascript/bootstrap.min.js");
        echo "\"></script>
    <script src=\"";
        // line 71
        echo $this->env->getExtension('CMS')->themeFilter("assets/javascript/docs.min.js");
        echo "\"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"";
        // line 73
        echo $this->env->getExtension('CMS')->themeFilter("assets/javascript/ie10-viewport-bug-workaround.js");
        echo "\"></script>
    ";
        // line 74
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css" rel="stylesheet">'.PHP_EOL;
        // line 75
        echo "    ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 76
        echo "  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\23copperleaf/themes/23copperleaf/layouts/cover.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 76,  122 => 75,  115 => 74,  111 => 73,  106 => 71,  102 => 70,  98 => 69,  41 => 15,  36 => 14,  33 => 13,  19 => 1,);
    }
}
