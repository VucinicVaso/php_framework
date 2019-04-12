<?php

/* pages/index.html */
class __TwigTemplate_60fff99e9700a007b87938c18c11c344e3b266108f1a9ca2337c825ea600f318 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("includes/layout.html", "pages/index.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "includes/layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t\t<div class=\"col-md-6 col-sm-12\">
\t\t\t<div class=\"row justify-content-center\" id=\"register_div\">
\t\t\t\t<div class=\"col-md-12  col-sm-12 text-center\" id=\"register\">
\t\t\t\t\t<a href=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/users/register\">REGISTER</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-6 col-sm-12\">
\t\t\t<div class=\"row justify-content-center\" id=\"login_div\">
\t\t\t\t<div class=\"col-md-12 col-sm-12 text-center\" id=\"register\">
\t\t\t\t\t<a href=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/users/login\">LOGIN</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t\t
\t";
    }

    public function getTemplateName()
    {
        return "pages/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 14,  40 => 7,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "pages/index.html", "C:\\xampp\\htdocs\\php_mvc_2\\app\\views\\pages\\index.html");
    }
}
