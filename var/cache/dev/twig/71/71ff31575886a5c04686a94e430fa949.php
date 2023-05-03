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

/* admin/index.html.twig */
class __TwigTemplate_b83e77c6592b3f56f8c16244c6fed51c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("baseadmin.html.twig", "admin/index.html.twig", 1);
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
        echo "\t<br>
\t<br>
\t<br>
\t<br>
\t<br>
\t<br>
\t<br>
\t<h1>User index</h1>

<div class=\"pagination\">
        ";
        // line 17
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 17, $this->source); })()));
        echo "
    </div>
\t<div class=\"container-fluid p-0\">

\t\t<h1 class=\"h3 mb-3\">Blank Page</h1>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\" style=\"overflow-x: scroll\">
\t\t\t\t<div class=\"card\" style=\"width: 4300px;\">
\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t<h5 class=\"card-title mb-0\">Empty card</h5>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search\"><br>
\t\t\t\t\t\t<table border=\"1\" id=\"t\" class=\"table\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t\t\t<td>Email</td>
\t\t\t\t\t\t\t\t\t<td>Roles</td>
\t\t\t\t\t\t\t\t\t<td>Password</td>
\t\t\t\t\t\t\t\t\t<td>Nom</td>
\t\t\t\t\t\t\t\t\t<td>Prenom</td>
\t\t\t\t\t\t\t\t\t<td>Adress</td>
\t\t\t\t\t\t\t\t\t<td>Cin</td>
\t\t\t\t\t\t\t\t\t<td>Date_naissance</td>
\t\t\t\t\t\t\t\t\t<td>Date_creation_c</td>
\t\t\t\t\t\t\t\t\t<td>Status</td>
\t\t\t\t\t\t\t\t\t<td>Token</td>
\t\t\t\t\t\t\t\t\t<td>Score</td>
\t\t\t\t\t\t\t\t\t<td>Numtel</td>
\t\t\t\t\t\t\t\t\t<td>Image</td>
\t\t\t\t\t\t\t\t\t<td>Compte_ex</td>
\t\t\t\t\t\t\t\t\t<td>Token_ex</td>
\t\t\t\t\t\t\t\t\t<td>actions</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody id=\"all\">
\t\t\t\t\t\t\t\t";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 55, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 56
            echo "
\t\t\t\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t\t\t\t<td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 61
            if (twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", true, true, false, 61)) {
                // line 62
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-0\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 62), 0, [], "array", false, false, false, 62), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 64
            echo "\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "password", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "adress", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "cin", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 70
            ((twig_get_attribute($this->env, $this->source, $context["user"], "dateNaissance", [], "any", false, false, false, 70)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "dateNaissance", [], "any", false, false, false, 70), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 71
            ((twig_get_attribute($this->env, $this->source, $context["user"], "dateCreationC", [], "any", false, false, false, 71)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "dateCreationC", [], "any", false, false, false, 71), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 72
            echo ((twig_get_attribute($this->env, $this->source, $context["user"], "status", [], "any", false, false, false, 72)) ? ("Yes") : ("No"));
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "token", [], "any", false, false, false, 73), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "score", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "numtel", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 76
            echo "\t<img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "image", [], "any", false, false, false, 76), "html", null, true);
            echo "\" alt=\"Admin\" class=\"rounded-circle p-1 bg-primary\" width=\"50\" height=\"50\">
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 78
            ((twig_get_attribute($this->env, $this->source, $context["user"], "compteEx", [], "any", false, false, false, 78)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "compteEx", [], "any", false, false, false, 78), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 79
            ((twig_get_attribute($this->env, $this->source, $context["user"], "tokenEx", [], "any", false, false, false, 79)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "tokenEx", [], "any", false, false, false, 79), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>

\t\t\t\t\t\t\t\t\t\t\t";
            // line 82
            if (twig_get_attribute($this->env, $this->source, $context["user"], "isStatus", [], "any", false, false, false, 82)) {
                // line 83
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<button id=\"btn-block\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 83), "html", null, true);
                echo "\">Débloquer</button>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 85
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<button id=\"btn-block\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 85), "html", null, true);
                echo "\">Bloquer</button>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 87
            echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 87)]), "html", null, true);
            echo "\">show</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 88)]), "html", null, true);
            echo "\">edit</a>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 92
            echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td colspan=\"18\">no records found</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t<tbody id=\"searchtab\"></tbody>
\t\t\t\t\t\t</table>

\t\t\t\t\t\t<a href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_new");
        echo "\">Create new</a>
