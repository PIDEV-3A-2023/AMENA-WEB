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
class __TwigTemplate_d94f8cdee92520aac840dac8c75e32d6 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseadmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("baseadmin.html.twig", "user/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
\t";
        // line 20
        echo "

\t<div class=\"container-fluid p-0\">
\t\t<a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        echo "\">Create new</a>
\t\t<input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search\"><br>
\t\t<a class=\"btn btn-secondary\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        echo "\">Register</a>

\t\t<h1 class=\"h3 mb-3\">Blank Page</h1>
\t\t<div class=\"row\">
\t\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 30
            echo "\t\t\t\t<div class=\"card col-5 offset-3 m-1 p-5\">

\t\t\t\t\t<div class=\"card-body row\">
\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t<img src=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "image", [], "any", false, false, false, 34), "html", null, true);
            echo "\" alt=\"Admin\" class=\"rounded-circle p-1 bg-primary\" width=\"180\" height=\"180\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-6 card-title align-self-center mb-0\">
\t\t\t\t\t\t\t<h5>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "nom", [], "any", false, false, false, 37), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t<p class=\"m-0\">
\t\t\t\t\t\t\t\t";
            // line 39
            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "roles", [], "any", true, true, false, 39)) {
                // line 40
                echo "\t\t\t\t\t\t\t\t\t<p class=\"m-0\">";
                ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 40, $this->source); })()), "roles", [], "any", false, false, false, 40)) ? (print (twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 40, $this->source); })()), "roles", [], "any", false, false, false, 40)), "html", null, true))) : (print ("")));
                echo "</p>
\t\t\t\t\t\t\t\t";
            }
            // line 42
            echo "\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"list-group list-group-flush\">
\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<i class=\"fa fa-envelope float-right\"></i>Email :
\t\t\t\t\t\t\t<a href=\"#\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "email", [], "any", false, false, false, 48), "html", null, true);
            echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<i class=\"fa fa-phone float-right\"></i>Phone :
\t\t\t\t\t\t\t";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "numtel", [], "any", false, false, false, 52), "html", null, true);
            echo "
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>*

\t\t\t\t\t<div class=\"float-right btn-group btn-group-sm\">
\t\t\t\t\t\t<a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\" class=\"btn btn-outline-primary\">Profil
\t\t\t\t\t\t\t<i class=\"fa fa-pencil\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t</a>


\t\t\t\t\t\t<a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\" class=\"btn btn-outline-primary\">Edit
\t\t\t\t\t\t\t<i class=\"fa fa-pencil\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            echo "\" class=\"btn btn-outline-primary\">Delete
\t\t\t\t\t\t\t<i class=\"fa fa-pencil\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_message_new", ["id" => twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 75)]), "html", null, true);
            echo "\" class=\"btn btn-outline-primary\">Message
\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t</a>

\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "

\t\t\t<div class=\"navigation\">
\t\t\t\t";
        // line 88
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 88, $this->source); })()));
        echo "
\t\t\t</div>


\t\t</div>
\t</div>

\t<div>
\t\t<table border=\"1\" id=\"t\" class=\"table table-hover table-dark\">
\t\t\t<thead class=\"thead-dark\">
\t\t\t\t<tr>
\t\t\t\t\t<td>ID</td>
\t\t\t\t\t<td>Email</td>
\t\t\t\t\t<td>password</td>
\t\t\t\t\t<td>Editer</td>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody id=\"all\">
\t\t\t\t";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 106, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 107
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 109), "html", null, true);
            echo "
\t\t\t\t\t\t</td>
<td>
\t\t\t\t\t\t\t";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "email", [], "any", false, false, false, 112), "html", null, true);
            echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "password", [], "any", false, false, false, 115), "html", null, true);
            echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 119)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\tmodifier</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 121)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\tsupprimer</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "\t\t\t</tbody>
\t\t\t<tbody id=\"searchtab\">
\t\t\t\t<td>ss</td>
\t\t\t</tbody>
\t\t</table>
\t</div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 135
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 136
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "


