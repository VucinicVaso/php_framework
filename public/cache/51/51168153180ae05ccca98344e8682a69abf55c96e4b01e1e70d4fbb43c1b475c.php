<?php

/* pages/index.html */
class __TwigTemplate_1a39b08d7f1f44d6c5e02640a53fdc31194a836b9e752411fe8b6bfa707ddecd extends Twig_Template
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
        echo "
\t\t<div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12\" id=\"register-div\">
\t\t\t<div class=\"row justify-content-center\" id=\"register-div\">
\t\t\t\t<div class=\"col-md-12 col-sm-12 text-center\" id=\"register\">
\t\t\t\t\t<a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/users/register\">REGISTER</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12\">
\t\t\t<div class=\"row justify-content-center\" id=\"login-div\">
\t\t\t\t<div class=\"col-md-12 col-sm-12 text-center py-2\" id=\"register\">
\t\t\t\t\t<a href=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/users/login\">LOGIN</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
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
        return array (  52 => 16,  41 => 8,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "pages/index.html", "C:\\xampp\\htdocs\\php_mvc\\app\\views\\pages\\index.html");
    }
}
