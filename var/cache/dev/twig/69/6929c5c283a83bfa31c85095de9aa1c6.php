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
class __TwigTemplate_b0e8195a442e286a60dcad1f1a75b8fe extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<br>
\t<br>
\t<br>
\t<br>
\t<br>
\t<br>
\t";
        // line 24
        echo "

\t<div class=\"container-fluid p-0\">

\t\t<input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search\"><br>
\t\t<a class=\"btn btn-secondary\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        echo "\">Register</a>
\t\t<h1 class=\"h3 mb-3\">Transporteur</h1>
\t\t<div class=\"row\" id=\"alldiv\">

\t\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 34
            echo "
\t\t\t\t<div class=\"card col-5 offset-3 m-1 p-5\">

\t\t\t\t\t<div class=\"card-body row\">
\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t<img src=\"";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "image", [], "any", false, false, false, 39), "html", null, true);
            echo "\" alt=\"Admin\" class=\"rounded-circle p-1 bg-primary\" width=\"180\" height=\"180\">
\t\t\t\t\t\t\t<div class=\"portfolio-info\">
\t\t\t\t\t\t\t\t<h4>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "fix</h4>
\t\t\t\t\t\t\t\t<p>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 42), "html", null, true);
            echo " fix</p>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "image", [], "any", false, false, false, 43), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "nom", [], "any", false, false, false, 43), "html", null, true);
            echo "\" data-gallery=\"portfolio-gallery-product\" class=\"glightbox preview-link\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-zoom-in\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"portfolio-details.html\" title=\"More Details\" class=\"details-link\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-link-45deg\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-6 card-title align-self-center mb-0\">
\t\t\t\t\t\t\t<h5>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "nom", [], "any", false, false, false, 52), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t<p class=\"m-0\">
\t\t\t\t\t\t\t\t";
            // line 54
            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "roles", [], "any", true, true, false, 54)) {
                // line 55
                echo "\t\t\t\t\t\t\t\t\t<p class=\"m-0\">";
                ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 55, $this->source); })()), "roles", [], "any", false, false, false, 55)) ? (print (twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 55, $this->source); })()), "roles", [], "any", false, false, false, 55)), "html", null, true))) : (print ("")));
                echo "</p>
\t\t\t\t\t\t\t\t";
            }
            // line 57
            echo "\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"list-group list-group-flush\">
\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<i class=\"fa fa-envelope float-right\"></i>Email :
\t\t\t\t\t\t\t<a href=\"#\">";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "email", [], "any", false, false, false, 63), "html", null, true);
            echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<i class=\"fa fa-phone float-right\"></i>Phone :
\t\t\t\t\t\t\t";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "numtel", [], "any", false, false, false, 67), "html", null, true);
            echo "
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>

\t\t\t\t\t<div class=\"float-right btn-group btn-group-sm\">
\t\t\t\t\t\t<a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_showp", ["id" => twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 72)]), "html", null, true);
            echo "\" class=\"btn btn-outline-primary\">Profil
\t\t\t\t\t\t\t<i class=\"fa fa-user-circle\"></i>

\t\t\t\t\t\t</i>
\t\t\t\t\t</a>

\t\t\t\t\t";
            // line 89
            echo "
\t\t\t\t\t<a href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_message_new", ["id" => twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 90)]), "html", null, true);
            echo "\" class=\"btn btn-outline-primary\">Message
\t\t\t\t\t\t<i class=\"fa fa-m\"></i>
\t\t\t\t\t</a>


\t\t\t\t</div>
\t\t\t</div>


\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "

\t\t<div class=\"navigation\">
\t\t\t";
        // line 103
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 103, $this->source); })()));
        echo "
\t\t</div>


\t</div>
</div>

<div class=\"row\" id=\"searchdiv\"></div>
<div style=\"display:none\">
\t<table border=\"1\" id=\"t\" class=\"table table-hover table-dark\">
\t\t<thead class=\"thead-dark\">
\t\t\t<tr>
\t\t\t\t<td>Id</td>
\t\t\t\t<td>Email</td>
\t\t\t\t<td>Roles</td>
\t\t\t\t<td>Password</td>
\t\t\t\t<td>Nom</td>
\t\t\t\t<td>Prenom</td>
\t\t\t\t<td>Adress</td>
\t\t\t\t<td>Cin</td>
\t\t\t\t<td>Date_naissance</td>
\t\t\t\t<td>Date_creation_c</td>
\t\t\t\t<td>Status</td>
\t\t\t\t<td>Token</td>
\t\t\t\t<td>Score</td>
\t\t\t\t<td>Numtel</td>
\t\t\t\t<td>Image</td>
\t\t\t\t<td>Compte_ex</td>
\t\t\t\t<td>Token_ex</td>
\t\t\t\t<td>actions</td>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody id=\"all\">
\t\t\t";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 136, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 137
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 139), "html", null, true);
            echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "email", [], "any", false, false, false, 142), "html", null, true);
            echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 145
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "password", [], "any", false, false, false, 145), "html", null, true);
            echo "