\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
\t<script>
\t\t\$(document).ready(function () {
\$(\"#search\").keyup(function () { /* La variable value va prendre la valeur insérer dans le
\t\t\t\t\t\tchamp de texte
\t\t\t\t\t\tafin d’effectuer la recherche */
var value = \$(this).val();
console.log(\"value : \")
/* Ajax est lancé lors du remplissage du champ texte dont
\t\t\t\t\t\tl’id est
\t\t\t\t\t\t« search » pour faire la recherche */
\$.ajax({ /* l’url est une chaine de caractères contenant
\t\t\t\t\t\tl’adresse où la requête est
\t\t\t\t\t\t6
\t\t\t\t\t\tenvoyée */
url: \"";
        // line 154
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_search");
        echo "\",
/* La méthode utilisée pour transférer les données est
\t\t\t\t\t\tGET */
type: 'GET',
/*Ici search value va prendre la chaine entrée par un
\t\t\t\t\t\tutilisateur dans la
\t\t\t\t\t\tzone de recherche et sera placée après l’url */
data: {
'searchValue': value
},
/*Cette fonction permet de vider le contenu du tableau
\t\t\t\t\t\tpour recevoir le
\t\t\t\t\t\tnouveau contenu*/
success: function (retour) {
if (retour) {
\$('#t tbody#searchtab').empty();
\$.each(JSON.parse(retour), function (i, obj) {
\$('#t tbody#all').hide();
\$('#t tbody#searchtab').append('<tr><td>' + obj.id + '</td><td>' + obj.email + '</td><td> ' + obj.password + ' </td><td><a href=\"edit/' + obj.id + '\">modifier</a> </br><a\thref=\"deleteStudent/' + obj.id + '\">supprimer</a></td></tr>');
});
} else {
\$('#t tbody#all').show();
\$('#t tbody#searchtab').empty();
\$('#t tbody#searchtab').fadeIn('fast');
}
}
});
return false;
});
});
\t</script>

