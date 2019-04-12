<?php

/* users/show.html */
class __TwigTemplate_2220c3687280438604f74ca852ab2299b24eeeedf46ac811640a1281b4363492 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("includes/layout.html", "users/show.html", 1);
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
\t\t<div class=\"col-md-12 mt-2\">
\t\t\t<div id=\"profile\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<div class=\"card bg-dark text-primary mt-1 mb-1\">
\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "userProfile", array()), "profile_image", array()), "html", null, true);
        echo "\" class=\"profile-image\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<p class=\"\">FIRSTNAME: <span class=\"badge badge-primary float-right\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "userProfile", array()), "firstname", array()), "html", null, true);
        echo "</span></p>
\t\t\t\t\t\t\t\t<p class=\"\">LASTNAME: <span class=\"badge badge-primary float-right\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "userProfile", array()), "lastname", array()), "html", null, true);
        echo "</span></p>
\t\t\t\t\t\t\t\t<p class=\"\">USERNAME: <span class=\"badge badge-primary float-right\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "userProfile", array()), "username", array()), "html", null, true);
        echo "</span></p>\t
\t\t\t\t\t\t\t\t<p class=\"\">EMAIL: <span class=\"badge badge-primary float-right\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "userProfile", array()), "email", array()), "html", null, true);
        echo "</span></p>\t
\t\t\t\t\t\t\t\t<p class=\"\">GENDER: <span class=\"badge badge-primary float-right\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "userProfile", array()), "gender", array()), "html", null, true);
        echo "</span></p>
\t\t\t\t\t\t\t\t<p class=\"\">AGE: <span class=\"badge badge-primary float-right\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "userProfile", array()), "age", array()), "html", null, true);
        echo "</span></p>\t\t
\t\t\t\t\t\t\t\t<p class=\"\">PROFILE CREATED: <span class=\"badge badge-primary float-right\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "userProfile", array()), "created_at", array()), "html", null, true);
        echo "</span></p>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-footer\">

\t\t\t\t\t\t\t<script src=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/js/friend.js\"></script>
\t\t\t\t\t\t\t";
        // line 25
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "isFriend", array()))) {
            // line 26
            echo "\t\t\t\t\t\t\t\t<button class=\"btn btn-info add w-100\" data-user=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "userProfile", array()), "id", array()), "html", null, true);
            echo "\"><i class=\"fas fa-plus-circle\"></i> FRIEND</button>
\t\t\t\t\t\t\t";
        } else {
            // line 28
            echo "\t\t\t\t\t\t\t\t<button class=\"btn btn-danger remove w-100\" data-user=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "userProfile", array()), "id", array()), "html", null, true);
            echo "\"><i class=\"fas fa-minus-circle\"></i> FRIEND</button>
\t\t\t\t\t\t\t";
        }
        // line 30
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<hr />
\t\t\t<div class=\"row mt-2 mb-2\">
\t\t\t\t";
        // line 37
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "posts", array()))) {
            echo "\t\t\t\t\t
\t\t\t\t";
        } else {
            // line 39
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "posts", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 40
                echo "\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<div class=\"card bg-dark text-primary\">
\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t<h2 class=\"text-center\">";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", array()), "html", null, true);
                echo "</h2>
\t\t\t\t\t\t\t\t<small class=\"text-center\">CREATED: ";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "created_at", array()), "html", null, true);
                echo "</small>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 47
                echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "image", array()), "html", null, true);
                echo "\" class=\"w-100\" style=\"height: 200px;\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 50
                echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
                echo "/posts/show/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", array()), "html", null, true);
                echo "\">Read more...</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "\t\t\t\t
\t\t\t\t";
        }
        // line 56
        echo "\t\t\t</div>
\t\t</div>\t

\t";
    }

    public function getTemplateName()
    {
        return "users/show.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 56,  156 => 54,  143 => 50,  135 => 47,  129 => 44,  125 => 43,  120 => 40,  115 => 39,  110 => 37,  101 => 30,  95 => 28,  89 => 26,  87 => 25,  83 => 24,  76 => 20,  72 => 19,  68 => 18,  64 => 17,  60 => 16,  56 => 15,  52 => 14,  44 => 11,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "users/show.html", "C:\\xampp\\htdocs\\php_mvc_2\\app\\views\\users\\show.html");
    }
}