\t\t\t\t\t</td>

\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 149
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 149)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\tmodifier</a>
\t\t\t\t\t\t<a href=\"";
            // line 151
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 151)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\tsupprimer</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "\t\t</tbody>
\t\t<tbody id=\"searchtab\">
\t\t\t<td>ss</td>
\t\t</tbody>
\t</table>
</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 161
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 162
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "


<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
<script>
\t\$(document).ready(function () {
\$(\"#search\").keyup(function () {
var value = \$(this).val();
console.log(\"value : \" + value)

\$.ajax({
url: \"";
        // line 173
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_search");
        echo "\",

type: 'GET',

data: {
'searchValue': value
},

success: function (retour) {
if (retour) {
\$('#t tbody#searchtab').empty();
\$('#searchdiv').empty();
\$.each(JSON.parse(retour), function (i, obj) {
\$('#t tbody#all').hide();
// \$('#alldiv').hide();

\$('#t tbody#searchtab').append('<tr><td>' + obj.id + '</td><td> ' + obj.email + ' </td><td>' + obj.roles + '</td><td>' + obj.password + '</td><td>' + obj.nom + '</td><td>' + obj.prenom + '</td><td>' + obj.adress + '</td><td>' + obj.cin + '</td><td>' + obj.dateNaissance + '</td><td>' + obj.dateCreationC + '</td><td>' + obj.status + '</td><td>' + obj.token + '</td><td>' + obj.score + '</td><td>' + obj.numtel + '</td><td>' + obj.image + '</td><td>' + obj.compteEx + '</td><td>' + obj.tokenEx + '</td><td><a href=\"' + obj.id + 'edit/\">modifier</a> </br><a\thref=\"' + obj.id + 'delete/\">supprimer</a></td></tr>');
\$('#searchdiv').append('<div class=\"card col-5 offset-3 m-1 p-5\" ><div class=\"card-body row\"><div class=\"col-6\"><img src=\"' + obj.image + '\" alt=\"Admin\" class=\"rounded-circle p-1 bg-primary\" width=\"180\" height=\"180\"></div><div class=\"col-6 card-title align-self-center mb-0\"><h5>' + obj.nom + '</h5></div></div><ul class=\"list-group list-group-flush\"><li class=\"list-group-item\"><i class=\"fa fa-envelope float-right\"></i>Email :<a href=\"#\">' + obj.email + '</a></li><li class=\"list-group-item\"><i class=\"fa fa-phone float-right\"></i>Phone : ' + obj.numtel + '</li></ul><div class=\"float-right btn-group btn-group-sm\"><a href=\" ";
        // line 190
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => "+obj.id+"]);
        echo "\" class=\"btn btn-outline-primary\">Profil<i class=\"fa fa-pencil\"><i class=\"fa fa-pencil\"></i></i></a><a href=\" ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => "+obj.id+"]);
        echo "\" class=\"btn btn-outline-primary\">Edit<i class=\"fa fa-pencil\"><i class=\"fa fa-pencil\"></i></i></a><a href=\" ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete", ["id" => "+obj.id+"]);
        echo "\" class=\"btn btn-outline-primary\">Delete<i class=\"fa fa-pencil\"><i class=\"fa fa-pencil\"></i></i></a><a href=\" ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_message_new", ["id" => "+obj.id+"]);
        echo "\" class=\"btn btn-outline-primary\">Message<i class=\"fa fa-pencil\"></i></a></div></div>');
});
} else {
\$('#t tbody#all').show();
\$('#alldiv').show();
console.log(\"test\")
\$('#t tbody#searchtab').empty();
\$('#searchdiv').empty();
\$('#t tbody#searchtab').fadeIn('fast');
\$('#searchdiv').fadeIn('fast');
}
}
});
return false;
});
});
</script>

