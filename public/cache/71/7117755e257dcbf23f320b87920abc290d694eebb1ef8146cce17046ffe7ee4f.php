<?php

/* users/login.html */
class __TwigTemplate_4e562f364778565f2576480c47c099d36ffea2600ba5b7fb0beffa97864764ef extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("includes/layout.html", "users/login.html", 1);
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
        echo "\t\t<div class=\"col-lg-12 col-md-12 col-sm-12 col-12\">

\t\t\t<div class=\"row justify-content-center mt-5 mb-5\">
\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12 col-12\">
\t\t\t\t\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/users/login\" method=\"post\" class=\"card\">
\t\t\t\t\t\t<div class=\"card-header bg-dark text-primary\">
\t\t\t\t\t\t\t<h1 class=\"text-center text-uppercase\">Login</h1>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div id=\"loginMessage\">
\t\t\t\t\t\t\t\t";
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "csrf_token_error", array())) {
            // line 14
            echo "\t\t\t\t\t\t\t\t\t<p class=\"text-center alert alert-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "csrf_token_error", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t";
        }
        // line 16
        echo "\t\t\t\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "login_email_error", array())) {
            // line 17
            echo "\t\t\t\t\t\t\t\t\t<p class=\"text-center alert alert-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "login_email_error", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 18
($context["data"] ?? null), "login_password_error", array())) {
            // line 19
            echo "\t\t\t\t\t\t\t\t\t<p class=\"text-center alert alert-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "login_password_error", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t";
        }
        // line 21
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body\">\t
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"__csrf_value\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "getCsrfToken", array()), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"login_email\">Email: *</label>
\t\t\t\t\t\t\t\t<input type=\"email\" name=\"login_email\" id=\"login_email\" class=\"form-control\" required>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"login_password\">Password: *</label>
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"login_password\" id=\"login_password\" class=\"form-control\" required>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12 col-12\">
\t\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"submit\" class=\"btn btn-primary w-100\" id=\"register_btn\" value=\"LOGIN\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12 col-12\"><a href=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/users/register\" class=\"btn btn-default w-100\">NEW? REGISTER HERE</a></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t</div>\t

\t";
    }

    public function getTemplateName()
    {
        return "users/login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 38,  79 => 25,  73 => 21,  67 => 19,  65 => 18,  60 => 17,  57 => 16,  51 => 14,  49 => 13,  41 => 8,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "users/login.html", "C:\\xampp\\htdocs\\php_mvc_2\\app\\views\\users\\login.html");
    }
}
