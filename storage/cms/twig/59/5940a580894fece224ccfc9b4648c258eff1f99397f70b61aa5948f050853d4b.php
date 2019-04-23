<?php

/* /var/www/html/octobercms/themes/omar/pages/about.htm */
class __TwigTemplate_39681151add07e345af238654fd680630856e57cf76b1acde7398c2cedb3822b extends Twig_Template
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
        echo "<h1>About us </h1>
<p>this is the about page </p>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/omar/pages/about.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>About us </h1>
<p>this is the about page </p>", "/var/www/html/octobercms/themes/omar/pages/about.htm", "");
    }
}