<script>
\t\$(\"#search\").keyup(function () {
if (\$(this).val() === \"\") {
console.log(\"test\")
\$('#alldiv').show();
\$('#searchdiv').hide();
} else {
\$('#alldiv').hide();
\$('#searchdiv').show();
}
})
</script>";
        
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
        return array (  357 => 190,  337 => 173,  323 => 162,  313 => 161,  298 => 156,  287 => 151,  282 => 149,  275 => 145,  269 => 142,  263 => 139,  259 => 137,  255 => 136,  219 => 103,  214 => 100,  198 => 90,  195 => 89,  186 => 72,  178 => 67,  171 => 63,  163 => 57,  157 => 55,  155 => 54,  150 => 52,  136 => 43,  132 => 42,  128 => 41,  123 => 39,  116 => 34,  112 => 33,  105 => 29,  98 => 24,  90 => 6,  80 => 5,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}User index
{% endblock %}

{% block body %}
\t<br>
\t<br>
\t<br>
\t<br>
\t<br>
\t<br>
\t{#<!-- ======= Breadcrumbs ======= -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"breadcrumbs d-flex align-items-center\" style=\"background-image: url('assets/img/contact-header.jpg');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"container position-relative d-flex flex-column align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>Contact</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ol>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"index.html\">Home</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>Contact</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- End Breadcrumbs -->#}


\t<div class=\"container-fluid p-0\">

\t\t<input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search\"><br>
\t\t<a class=\"btn btn-secondary\" href=\"{{ path('app_user_new') }}\">Register</a>
\t\t<h1 class=\"h3 mb-3\">Transporteur</h1>
\t\t<div class=\"row\" id=\"alldiv\">

\t\t\t{% for u in pagination %}

\t\t\t\t<div class=\"card col-5 offset-3 m-1 p-5\">

\t\t\t\t\t<div class=\"card-body row\">
\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t<img src=\"{{u.image}}\" alt=\"Admin\" class=\"rounded-circle p-1 bg-primary\" width=\"180\" height=\"180\">
\t\t\t\t\t\t\t<div class=\"portfolio-info\">
\t\t\t\t\t\t\t\t<h4>{{u.id}}fix</h4>
\t\t\t\t\t\t\t\t<p>{{u.id}} fix</p>
\t\t\t\t\t\t\t\t<a href=\"{{u.image}}\" title=\"{{u.nom}}\" data-gallery=\"portfolio-gallery-product\" class=\"glightbox preview-link\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-zoom-in\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"portfolio-details.html\" title=\"More Details\" class=\"details-link\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-link-45deg\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t</ul>

\t\t\t\t\t<div class=\"float-right btn-group btn-group-sm\">
\t\t\t\t\t\t<a href=\"{{ path('app_user_showp', {'id': u.id}) }}\" class=\"btn btn-outline-primary\">Profil
\t\t\t\t\t\t\t<i class=\"fa fa-user-circle\"></i>

\t\t\t\t\t\t</i>
\t\t\t\t\t</a>

\t\t\t\t\t{# 
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_user_edit', {'id': u.id}) }}\" class=\"btn btn-outline-primary\">Edit
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\">
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_user_delete', {'id': u.id}) }}\" class=\"btn btn-outline-primary\">Delete
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\">
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t</a> #}

\t\t\t\t\t<a href=\"{{ path('app_message_new', {'id': u.id} )}}\" class=\"btn btn-outline-primary\">Message
\t\t\t\t\t\t<i class=\"fa fa-m\"></i>
\t\t\t\t\t</a>


\t\t\t\t</div>
\t\t\t</div>


\t\t{% endfor %}


\t\t<div class=\"navigation\">
\t\t\t{{ knp_pagination_render(pagination) }}
\t\t</div>


\t</div>
</div>

<div class=\"row\" id=\"searchdiv\"></div>
<div style=\"display:none\">
\t<table border=\"1\" id=\"t\" class=\"table table-hover table-dark\">
\t\t<thead class=\"thead-dark\">
\t\t\t<tr>
\t\t\t\t<td>Id</td>
\t\t\t\t<td>Email</td>
\t\t\t\t<td>Roles</td>
\t\t\t\t<td>Password</td>
\t\t\t\t<td>Nom</td>
\t\t\t\t<td>Prenom</td>
\t\t\t\t<td>Adress</td>
\t\t\t\t<td>Cin</td>
\t\t\t\t<td>Date_naissance</td>
\t\t\t\t<td>Date_creation_c</td>
\t\t\t\t<td>Status</td>
\t\t\t\t<td>Token</td>
\t\t\t\t<td>Score</td>
\t\t\t\t<td>Numtel</td>
\t\t\t\t<td>Image</td>
\t\t\t\t<td>Compte_ex</td>
\t\t\t\t<td>Token_ex</td>
\t\t\t\t<td>actions</td>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody id=\"all\">
\t\t\t{% for u in pagination %}
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t{{ u.id }}
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{{ u.email }}
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{{ u.password }}
\t\t\t\t\t</td>

\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{ path('app_user_edit', {'id':u.id}) }}\">
\t\t\t\t\t\t\tmodifier</a>
\t\t\t\t\t\t<a href=\"{{ path('app_user_delete', {'id':u.id}) }}\">
\t\t\t\t\t\t\tsupprimer</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t\t<tbody id=\"searchtab\">
\t\t\t<td>ss</td>
\t\t</tbody>
\t</table>
</div>{% endblock %}{% block javascripts %}
{{ parent() }}


<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
<script>
\t\$(document).ready(function () {
\$(\"#search\").keyup(function () {
var value = \$(this).val();
console.log(\"value : \" + value)

\$.ajax({
url: \"{{ path('app_admin_search') }}\",

type: 'GET',

data: {
'searchValue': value
},

success: function (retour) {
if (retour) {
\$('#t tbody#searchtab').empty();
\$('#searchdiv').empty();
\$.each(JSON.parse(retour), function (i, obj) {
\$('#t tbody#all').hide();
// \$('#alldiv').hide();

\$('#t tbody#searchtab').append('<tr><td>' + obj.id + '</td><td> ' + obj.email + ' </td><td>' + obj.roles + '</td><td>' + obj.password + '</td><td>' + obj.nom + '</td><td>' + obj.prenom + '</td><td>' + obj.adress + '</td><td>' + obj.cin + '</td><td>' + obj.dateNaissance + '</td><td>' + obj.dateCreationC + '</td><td>' + obj.status + '</td><td>' + obj.token + '</td><td>' + obj.score + '</td><td>' + obj.numtel + '</td><td>' + obj.image + '</td><td>' + obj.compteEx + '</td><td>' + obj.tokenEx + '</td><td><a href=\"' + obj.id + 'edit/\">modifier</a> </br><a\thref=\"' + obj.id + 'delete/\">supprimer</a></td></tr>');
\$('#searchdiv').append('<div class=\"card col-5 offset-3 m-1 p-5\" ><div class=\"card-body row\"><div class=\"col-6\"><img src=\"' + obj.image + '\" alt=\"Admin\" class=\"rounded-circle p-1 bg-primary\" width=\"180\" height=\"180\"></div><div class=\"col-6 card-title align-self-center mb-0\"><h5>' + obj.nom + '</h5></div></div><ul class=\"list-group list-group-flush\"><li class=\"list-group-item\"><i class=\"fa fa-envelope float-right\"></i>Email :<a href=\"#\">' + obj.email + '</a></li><li class=\"list-group-item\"><i class=\"fa fa-phone float-right\"></i>Phone : ' + obj.numtel + '</li></ul><div class=\"float-right btn-group btn-group-sm\"><a href=\" {{ path('app_user_show', {'id': '+obj.id+'}) }}\" class=\"btn btn-outline-primary\">Profil<i class=\"fa fa-pencil\"><i class=\"fa fa-pencil\"></i></i></a><a href=\" {{ path('app_user_edit', {'id': '+obj.id+'}) }}\" class=\"btn btn-outline-primary\">Edit<i class=\"fa fa-pencil\"><i class=\"fa fa-pencil\"></i></i></a><a href=\" {{ path('app_user_delete', {'id': '+obj.id+'}) }}\" class=\"btn btn-outline-primary\">Delete<i class=\"fa fa-pencil\"><i class=\"fa fa-pencil\"></i></i></a><a href=\" {{ path('app_message_new', {'id': '+obj.id+'} ) }}\" class=\"btn btn-outline-primary\">Message<i class=\"fa fa-pencil\"></i></a></div></div>');
});
} else {
\$('#t tbody#all').show();
\$('#alldiv').show();
console.log(\"test\")
\$('#t tbody#searchtab').empty();
\$('#searchdiv').empty();
\$('#t tbody#searchtab').fadeIn('fast');
\$('#searchdiv').fadeIn('fast');
}
}
});
return false;
});
});
</script>

<script>
\t\$(\"#search\").keyup(function () {
if (\$(this).val() === \"\") {
console.log(\"test\")
\$('#alldiv').show();
\$('#searchdiv').hide();
} else {
\$('#alldiv').hide();
\$('#searchdiv').show();
}
})
</script>{% endblock %}
", "user/index.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\user\\index.html.twig");
    }
}
