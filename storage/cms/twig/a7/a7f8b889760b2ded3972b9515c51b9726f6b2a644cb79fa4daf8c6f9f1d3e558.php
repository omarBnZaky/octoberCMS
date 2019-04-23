<?php

/* /var/www/html/octobercms/themes/responsiv-clean/partials/blog/posts.htm */
class __TwigTemplate_ac32af4a0ddff87758edced8aced30b4a8e1279c284239d739e842eec3a1867d extends Twig_Template
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
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", []);
        // line 2
        echo "
<div class=\"post-list\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 5
            echo "        ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['post'] = $context["post"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blog/post"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 6
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</div>

<div class=\"post-pagination\">
    ";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", []) > 1)) {
            // line 11
            echo "        <ul class=\"pagination\">
                <li><a href=\"";
            // line 12
            echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "baseFileName", []), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", []) - 1)]);
            echo "\" class=\"pagination-prev\">&larr; Prev</a></li>
            ";
            // line 13
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", []) > 1)) {
                // line 14
                echo "                <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "baseFileName", []), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", []) - 1)]);
                echo "\" class=\"pagination-prev\">&larr; Prev</a></li>
            ";
            }
            // line 16
            echo "
            ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [])));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 18
                echo "                <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", []) == $context["page"])) ? ("active") : (null));
                echo "\">
                    <a href=\"";
                // line 19
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "baseFileName", []), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "
            ";
            // line 23
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", []) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", []))) {
                // line 24
                echo "                <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "baseFileName", []), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", []) + 1)]);
                echo "\" class=\"pagination-next\">Next &rarr;</a></li>
            ";
            }
            // line 26
            echo "        </ul>
    ";
        }
        // line 28
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/responsiv-clean/partials/blog/posts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 28,  101 => 26,  95 => 24,  93 => 23,  90 => 22,  79 => 19,  74 => 18,  70 => 17,  67 => 16,  61 => 14,  59 => 13,  55 => 12,  52 => 11,  50 => 10,  45 => 7,  39 => 6,  33 => 5,  29 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set posts = blogPosts.posts %}

<div class=\"post-list\">
    {% for post in posts %}
        {% partial 'blog/post' post=post %}
    {% endfor %}
</div>

<div class=\"post-pagination\">
    {% if posts.lastPage > 1 %}
        <ul class=\"pagination\">
                <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage-1) }) }}\" class=\"pagination-prev\">&larr; Prev</a></li>
            {% if posts.currentPage > 1 %}
                <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage-1) }) }}\" class=\"pagination-prev\">&larr; Prev</a></li>
            {% endif %}

            {% for page in 1..posts.lastPage %}
                <li class=\"{{ posts.currentPage == page ? 'active' : null }}\">
                    <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
                </li>
            {% endfor %}

            {% if posts.lastPage > posts.currentPage %}
                <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage+1) }) }}\" class=\"pagination-next\">Next &rarr;</a></li>
            {% endif %}
        </ul>
    {% endif %}
</div>", "/var/www/html/octobercms/themes/responsiv-clean/partials/blog/posts.htm", "");
    }
}
