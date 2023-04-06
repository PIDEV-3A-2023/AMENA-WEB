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
        echo "\t";
        // line 19
        echo "\t<h1>User index</h1>
\t<form method=\"get\" action=\"";
        // line 20
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

\t\t<h1 class=\"h3 mb-3\">Blank Page</h1>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\" style=\"overflow-x: scroll\">
\t\t\t\t<div class=\"card\" style=\"width: 4300px;\">
\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t<h5 class=\"card-title mb-0\">Empty card</h5>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-body\">

\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t\t\t<th>Prenom</th>
\t\t\t\t\t\t\t\t\t<th>Adress</th>
\t\t\t\t\t\t\t\t\t<th>Cin</th>
\t\t\t\t\t\t\t\t\t";
        // line 51
        echo "\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t<th>Role</th>
\t\t\t\t\t\t\t\t\t<th>Motpass</th>
\t\t\t\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t\t\t\t";
        // line 56
        echo " 
\t\t\t\t\t\t\t\t\t<th>Numtel</th>
\t\t\t\t\t\t\t\t\t<th>Image</th>
\t\t\t\t\t\t\t\t\t<th>CompteEx</th>
\t\t\t\t\t\t\t\t\t";
        // line 61
        echo "\t\t\t\t\t\t\t\t\t<th>actions</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 65, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 66
            echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "adress", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "cin", [], "any", false, false, false, 71), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t";
            // line 74
            echo "\t\t\t\t\t\t\t\t\t\t<td>";
            echo ((twig_get_attribute($this->env, $this->source, $context["user"], "status", [], "any", false, false, false, 74)) ? ("Yes") : ("No"));
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "motpass", [], "any", false, false, false, 76), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 77), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t";
            // line 80
            echo "\t\t\t\t\t\t\t\t\t\t<td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "numtel", [], "any", false, false, false, 80), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td><img style=\"width:100px;height:100px\" src=\"";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "image", [], "any", false, false, false, 81), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 83
            ((twig_get_attribute($this->env, $this->source, $context["user"], "compteEx", [], "any", false, false, false, 83)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "compteEx", [], "any", false, false, false, 83), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t\t\t\t\t\t";
            // line 85
            echo "\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 86)]), "html", null, true);
            echo "\">show</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 87)]), "html", null, true);
            echo "\">edit</a>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 91
            echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td colspan=\"18\">no records found</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>

\t\t\t\t\t\t<a href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        echo "\">Register</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
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
        return array (  230 => 98,  225 => 95,  216 => 91,  207 => 87,  203 => 86,  200 => 85,  196 => 83,  191 => 81,  186 => 80,  182 => 77,  178 => 76,  174 => 75,  169 => 74,  165 => 71,  161 => 70,  157 => 69,  153 => 68,  149 => 66,  144 => 65,  138 => 61,  132 => 56,  126 => 51,  94 => 20,  91 => 19,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseadmin.html.twig' %}

{% block title %}User index
{% endblock %}

{% block body %}
\t{#<!-- ======= Breadcrumbs ======= -->
\t    <div class=\"breadcrumbs d-flex align-items-center\" style=\"background-image: url('assets/img/contact-header.jpg');\">
\t      <div class=\"container position-relative d-flex flex-column align-items-center\">
\t
\t        <h2>Contact</h2>
\t        <ol>
\t          <li><a href=\"index.html\">Home</a></li>
\t          <li>Contact</li>
\t        </ol>
\t
\t      </div>
\t    </div><!-- End Breadcrumbs -->#}
\t<h1>User index</h1>
\t<form method=\"get\" action=\"{{ path('app_user_index') }}\">
\t\t<div class=\"input-group mb-3\">
\t\t\t<input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search users...\">
\t\t\t<div class=\"input-group-append\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-outline-secondary\">Search</button>
\t\t\t</div>
\t\t</div>
\t</form>

\t<div class=\"container-fluid p-0\">

\t\t<h1 class=\"h3 mb-3\">Blank Page</h1>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\" style=\"overflow-x: scroll\">
\t\t\t\t<div class=\"card\" style=\"width: 4300px;\">
\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t<h5 class=\"card-title mb-0\">Empty card</h5>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-body\">

\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t\t\t<th>Prenom</th>
\t\t\t\t\t\t\t\t\t<th>Adress</th>
\t\t\t\t\t\t\t\t\t<th>Cin</th>
\t\t\t\t\t\t\t\t\t{# <th>Datenaissance</th>
\t\t\t\t\t\t\t\t\t<th>Datecreationc</th> #}
\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t<th>Role</th>
\t\t\t\t\t\t\t\t\t<th>Motpass</th>
\t\t\t\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t\t\t\t{# <th>Token</th>
\t\t\t\t\t\t\t\t\t{# <th>Score</th> #} 
\t\t\t\t\t\t\t\t\t<th>Numtel</th>
\t\t\t\t\t\t\t\t\t<th>Image</th>
\t\t\t\t\t\t\t\t\t<th>CompteEx</th>
\t\t\t\t\t\t\t\t\t{# <th>TokenEx</th> #}
\t\t\t\t\t\t\t\t\t<th>actions</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t{% for user in users %}
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<td>{{ user.nom}}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ user.prenom }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ user.adress }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ user.cin }}</td>
\t\t\t\t\t\t\t\t\t\t{# <td>{{ user.datenaissance ? user.datenaissance|date('Y-m-d') : '' }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ user.datecreationc ? user.datecreationc|date('Y-m-d') : '' }}</td> #}
\t\t\t\t\t\t\t\t\t\t<td>{{ user.status ? 'Yes' : 'No' }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ user.role }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ user.motpass }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ user.email }}</td>
\t\t\t\t\t\t\t\t\t\t{# <td>{{ user.token }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ user.score }}</td> #}
\t\t\t\t\t\t\t\t\t\t<td>{{ user.numtel }}</td>
\t\t\t\t\t\t\t\t\t\t<td><img style=\"width:100px;height:100px\" src=\"{{ user.image }}\">
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ user.compteEx ? user.compteEx|date('Y-m-d H:i:s') : '' }}</td>
\t\t\t\t\t\t\t\t\t\t{# <td>{{ user.tokenEx ? user.tokenEx|date('Y-m-d H:i:s') : '' }}</td> #}
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_user_show', {'id': user.id}) }}\">show</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_user_edit', {'id': user.id}) }}\">edit</a>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td colspan=\"18\">no records found</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>

\t\t\t\t\t\t<a href=\"{{ path('app_user_new') }}\">Register</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "user/index.html.twig", "C:\\Users\\aymen\\Desktop\\digidreamers\\digidreamers\\templates\\user\\index.html.twig");
    }
}
