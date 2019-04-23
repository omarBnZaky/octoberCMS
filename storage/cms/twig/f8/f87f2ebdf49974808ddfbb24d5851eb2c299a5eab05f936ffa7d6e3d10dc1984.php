<?php

/* /var/www/html/octobercms/themes/omar/pages/home.htm */
class __TwigTemplate_522ccb14fc6be42e9d2f3fe6672c551b4a2c6554e4f5343a4dc3d42eb03d8444 extends Twig_Template
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
        echo "<div class=\"jumbotron\">
    <h1>";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "site_name", []), "html", null, true);
        echo "</h1>
    <p>";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "site_description", []), "html", null, true);
        echo "</p>

    <p>
        <a href = \"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\" class=\"btn btn-default\">Read more</a>
    </p>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/omar/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  30 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"jumbotron\">
    <h1>{{this.theme.site_name}}</h1>
    <p>{{this.theme.site_description}}</p>

    <p>
        <a href = \"{{'about'|page}}\" class=\"btn btn-default\">Read more</a>
    </p>
</div>", "/var/www/html/octobercms/themes/omar/pages/home.htm", "");
    }
}
