<?php

/* users/index.html */
class __TwigTemplate_6f2d414db95b4256d127b6583562dbb9c83ca38c28d16f62986f5ea34f3fb4fa extends Twig_Template
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

\t\t\t\t\t\t\t<div class=\"row justify-content-center my-1\">
\t\t\t\t\t\t\t    <div class=\"col-lg-6 col-md-6 col-sm-12 col-12 bg-primary text-center text-white dropdown-toggle\" id=\"notification\" onclick=\"seeNotifications()\" data-toggle=\"dropdown\">NOTIFICATIONS
\t\t\t\t
\t\t\t\t\t\t\t    \t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t    \t\t<a class=\"dropdown-item\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/notifications/likes\" id=\"likeNotification\"></a>
\t\t\t\t\t\t\t    \t\t<a class=\"dropdown-item\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/notifications/comments\" id=\"commentNotification\"></a>
\t\t\t\t\t\t\t    \t\t<a class=\"dropdown-item\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/notifications/friends\" id=\"friendNotification\"></a>
\t\t\t\t\t\t\t    \t</div>\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<img src=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "user", array()), "profile_image", array()), "html", null, true);
        echo "\" class=\"profile-image\">

\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"card-body bg-dark\"> 
\t\t\t\t\t\t\t<p>FIRSTNAME: <span class=\"badge badge-primary float-right\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "user", array()), "firstname", array()), "html", null, true);
        echo "</span></p>
\t\t\t\t\t\t\t<p>LASTNAME: <span class=\"badge badge-primary float-right\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "user", array()), "lastname", array()), "html", null, true);
        echo "</span></p>
\t\t\t\t\t\t\t<p>USERNAME: <span class=\"badge badge-primary float-right\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "user", array()), "username", array()), "html", null, true);
        echo "</span></p>\t
\t\t\t\t\t\t\t<p>EMAIL: <span class=\"badge badge-primary float-right\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "user", array()), "email", array()), "html", null, true);
        echo "</span></p>\t
\t\t\t\t\t\t\t<p>GENDER: <span class=\"badge badge-primary float-right\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "user", array()), "gender", array()), "html", null, true);
        echo "</span></p>
\t\t\t\t\t\t\t<p>AGE: <span class=\"badge badge-primary float-right\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "user", array()), "age", array()), "html", null, true);
        echo "</span></p>\t\t
\t\t\t\t\t\t\t<p>PROFILE CREATED: <span class=\"badge badge-primary float-right\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "user", array()), "created_at", array()), "html", null, true);
        echo "</span></p>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<p class=\"btn btn-outline-primary w-100\" data-toggle=\"modal\" data-target=\"#showFriends\">FRIENDS</p>
\t\t\t\t\t\t\t<p class=\"btn btn-outline-primary w-100\" data-toggle=\"modal\" data-target=\"#likedPosts\"><i class=\"far fa-heart\"></i> POSTS</p>
\t\t\t\t\t\t\t<p class=\"btn btn-primary w-100\" data-toggle=\"modal\" data-target=\"#createPost\"><i class=\"far fa-plus-square\"></i> POST</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t\t\t<form action=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/users/delete\" method=\"POST\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"user_id\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "user", array()), "id", array()), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"DELETE PROFILE\" class=\"btn btn-danger w-100\">
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-8 col-sm-12\">

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
        // line 62
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/js/search.js\"></script>
\t\t\t\t\t<hr />

\t\t\t\t<!-- posts -->
\t\t\t\t";
        // line 66
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "posts", array()))) {
            echo "\t\t\t\t\t
\t\t\t\t";
        } else {
            // line 68
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "posts", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 69
                echo "\t\t\t\t\t<div class=\"card bg-dark text-primary mb-2\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t<h2 class=\"text-center\">";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", array()), "html", null, true);
                echo "</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<img src=\"";
                // line 74
                echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "image", array()), "html", null, true);
                echo "\" id=\"post-img\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-12 col-12\">
