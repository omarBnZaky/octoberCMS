<?php

/* /var/www/html/octobercms/plugins/omarbnzaky/resources/components/links/default.htm */
class __TwigTemplate_e44438bc5051365d4ae6c14b5cb75328f30298e2365daf314f195d977cc71f7f extends Twig_Template
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
        echo "<div class=\"links\">

    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 4
            echo "
    ";
            // line 5
            echo twig_escape_filter($this->env, $context["link"], "html", null, true);
            echo "<br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/plugins/omarbnzaky/resources/components/links/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 7,  34 => 5,  31 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"links\">

    {% for link in links %}

    {{link}}<br>
    {% endfor %}
</div>", "/var/www/html/octobercms/plugins/omarbnzaky/resources/components/links/default.htm", "");
    }
}
