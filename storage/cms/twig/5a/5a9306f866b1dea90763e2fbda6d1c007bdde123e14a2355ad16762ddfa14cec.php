<?php

/* /var/www/html/octobercms/themes/responsiv-clean/pages/blog/category.htm */
class __TwigTemplate_270922db5ea964be8c6d091989b61692443b4e20b282a7e11e44e00274cbb071 extends Twig_Template
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
        echo "<div class=\"category-title\">
    <h1>Category: ";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", []), "html", null, true);
        echo "</h1>
</div>

<div class=\"blog-posts\">
    ";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blog/posts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/responsiv-clean/pages/blog/category.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 7,  33 => 6,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"category-title\">
    <h1>Category: {{ category.name }}</h1>
</div>

<div class=\"blog-posts\">
    {% partial 'blog/posts' %}
</div>", "/var/www/html/octobercms/themes/responsiv-clean/pages/blog/category.htm", "");
    }
}
