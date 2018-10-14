<?php

/* /var/www/plaatimise_systeem/themes/hambern-hambern-blank-bootstrap-4/layouts/default.htm */
class __TwigTemplate_a8cfea38073a8c2169d4873a9b50ef23431ec9f824653cb3097ddba4a1c20b6b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

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
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <link rel=\"icon\" sizes=\"any\" type=\"image/svg+xml\" href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(($context["file"] ?? null));
        echo "/assets/images/logo lyhike-01.png\">
    <title>Ekspert Plaadimees</title>
    <link href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/vendor/bootstrap/dist/css/bootstrap.min.css", 1 => "assets/vendor/font-awesome/css/font-awesome.min.css", 2 => "assets/vendor/animate.css/animate.min.css", 3 => "assets/vendor/plyr/dist/plyr.css", 4 => "assets/vendor/lightbox/dist/ekko-lightbox.css", 5 => "assets/style/app.css"));
        // line 16
        echo "\" rel=\"stylesheet\">
    ";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 18
        echo "
  </head>
  <body>

  <div class=\"loader\"></div>

  <div class=\"content\">
    ";
        // line 25
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 26
        echo "
    ";
        // line 27
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home-welcome"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 28
        echo "
    <section id=\"page\" class=\"\">
      ";
        // line 30
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 31
        echo "    </section>

  </div>
  <div class=\"footer\">
    <div id=\"home-footer\" class=\"page-footer font-small teal pt-4 col-lg-12 col-sm-12 col-md-12\">
      <div class=\"container-fluid\">
        <div class=\"row\">
          ";
        // line 38
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contactform"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 39
        echo "          ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("homecompanyinfo"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 40
        echo "        </div>
      </div>
    </div>
    ";
        // line 43
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 44
        echo "  </div>


  <script src=\"https://code.jquery.com/jquery-1.12.4.min.js\"
          integrity=\"sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ\"
          crossorigin=\"anonymous\">
  </script>
  <script src=\"";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/vendor/jquery/dist/jquery.min.js", 1 => "assets/vendor/tether/dist/js/tether.min.js", 2 => "assets/vendor/bootstrap/dist/js/bootstrap.min.js", 3 => "assets/vendor/wow/dist/wow.min.js", 4 => "assets/vendor/holderjs/holder.min.js", 5 => "assets/vendor/plyr/dist/plyr.js", 6 => "assets/vendor/responsive-grid/jquery.imagesGrid.js", 7 => "assets/vendor/lightbox/dist/ekko-lightbox.js", 8 => "assets/js/scripts.js"));
        // line 61
        echo "\">
  </script>
    ";
        // line 63
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 64
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 65
        echo "  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/plaatimise_systeem/themes/hambern-hambern-blank-bootstrap-4/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 65,  119 => 64,  112 => 63,  108 => 61,  106 => 51,  97 => 44,  93 => 43,  88 => 40,  83 => 39,  79 => 38,  70 => 31,  68 => 30,  64 => 28,  60 => 27,  57 => 26,  53 => 25,  44 => 18,  41 => 17,  38 => 16,  36 => 9,  31 => 7,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <link rel=\"icon\" sizes=\"any\" type=\"image/svg+xml\" href=\"{{ file|theme }}/assets/images/logo lyhike-01.png\">
    <title>Ekspert Plaadimees</title>
    <link href=\"{{ [
      'assets/vendor/bootstrap/dist/css/bootstrap.min.css',
      'assets/vendor/font-awesome/css/font-awesome.min.css',
      'assets/vendor/animate.css/animate.min.css',
      'assets/vendor/plyr/dist/plyr.css',
      'assets/vendor/lightbox/dist/ekko-lightbox.css',
      'assets/style/app.css'
    ]|theme }}\" rel=\"stylesheet\">
    {% styles %}

  </head>
  <body>

  <div class=\"loader\"></div>

  <div class=\"content\">
    {% partial 'navbar' %}

    {% partial 'home-welcome' %}

    <section id=\"page\" class=\"\">
      {% page %}
    </section>

  </div>
  <div class=\"footer\">
    <div id=\"home-footer\" class=\"page-footer font-small teal pt-4 col-lg-12 col-sm-12 col-md-12\">
      <div class=\"container-fluid\">
        <div class=\"row\">
          {% component 'contactform' %}
          {% partial 'homecompanyinfo' %}
        </div>
      </div>
    </div>
    {% partial 'footer' %}
  </div>


  <script src=\"https://code.jquery.com/jquery-1.12.4.min.js\"
          integrity=\"sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ\"
          crossorigin=\"anonymous\">
  </script>
  <script src=\"{{ [
    'assets/vendor/jquery/dist/jquery.min.js',
    'assets/vendor/tether/dist/js/tether.min.js',
    'assets/vendor/bootstrap/dist/js/bootstrap.min.js',
    'assets/vendor/wow/dist/wow.min.js',
    'assets/vendor/holderjs/holder.min.js',
    'assets/vendor/plyr/dist/plyr.js',
    'assets/vendor/responsive-grid/jquery.imagesGrid.js',
    'assets/vendor/lightbox/dist/ekko-lightbox.js',
    'assets/js/scripts.js'
    ]|theme }}\">
  </script>
    {% framework extras %}
    {% scripts %}
  </body>
</html>", "/var/www/plaatimise_systeem/themes/hambern-hambern-blank-bootstrap-4/layouts/default.htm", "");
    }
}
