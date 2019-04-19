<?php

/* notifications/comments.html */
class __TwigTemplate_e9dc5d4e1604609bfd0d67335b4792a3fe512197dc94adfa4760e3fc688bcabf extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("includes/layout.html", "notifications/comments.html", 1);
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

\t\t\t<h1 class=\"text-center\">COMMENTS</h1>

\t\t\t<div class=\"row mt-2 mb-2\">

\t\t";
        // line 11
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "notifications", array()))) {
            // line 12
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "notifications", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 13
                echo "\t\t\t\t<div class=\"col-md-4 col-sm-12\">
\t\t\t\t\t<div class=\"card bg-dark text-white\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t<img src=\"";
                // line 16
                echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "image", array()), "html", null, true);
                echo "\" class=\"w-100\" style=\"height: 200px;\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<a href=\"";
                // line 19
                echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
                echo "/users/show/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "lastname", array()), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\tcommented on your post 
\t\t\t\t\t\t\t<a href=\"";
                // line 21
                echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
                echo "/posts/show/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "slug", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "title", array()), "html", null, true);
                echo "</a>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t\t\t<p class=\"text-center\"><b class=\"text-primary\">Comment: </b> ";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "comment", array()), "html", null, true);
                echo " </p>
\t\t\t\t\t\t\t<p class=\"text-center\"><b class=\"text-primary\">Date: </b> ";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "created_at", array()), "html", null, true);
                echo " </p>
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "\t\t";
        } else {
            // line 31
            echo "\t\t\t<div class=\"col-md-12 col-sm-12\">
\t\t\t\t<p class=\"text-center alert alert-warning\">You have 0 new comments.</p>
\t\t\t</div>
\t\t";
        }
        // line 35
        echo "
\t\t\t</div>
\t\t</div>\t

\t";
    }

    public function getTemplateName()
    {
        return "notifications/comments.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 35,  103 => 31,  100 => 30,  89 => 25,  85 => 24,  75 => 21,  64 => 19,  56 => 16,  51 => 13,  46 => 12,  44 => 11,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "notifications/comments.html", "C:\\xampp\\htdocs\\php_mvc\\app\\views\\notifications\\comments.html");
    }
}
