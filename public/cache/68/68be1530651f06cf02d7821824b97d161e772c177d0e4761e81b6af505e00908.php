<?php

/* users/edit.html */
class __TwigTemplate_f857fc8cab14de8b573378185d3b3de4663378529dff59e121c9b917440ae506 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("includes/layout.html", "users/edit.html", 1);
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
        echo "\t\t<div class=\"col-md-12 col-sm-12 my-4\">

\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12 col-12\">
\t\t\t\t\t<div class=\"card text-primary\">
\t\t\t\t\t\t<div class=\"card-header bg-dark\">
\t\t\t\t\t\t\t<h1 class=\"text-center\"><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/users/index\"><i class=\"fas fa-arrow-left\"></i></a> EDIT PROFILE</h1>
\t\t\t\t\t\t\t<img src=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "user", array()), "profile_image", array()), "html", null, true);
        echo "\" class=\"profile-image\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"bg-dark py-2\">
\t\t\t\t\t\t\t";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "success", array())) {
            // line 16
            echo "\t\t\t\t\t\t\t\t<p class=\"text-center alert alert-success\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "success", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t";
        }
        // line 18
        echo "\t\t\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "error", array())) {
            // line 19
            echo " \t\t\t\t\t\t\t\t<p class=\"text-center alert alert-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "error", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t";
        }
        // line 21
        echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<form action=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/users/edit\" method=\"POST\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"__csrf_value\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "getCsrfToken", array()), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"card-body bg-dark\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12 col-12\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"firstname\" class=\"col-form-label\">First name: *</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"firstname\" id=\"firstname\" class=\"form-control\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "user", array()), "firstname", array()), "html", null, true);
        echo "\" required>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12 col-12\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"lastname\" class=\"col-form-label\">Last name: *</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"lastname\" id=\"lastname\" class=\"form-control\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "user", array()), "lastname", array()), "html", null, true);
        echo "\" required>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t                    \t<div class=\"form-group\">
\t\t                    \t\t<label for=\"gender\" class=\"col-form-label text-md-center\">Gender: *</label>
\t\t                            <div class=\"row justify-content-center\">
\t\t\t                            <div class=\"col-lg-6 col-md-6 col-sm-12 col-12\">
\t\t\t                               <div class=\"form-check text-center\">
\t\t\t                                    <label class=\"form-check-label\">
\t\t\t                                    \t";
        // line 44
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "user", array()), "gender", array()) == "female")) {
            // line 45
            echo "\t\t\t                                        <input type=\"radio\" class=\"form-check-input\" name=\"gender\" id=\"gender\" value=\"female\" checked>Female
\t\t\t                                    \t";
        } else {
            // line 47
            echo "\t\t\t                                        <input type=\"radio\" class=\"form-check-input\" name=\"gender\" id=\"gender\" value=\"female\">Female
\t\t\t                                    \t";
        }
        // line 49
        echo "\t\t\t                                    </label>
\t\t\t                                </div>                                 
\t\t\t                            </div>
\t\t\t                            <div class=\"col-lg-6 col-md-6 col-sm-12 col-12\">         
\t\t\t                               <div class=\"form-check text-center\">
\t\t\t                                    <label class=\"form-check-label\">
\t\t\t                                    \t";
        // line 55
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "user", array()), "gender", array()) == "male")) {
            // line 56
            echo "\t\t\t                                        <input type=\"radio\" class=\"form-check-input\" name=\"gender\" id=\"gender\" value=\"male\" checked>Male
\t\t\t                                    \t";
        } else {
            // line 58
            echo "\t\t\t                                        <input type=\"radio\" class=\"form-check-input\" name=\"gender\" id=\"gender\" value=\"male\">Male
\t\t\t                                    \t";
        }
        // line 60
        echo "\t\t\t                                    </label>
\t\t\t                                </div>                               
\t\t\t                            </div>
\t\t                            </div> 
\t\t                    \t</div>
\t\t                    \t<div class=\"form-group\">
\t\t                    \t\t<label for=\"age\" class=\"col-form-label text-md-center\">Age: *</label>
\t\t                    \t\t<select class=\"form-control\" id=\"age\" name=\"age\">
\t\t                    \t\t\t<option>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "user", array()), "age", array()), "html", null, true);
        echo "</option>
\t\t                    \t\t\t<hr />
\t\t                    \t\t\t";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(2018, 1920));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 71
            echo "\t\t                    \t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
\t\t                    \t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "\t\t                    \t\t</select>
\t\t                    \t</div>\t\t
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"email\">Email: *</label>
\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" id=\"email\" class=\"form-control\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "user", array()), "email", array()), "html", null, true);
        echo "\" required>
\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"password\">New password: *</label>
\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"password\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"profileImage\">Profile image: *</label>
\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"profileImage\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-footer bg-dark\">
\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"EDIT\" class=\"btn btn-success w-100\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>\t\t\t\t\t\t

\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t</div>\t
\t";
    }

    public function getTemplateName()
    {
        return "users/edit.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 77,  168 => 73,  157 => 71,  153 => 70,  148 => 68,  138 => 60,  134 => 58,  130 => 56,  128 => 55,  120 => 49,  116 => 47,  112 => 45,  110 => 44,  97 => 34,  90 => 30,  81 => 24,  77 => 23,  73 => 21,  67 => 19,  64 => 18,  58 => 16,  56 => 15,  47 => 11,  43 => 10,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "users/edit.html", "C:\\xampp\\htdocs\\php_mvc_2\\app\\views\\users\\edit.html");
    }
}
