<?php

/* users/index.html */
class __TwigTemplate_553f32a45f25bedf1542fe250f6e84131434b40e4856ff49df6853998ecce3cc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("includes/layout.html", "users/index.html", 1);
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
\t\t<div class=\"col-lg-12 col-md-12 col-sm-12 col-12\">
\t\t\t<div class=\"row my-2\">
\t\t\t\t
\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-12 col-12\">\t\t\t\t
\t\t\t\t\t<div class=\"card bg-dark text-primary\">
\t\t\t\t\t\t<div class=\"card-header bg-dark\">
\t\t\t\t\t\t\t<img src=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "user", array()), "profile_image", array()), "html", null, true);
        echo "\" class=\"profile-image\">
\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"card-body bg-dark\"> 
\t\t\t\t\t\t\t<p>FIRSTNAME: <span class=\"badge badge-primary float-right\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "user", array()), "firstname", array()), "html", null, true);
        echo "</span></p>
\t\t\t\t\t\t\t<p>LASTNAME: <span class=\"badge badge-primary float-right\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "user", array()), "lastname", array()), "html", null, true);
        echo "</span></p>
\t\t\t\t\t\t\t<p>USERNAME: <span class=\"badge badge-primary float-right\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "user", array()), "username", array()), "html", null, true);
        echo "</span></p>\t
\t\t\t\t\t\t\t<p>EMAIL: <span class=\"badge badge-primary float-right\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "user", array()), "email", array()), "html", null, true);
        echo "</span></p>\t
\t\t\t\t\t\t\t<p>GENDER: <span class=\"badge badge-primary float-right\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "user", array()), "gender", array()), "html", null, true);
        echo "</span></p>
\t\t\t\t\t\t\t<p>AGE: <span class=\"badge badge-primary float-right\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "user", array()), "age", array()), "html", null, true);
        echo "</span></p>
\t\t\t\t\t\t\t<p>PROFILE CREATED: <span class=\"badge badge-primary float-right\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "user", array()), "created_at", array()), "html", null, true);
        echo "</span></p>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<p class=\"btn btn-outline-primary w-100 text-white\" data-toggle=\"modal\" data-target=\"#likedPosts\"><i class=\"far fa-heart\"></i> POSTS</p>
\t\t\t\t\t\t\t<p class=\"btn btn-outline-primary w-100 text-white\" data-toggle=\"modal\" data-target=\"#showFriends\">FRIENDS</p>
\t\t\t\t\t\t\t<p class=\"btn btn-outline-primary w-100 text-white\" data-toggle=\"modal\" data-target=\"#createPost\"><i class=\"far fa-plus-square\"></i> POST</p>
\t\t\t\t\t\t\t<a href=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/gallery/index\" class=\"btn btn-outline-primary w-100 text-uppercase text-white\">GALLERY</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t\t\t<form action=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/users/delete\" method=\"POST\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"user_id\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "user", array()), "id", array()), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"DELETE PROFILE\" class=\"btn btn-danger w-100\">
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-8 col-md-8 col-sm-12 col-12\">

\t\t\t\t<!-- search -->
\t\t\t\t\t<div class=\"row mt-2\">
\t\t\t\t\t\t<div class=\"col-lg-12 col-md-12 col-sm-12 col-12\">
\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search...\" id=\"searchInput\">
\t\t\t\t\t\t\t\t<div class=\"input-group-append\"><button class=\"btn btn-primary\">SEARCH</button></div>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t
\t\t\t\t\t<div id=\"search-result\">
\t\t\t\t\t\t<!-- search results -->
\t\t\t\t\t</div>
\t\t\t\t\t<script src=\"";
        // line 50
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/js/search.js\"></script>
\t\t\t\t\t<hr />

\t\t\t\t<!-- posts -->
\t\t\t\t";
        // line 54
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "posts", array()))) {
            echo "\t\t\t\t\t
\t\t\t\t";
        } else {
            // line 56
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "posts", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 57
                echo "\t\t\t\t\t<div class=\"card bg-dark text-primary mb-2\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t<h2 class=\"text-center\">";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", array()), "html", null, true);
                echo "</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<img src=\"";
                // line 62
                echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "image", array()), "html", null, true);
                echo "\" id=\"post-img\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-12 col-12\">
\t\t\t\t\t\t\t\t\t<form action=\"";
                // line 67
                echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
                echo "/posts/delete\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"post_id\" value=\"";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-dark w-100\"><img src=\"";
                // line 69
                echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
                echo "/images/delete-icon.png\" style=\"height: 50px;\"></button>\t
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-12 col-12\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 73
                echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
                echo "/posts/show/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", array()), "html", null, true);
                echo "\" class=\"btn btn-dark w-100\"><img src=\"";
                echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
                echo "/images/eye.png\" style=\"height: 50px;\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-12 col-12\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 76
                echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
                echo "/posts/edit/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-dark w-100\"><img src=\"";
                echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
                echo "/images/edit.png\" style=\"height: 50px;\"></a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "\t\t\t\t
\t\t\t\t";
        }
        // line 83
        echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t</div>\t

