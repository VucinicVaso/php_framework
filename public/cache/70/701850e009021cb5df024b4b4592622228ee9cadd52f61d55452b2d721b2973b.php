<?php

/* posts/edit.html */
class __TwigTemplate_11266e856cd424f6fc76d0741615f005a2f9e89211745643c9b8c10e4af6a33b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("includes/layout.html", "posts/edit.html", 1);
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
        echo " 
\t\t<div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2 mb-2\">

\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t<div class=\"col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12\">
\t\t\t\t\t<div class=\"card text-primary\">
\t\t\t\t\t\t<div class=\"card-header bg-dark\">
\t\t\t\t\t\t\t<h2 class=\"text-center\"><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/users/index\"><i class=\"fas fa-arrow-left\"></i></a> EDIT ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "post", array()), "title", array()), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t\t<img src=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "post", array()), "image", array()), "html", null, true);
        echo "\" class=\"profile-image\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t";
        // line 14
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "message", array())) {
            // line 15
            echo "\t\t\t\t\t\t\t\t<p class=\"text-center alert alert-success\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "message", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t";
        } else {
            // line 17
            echo "\t\t\t\t\t\t\t";
        }
        // line 18
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<form action=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/posts/edit/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "post", array()), "id", array()), "html", null, true);
        echo "\" method=\"POST\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t\t<div class=\"card-body bg-dark\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"title\" class=\"col-form-label\">Title: *</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"title\" id=\"title\" class=\"form-control\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "post", array()), "title", array()), "html", null, true);
        echo "\" required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"body\" class=\"col-form-label\">Body: *</label>
\t\t\t\t\t\t\t\t\t<textarea id=\"body\" name=\"body\" class=\"form-control\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "post", array()), "body", array()), "html", null, true);
        echo "</textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"profileImage\">Image: *</label>
\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"image\" class=\"form-control\">
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
        return "posts/edit.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 27,  80 => 23,  71 => 19,  68 => 18,  65 => 17,  59 => 15,  57 => 14,  49 => 11,  43 => 10,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "posts/edit.html", "C:\\xampp\\htdocs\\php_mvc_2\\app\\views\\posts\\edit.html");
    }
}
