<?php

/* /var/www/plaatimise_systeem/themes/hambern-hambern-blank-bootstrap-4/partials/navbar.htm */
class __TwigTemplate_03671a01ce931b7e478c3b359b0b4131f556105db1fe637bf384f59c7ec221d4 extends Twig_Template
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
        echo "<section id=\"navbar\" class=\"\">
\t<nav class=\"navbar navbar-dark bg-inverse navbar-fixed-top\">
\t\t<div class=\"\">
\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
\t\t\t\t<div class=\"zero-padding col-lg-12 col-md-12 col-sm-12\">
\t\t\t\t\t<img class=\"zero-padding col-lg-12 col-md-12 col-sm-12\" src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(($context["file"] ?? null));
        echo "/assets/images/home-01.svg\" />
\t\t\t\t</div>
\t\t\t</a>
\t\t\t<ul class=\"nav navbar-nav pull-xs-right\">
\t\t\t\t<li class=\"nav-item";
        // line 10
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "gallery")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("gallery");
        echo "\">Tehtud tööd</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item";
        // line 13
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "services")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("services");
        echo "\">Teenused</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item";
        // line 16
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "contact")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Kontakt</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</nav>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/plaatimise_systeem/themes/hambern-hambern-blank-bootstrap-4/partials/navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 17,  58 => 16,  53 => 14,  49 => 13,  44 => 11,  40 => 10,  33 => 6,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"navbar\" class=\"\">
\t<nav class=\"navbar navbar-dark bg-inverse navbar-fixed-top\">
\t\t<div class=\"\">
\t\t\t<a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">
\t\t\t\t<div class=\"zero-padding col-lg-12 col-md-12 col-sm-12\">
\t\t\t\t\t<img class=\"zero-padding col-lg-12 col-md-12 col-sm-12\" src=\"{{ file|theme }}/assets/images/home-01.svg\" />
\t\t\t\t</div>
\t\t\t</a>
\t\t\t<ul class=\"nav navbar-nav pull-xs-right\">
\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'gallery' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'gallery'|page }}\">Tehtud tööd</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'services' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'services'|page }}\">Teenused</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'contact' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'contact'|page }}\">Kontakt</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</nav>
</section>", "/var/www/plaatimise_systeem/themes/hambern-hambern-blank-bootstrap-4/partials/navbar.htm", "");
    }
}
