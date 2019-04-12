<?php

/* posts/show.html */
class __TwigTemplate_aaaaf8337e495cd91b409b70d6e0f64cef27fb0b09d755fe65a99ca1d6652f53 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("includes/layout.html", "posts/show.html", 1);
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
        echo "\t\t<div class=\"col-md-12 col-sm-12 mt-4 mb-4\">

\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"col-md-8 col-sm-12\">
\t\t\t\t\t<div class=\"card bg-dark text-primary\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t<h1 class=\"text-center\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "post", array()), "title", array()), "html", null, true);
        echo "</h1>
\t\t\t\t\t\t\t<small>CREATED: <span class=\"badge badge-secondary\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "post", array()), "created_at", array()), "html", null, true);
        echo "</span></small>
\t\t\t\t\t\t\t<small>BY: <span class=\"badge badge-secondary\"><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/users/show/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "post", array()), "user_id", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "post", array()), "username", array()), "html", null, true);
        echo "</a></span></small>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<img src=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "post", array()), "image", array()), "html", null, true);
        echo "\" id=\"post-image\">
\t\t\t\t\t\t\t<p>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "post", array()), "body", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t\t\t<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/js/like.js\"></script>
\t\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "isLiked", array())) {
            // line 23
            echo "\t\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-link\" id=\"dislike\" onclick=\"dislikePost(";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "post", array()), "id", array()), "html", null, true);
            echo ")\"><img src=\"";
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/images/dislike.png\" id=\"like-btn\"></button>
\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        } else {
            // line 27
            echo "\t\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-link\" id=\"like\" onclick=\"likePost(";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "post", array()), "id", array()), "html", null, true);
            echo ")\"><img src=\"";
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/images/like.png\" id=\"like-btn\"></button>
\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        }
        // line 31
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<hr>

\t\t\t\t\t<!-- POST COMMENT -->
\t\t\t\t\t<script src=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/js/comment.js\"></script>
\t\t\t\t\t<div id=\"commentMSG\">msg</div>
\t\t\t\t\t<form id=\"commentForm\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"post_id\" id=\"post_id\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "post", array()), "id", array()), "html", null, true);
        echo "\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"comment\">Comment:</label>
\t\t\t\t\t\t\t<textarea name=\"comment\" id=\"comment\" class=\"form-control\" required></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"CREATE\" class=\"btn btn-info w-100\">
\t\t\t\t\t</form>
\t\t\t\t\t
\t\t\t\t</div>

\t\t\t\t<!-- COMMENTS -->
\t\t\t\t<div class=\"col-md-4 col-sm-12\">
\t\t\t\t";
        // line 53
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "comments", array()))) {
            // line 54
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "comments", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 55
                echo "\t\t\t\t\t<div class=\"media border p-3\">
\t\t\t\t\t\t<img src=\"";
                // line 56
                echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
                echo "\\";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "profile_image", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "username", array()), "html", null, true);
                echo "\" class=\"mr-3 mt-3 rounded-circle\" style=\"width:60px;\">
\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t<h4><a href=\"";
                // line 58
                echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
                echo "/users/show/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "username", array()), "html", null, true);
                echo "</a> <small><i>Posted on ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "created_at", array()), "html", null, true);
                echo "</i></small></h4>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<p>";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "comment", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "\t\t\t\t";
        } else {
            // line 65
            echo "\t\t\t\t\t<div class=\"alert alert-warning text-center\">no comments!</div>
\t\t\t\t";
        }
        // line 67
        echo "\t\t\t\t</div>
\t\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "posts/show.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 67,  176 => 65,  173 => 64,  163 => 60,  152 => 58,  143 => 56,  140 => 55,  135 => 54,  133 => 53,  118 => 41,  112 => 38,  103 => 31,  95 => 28,  92 => 27,  84 => 24,  81 => 23,  79 => 22,  74 => 20,  68 => 17,  62 => 16,  52 => 13,  48 => 12,  44 => 11,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "posts/show.html", "C:\\xampp\\htdocs\\php_mvc_2\\app\\views\\posts\\show.html");
    }
}
