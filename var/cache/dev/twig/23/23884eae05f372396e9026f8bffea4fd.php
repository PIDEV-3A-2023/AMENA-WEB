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

/* annonces/index.html.twig */
class __TwigTemplate_ff74f1f8b547fe587e9d23707185d51f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonces/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonces/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "annonces/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "\t<h1>Annonces index</h1>

\t<table class=\"table\">

\t\t<tbody>
\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 10, $this->source); })()), 3));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 11
            echo "\t\t\t\t<tr>
\t\t\t\t\t";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["annonce"]);
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 13
                echo "\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "Type", [], "any", false, false, false, 14), "html", null, true);
                echo "
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xl-3\">
\t\t\t\t\t\t\t\t<div class=\"card m-b-10\" style=\"width: 450px; height: 500px;\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body row\">

\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 card-title align-self-center mb-0\">
\t\t\t\t\t\t\t\t\t\t\t<h5>La ville de depart :</h5>
\t\t\t\t\t\t\t\t\t\t\t<h5>";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "villeDep", [], "any", false, false, false, 21), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t\t\t\t\t<h5>La ville d'arrivee :</h5>
\t\t\t\t\t\t\t\t\t\t\t<h5>";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "villeArr", [], "any", false, false, false, 23), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t\t\t\t\t<h5>La Date de depart :</h5>
\t\t\t\t\t\t\t\t\t\t\t<h5>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "DateDep", [], "any", false, false, false, 25), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t\t\t\t\t<h5>La Date d'arrivee :</h5>
\t\t\t\t\t\t\t\t\t\t\t<h5>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "DateArr", [], "any", false, false, false, 27), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t\t\t\t\t<h5>Description :</h5>
\t\t\t\t\t\t\t\t\t\t\t<h5>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "Description", [], "any", false, false, false, 29), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"float-right btn-group btn-group-sm\" style=\"width: 75px; height: 35px;\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_annonces_show", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 33)]), "html", null, true);
                echo "\" class=\"btn btn-primary tooltips\" data-placement=\"top\" data-toggle=\"tooltip\" data-original-title=\"Edit\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_annonces_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 36)]), "html", null, true);
                echo "\" class=\"btn btn-secondary tooltips\" data-placement=\"top\" data-toggle=\"tooltip\" data-original-title=\"Delete\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t\t</tbody>
\t</table>
\t<a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_annonces_new");
        echo "\">Create new</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "annonces/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 48,  153 => 46,  146 => 44,  132 => 36,  126 => 33,  119 => 29,  114 => 27,  109 => 25,  104 => 23,  99 => 21,  89 => 14,  86 => 13,  82 => 12,  79 => 11,  75 => 10,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}
\t<h1>Annonces index</h1>

\t<table class=\"table\">

\t\t<tbody>
\t\t\t{% for annonce in annonces|batch(3) %}
\t\t\t\t<tr>
\t\t\t\t\t{% for a in annonce %}
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t{{ a.Type }}
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xl-3\">
\t\t\t\t\t\t\t\t<div class=\"card m-b-10\" style=\"width: 450px; height: 500px;\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body row\">

\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 card-title align-self-center mb-0\">
\t\t\t\t\t\t\t\t\t\t\t<h5>La ville de depart :</h5>
\t\t\t\t\t\t\t\t\t\t\t<h5>{{ a.villeDep}}</h5>
\t\t\t\t\t\t\t\t\t\t\t<h5>La ville d'arrivee :</h5>
\t\t\t\t\t\t\t\t\t\t\t<h5>{{ a.villeArr}}</h5>
\t\t\t\t\t\t\t\t\t\t\t<h5>La Date de depart :</h5>
\t\t\t\t\t\t\t\t\t\t\t<h5>{{ a.DateDep}}</h5>
\t\t\t\t\t\t\t\t\t\t\t<h5>La Date d'arrivee :</h5>
\t\t\t\t\t\t\t\t\t\t\t<h5>{{ a.DateArr}}</h5>
\t\t\t\t\t\t\t\t\t\t\t<h5>Description :</h5>
\t\t\t\t\t\t\t\t\t\t\t<h5>{{ a.Description}}</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"float-right btn-group btn-group-sm\" style=\"width: 75px; height: 35px;\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_annonces_show', {'id': a.id}) }}\" class=\"btn btn-primary tooltips\" data-placement=\"top\" data-toggle=\"tooltip\" data-original-title=\"Edit\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_annonces_delete', {'id': a.id}) }}\" class=\"btn btn-secondary tooltips\" data-placement=\"top\" data-toggle=\"tooltip\" data-original-title=\"Delete\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>
\t<a href=\"{{ path('app_annonces_new') }}\">Create new</a>
{% endblock %}
", "annonces/index.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\annonces\\index.html.twig");
    }
}
