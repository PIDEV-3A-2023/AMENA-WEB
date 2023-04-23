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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
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

        echo "User index";
        
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
        echo "<br>
<br>
<br>
<br>
<br>
<br>
<br>
    <h1>User index</h1>
\t<input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search\"><br>
    <table border=\"1\" id=\"t\"class=\"table\">
        <thead>
            <tr>
                <td>Id</td>
                <td>Email</td>
                <td>Roles</td>
                <td>Password</td>
                <td>Nom</td>
                <td>Prenom</td>
                <td>Adress</td>
                <td>Cin</td>
                <td>Date_naissance</td>
                <td>Date_creation_c</td>
                <td>Status</td>
                <td>Token</td>
                <td>Score</td>
                <td>Numtel</td>
                <td>Image</td>
                <td>Compte_ex</td>
                <td>Token_ex</td>
                <td>actions</td>
            </tr>
        </thead>
      <tbody id=\"all\">
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 39, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 40
            echo "        
            <tr>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                <td> ";
            // line 44
            ((twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 44)) ? (print (twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 44)), "html", null, true))) : (print ("")));
            echo " </td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "password", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "adress", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "cin", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            ((twig_get_attribute($this->env, $this->source, $context["user"], "dateNaissance", [], "any", false, false, false, 50)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "dateNaissance", [], "any", false, false, false, 50), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 51
            ((twig_get_attribute($this->env, $this->source, $context["user"], "dateCreationC", [], "any", false, false, false, 51)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "dateCreationC", [], "any", false, false, false, 51), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 52
            echo ((twig_get_attribute($this->env, $this->source, $context["user"], "status", [], "any", false, false, false, 52)) ? ("Yes") : ("No"));
            echo "</td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "token", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "score", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "numtel", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "image", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            ((twig_get_attribute($this->env, $this->source, $context["user"], "compteEx", [], "any", false, false, false, 57)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "compteEx", [], "any", false, false, false, 57), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 58
            ((twig_get_attribute($this->env, $this->source, $context["user"], "tokenEx", [], "any", false, false, false, 58)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "tokenEx", [], "any", false, false, false, 58), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>
                    <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 65
            echo "            <tr>
                <td colspan=\"18\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "        </tbody>
        <tbody id=\"searchtab\">
\t\t\t\t<td>ss</td>
\t\t\t</tbody>
    </table>

    <a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_new");
        echo "\">Create new</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 78
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
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_search");
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

\$('#t tbody#searchtab').append('<tr><td>' + obj.id + '</td><td> ' + obj.email + ' </td><td>' + obj.roles + '</td><td>' + obj.password + '</td><td>' + obj.nom+ '</td><td>' + obj.prenom+'</td><td>' + obj.adress + '</td><td>' + obj.cin + '</td><td>' + obj.dateNaissance + '</td><td>' + obj.dateCreationC+ '</td><td>' + obj.status+ '</td><td>' + obj.token + '</td><td>' + obj.score+ '</td><td>' + obj.numtel + '</td><td>' + obj.image + '</td><td>' + obj.compteEx + '</td><td>' + obj.tokenEx+ '</td><td><a href=\"' + obj.id + 'edit/\">modifier</a> </br><a\thref=\"' + obj.id + 'delete/\">supprimer</a></td></tr>');
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
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 96,  254 => 78,  244 => 77,  232 => 75,  224 => 69,  215 => 65,  206 => 61,  202 => 60,  197 => 58,  193 => 57,  189 => 56,  185 => 55,  181 => 54,  177 => 53,  173 => 52,  169 => 51,  165 => 50,  161 => 49,  157 => 48,  153 => 47,  149 => 46,  145 => 45,  141 => 44,  137 => 43,  133 => 42,  129 => 40,  124 => 39,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}User index{% endblock %}

{% block body %}
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    <h1>User index</h1>
\t<input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search\"><br>
    <table border=\"1\" id=\"t\"class=\"table\">
        <thead>
            <tr>
                <td>Id</td>
                <td>Email</td>
                <td>Roles</td>
                <td>Password</td>
                <td>Nom</td>
                <td>Prenom</td>
                <td>Adress</td>
                <td>Cin</td>
                <td>Date_naissance</td>
                <td>Date_creation_c</td>
                <td>Status</td>
                <td>Token</td>
                <td>Score</td>
                <td>Numtel</td>
                <td>Image</td>
                <td>Compte_ex</td>
                <td>Token_ex</td>
                <td>actions</td>
            </tr>
        </thead>
      <tbody id=\"all\">
        {% for user in users %}
        
            <tr>
                <td>{{ user.id }}</td>
                <td>{{ user.email }}</td>
                <td> {{ user.roles ? user.roles|json_encode : '' }} </td>
                <td>{{ user.password }}</td>
                <td>{{ user.nom }}</td>
                <td>{{ user.prenom }}</td>
                <td>{{ user.adress }}</td>
                <td>{{ user.cin }}</td>
                <td>{{ user.dateNaissance ? user.dateNaissance|date('Y-m-d') : '' }}</td>
                <td>{{ user.dateCreationC ? user.dateCreationC|date('Y-m-d') : '' }}</td>
                <td>{{ user.status ? 'Yes' : 'No' }}</td>
                <td>{{ user.token }}</td>
                <td>{{ user.score }}</td>
                <td>{{ user.numtel }}</td>
                <td>{{ user.image }}</td>
                <td>{{ user.compteEx ? user.compteEx|date('Y-m-d') : '' }}</td>
                <td>{{ user.tokenEx ? user.tokenEx|date('Y-m-d') : '' }}</td>
                <td>
                    <a href=\"{{ path('app_admin_show', {'id': user.id}) }}\">show</a>
                    <a href=\"{{ path('app_admin_edit', {'id': user.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"18\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
        <tbody id=\"searchtab\">
\t\t\t\t<td>ss</td>
\t\t\t</tbody>
    </table>

    <a href=\"{{ path('app_admin_new') }}\">Create new</a>
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
url: \"{{ path('app_admin_search') }}\",
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

\$('#t tbody#searchtab').append('<tr><td>' + obj.id + '</td><td> ' + obj.email + ' </td><td>' + obj.roles + '</td><td>' + obj.password + '</td><td>' + obj.nom+ '</td><td>' + obj.prenom+'</td><td>' + obj.adress + '</td><td>' + obj.cin + '</td><td>' + obj.dateNaissance + '</td><td>' + obj.dateCreationC+ '</td><td>' + obj.status+ '</td><td>' + obj.token + '</td><td>' + obj.score+ '</td><td>' + obj.numtel + '</td><td>' + obj.image + '</td><td>' + obj.compteEx + '</td><td>' + obj.tokenEx+ '</td><td><a href=\"' + obj.id + 'edit/\">modifier</a> </br><a\thref=\"' + obj.id + 'delete/\">supprimer</a></td></tr>');
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
", "admin/index.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\admin\\index.html.twig");
    }
}
