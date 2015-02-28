<?php

/* /home/rscoza7/public_html/themes/demo/layouts/default.htm */
class __TwigTemplate_86124047a44d90c96ce4e4962e0c6b755f6721d52cdc11aa9da230d98bfed8f1 extends Twig_Template
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
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>October CMS - ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        <meta name=\"author\" content=\"October CMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/october.png");
        echo "\" />
        ";
        // line 9
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 10
        echo "        <link href=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/theme.css"));
        // line 12
        echo "\" rel=\"stylesheet\">
    </head>
    <body>

        <!-- Header -->
        <header id=\"layout-header\">

            <!-- Nav -->
            <nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"";
        // line 29
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\">October Demo</a>
                    </div>
                    <div class=\"collapse navbar-collapse navbar-main-collapse\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"";
        // line 33
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "home")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\">Basic concepts</a></li>
                            <li class=\"";
        // line 34
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "ajax")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("ajax");
        echo "\">AJAX framework</a></li>
                            <li class=\"";
        // line 35
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "plugins")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("plugins");
        echo "\">Plugin components</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

        </header>

        <!-- Content -->
        <section id=\"layout-content\">
            ";
        // line 45
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 46
        echo "        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 50
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 51
        echo "        </footer>

        <!-- Scripts -->
        <script src=\"";
        // line 54
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/javascript/jquery.js", 1 => "assets/javascript/app.js"));
        // line 57
        echo "\"></script>
        ";
        // line 58
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css" rel="stylesheet">'.PHP_EOL;
        // line 59
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 60
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/rscoza7/public_html/themes/demo/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 60,  129 => 59,  122 => 58,  119 => 57,  117 => 54,  112 => 51,  108 => 50,  102 => 46,  100 => 45,  83 => 35,  75 => 34,  67 => 33,  60 => 29,  41 => 12,  38 => 10,  35 => 9,  31 => 8,  25 => 5,  19 => 1,);
    }
}
