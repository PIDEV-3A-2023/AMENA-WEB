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
        echo "
\t";
        // line 19
        echo "

\t<div class=\"container-fluid p-0\">
\t\t<a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        echo "\">Create new</a>
\t\t<input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search\"><br>
\t\t<a class=\"btn btn-secondary\" href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        echo "\">Register</a>
\t\t<h1 class=\"h3 mb-3\">Blank Page</h1>
\t\t<div class=\"row\" id=\"alldiv\">
\t\t
\t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 29
            echo "\t\t\t\t<div class=\"card col-5 offset-3 m-1 p-5\" >

\t\t\t\t\t<div class=\"card-body row\">
\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t<img src=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "image", [], "any", false, false, false, 33), "html", null, true);
            echo "\" alt=\"Admin\" class=\"rounded-circle p-1 bg-primary\" width=\"180\" height=\"180\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-6 card-title align-self-center mb-0\">
\t\t\t\t\t\t\t<h5>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "nom", [], "any", false, false, false, 36), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t<p class=\"m-0\">
\t\t\t\t\t\t\t\t";
            // line 38
            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "roles", [], "any", true, true, false, 38)) {
                // line 39
                echo "\t\t\t\t\t\t\t\t\t<p class=\"m-0\">";
                ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 39, $this->source); })()), "roles", [], "any", false, false, false, 39)) ? (print (twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 39, $this->source); })()), "roles", [], "any", false, false, false, 39)), "html", null, true))) : (print ("")));
                echo "</p>
\t\t\t\t\t\t\t\t";
            }
            // line 41
            echo "\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"list-group list-group-flush\">
\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<i class=\"fa fa-envelope float-right\"></i>Email :
\t\t\t\t\t\t\t<a href=\"#\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "email", [], "any", false, false, false, 47), "html", null, true);
            echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<i class=\"fa fa-phone float-right\"></i>Phone :
\t\t\t\t\t\t\t";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "numtel", [], "any", false, false, false, 51), "html", null, true);
            echo "
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>*

\t\t\t\t\t<div class=\"float-right btn-group btn-group-sm\">
\t\t\t\t\t\t<a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\" class=\"btn btn-outline-primary\">Profil
\t\t\t\t\t\t\t<i class=\"fa fa-pencil\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t</a>


\t\t\t\t\t\t<a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 63)]), "html", null, true);
            echo "\" class=\"btn btn-outline-primary\">Edit
\t\t\t\t\t\t\t<i class=\"fa fa-pencil\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            echo "\" class=\"btn btn-outline-primary\">Delete
\t\t\t\t\t\t\t<i class=\"fa fa-pencil\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_message_new", ["id" => twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            echo "\" class=\"btn btn-outline-primary\">Message
\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t</a>


\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "\t\t\t

\t\t\t<div class=\"navigation\">
\t\t\t\t";
        // line 87
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 87, $this->source); })()));
        echo "
\t\t\t</div>

\t\t
\t\t</div>
\t</div>
\t
\t<div class=\"row\" id=\"searchdiv\">
\t\t\t</div>
\t<div  style=\"display:none\">
\t\t<table  border=\"1\" id=\"t\" class=\"table table-hover table-dark\">
\t\t\t<thead class=\"thead-dark\">
\t\t\t\t<tr>
\t\t\t\t\t<td>Id</td>
\t\t\t\t\t<td>Email</td>
\t\t\t\t\t<td>Roles</td>
\t\t\t\t\t<td>Password</td>
\t\t\t\t\t<td>Nom</td>
\t\t\t\t\t<td>Prenom</td>
\t\t\t\t\t<td>Adress</td>
\t\t\t\t\t<td>Cin</td>
\t\t\t\t\t<td>Date_naissance</td>
\t\t\t\t\t<td>Date_creation_c</td>
\t\t\t\t\t<td>Status</td>
\t\t\t\t\t<td>Token</td>
\t\t\t\t\t<td>Score</td>
\t\t\t\t\t<td>Numtel</td>
\t\t\t\t\t<td>Image</td>
\t\t\t\t\t<td>Compte_ex</td>
\t\t\t\t\t<td>Token_ex</td>
\t\t\t\t\t<td>actions</td>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody id=\"all\">
\t\t\t\t";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 121, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 122
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 124), "html", null, true);
            echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "email", [], "any", false, false, false, 127), "html", null, true);
            echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "password", [], "any", false, false, false, 130), "html", null, true);
            echo "
\t\t\t\t\t\t</td>

\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 134)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\tmodifier</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 136
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 136)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\tsupprimer</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
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

    // line 150
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 151
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "


