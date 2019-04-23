<?php

/* /var/www/html/octobercms/themes/responsiv-clean/pages/contact.htm */
class __TwigTemplate_eeefd8d14889b3421355ceef111f029eab20ba76421615e3b78717df76d90fdc extends Twig_Template
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
        echo "<h1>Contact us </h1>

<form>
      <div class=\"form-group\">
    <label for=\"name\"> name</label>
    <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"enter yourname\">

  </div>
  <div class=\"form-group\">
    <label for=\"email\">email</label>
    <input type=\"email\" class=\"form-control\"  aria-describedby=\"emailHelp\"id=\"email\" placeholder=\"Enter your Email\">
  </div>
  
  <div class=\"form-group\">
    <label for=\"message\">message</label>
         <textarea id=\"message\" class=\"form-control\"></textarea>
   </div>
  <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
</form>
</form>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/responsiv-clean/pages/contact.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Contact us </h1>

<form>
      <div class=\"form-group\">
    <label for=\"name\"> name</label>
    <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"enter yourname\">

  </div>
  <div class=\"form-group\">
    <label for=\"email\">email</label>
    <input type=\"email\" class=\"form-control\"  aria-describedby=\"emailHelp\"id=\"email\" placeholder=\"Enter your Email\">
  </div>
  
  <div class=\"form-group\">
    <label for=\"message\">message</label>
         <textarea id=\"message\" class=\"form-control\"></textarea>
   </div>
  <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
</form>
</form>", "/var/www/html/octobercms/themes/responsiv-clean/pages/contact.htm", "");
    }
}
