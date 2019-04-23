<?php

/* /var/www/html/octobercms/themes/omar/layouts/test.htm */
class __TwigTemplate_660f57042f28e057e7d8dbb7e1566407a2ab04e09ee41895cf2770a493c465cc extends Twig_Template
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
        echo "<!DOCTYPE>
<html>
    <head>
        <title>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "title", []), "html", null, true);
        echo " </title>
        <meta name=\"description\"  content=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "meta_description", []), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"https://bootswatch.com/4/sandstone/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/theme.css");
        echo "\">
        ";
        // line 8
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 9
        echo "    </head>
 
    <body>
        <header>
            ";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "        </header>

        <div class=\"container\">
            ";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 18
        echo "        </div>


        <footer>
            ";
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "        </footer>

        <script src=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.js");
        echo "\"> </script>
        <script src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap.js");
        echo "\"> </script>
        <script src=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/app.js");
        echo "\"> </script>

    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/omar/layouts/test.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 27,  79 => 26,  75 => 25,  71 => 23,  67 => 22,  61 => 18,  59 => 17,  54 => 14,  50 => 13,  44 => 9,  41 => 8,  37 => 7,  32 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE>
<html>
    <head>
        <title>{{this.page.title}} </title>
        <meta name=\"description\"  content=\"{{this.page.meta_description}}\">
        <link rel=\"stylesheet\" href=\"https://bootswatch.com/4/sandstone/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/theme.css'|theme }}\">
        {% styles %}
    </head>
 
    <body>
        <header>
            {% partial 'header' %}
        </header>

        <div class=\"container\">
            {% page %}
        </div>


        <footer>
            {% partial 'footer' %}
        </footer>

        <script src=\"{{'assets/vendor/jquery.js'|theme}}\"> </script>
        <script src=\"{{'assets/vendor/bootstrap.js'|theme}}\"> </script>
        <script src=\"{{'assets/javascript/app.js'|theme}}\"> </script>

    </body>
</html>", "/var/www/html/octobercms/themes/omar/layouts/test.htm", "");
    }
}
