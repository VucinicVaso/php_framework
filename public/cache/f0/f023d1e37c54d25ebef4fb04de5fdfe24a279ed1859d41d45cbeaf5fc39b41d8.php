<?php

/* notifications/friends.html */
class __TwigTemplate_ce54c6e289b349af00ea716a06e1662075ce98f9a1e7a42eac0e189a1c94dee9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("includes/layout.html", "notifications/friends.html", 1);
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
\t\t<div class=\"col-md-12 col-sm-12\">

\t\t\t<h1 class=\"text-center\">FRIENDS</h1>

\t\t\t<div class=\"row mt-2 mb-2\">

\t\t";
        // line 11
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "notifications", array()))) {
            // line 12
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "notifications", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["friend"]) {
                // line 13
                echo "\t\t\t\t<div class=\"col-md-4 col-sm-12\">
\t\t\t\t\t<div class=\"card bg-dark text-white\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t<img src=\"";
                // line 16
                echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["friend"], "profile_image", array()), "html", null, true);
                echo "\" class=\"w-100\" style=\"height: 200px;\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<a href=\"";
                // line 19
                echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
                echo "/users/show/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["friend"], "id", array()), "html", null, true);
                echo "\" class=\"text-center\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["friend"], "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["friend"], "lastname", array()), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\tadded you for a friend.
\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t\t\t<p class=\"text-center\"><b class=\"text-primary\">Date: </b> ";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["friend"], "created_at", array()), "html", null, true);
                echo " </p>
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friend'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "\t\t";
        } else {
            // line 29
            echo "\t\t\t<div class=\"col-md-12 col-sm-12\">
\t\t\t\t<p class=\"text-center alert alert-warning\">You have 0 new friends.</p>
\t\t\t</div>
\t\t";
        }
        // line 33
        echo "
\t\t\t</div>
\t\t</div>\t

\t";
    }

    public function getTemplateName()
    {
        return "notifications/friends.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 33,  91 => 29,  88 => 28,  77 => 23,  64 => 19,  56 => 16,  51 => 13,  46 => 12,  44 => 11,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "notifications/friends.html", "C:\\xampp\\htdocs\\php_mvc_2\\app\\views\\notifications\\friends.html");
    }
}
