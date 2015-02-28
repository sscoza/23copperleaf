<?php

/* /home/rscoza7/public_html/themes/demo/pages/home.htm */
class __TwigTemplate_460f551fd50b765d2bfdf0fd86d07d5d1900ef9b985f15b2ed2cf5852bd4a4bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__internal_56edd041c1813b89e060d1651bb40185178c810723079fdc844390401f74b0aa' => array($this, 'block___internal_56edd041c1813b89e060d1651bb40185178c810723079fdc844390401f74b0aa'),
            '__internal_cdb7b93fea47ca4701c6fdffeec1dd373201b6d00b15441c4899e5d752f46aa2' => array($this, 'block___internal_cdb7b93fea47ca4701c6fdffeec1dd373201b6d00b15441c4899e5d752f46aa2'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"jumbotron\">
    <div class=\"container\">
        ";
        // line 3
        echo $this->env->getExtension('CMS')->contentFunction("welcome.htm"        );
        // line 4
        echo "    </div>
</div>

<div class=\"container\">

    <div class=\"page-header\">
        <h2>Overview <small>Basic concepts</small></h2>
    </div>
    <p>
        This page demonstrates the basic CMS features.
        Usually each page built with October is a combination of a layout, page, partials and content blocks,
        although in simple cases you can just use a page without anything else.
    </p>

    <!-- Layouts -->
    <h3>Layouts</h3>
    <p class=\"lead\">
        <i class=\"icon-th-large\"></i>
        Layouts define the page scaffold.
    </p>
    <p>
        The layout file <code>layouts/default.htm</code> defines the page scaffold &mdash;
        everything that repeats on each page, such as the HTML, HEAD and BODY tags, StyleSheet and JavaScript references.
    </p>
    <p>
        The page menu and footer in the Demo theme are defined in the layout as well.
    </p>

    <hr />

    <!-- Pages -->
    <h3>Pages</h3>
    <p class=\"lead\">
        <i class=\"icon-copy\"></i>
        Pages hold the content for each URL.
    </p>
    <p>
        The page file <code>pages/home.htm</code> defines the page URL (<code>/</code> for this page) and the page content.
        Pages are rendered inside layouts with this function that should be called in the layout code:
        <pre>";
        // line 43
        echo "{% page %}";
        echo "</pre>
        Using a layout for pages is optional &mdash; you can define everything right in the page file.
    </p>

    <hr />

    <!-- Partials -->
    <h3>Partials</h3>
    <p class=\"lead\">
        <i class=\"icon-tags\"></i>
        Partials contain reusable chunks of HTML markup.
    </p>
    <p>
        Partials are chunks of HTML defined in separate files which can be included anywhere.
        In this example we placed the footer content to the <code>partials/footer.htm</code> partial.
        Partials are rendered with:
        <pre>";
        // line 59
        echo "{% partial \"partial-name\" %}";
        echo "</pre> 
        It can be used inside pages, templates or other partials.
    </p>

    <hr />

    <!-- Content blocks -->
    <h3>Content blocks</h3>
    <p class=\"lead\">
        <i class=\"icon-font\"></i>
        Content blocks are text or HTML blocks that can be edited separately from the page or layout.
    </p>
    <p>
        The introductory text used on this page is defined in the <code>content/welcome.htm</code> file.
        Content blocks are defined and rendered with: 
        <pre>";
        // line 74
        echo "{% content \"content-name.htm\" %}";
        echo "</pre>
    </p>

    <hr />

    <!-- Placeholders -->
    <h3>Placeholders</h3>
    <p class=\"lead\">
        <i class=\"icon-bookmark\"></i>
        Placeholders allow pages to inject content to a layout.
    </p>
    <p>
        The common use is injecting page-specific links to StyleSheet or JavaScript files to the HEAD tag defined in the layout.
        Placeholders are defined in the layout file and they have names so that they can be referred in the page.
        Example:
    </p>
    <div class=\"row\">
        <div class=\"col-md-6\">
            Layout file:
            <pre>";
        // line 93
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_56edd041c1813b89e060d1651bb40185178c810723079fdc844390401f74b0aa", $context, $blocks));
        echo "</pre>
        </div>
        <div class=\"col-md-6\">
            Page file:
            <pre>";
        // line 97
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_cdb7b93fea47ca4701c6fdffeec1dd373201b6d00b15441c4899e5d752f46aa2", $context, $blocks));
        echo "</pre>
        </div>
    </div>

    <hr />

    <!-- Assets -->
    <h3>Assets</h3>
    <p class=\"lead\">
        <i class=\"icon-picture\"></i>
        Assets are resource files like images and stylesheets.
    </p>
    <p>This theme stores its asset files (JavaScript, StyleSheet, images, fonts, etc) in the <code>themes/demo/assets</code> directory. This theme is also packaged with these useful 3rd party tools:</p>
    <ul class=\"list-inline\">
        <li><a target=\"_blank\" href=\"http://getbootstrap.com/\">Twitter Bootstrap</a></li>
        <li><a target=\"_blank\" href=\"http://fontawesome.io/3.2.1/\">Font Awesome</a></li>
        <li><a target=\"_blank\" href=\"http://www.google.com/fonts/specimen/Lato\">Lato webfont</a></li>
    </ul>
    <p>You might prefer to remove them for your website implementation.</p>

    <hr />

    <div class=\"text-center\">
        <p><a href=\"";
        // line 120
        echo $this->env->getExtension('CMS')->pageFilter("ajax");
        echo "\" class=\"btn btn-lg btn-default\">Continue to AJAX framework</a></p>
    </div>

</div>";
    }

    // line 93
    public function block___internal_56edd041c1813b89e060d1651bb40185178c810723079fdc844390401f74b0aa($context, array $blocks = array())
    {
        echo $this->env->getExtension('CMS')->contentFunction("placeholder/layout.txt"        );
    }

    // line 97
    public function block___internal_cdb7b93fea47ca4701c6fdffeec1dd373201b6d00b15441c4899e5d752f46aa2($context, array $blocks = array())
    {
        echo $this->env->getExtension('CMS')->contentFunction("placeholder/page.txt"        );
    }

    public function getTemplateName()
    {
        return "/home/rscoza7/public_html/themes/demo/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 97,  168 => 93,  160 => 120,  134 => 97,  127 => 93,  105 => 74,  87 => 59,  68 => 43,  27 => 4,  25 => 3,  21 => 1,);
    }
}
