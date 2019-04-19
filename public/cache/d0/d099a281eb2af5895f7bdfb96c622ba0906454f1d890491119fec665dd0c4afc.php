<?php

/* posts/show.html */
class __TwigTemplate_b48691dae8e52c3d2e4dadb5db262ad0af3b9d7a6a02012461d2cbcfca659864 extends Twig_Template
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
        echo "\t\t<div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-4 mb-4\">

\t\t\t<div class=\"row justify-content-between\">

\t\t\t\t<div class=\"col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12\">
\t\t\t\t\t<div class=\"card bg-dark text-primary\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t<p class=\"p-2\">
\t\t\t\t\t\t\t\t\tCREATED: <span class=\"badge badge-secondary\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "post", array()), "created_at", array()), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\tBY: <span class=\"badge badge-secondary\"><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/users/show/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "post", array()), "username", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "post", array()), "username", array()), "html", null, true);
        echo "</a></span>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/js/like.js\"></script>\t
\t\t\t\t\t\t\t";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "isLiked", array())) {
            // line 18
            echo "\t\t\t\t\t\t\t\t<button class=\"p-2 btn btn-link\" id=\"dislike\" onclick=\"dislikePost( ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "post", array()), "id", array()), "html", null, true);
            echo " )\"><img src=\"";
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/images/dislike.png\" id=\"like-btn\"></button>\t\t\t\t
\t\t\t\t\t\t\t";
        } else {
            // line 20
            echo "\t\t\t\t\t\t\t\t<button class=\"p-2 btn btn-link\" id=\"like\" onclick=\"likePost( ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "post", array()), "id", array()), "html", null, true);
            echo " )\"><img src=\"";
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/images/like.png\" id=\"like-btn\"></button>\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        }
        // line 22
        echo " \t\t\t\t\t\t\t</div>
 \t\t\t\t\t\t\t<h1 class=\"text-center\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "post", array()), "title", array()), "html", null, true);
        echo "</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<img src=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "post", array()), "image", array()), "html", null, true);
        echo "\" id=\"post-image\">
\t\t\t\t\t\t\t<p>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "post", array()), "body", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<hr>

\t\t\t\t\t<!-- POST COMMENT -->
\t\t\t\t\t<script src=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/js/comment.js\"></script>
\t\t\t\t\t<div id=\"commentMSG\">msg</div>
\t\t\t\t\t<form id=\"commentForm\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"post_id\" id=\"post_id\" value=\"";
        // line 37
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
\t\t\t\t<div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12\">
\t\t\t\t";
        // line 49
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "comments", array()))) {
            // line 50
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "comments", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 51
                echo "\t\t\t\t\t<div class=\"media border p-3\">
\t\t\t\t\t\t<img src=\"";
                // line 52
                echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
                echo "\\";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "profile_image", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "username", array()), "html", null, true);
                echo "\" class=\"mr-3 mt-3 rounded-circle\" style=\"width:60px;\">
\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t<h4><a href=\"";
                // line 54
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
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "comment", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "\t\t\t\t";
        } else {
            // line 61
            echo "\t\t\t\t\t<div class=\"alert alert-warning text-center\">no comments!</div>
\t\t\t\t";
        }
        // line 63
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
        return array (  174 => 63,  170 => 61,  167 => 60,  157 => 56,  146 => 54,  137 => 52,  134 => 51,  129 => 50,  127 => 49,  112 => 37,  106 => 34,  96 => 27,  90 => 26,  84 => 23,  81 => 22,  73 => 20,  65 => 18,  63 => 17,  59 => 16,  50 => 14,  46 => 13,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "posts/show.html", "C:\\xampp\\htdocs\\php_mvc\\app\\views\\posts\\show.html");
    }
}