\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 102
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 103
        echo "\t\t\t\t\t\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "


\t\t\t\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\$(document).ready(function () {
\$(\"#search\").keyup(function () {
var value = \$(this).val();
console.log(\"value : \")

\$.ajax({
url: \"";
        // line 114
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_search");
        echo "\",

type: 'GET',

data: {
'searchValue': value
},

success: function (retour) {
if (retour) {
\$('#t tbody#searchtab').empty();
\$.each(JSON.parse(retour), function (i, obj) {
\$('#t tbody#all').hide();

\$('#t tbody#searchtab').append('<tr><td> ' + obj.email + ' </td><td>' + obj.roles[0] + '</td><td>' + obj.password + '</td><td>' + obj.nom + '</td><td>' + obj.prenom + '</td><td>' + obj.adress + '</td><td>' + obj.cin + '</td><td>' + obj.dateNaissance + '</td><td>' + obj.dateCreationC + '</td><td>' + obj.status + '</td><td>' + obj.token + '</td><td>' + obj.score + '</td><td>' + obj.numtel + '</td><td>";
        // line 128
        echo "\t<img src=\"";
        echo "+obj.image+";
        echo "\" alt=\"Admin\" class=\"rounded-circle p-1 bg-primary\" width=\"50\" height=\"70\"></td><td>' + obj.compteEx + '</td><td>' + obj.tokenEx + '</td><td><a href=\"' + obj.id + 'edit/\">modifier</a> </br><a\thref=\"' + obj.id + 'delete/\">supprimer</a></td></tr>');
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
\$(document).ready(function () {
\$(\"body\").on(\"click\", \"#btn-block\", function () {
var userId = \$(this).data(\"id\");
var status = \$(this).text().trim();

\$.ajax({
url: \"/user/block/\" + userId,
type: \"GET\",
data: {
status: status
},
success: function (response) {
if (response.success) { // Mise à jour de l'état du bouton
var button = \$(\"#btn-block[data-id='\" + userId + \"']\");
if (status === \"Bloquer\") {
button.text(\"Débloquer\");
} else {
button.text(\"Bloquer\");
}
} else {
alert(\"Erreur : \" + response.message);
}
},
error: function () {
alert(\"Une erreur est survenue lors de la requête AJAX.\");
}
});
});
});
\t\t\t\t\t\t</script>


\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 128,  309 => 114,  294 => 103,  284 => 102,  272 => 100,  266 => 96,  257 => 92,  248 => 88,  243 => 87,  237 => 85,  231 => 83,  229 => 82,  223 => 79,  219 => 78,  213 => 76,  209 => 75,  205 => 74,  201 => 73,  197 => 72,  193 => 71,  189 => 70,  185 => 69,  181 => 68,  177 => 67,  173 => 66,  169 => 65,  166 => 64,  160 => 62,  158 => 61,  153 => 59,  148 => 56,  143 => 55,  102 => 17,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseadmin.html.twig' %}

{% block title %}User index
{% endblock %}

{% block body %}
\t<br>
\t<br>
\t<br>
\t<br>
\t<br>
\t<br>
\t<br>
\t<h1>User index</h1>

<div class=\"pagination\">
        {{ knp_pagination_render(users) }}
    </div>
\t<div class=\"container-fluid p-0\">

\t\t<h1 class=\"h3 mb-3\">Blank Page</h1>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\" style=\"overflow-x: scroll\">
\t\t\t\t<div class=\"card\" style=\"width: 4300px;\">
\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t<h5 class=\"card-title mb-0\">Empty card</h5>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search\"><br>
\t\t\t\t\t\t<table border=\"1\" id=\"t\" class=\"table\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t\t\t<td>Email</td>
\t\t\t\t\t\t\t\t\t<td>Roles</td>
\t\t\t\t\t\t\t\t\t<td>Password</td>
\t\t\t\t\t\t\t\t\t<td>Nom</td>
\t\t\t\t\t\t\t\t\t<td>Prenom</td>
\t\t\t\t\t\t\t\t\t<td>Adress</td>
\t\t\t\t\t\t\t\t\t<td>Cin</td>
\t\t\t\t\t\t\t\t\t<td>Date_naissance</td>
\t\t\t\t\t\t\t\t\t<td>Date_creation_c</td>
\t\t\t\t\t\t\t\t\t<td>Status</td>
\t\t\t\t\t\t\t\t\t<td>Token</td>
\t\t\t\t\t\t\t\t\t<td>Score</td>
\t\t\t\t\t\t\t\t\t<td>Numtel</td>
\t\t\t\t\t\t\t\t\t<td>Image</td>
\t\t\t\t\t\t\t\t\t<td>Compte_ex</td>
\t\t\t\t\t\t\t\t\t<td>Token_ex</td>
\t\t\t\t\t\t\t\t\t<td>actions</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody id=\"all\">
\t\t\t\t\t\t\t\t{% for user in users %}

\t\t\t\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t\t\t\t<td>{{ user.email }}</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t{% if user.roles is defined %}
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-0\">{{ user.roles[0] }}</p>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ user.password }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ user.nom }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ user.prenom }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ user.adress }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ user.cin }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ user.dateNaissance ? user.dateNaissance|date('Y-m-d') : '' }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ user.dateCreationC ? user.dateCreationC|date('Y-m-d') : '' }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ user.status ? 'Yes' : 'No' }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ user.token }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ user.score }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ user.numtel }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{# {{ user.image }} #}\t<img src=\"{{user.image}}\" alt=\"Admin\" class=\"rounded-circle p-1 bg-primary\" width=\"50\" height=\"50\">
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ user.compteEx ? user.compteEx|date('Y-m-d') : '' }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ user.tokenEx ? user.tokenEx|date('Y-m-d') : '' }}</td>
\t\t\t\t\t\t\t\t\t\t<td>

\t\t\t\t\t\t\t\t\t\t\t{% if user.isStatus %}
\t\t\t\t\t\t\t\t\t\t\t\t<button id=\"btn-block\" data-id=\"{{ user.id }}\">Débloquer</button>
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<button id=\"btn-block\" data-id=\"{{ user.id }}\">Bloquer</button>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_admin_show', {'id': user.id}) }}\">show</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_admin_edit', {'id': user.id}) }}\">edit</a>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td colspan=\"18\">no records found</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t<tbody id=\"searchtab\"></tbody>
\t\t\t\t\t\t</table>

\t\t\t\t\t\t<a href=\"{{ path('app_admin_new') }}\">Create new</a>
\t\t\t\t\t{% endblock %}
\t\t\t\t\t{% block javascripts %}
\t\t\t\t\t\t{{ parent() }}


\t\t\t\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\$(document).ready(function () {
\$(\"#search\").keyup(function () {
var value = \$(this).val();
console.log(\"value : \")

\$.ajax({
url: \"{{ path('app_admin_search') }}\",

type: 'GET',

data: {
'searchValue': value
},

success: function (retour) {
if (retour) {
\$('#t tbody#searchtab').empty();
\$.each(JSON.parse(retour), function (i, obj) {
\$('#t tbody#all').hide();

\$('#t tbody#searchtab').append('<tr><td> ' + obj.email + ' </td><td>' + obj.roles[0] + '</td><td>' + obj.password + '</td><td>' + obj.nom + '</td><td>' + obj.prenom + '</td><td>' + obj.adress + '</td><td>' + obj.cin + '</td><td>' + obj.dateNaissance + '</td><td>' + obj.dateCreationC + '</td><td>' + obj.status + '</td><td>' + obj.token + '</td><td>' + obj.score + '</td><td>' + obj.numtel + '</td><td>{# {{ user.image }} #}\t<img src=\"{{'+obj.image+'}}\" alt=\"Admin\" class=\"rounded-circle p-1 bg-primary\" width=\"50\" height=\"70\"></td><td>' + obj.compteEx + '</td><td>' + obj.tokenEx + '</td><td><a href=\"' + obj.id + 'edit/\">modifier</a> </br><a\thref=\"' + obj.id + 'delete/\">supprimer</a></td></tr>');
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
\$(document).ready(function () {
\$(\"body\").on(\"click\", \"#btn-block\", function () {
var userId = \$(this).data(\"id\");
var status = \$(this).text().trim();

\$.ajax({
url: \"/user/block/\" + userId,
type: \"GET\",
data: {
status: status
},
success: function (response) {
if (response.success) { // Mise à jour de l'état du bouton
var button = \$(\"#btn-block[data-id='\" + userId + \"']\");
if (status === \"Bloquer\") {
button.text(\"Débloquer\");
} else {
button.text(\"Bloquer\");
}
} else {
alert(\"Erreur : \" + response.message);
}
},
error: function () {
alert(\"Une erreur est survenue lors de la requête AJAX.\");
}
});
});
});
\t\t\t\t\t\t</script>


\t\t\t\t\t{% endblock %}
", "admin/index.html.twig", "C:\\Users\\aymen\\Desktop\\prositsym\\digidreamers\\templates\\admin\\index.html.twig");
    }
}
