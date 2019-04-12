<?php

/* posts/index.html */
class __TwigTemplate_363ff134d7e6a3794c3e696ea766b55db09d14278ae9846bcd1d7a07ad5cc950 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("includes/layout.html", "posts/index.html", 1);
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
\t\t<div class=\"col-md-12 col-sm-12 mt-2 mb-2\">
\t\t\t<div class=\"row\">
\t\t\t\t\t
\t\t\t\t<div class=\"col-md-8 col-sm-12\">
\t\t\t\t\t";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "posts", array())) {
            // line 10
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "posts", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 11
                echo "\t\t\t\t\t\t\t<div class=\"card bg-dark text-primary mb-2\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<h1 class=\"text-center\">";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", array()), "html", null, true);
                echo "</h1>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 16
                echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "image", array()), "html", null, true);
                echo "\" id=\"post-photo\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 19
                echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
                echo "/posts/show/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", array()), "html", null, true);
                echo "\">Read more...</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "\t\t\t\t\t";
        } else {
            // line 24
            echo "\t\t\t\t\t";
        }
        // line 25
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-sm-12\">
\t\t\t\t\t<ul class=\"list-group bg-dark\">
\t\t\t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "users", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 29
            echo "\t\t\t\t\t\t<li class=\"list-group-item text-center bg-dark\"><a href=\"";
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/users/show/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", array()), "html", null, true);
            echo "</a></li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t\t\t\t</ul> 
\t\t\t\t</div>

\t\t\t</div>\t\t\t
\t\t</div>

\t";
    }

    public function getTemplateName()
    {
        return "posts/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 31,  94 => 29,  90 => 28,  85 => 25,  82 => 24,  79 => 23,  67 => 19,  59 => 16,  53 => 13,  49 => 11,  44 => 10,  42 => 9,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "posts/index.html", "C:\\xampp\\htdocs\\php_mvc_2\\app\\views\\posts\\index.html");
    }
}