\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
\t<script>
\t\t\$(document).ready(function () {
\$(\"#search\").keyup(function () { 
var value = \$(this).val();
console.log(\"value : \"+value)

\$.ajax({ 
url: \"";
        // line 162
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
//\$('#alldiv').hide();

\$('#t tbody#searchtab').append('<tr><td>' + obj.id + '</td><td> ' + obj.email + ' </td><td>' + obj.roles + '</td><td>' + obj.password + '</td><td>' + obj.nom+ '</td><td>' + obj.prenom+'</td><td>' + obj.adress + '</td><td>' + obj.cin + '</td><td>' + obj.dateNaissance + '</td><td>' + obj.dateCreationC+ '</td><td>' + obj.status+ '</td><td>' + obj.token + '</td><td>' + obj.score+ '</td><td>' + obj.numtel + '</td><td>' + obj.image + '</td><td>' + obj.compteEx + '</td><td>' + obj.tokenEx+ '</td><td><a href=\"' + obj.id + 'edit/\">modifier</a> </br><a\thref=\"' + obj.id + 'delete/\">supprimer</a></td></tr>');
\$('#searchdiv').append('<div class=\"card col-5 offset-3 m-1 p-5\" ><div class=\"card-body row\"><div class=\"col-6\"><img src=\"'+obj.image+'\" alt=\"Admin\" class=\"rounded-circle p-1 bg-primary\" width=\"180\" height=\"180\"></div><div class=\"col-6 card-title align-self-center mb-0\"><h5>'+obj.nom+'</h5></div></div><ul class=\"list-group list-group-flush\"><li class=\"list-group-item\"><i class=\"fa fa-envelope float-right\"></i>Email :<a href=\"#\">'+ obj.email+ '</a></li><li class=\"list-group-item\"><i class=\"fa fa-phone float-right\"></i>Phone : '+obj.numtel+'</li></ul><div class=\"float-right btn-group btn-group-sm\"><a href=\"";
        // line 179
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => "+obj.id+"]);
        echo "\" class=\"btn btn-outline-primary\">Profil<i class=\"fa fa-pencil\"><i class=\"fa fa-pencil\"></i></i></a><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => "+obj.id+"]);
        echo "\" class=\"btn btn-outline-primary\">Edit<i class=\"fa fa-pencil\"><i class=\"fa fa-pencil\"></i></i></a><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete", ["id" => "+obj.id+"]);
        echo "\" class=\"btn btn-outline-primary\">Delete<i class=\"fa fa-pencil\"><i class=\"fa fa-pencil\"></i></i></a><a href=\"";
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
\t</script>

<script>
\$(\"#search\").keyup(function () {
\tif(\$(this).val()===\"\"){
\tconsole.log(\"test\")
\t\$('#alldiv').show();
\t\$('#searchdiv').hide();
\t}else{
\t\t\$('#alldiv').hide();
\t\t\$('#searchdiv').show();
\t}
})
</script>

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
        return array (  353 => 179,  333 => 162,  318 => 151,  308 => 150,  290 => 141,  279 => 136,  274 => 134,  267 => 130,  261 => 127,  255 => 124,  251 => 122,  247 => 121,  210 => 87,  205 => 84,  189 => 74,  180 => 68,  172 => 63,  162 => 56,  154 => 51,  147 => 47,  139 => 41,  133 => 39,  131 => 38,  126 => 36,  120 => 33,  114 => 29,  110 => 28,  103 => 24,  98 => 22,  93 => 19,  90 => 6,  80 => 5,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseadmin.html.twig' %}
{% block title %}User index
{% endblock %}

{% block body %}

\t{#<!-- ======= Breadcrumbs ======= -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"breadcrumbs d-flex align-items-center\" style=\"background-image: url('assets/img/contact-header.jpg');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"container position-relative d-flex flex-column align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>Contact</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ol>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"index.html\">Home</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>Contact</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- End Breadcrumbs -->#}


\t<div class=\"container-fluid p-0\">
\t\t<a href=\"{{ path('app_user_new') }}\">Create new</a>
\t\t<input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search\"><br>
\t\t<a class=\"btn btn-secondary\" href=\"{{ path('app_user_new') }}\">Register</a>
\t\t<h1 class=\"h3 mb-3\">Blank Page</h1>
\t\t<div class=\"row\" id=\"alldiv\">
\t\t
\t\t\t{% for u in pagination %}
\t\t\t\t<div class=\"card col-5 offset-3 m-1 p-5\" >

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


\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t{% endfor %}
\t\t\t

\t\t\t<div class=\"navigation\">
\t\t\t\t{{ knp_pagination_render(pagination) }}
\t\t\t</div>

\t\t
\t\t</div>
\t</div>
\t
\t<div class=\"row\" id=\"searchdiv\">
\t\t\t</div>
\t<div  style=\"display:none\">
\t\t<table  border=\"1\" id=\"t\" class=\"table table-hover table-dark\">
\t\t\t<thead class=\"thead-dark\">
\t\t\t\t<tr>
\t\t\t\t\t<td>Id</td>
\t\t\t\t\t<td>Email</td>
\t\t\t\t\t<td>Roles</td>
\t\t\t\t\t<td>Password</td>
\t\t\t\t\t<td>Nom</td>
\t\t\t\t\t<td>Prenom</td>
\t\t\t\t\t<td>Adress</td>
\t\t\t\t\t<td>Cin</td>
\t\t\t\t\t<td>Date_naissance</td>
\t\t\t\t\t<td>Date_creation_c</td>
\t\t\t\t\t<td>Status</td>
\t\t\t\t\t<td>Token</td>
\t\t\t\t\t<td>Score</td>
\t\t\t\t\t<td>Numtel</td>
\t\t\t\t\t<td>Image</td>
\t\t\t\t\t<td>Compte_ex</td>
\t\t\t\t\t<td>Token_ex</td>
\t\t\t\t\t<td>actions</td>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody id=\"all\">
\t\t\t\t{% for u in pagination %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t{{ u.id }}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t{{ u.email }}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t{{ u.password }}
\t\t\t\t\t\t</td>

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
\$(\"#search\").keyup(function () { 
var value = \$(this).val();
console.log(\"value : \"+value)

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
//\$('#alldiv').hide();

\$('#t tbody#searchtab').append('<tr><td>' + obj.id + '</td><td> ' + obj.email + ' </td><td>' + obj.roles + '</td><td>' + obj.password + '</td><td>' + obj.nom+ '</td><td>' + obj.prenom+'</td><td>' + obj.adress + '</td><td>' + obj.cin + '</td><td>' + obj.dateNaissance + '</td><td>' + obj.dateCreationC+ '</td><td>' + obj.status+ '</td><td>' + obj.token + '</td><td>' + obj.score+ '</td><td>' + obj.numtel + '</td><td>' + obj.image + '</td><td>' + obj.compteEx + '</td><td>' + obj.tokenEx+ '</td><td><a href=\"' + obj.id + 'edit/\">modifier</a> </br><a\thref=\"' + obj.id + 'delete/\">supprimer</a></td></tr>');
\$('#searchdiv').append('<div class=\"card col-5 offset-3 m-1 p-5\" ><div class=\"card-body row\"><div class=\"col-6\"><img src=\"'+obj.image+'\" alt=\"Admin\" class=\"rounded-circle p-1 bg-primary\" width=\"180\" height=\"180\"></div><div class=\"col-6 card-title align-self-center mb-0\"><h5>'+obj.nom+'</h5></div></div><ul class=\"list-group list-group-flush\"><li class=\"list-group-item\"><i class=\"fa fa-envelope float-right\"></i>Email :<a href=\"#\">'+ obj.email+ '</a></li><li class=\"list-group-item\"><i class=\"fa fa-phone float-right\"></i>Phone : '+obj.numtel+'</li></ul><div class=\"float-right btn-group btn-group-sm\"><a href=\"{{ path('app_user_show', {'id': '+obj.id+'}) }}\" class=\"btn btn-outline-primary\">Profil<i class=\"fa fa-pencil\"><i class=\"fa fa-pencil\"></i></i></a><a href=\"{{ path('app_user_edit', {'id': '+obj.id+'}) }}\" class=\"btn btn-outline-primary\">Edit<i class=\"fa fa-pencil\"><i class=\"fa fa-pencil\"></i></i></a><a href=\"{{ path('app_user_delete', {'id': '+obj.id+'}) }}\" class=\"btn btn-outline-primary\">Delete<i class=\"fa fa-pencil\"><i class=\"fa fa-pencil\"></i></i></a><a href=\"{{ path('app_message_new', {'id': '+obj.id+'} )}}\" class=\"btn btn-outline-primary\">Message<i class=\"fa fa-pencil\"></i></a></div></div>');
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
\t</script>

<script>
\$(\"#search\").keyup(function () {
\tif(\$(this).val()===\"\"){
\tconsole.log(\"test\")
\t\$('#alldiv').show();
\t\$('#searchdiv').hide();
\t}else{
\t\t\$('#alldiv').hide();
\t\t\$('#searchdiv').show();
\t}
})
</script>

{% endblock %}
", "user/index.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\user\\index.html.twig");
    }
}
