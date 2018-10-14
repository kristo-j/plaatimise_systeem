<?php

/* /var/www/plaatimise_systeem/plugins/october/mailer/components/contactform/default.htm */
class __TwigTemplate_9d7e92d634c5074d7f5e7b792e0e01e61a50cf86c1cf151a6160700c2cc4de77 extends Twig_Template
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
        echo "<form data-request=\"onSend\" class=\"col-lg-6 col-md-6 col-sm-12\">
    <div class=\"pull-right col-lg-12 col-md-12 col-sm-12 contact-form\">
        <h2 class=\"quote-form-header\">Kontakt</h2>
        <div class=\"form-quote\">
            <input type=\"text\" class=\"quote-name form-control quote-control\"
                   placeholder=\"Nimi\" name=\"name\"/>
            <input type=\"text\" class=\"quote-email form-control quote-control\"
                   placeholder=\"E-mail\" name=\"email\"/>
            <textarea class=\"email-name form-control quote-control\"
                      placeholder=\"Sõnum(Võimalusel ka tel nr)\"
                      rows=\"5\" name=\"content\"></textarea>
            <input type=\"submit\" class=\"btn-form-quote quote-submit btn quote-control\"
                   value=\"Saada\" />
        </div>
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "/var/www/plaatimise_systeem/plugins/october/mailer/components/contactform/default.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form data-request=\"onSend\" class=\"col-lg-6 col-md-6 col-sm-12\">
    <div class=\"pull-right col-lg-12 col-md-12 col-sm-12 contact-form\">
        <h2 class=\"quote-form-header\">Kontakt</h2>
        <div class=\"form-quote\">
            <input type=\"text\" class=\"quote-name form-control quote-control\"
                   placeholder=\"Nimi\" name=\"name\"/>
            <input type=\"text\" class=\"quote-email form-control quote-control\"
                   placeholder=\"E-mail\" name=\"email\"/>
            <textarea class=\"email-name form-control quote-control\"
                      placeholder=\"Sõnum(Võimalusel ka tel nr)\"
                      rows=\"5\" name=\"content\"></textarea>
            <input type=\"submit\" class=\"btn-form-quote quote-submit btn quote-control\"
                   value=\"Saada\" />
        </div>
    </div>
</form>", "/var/www/plaatimise_systeem/plugins/october/mailer/components/contactform/default.htm", "");
    }
}
