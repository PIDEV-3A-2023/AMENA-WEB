<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* user/index.html.twig */
class __TwigTemplate_559b0ac0df39479558519b44f6781b83 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 90
        return "baseadmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("baseadmin.html.twig", "user/index.html.twig", 90);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 92
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "User index
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 95
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 96
        echo "\t";
        // line 108
        echo "
\t<form method=\"get\" action=\"";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        echo "\">
\t\t<div class=\"input-group mb-3\">
\t\t\t<input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search users...\">
\t\t\t<div class=\"input-group-append\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-outline-secondary\">Search</button>
\t\t\t</div>
\t\t</div>
\t</form>

\t<div class=\"container-fluid p-0\">
\t\t<a class=\"btn btn-secondary\" href=\"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        echo "\">Register</a>
\t\t<h1 class=\"h3 mb-3\">Blank Page</h1>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\" style=\"overflow-x: scroll\">
\t\t\t\t<div class=\"card\" style=\"width: 1720px;\">

\t\t\t\t\t<div class=\"card-body\">

\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t\t\t<th>Nom</th>

\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 138, $this->source); })()), 3));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 139
            echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["user"]);
            foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                // line 141
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "nom", [], "any", false, false, false, 141), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-xl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card m-b-10\" style=\"width: 450px; height: 500px;\">
                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 147
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "image", [], "any", false, false, false, 147), "html", null, true);
                echo "\" alt=\"Admin\" class=\"rounded-circle p-1 bg-primary\" width=\"180\" height=\"180\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 card-title align-self-center mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>";
                // line 150
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "nom", [], "any", false, false, false, 150), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 152
                if (twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", true, true, false, 152)) {
                    // line 153
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-0\">";
                    ((twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 153)) ? (print (twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 153)), "html", null, true))) : (print ("")));
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 155
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-group list-group-flush\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope float-right\"></i>Email :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">";
                // line 161
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "email", [], "any", false, false, false, 161), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-phone float-right\"></i>Phone :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 165
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "numtel", [], "any", false, false, false, 165), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"float-right btn-group btn-group-sm\" style=\"width: 75px; height: 35px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"float-right btn-group btn-group-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 173
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 173)]), "html", null, true);
                echo "\" class=\"btn btn-outline-primary\">Profil
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 178
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 178)]), "html", null, true);
                echo "\" class=\"btn btn-outline-primary\">Edit
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 182
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 182)]), "html", null, true);
                echo "\" class=\"btn btn-outline-primary\">Delete
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 187
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_message_new", ["id" => twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 187)]), "html", null, true);
                echo "\" class=\"btn btn-outline-primary\">Message
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"social-links list-inline mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"\" data-placement=\"top\" data-toggle=\"tooltip\" class=\"tooltips\" href=\"\" data-original-title=\"Facebook\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"\" data-placement=\"top\" data-toggle=\"tooltip\" class=\"tooltips\" href=\"\" data-original-title=\"Twitter\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-twitter\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"\" data-placement=\"top\" data-toggle=\"tooltip\" class=\"tooltips\" href=\"\" data-original-title=\"Skype\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-skype\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 213
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 215
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"3\">no records found</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 219
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t\t<a href=\"";
        // line 231
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        echo "\">Create new</a>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 231,  266 => 219,  257 => 215,  251 => 213,  219 => 187,  211 => 182,  204 => 178,  196 => 173,  185 => 165,  178 => 161,  170 => 155,  164 => 153,  162 => 152,  157 => 150,  151 => 147,  141 => 141,  137 => 140,  134 => 139,  129 => 138,  107 => 119,  94 => 109,  91 => 108,  89 => 96,  79 => 95,  59 => 92,  36 => 90,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends 'baseadmin.html.twig' %}

{% block title %}User index
{% endblock %}

{% block body %}
\t<h1>User index</h1>
\t<!-- ======= Breadcrumbs ======= -->
\t<div class=\"breadcrumbs d-flex align-items-center\" style=\"background-image: url('assets/img/contact-header.jpg');\">
\t\t<div class=\"container position-relative d-flex flex-column align-items-center\">

\t\t\t<h2>index</h2>
\t\t\t<ol>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"index.html\">Home</a>
\t\t\t\t</li>
\t\t\t\t<li>Contact</li>
\t\t\t</ol>

\t\t</div><form method=\"get\" action=\"{{ path('app_user_index') }}\">
\t<div class=\"input-group mb-3\">
\t\t<input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search users...\">
\t\t<div class=\"input-group-append\">
\t\t\t<button type=\"submit\" class=\"btn btn-outline-secondary\">Search</button>
\t\t</div>
\t</div>
</form>

\t</div>

\t<!-- End Breadcrumbs -->
    
