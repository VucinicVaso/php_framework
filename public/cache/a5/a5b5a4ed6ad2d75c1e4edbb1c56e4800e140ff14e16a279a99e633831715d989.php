<?php

/* includes/layout.html */
class __TwigTemplate_6947cc08ca5161ed9b6801eaf6bca009e558dc6d3872e0a98a3567b1e14f861c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\t
\t<meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
\t<meta name=\"description\" content=\"\">
\t<meta name=\"keywords\" content=\"\">
\t<meta name=\"author\" content=\"\">    
\t<title>";
        // line 10
        echo twig_escape_filter($this->env, ($context["SITENAME"] ?? null), "html", null, true);
        echo "</title>  
\t<!-- css -->
\t<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/css/style.css\"> 
    <!-- bootstrap -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
    <script src=\"https://code.jquery.com/jquery-3.3.1.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script> 
\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
    <!-- fontawesome -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\">
</head>
<body>

\t<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
\t";
        // line 24
        if (twig_test_empty(($context["session_data"] ?? null))) {
            // line 25
            echo "\t\t<a class=\"navbar-brand\" href=\"";
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/\">";
            echo twig_escape_filter($this->env, ($context["SITENAME"] ?? null), "html", null, true);
            echo "</a>
\t";
        } else {
            // line 26
            echo "\t
\t\t<a class=\"nav-brand\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/posts/index\">Home</a>

\t  \t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t    <span class=\"navbar-toggler-icon\"></span>
\t  \t</button>
\t  \t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\"> \t\t
\t\t    <ul class=\"navbar-nav ml-auto text-uppercase\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/users/index\">PROFILE</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" id=\"notification\" onclick=\"seeNotifications()\">
\t\t\t\t\tNOTIFICATIONS
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/notifications/likes\" id=\"likeNotification\"></a>
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/notifications/comments\" id=\"commentNotification\"></a>
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/notifications/friends\" id=\"friendNotification\"></a>
\t\t\t\t\t</div>
\t\t\t\t</li>\t\t\t\t\t
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a  class=\"nav-link\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/users/edit\">SETTINGS</a>
\t\t\t\t</li>\t\t
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 51
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/users/logout\">Logout</a>
\t\t\t\t</li>
\t\t    </ul>
\t\t\t<script src=\"";
            // line 54
            echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
            echo "/js/notifications.js\"></script>
\t  \t</div>
\t";
        }
        // line 57
        echo "\t</nav>

\t<div class=\"container-fluid\">
\t\t<div class=\"row justify-content-center\">
\t\t\t";
        // line 61
        $this->displayBlock('content', $context, $blocks);
        echo " 
\t\t</div>
\t</div>

\t<footer class=\"bg-dark\"></footer>

</body>
</html>";
    }

    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "includes/layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 61,  122 => 57,  116 => 54,  110 => 51,  104 => 48,  97 => 44,  93 => 43,  89 => 42,  79 => 35,  68 => 27,  65 => 26,  57 => 25,  55 => 24,  40 => 12,  35 => 10,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "includes/layout.html", "C:\\xampp\\htdocs\\php_mvc\\app\\views\\includes\\layout.html");
    }
}