";
        
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
        return array (  324 => 154,  302 => 136,  292 => 135,  274 => 126,  263 => 121,  258 => 119,  251 => 115,  245 => 112,  239 => 109,  235 => 107,  231 => 106,  210 => 88,  205 => 85,  189 => 75,  180 => 69,  172 => 64,  162 => 57,  154 => 52,  147 => 48,  139 => 42,  133 => 40,  131 => 39,  126 => 37,  120 => 34,  114 => 30,  110 => 29,  103 => 25,  98 => 23,  93 => 20,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseadmin.html.twig' %}

{% block title %}User index
{% endblock %}

{% block body %}

\t{#<!-- ======= Breadcrumbs ======= -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"breadcrumbs d-flex align-items-center\" style=\"background-image: url('assets/img/contact-header.jpg');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"container position-relative d-flex flex-column align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>Contact</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ol>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"index.html\">Home</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>Contact</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- End Breadcrumbs -->#}


\t<div class=\"container-fluid p-0\">
\t\t<a href=\"{{ path('app_user_new') }}\">Create new</a>
\t\t<input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search\"><br>
\t\t<a class=\"btn btn-secondary\" href=\"{{ path('app_user_new') }}\">Register</a>

\t\t<h1 class=\"h3 mb-3\">Blank Page</h1>
\t\t<div class=\"row\">
\t\t\t{% for u in pagination %}
\t\t\t\t<div class=\"card col-5 offset-3 m-1 p-5\">

\t\t\t\t\t<div class=\"card-body row\">
\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t<img src=\"{{u.image}}\" alt=\"Admin\" class=\"rounded-circle p-1 bg-primary\" width=\"180\" height=\"180\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-6 card-title align-self-center mb-0\">
\t\t\t\t\t\t\t<h5>{{ u.nom}}</h5>
\t\t\t\t\t\t\t<p class=\"m-0\">
\t\t\t\t\t\t\t\t{% if user.roles is defined %}
\t\t\t\t\t\t\t\t\t<p class=\"m-0\">{{ user.roles ? user.roles|json_encode : '' }}</p>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"list-group list-group-flush\">
\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<i class=\"fa fa-envelope float-right\"></i>Email :
\t\t\t\t\t\t\t<a href=\"#\">{{ u.email }}</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<i class=\"fa fa-phone float-right\"></i>Phone :
\t\t\t\t\t\t\t{{ u.numtel }}
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>*

\t\t\t\t\t<div class=\"float-right btn-group btn-group-sm\">
\t\t\t\t\t\t<a href=\"{{ path('app_user_show', {'id': u.id}) }}\" class=\"btn btn-outline-primary\">Profil
\t\t\t\t\t\t\t<i class=\"fa fa-pencil\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t</a>


\t\t\t\t\t\t<a href=\"{{ path('app_user_edit', {'id': u.id}) }}\" class=\"btn btn-outline-primary\">Edit
\t\t\t\t\t\t\t<i class=\"fa fa-pencil\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"{{ path('app_user_delete', {'id': u.id}) }}\" class=\"btn btn-outline-primary\">Delete
\t\t\t\t\t\t\t<i class=\"fa fa-pencil\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"{{ path('app_message_new', {'id': u.id} )}}\" class=\"btn btn-outline-primary\">Message
\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t</a>

\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t{% endfor %}


\t\t\t<div class=\"navigation\">
\t\t\t\t{{ knp_pagination_render(pagination) }}
\t\t\t</div>


\t\t</div>
\t</div>

\t<div>
\t\t<table border=\"1\" id=\"t\" class=\"table table-hover table-dark\">
\t\t\t<thead class=\"thead-dark\">
\t\t\t\t<tr>
\t\t\t\t\t<td>ID</td>
\t\t\t\t\t<td>Email</td>
\t\t\t\t\t<td>password</td>
\t\t\t\t\t<td>Editer</td>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody id=\"all\">
\t\t\t\t{% for u in pagination %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t{{ u.id }}
\t\t\t\t\t\t</td>
<td>
\t\t\t\t\t\t\t{{ u.email }}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t{{ u.password }}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('app_user_edit', {'id':u.id}) }}\">
\t\t\t\t\t\t\t\tmodifier</a>
\t\t\t\t\t\t\t<a href=\"{{ path('app_user_delete', {'id':u.id}) }}\">
\t\t\t\t\t\t\t\tsupprimer</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t\t<tbody id=\"searchtab\">
\t\t\t\t<td>ss</td>
\t\t\t</tbody>
\t\t</table>
\t</div>


{% endblock %}
{% block javascripts %}
\t{{ parent() }}


\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
\t<script>
\t\t\$(document).ready(function () {
\$(\"#search\").keyup(function () { /* La variable value va prendre la valeur insérer dans le
\t\t\t\t\t\tchamp de texte
\t\t\t\t\t\tafin d’effectuer la recherche */
var value = \$(this).val();
console.log(\"value : \")
/* Ajax est lancé lors du remplissage du champ texte dont
\t\t\t\t\t\tl’id est
\t\t\t\t\t\t« search » pour faire la recherche */
\$.ajax({ /* l’url est une chaine de caractères contenant
\t\t\t\t\t\tl’adresse où la requête est
\t\t\t\t\t\t6
\t\t\t\t\t\tenvoyée */
url: \"{{ path('app_user_search') }}\",
/* La méthode utilisée pour transférer les données est
\t\t\t\t\t\tGET */
type: 'GET',
/*Ici search value va prendre la chaine entrée par un
\t\t\t\t\t\tutilisateur dans la
\t\t\t\t\t\tzone de recherche et sera placée après l’url */
data: {
'searchValue': value
},
/*Cette fonction permet de vider le contenu du tableau
\t\t\t\t\t\tpour recevoir le
\t\t\t\t\t\tnouveau contenu*/
success: function (retour) {
if (retour) {
\$('#t tbody#searchtab').empty();
\$.each(JSON.parse(retour), function (i, obj) {
\$('#t tbody#all').hide();
\$('#t tbody#searchtab').append('<tr><td>' + obj.id + '</td><td>' + obj.email + '</td><td> ' + obj.password + ' </td><td><a href=\"edit/' + obj.id + '\">modifier</a> </br><a\thref=\"deleteStudent/' + obj.id + '\">supprimer</a></td></tr>');
});
} else {
\$('#t tbody#all').show();
\$('#t tbody#searchtab').empty();
\$('#t tbody#searchtab').fadeIn('fast');
}
}
});
return false;
});
});
\t</script>

{% endblock %}
", "user/index.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\user\\index.html.twig");
    }
}