\t\t\t</div>
\t\t</div>

\t\t<!-- showFriends Modal -->
\t\t<div class=\"modal\" id=\"showFriends\">
\t\t\t<div class=\"modal-dialog modal-lg\">
\t\t\t\t<div class=\"modal-content bg-dark text-primary\">
\t\t\t\t\t<!-- Modal Header -->
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<h4 class=\"modal-title\">FRIENDS</h4>
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Modal body -->
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 100
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "friends", array())) {
            // line 101
            echo "\t\t\t\t\t\t<div class=\"row my-1\">
\t\t\t\t\t\t";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "friends", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["friend"]) {
                // line 103
                echo "\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-12 col-12 card bg-dark mb-1 mr-1\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<h2 class=\"text-center text-primary\">";
                // line 105
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["friend"], "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["friend"], "lastname", array()), "html", null, true);
                echo "</h2>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 108
                echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["friend"], "profile_image", array()), "html", null, true);
                echo "\" class=\"w-100\" style=\"height: 200px;\">
\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 111
                echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
                echo "/users/show/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["friend"], "friend_id", array()), "html", null, true);
                echo "\" class=\"btn btn-primary w-100\">VIEW PROFILE</a>
\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friend'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
        } else {
            // line 117
            echo "\t\t\t\t\t";
        }
        // line 118
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<!-- Modal footer -->
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- likedPosts Modal -->
\t\t<div class=\"modal\" id=\"likedPosts\">
\t\t\t<div class=\"modal-dialog modal-lg\">
\t\t\t\t<div class=\"modal-content bg-dark text-primary\">
\t\t\t\t\t<!-- Modal Header -->
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<h4 class=\"modal-title\">LIKED POSTS</h4>
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Modal body -->
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 138
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "likedPosts", array())) {
            // line 139
            echo "\t\t\t\t\t\t<div class=\"row my-1\">
\t\t\t\t\t\t";
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "likedPosts", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["likedPost"]) {
                // line 141
                echo "\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-12 col-12 card bg-dark mb-1 mr-1\">
\t\t\t\t\t\t\t<div class=\"card-header text-primary\" style=\"padding: 0px; margin: 0px;\">
\t\t\t\t\t\t\t\t<h4 class=\"text-center text-primary\">";
                // line 143
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["likedPost"], "title", array()), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-body\" style=\"padding: 0px; margin: 0px;\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 146
                echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["likedPost"], "image", array()), "html", null, true);
                echo "\" class=\"w-100\" style=\"height: 150px;\">
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 149
                echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
                echo "/posts/show/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["likedPost"], "slug", array()), "html", null, true);
                echo "\" class=\"btn btn-primary w-100\">VIEW POST</a>
\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['likedPost'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
        } else {
            // line 155
            echo "\t\t\t\t\t";
        }
        // line 156
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<!-- Modal footer -->
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- createPost Modal -->
\t\t<div class=\"modal\" id=\"createPost\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t\t<div class=\"modal-content bg-dark text-primary\">
\t\t\t\t\t<!-- Modal Header -->
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<h4 class=\"modal-title\">CREATE POST</h4>
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Modal body -->
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<form id=\"postForm\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"title\">Title:</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"title\" class=\"form-control\" id=\"title\" required>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"body\">Body:</label>
\t\t\t\t\t\t\t\t<textarea name=\"body\" class=\"form-control\" id=\"body\" required></textarea>
\t\t\t\t\t\t\t</div>\t\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"image\">Image:</label>
\t\t\t\t\t\t\t\t<input type=\"file\" name=\"image\" id=\"upload_image\">
\t\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t\t <div class=\"col-md-6\">
\t\t\t\t\t\t\t\t \t<input type=\"submit\" name=\"submit\" value=\"CREATE\" class=\"btn btn-info w-100\">
\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t <div class=\"col-md-6\">
\t\t\t\t\t\t\t\t \t<button type=\"button\" class=\"btn btn-danger w-100\" data-dismiss=\"modal\">Close</button>
\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12\" id=\"createPostMSG\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<script src=\"";
        // line 209
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/js/post.js\"></script>

\t";
    }

    public function getTemplateName()
    {
        return "users/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  391 => 209,  336 => 156,  333 => 155,  329 => 153,  317 => 149,  309 => 146,  303 => 143,  299 => 141,  295 => 140,  292 => 139,  290 => 138,  268 => 118,  265 => 117,  261 => 115,  249 => 111,  241 => 108,  233 => 105,  229 => 103,  225 => 102,  222 => 101,  220 => 100,  201 => 83,  197 => 82,  180 => 76,  170 => 73,  163 => 69,  159 => 68,  155 => 67,  145 => 62,  139 => 59,  135 => 57,  130 => 56,  125 => 54,  118 => 50,  94 => 29,  90 => 28,  84 => 25,  76 => 20,  72 => 19,  68 => 18,  64 => 17,  60 => 16,  56 => 15,  52 => 14,  44 => 11,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "users/index.html", "C:\\xampp\\htdocs\\php_mvc\\app\\views\\users\\index.html");
    }
}
