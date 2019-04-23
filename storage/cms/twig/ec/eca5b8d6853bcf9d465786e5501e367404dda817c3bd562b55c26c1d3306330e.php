<?php

/* /var/www/html/octobercms/themes/omar/layouts/fallback.htm */
class __TwigTemplate_f878912ccd9725c2b09bc5274dfff4e2d41b5aea396922a305d48309e2b270f7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/omar/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "/var/www/html/octobercms/themes/omar/layouts/fallback.htm", "");
    }
}
