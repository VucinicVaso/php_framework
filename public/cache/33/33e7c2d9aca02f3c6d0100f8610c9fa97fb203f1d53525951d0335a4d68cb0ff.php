<?php

/* users/register.html */
class __TwigTemplate_a9f580681d4c23eb42bb46575d01e7a649e9f6b7363d760e35a9ab288307b070 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("includes/layout.html", "users/register.html", 1);
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
        echo "\t\t<div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
\t
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/js/register.js\"></script>\t

\t\t\t<div class=\"row justify-content-center mt-4 mb-4\">
\t\t\t\t<div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12\">
\t\t\t\t\t<form id=\"register_form\" class=\"card\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"card-header bg-dark text-primary\">
\t\t\t\t\t\t\t<h1 class=\"text-center text-uppercase\">Register</h1>
\t\t\t\t\t\t\t<small>Please fill out this form to register with us!</small>
\t\t\t\t\t\t\t<div id=\"message\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"__csrf_value\" id=\"csrf_value\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "getCsrfToken", array()), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t\t\t<div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12\">
\t\t\t\t\t\t\t\t\t\t<label for=\"firstname\" class=\"col-form-label\">First name: *</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"firstname\" id=\"firstname\" class=\"form-control\" required>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12\">
\t\t\t\t\t\t\t\t\t\t<label for=\"lastname\" class=\"col-form-label\">Last name: *</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"lastname\" id=\"lastname\" class=\"form-control\" required>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t                    \t<div class=\"form-group\">
\t                    \t\t<label for=\"gender\" class=\"col-form-label text-md-center\">Gender: *</label>
\t                            <div class=\"row justify-content-center\">
\t\t                            <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12\">
\t\t                               <div class=\"form-check text-center\">
\t\t                                    <label class=\"form-check-label\">
\t\t                                        <input type=\"radio\" class=\"form-check-input\" name=\"gender\" id=\"gender\" value=\"female\">Female
\t\t                                    </label>
\t\t                                </div>                                 
\t\t                            </div>
\t\t                            <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12\">         
\t\t                               <div class=\"form-check text-center\">
\t\t                                    <label class=\"form-check-label\">
\t\t                                        <input type=\"radio\" class=\"form-check-input\" name=\"gender\" id=\"gender\" value=\"male\">Male
\t\t                                    </label>
\t\t                                </div>                               
\t\t                            </div>
\t                            </div> 
\t                    \t</div>
\t                    \t<div class=\"form-group\">
\t                    \t\t<label for=\"age\" class=\"col-form-label text-md-center\">Age: *</label>
\t                    \t\t<select class=\"form-control\" id=\"age\" name=\"age\">
\t                    \t\t\t<option></option>
\t                    \t\t\t";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(2018, 1920));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 56
            echo "\t                    \t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
\t                    \t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "\t                    \t\t</select>
\t                    \t</div>\t\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"email\">Email: *</label>
\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" id=\"email\" class=\"form-control\" required>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"password\">Password: *</label>
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"password\" class=\"form-control\" required>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"confirm_password\">Confirm Password: *</label>
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"confirm_password\" id=\"confirm_password\" class=\"form-control\" required>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12\">
\t\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"submit\" class=\"btn btn-primary w-100\" id=\"register_btn\" value=\"REGISTER\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12\"><a href=\"";
        // line 76
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/users/login\" class=\"btn btn-default w-100 text-uppercase\">HAVE AN ACCOUNT. LOG IN!</a></div>
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
        return "users/register.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 76,  109 => 58,  98 => 56,  94 => 55,  56 => 20,  39 => 6,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "users/register.html", "C:\\xampp\\htdocs\\php_mvc\\app\\views\\users\\register.html");
    }
}