\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Id</th>
\t\t\t\t<th>Email</th>
\t\t\t\t<th>Roles</th>
\t\t\t\t<th>Password</th>
\t\t\t\t<th>Nom</th>
\t\t\t\t<th>Prenom</th>
\t\t\t\t<th>Adress</th>
\t\t\t\t<th>Cin</th>
\t\t\t\t<th>Date_naissance</th>
\t\t\t\t<th>Date_creation_c</th>
\t\t\t\t<th>Status</th>
\t\t\t\t<th>Token</th>
\t\t\t\t<th>Score</th>
\t\t\t\t<th>Numtel</th>
\t\t\t\t<th>Image</th>
\t\t\t\t<th>Compte_ex</th>
\t\t\t\t<th>Token_ex</th>
\t\t\t\t<th>actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for user in users %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ user.id }}</td>
\t\t\t\t\t<td>{{ user.email }}</td>
\t\t\t\t\t<td>{{ user.roles ? user.roles|json_encode : '' }}</td>
\t\t\t\t\t<td>{{ user.password }}</td>
\t\t\t\t\t<td>{{ user.nom }}</td>
\t\t\t\t\t<td>{{ user.prenom }}</td>
\t\t\t\t\t<td>{{ user.adress }}</td>
\t\t\t\t\t<td>{{ user.cin }}</td>
\t\t\t\t\t<td>{{ user.dateNaissance ? user.dateNaissance|date('Y-m-d') : '' }}</td>
\t\t\t\t\t<td>{{ user.dateCreationC ? user.dateCreationC|date('Y-m-d') : '' }}</td>
\t\t\t\t\t<td>{{ user.status ? 'Yes' : 'No' }}</td>
\t\t\t\t\t<td>{{ user.token }}</td>
\t\t\t\t\t<td>{{ user.score }}</td>
\t\t\t\t\t<td>{{ user.numtel }}</td>
\t\t\t\t\t<td>{{ user.image }}</td>
\t\t\t\t\t<td>{{ user.compteEx ? user.compteEx|date('Y-m-d') : '' }}</td>
\t\t\t\t\t<td>{{ user.tokenEx ? user.tokenEx|date('Y-m-d') : '' }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{ path('app_user_show', {'id': user.id}) }}\">show</a>
\t\t\t\t\t\t<a href=\"{{ path('app_user_edit', {'id': user.id}) }}\">edit</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% else %}
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"18\">no records found</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>
 #}

{% extends 'baseadmin.html.twig' %}

{% block title %}User index
{% endblock %}

{% block body %}
\t{#<!-- ======= Breadcrumbs ======= -->
\t\t<div class=\"breadcrumbs d-flex align-items-center\" style=\"background-image: url('assets/img/contact-header.jpg');\">
\t\t\t<div class=\"container position-relative d-flex flex-column align-items-center\">
\t\t
\t\t\t\t<h2>Contact</h2>
\t\t\t\t<ol>
\t\t\t\t\t<li><a href=\"index.html\">Home</a></li>
\t\t\t\t\t<li>Contact</li>
\t\t\t\t</ol>
\t\t
\t\t\t</div>
\t\t</div><!-- End Breadcrumbs -->#}

\t<form method=\"get\" action=\"{{ path('app_user_index') }}\">
\t\t<div class=\"input-group mb-3\">
\t\t\t<input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search users...\">
\t\t\t<div class=\"input-group-append\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-outline-secondary\">Search</button>
\t\t\t</div>
\t\t</div>
\t</form>

\t<div class=\"container-fluid p-0\">
\t\t<a class=\"btn btn-secondary\" href=\"{{ path('app_user_new') }}\">Register</a>
\t\t<h1 class=\"h3 mb-3\">Blank Page</h1>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\" style=\"overflow-x: scroll\">
\t\t\t\t<div class=\"card\" style=\"width: 1720px;\">

\t\t\t\t\t<div class=\"card-body\">

\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t\t\t<th>Nom</th>

\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t{% for user in users|batch(3) %}
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t{% for u in user %}
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ u.nom }}
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-xl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card m-b-10\" style=\"width: 450px; height: 500px;\">
                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{u.image}}\" alt=\"Admin\" class=\"rounded-circle p-1 bg-primary\" width=\"180\" height=\"180\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 card-title align-self-center mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>{{ u.nom}}</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if user.roles is defined %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-0\">{{ user.roles ? user.roles|json_encode : '' }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-group list-group-flush\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope float-right\"></i>Email :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">{{ u.email }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-phone float-right\"></i>Phone :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ u.numtel }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"float-right btn-group btn-group-sm\" style=\"width: 75px; height: 35px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"float-right btn-group btn-group-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_user_show', {'id': u.id}) }}\" class=\"btn btn-outline-primary\">Profil
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_user_edit', {'id': u.id}) }}\" class=\"btn btn-outline-primary\">Edit
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_user_delete', {'id': u.id}) }}\" class=\"btn btn-outline-primary\">Delete
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_message_new', {'id': u.id} )}}\" class=\"btn btn-outline-primary\">Message
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"social-links list-inline mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"\" data-placement=\"top\" data-toggle=\"tooltip\" class=\"tooltips\" href=\"\" data-original-title=\"Facebook\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"\" data-placement=\"top\" data-toggle=\"tooltip\" class=\"tooltips\" href=\"\" data-original-title=\"Twitter\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-twitter\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"\" data-placement=\"top\" data-toggle=\"tooltip\" class=\"tooltips\" href=\"\" data-original-title=\"Skype\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-skype\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"3\">no records found</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t\t<a href=\"{{ path('app_user_new') }}\">Create new</a>
\t{% endblock %}", "user/index.html.twig", "C:\\Users\\klair\\OneDrive\\Bureau\\web integré\\digidreamers\\templates\\user\\index.html.twig");
    }
}
