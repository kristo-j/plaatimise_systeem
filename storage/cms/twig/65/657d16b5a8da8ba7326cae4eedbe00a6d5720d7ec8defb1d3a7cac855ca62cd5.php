<?php

/* /var/www/plaatimise_systeem/themes/hambern-hambern-blank-bootstrap-4/partials/home-welcome.htm */
class __TwigTemplate_68de258897fc6c6fb14563625f26db3898cd660c99c8bd34ac23050e10806c01 extends Twig_Template
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
        echo "<section id=\"welcome\" class=\"m-b-2\">
    <div class=\"header-container container-padding\">
        <div class=\"container container-padding\">
            <div class=\"col-lg-12 col-md-12 col-sm-12\">
                <img class=\"col-lg-12 col-md-12 col-sm-12\" src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(($context["file"] ?? null));
        echo "/assets/images/logo pikk-01.svg\" />
            </div>
        </div>
        <div class=\"ep-banner container\">
            <h3 class=\"container-text-header-size text-xs-center m-b-3\">
                Tere tulemast meie kodulehele!
            </h3>
            <div class=\"container-text-size m-b-3\">
                <p class=\"\">
                    Vannituba on koht kodus, kus veedame suure osa oma mõnusatest
                    hetkedest – see on aeg iseendale.
                </p>
                <p class=\"\">
                    Sa saad ise otsustada kui mugav ja mõnus on sul seal veedetud aeg,
                    disainides vannitoa oma maitse järgi.
                </p>
                <p class=\"\">
                    Kui oled välja valinud plaadid, mis kaunistavad sinu vannituba, ja
                    soovid nende paigaldusega abi, siis abistame sind meelsasti.
                </p>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/plaatimise_systeem/themes/hambern-hambern-blank-bootstrap-4/partials/home-welcome.htm";
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
        return new Twig_Source("<section id=\"welcome\" class=\"m-b-2\">
    <div class=\"header-container container-padding\">
        <div class=\"container container-padding\">
            <div class=\"col-lg-12 col-md-12 col-sm-12\">
                <img class=\"col-lg-12 col-md-12 col-sm-12\" src=\"{{ file|theme }}/assets/images/logo pikk-01.svg\" />
            </div>
        </div>
        <div class=\"ep-banner container\">
            <h3 class=\"container-text-header-size text-xs-center m-b-3\">
                Tere tulemast meie kodulehele!
            </h3>
            <div class=\"container-text-size m-b-3\">
                <p class=\"\">
                    Vannituba on koht kodus, kus veedame suure osa oma mõnusatest
                    hetkedest – see on aeg iseendale.
                </p>
                <p class=\"\">
                    Sa saad ise otsustada kui mugav ja mõnus on sul seal veedetud aeg,
                    disainides vannitoa oma maitse järgi.
                </p>
                <p class=\"\">
                    Kui oled välja valinud plaadid, mis kaunistavad sinu vannituba, ja
                    soovid nende paigaldusega abi, siis abistame sind meelsasti.
                </p>
            </div>
        </div>
    </div>
</section>", "/var/www/plaatimise_systeem/themes/hambern-hambern-blank-bootstrap-4/partials/home-welcome.htm", "");
    }
}
