<?php

/* /var/www/plaatimise_systeem/themes/hambern-hambern-blank-bootstrap-4/partials/footer.htm */
class __TwigTemplate_420a5e8ab609795b603864cd07898fd1a0cdcc2077cbd07017eb293e3270d831 extends Twig_Template
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
        echo "<section>
    <div class=\"page-footer-company col-lg-12 col-md-12 col-sm-12\">
        <p class=\"page-footer-company-p\">© ";
        // line 3
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("companyname.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</p>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/plaatimise_systeem/themes/hambern-hambern-blank-bootstrap-4/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section>
    <div class=\"page-footer-company col-lg-12 col-md-12 col-sm-12\">
        <p class=\"page-footer-company-p\">© {% content 'companyname.htm' %}</p>
    </div>
</section>", "/var/www/plaatimise_systeem/themes/hambern-hambern-blank-bootstrap-4/partials/footer.htm", "");
    }
}
