<?php

/* /var/www/html/octobercms/themes/omar/partials/header.htm */
class __TwigTemplate_3a37ab3ae456a269f5e2240ee54f5830a0597f010053616cb05653c8e3e9f160 extends Twig_Template
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
        echo "<!--start navbar-->
        <nav class=\"navbar navbar-expand-sm bg-dark navbar-dark\">
                <!-- Brand -->
                <a class=\"navbar-brand\" href=\"#\">";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "site_name", []), "html", null, true);
        echo "</a>
              
                <!-- Links -->
                <ul class=\"navbar-nav\">
                  <li class=\"nav-item\">
                    <a class=\"nav-link";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "id", []) == "home")) {
            echo "class=\"active\"";
        }
        echo "\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home</a>
                  </li>
                  <li class=\"nav-item\">
                      <a class=\"nav-link";
        // line 12
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "id", []) == "about")) {
            echo "class=\"active\"";
        }
        echo "\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">About</a>
                    </li>
              
                    <li class=\"nav-item\">
                        <a class=\"nav-link";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "id", []) == "contact")) {
            echo "class=\"active\"";
        }
        echo "\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Contact </a>
                      </li>
                
                        
                      <li class=\"nav-item\">
                          <a class=\"nav-link";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "id", []) == "blog")) {
            echo "class=\"active\"";
        }
        echo "\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo "\"> Blog </a>
                        </li>
                  
                </ul>
              </nav>
        <!--end navbar-->";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/omar/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 21,  57 => 16,  46 => 12,  36 => 9,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!--start navbar-->
        <nav class=\"navbar navbar-expand-sm bg-dark navbar-dark\">
                <!-- Brand -->
                <a class=\"navbar-brand\" href=\"#\">{{this.theme.site_name}}</a>
              
                <!-- Links -->
                <ul class=\"navbar-nav\">
                  <li class=\"nav-item\">
                    <a class=\"nav-link{% if this.page.id == 'home' %}class=\"active\"{% endif %}\" href=\"{{'home'|page}}\">Home</a>
                  </li>
                  <li class=\"nav-item\">
                      <a class=\"nav-link{% if this.page.id == 'about' %}class=\"active\"{% endif %}\" href=\"{{'about'|page}}\">About</a>
                    </li>
              
                    <li class=\"nav-item\">
                        <a class=\"nav-link{% if this.page.id == 'contact' %}class=\"active\"{% endif %}\" href=\"{{'contact'|page}}\">Contact </a>
                      </li>
                
                        
                      <li class=\"nav-item\">
                          <a class=\"nav-link{% if this.page.id == 'blog' %}class=\"active\"{% endif %}\" href=\"{{'blog'|page}}\"> Blog </a>
                        </li>
                  
                </ul>
              </nav>
        <!--end navbar-->", "/var/www/html/octobercms/themes/omar/partials/header.htm", "");
    }
}
