<?php

/* error/404.html */
class __TwigTemplate_23bcd0253152cb97afa47934b9681f9c7d6cb961589f2e97484fb15530bab490 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
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
\t<meta http-equiv=\"content-type\" content=\"text/html\">\t
\t<meta name=\"description\" content=\"\">
\t<meta name=\"keywords\" content=\"\">
\t<meta name=\"author\" content=\"\">    
\t<title>";
        // line 11
        echo twig_escape_filter($this->env, ($context["SITENAME"] ?? null), "html", null, true);
        echo "</title>  
\t<!-- css -->
\t<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/css/style.css\"> 
    <!-- bootstrap -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
    <script src=\"https://code.jquery.com/jquery-3.3.1.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>  
    <!-- fontawesome -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\">
</head>
<body class=\"bg-dark\">

\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"card alert alert-danger error-page\">
\t\t\t\t\t<div class=\"card-body alert alert-danger\">
\t\t\t\t\t\t<p class=\"text-center\">404 ERROR</p>
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<p class=\"text-center\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "message", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-footer text-center alert alert-danger\">
\t\t\t\t\t\t<a href=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/\">";
        echo twig_escape_filter($this->env, ($context["SITENAME"] ?? null), "html", null, true);
        echo "</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>


</body>
</html>";
    }

    public function getTemplateName()
    {
        return "error/404.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 34,  61 => 31,  40 => 13,  35 => 11,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "error/404.html", "C:\\xampp\\htdocs\\php_mvc_2\\app\\views\\error\\404.html");
    }
}
