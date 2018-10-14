<?php

/* /var/www/plaatimise_systeem/themes/hambern-hambern-blank-bootstrap-4/partials/homecompanyinfo.htm */
class __TwigTemplate_31a5e162b532e26e793e49e70dd0c410db31f252040f4339b410718e0cc9ebec extends Twig_Template
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
        echo "<div class=\"col-lg-6 col-md-6 col-sm-12\">
    <div class=\"zero-padding col-lg-12 col-md-12 col-sm-12 col-xs-12 contact-info\">
        <div class=\"logo-container-home\">
            <div class=\"\">
                <img class=\"\" src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(($context["file"] ?? null));
        echo "/assets/images/logo lyhike-01.svg\" />
            </div>
        </div>
    </div>
    <div class=\"zero-padding col-lg-12 col-md-12 col-sm-12 container-padding container\">
        <p>
            \"Küsi hinnapakkumist ning
            vastan Sulle niipea kui võimalik!\"
        </p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/plaatimise_systeem/themes/hambern-hambern-blank-bootstrap-4/partials/homecompanyinfo.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-lg-6 col-md-6 col-sm-12\">
    <div class=\"zero-padding col-lg-12 col-md-12 col-sm-12 col-xs-12 contact-info\">
        <div class=\"logo-container-home\">
            <div class=\"\">
                <img class=\"\" src=\"{{ file|theme }}/assets/images/logo lyhike-01.svg\" />
            </div>
        </div>
    </div>
    <div class=\"zero-padding col-lg-12 col-md-12 col-sm-12 container-padding container\">
        <p>
            \"Küsi hinnapakkumist ning
            vastan Sulle niipea kui võimalik!\"
        </p>
    </div>
</div>", "/var/www/plaatimise_systeem/themes/hambern-hambern-blank-bootstrap-4/partials/homecompanyinfo.htm", "");
    }
}