\t\t\t\t\t\t\t\t\t<form action=\"";
                // line 79
                echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
                echo "/posts/delete\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"post_id\" value=\"";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-dark w-100\"><img src=\"";
                // line 81
                echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
                echo "/images/delete-icon.png\" style=\"height: 50px;\"></button>\t
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-12 col-12\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 85
                echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
                echo "/posts/show/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", array()), "html", null, true);
                echo "\" class=\"btn btn-dark w-100\"><img src=\"";
                echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
                echo "/images/eye.png\" style=\"height: 50px;\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-12 col-12\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 88
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
            // line 94
            echo "\t\t\t\t
\t\t\t\t";
        }
        // line 95
        echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t</div>\t

\t\t\t</div>
\t\t</div>

\t\t<!-- showFriends Modal -->
\t\t<div class=\"modal\" id=\"showFriends\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<!-- Modal Header -->
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<h4 class=\"modal-title\">FRIENDS</h4>
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Modal body -->
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 112
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "friends", array())) {
            // line 113
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "friends", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["friend"]) {
                // line 114
                echo "\t\t\t\t\t\t<div class=\"card bg-dark text-primary mb-1\">
\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t<h2 class=\"text-center\">";
                // line 116
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["friend"], "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["friend"], "lastname", array()), "html", null, true);
                echo "</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 119
                echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["friend"], "profile_image", array()), "html", null, true);
                echo "\" class=\"w-100\" style=\"height: 300px;\">
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 122
                echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
                echo "/users/show/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["friend"], "friend_id", array()), "html", null, true);
                echo "\" class=\"btn btn-primary w-100\">VIEW PROFILE</a>
\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friend'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            echo "\t\t\t\t\t";
        } else {
            // line 127
            echo "\t\t\t\t\t";
        }
        // line 128
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
\t\t\t<div class=\"modal-dialog\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<!-- Modal Header -->
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<h4 class=\"modal-title\">LIKED POSTS</h4>
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Modal body -->
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 148
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "likedPosts", array())) {
            // line 149
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "likedPosts", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["likedPost"]) {
                // line 150
                echo "\t\t\t\t\t\t<div class=\"card bg-dark text-primary mb-1\">
\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t<h2 class=\"text-center\">";
                // line 152
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["friend"] ?? null), "title", array()), "html", null, true);
                echo "</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 155
                echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["likedPost"], "image", array()), "html", null, true);
                echo "\" class=\"w-100\" style=\"height: 300px;\">
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 158
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
            // line 162
            echo "\t\t\t\t\t";
        } else {
            // line 163
            echo "\t\t\t\t\t";
        }
        // line 164
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
\t\t\t\t<div class=\"modal-content\">
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
\t\t\t\t\t\t\t\t \t<input type=\"submit\" name=\"submit\" value=\"CREATE\" class=\"btn btn-success w-100\">
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
        // line 217
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/js/post.js\"></script>
\t\t<script src=\"";
        // line 218
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/js/notifications.js\"></script>

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
        return array (  407 => 218,  403 => 217,  348 => 164,  345 => 163,  342 => 162,  330 => 158,  322 => 155,  316 => 152,  312 => 150,  307 => 149,  305 => 148,  283 => 128,  280 => 127,  277 => 126,  265 => 122,  257 => 119,  249 => 116,  245 => 114,  240 => 113,  238 => 112,  219 => 95,  215 => 94,  198 => 88,  188 => 85,  181 => 81,  177 => 80,  173 => 79,  163 => 74,  157 => 71,  153 => 69,  148 => 68,  143 => 66,  136 => 62,  112 => 41,  108 => 40,  98 => 33,  94 => 32,  90 => 31,  86 => 30,  82 => 29,  78 => 28,  74 => 27,  65 => 23,  57 => 18,  53 => 17,  49 => 16,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "users/index.html", "C:\\xampp\\htdocs\\php_mvc_2\\app\\views\\users\\index.html");
    }
}
