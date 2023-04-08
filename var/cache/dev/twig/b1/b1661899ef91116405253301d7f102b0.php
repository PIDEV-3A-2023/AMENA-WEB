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

/* user/edit.html.twig */
class __TwigTemplate_0c1b6787d7a62c311c1aa19b25c1ec49 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        // line 4
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), [0 => "bootstrap_5_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/edit.html.twig", 1);
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

        echo "Edit User";
        
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
        echo "<div class=\"breadcrumbs d-flex align-items-center\" style=\"background-image: url('assets/img/contact-header.jpg');\">
      <div class=\"container position-relative d-flex flex-column align-items-center\">

        <h2>Contact</h2>
        <ol>
          <li><a href=\"index.html\">Home</a></li>
          <li>Contact</li>
        </ol>

      </div>
    </div>
    <h1>Edit User</h1>

    \t";
        // line 19
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'errors')) {
            // line 20
            echo "\t\t<div class=\"alert alert-danger\">
\t\t\t";
            // line 21
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'errors');
            echo "
\t\t</div>
\t";
        }
        // line 24
        echo "\t";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_start');
        echo "
\t<div class=\"offset-3 col-3\">
\t\t<div class=\"form-group\">
\t\t\t";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "nom", [], "any", false, false, false, 27), 'label');
        echo "
\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "nom", [], "any", false, false, false, 28), 'widget');
        echo "
\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "nom", [], "any", false, false, false, 29), 'errors');
        echo "
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "prenom", [], "any", false, false, false, 33), 'label');
        echo "
\t\t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "prenom", [], "any", false, false, false, 34), 'widget');
        echo "
\t\t\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "prenom", [], "any", false, false, false, 35), 'errors');
        echo "
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "adress", [], "any", false, false, false, 39), 'label');
        echo "
\t\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "adress", [], "any", false, false, false, 40), 'widget');
        echo "
\t\t\t";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "adress", [], "any", false, false, false, 41), 'errors');
        echo "
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "cin", [], "any", false, false, false, 45), 'label');
        echo "
\t\t\t";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "cin", [], "any", false, false, false, 46), 'widget');
        echo "
\t\t\t";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "cin", [], "any", false, false, false, 47), 'errors');
        echo "
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "datenaissance", [], "any", false, false, false, 51), 'label');
        echo "
\t\t\t";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "datenaissance", [], "any", false, false, false, 52), 'widget');
        echo "
\t\t\t";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "datenaissance", [], "any", false, false, false, 53), 'errors');
        echo "
\t\t</div>


\t\t<div class=\"form-group\">
\t\t\t";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "status", [], "any", false, false, false, 58), 'label');
        echo "
\t\t\t";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "status", [], "any", false, false, false, 59), 'widget');
        echo "
\t\t\t";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "status", [], "any", false, false, false, 60), 'errors');
        echo "
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "role", [], "any", false, false, false, 64), 'label');
        echo "
\t\t\t";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "role", [], "any", false, false, false, 65), 'widget');
        echo "
\t\t\t";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "role", [], "any", false, false, false, 66), 'errors');
        echo "
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "motpass", [], "any", false, false, false, 70), 'label');
        echo "
\t\t\t";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "motpass", [], "any", false, false, false, 71), 'widget');
        echo "
\t\t\t";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "motpass", [], "any", false, false, false, 72), 'errors');
        echo "
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "email", [], "any", false, false, false, 76), 'label');
        echo "
\t\t\t";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "email", [], "any", false, false, false, 77), 'widget');
        echo "
\t\t\t";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "email", [], "any", false, false, false, 78), 'errors');
        echo "
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "image", [], "any", false, false, false, 82), 'label');
        echo "
\t\t\t";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "image", [], "any", false, false, false, 83), 'widget');
        echo "
\t\t\t";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "image", [], "any", false, false, false, 84), 'errors');
        echo "
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "numtel", [], "any", false, false, false, 88), 'label');
        echo "
\t\t\t";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "numtel", [], "any", false, false, false, 89), 'widget');
        echo "
\t\t\t";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "numtel", [], "any", false, false, false, 90), 'errors');
        echo "
\t\t\t";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "_token", [], "any", false, false, false, 91), 'row');
        echo "
\t\t</div>
\t\t<button type=\"submit\" class=\"btn btn-primary\">Update</button>


    <a href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        echo "\">back to list</a>



    ";
        // line 100
        echo twig_include($this->env, $context, "user/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 100,  295 => 96,  287 => 91,  283 => 90,  279 => 89,  275 => 88,  268 => 84,  264 => 83,  260 => 82,  253 => 78,  249 => 77,  245 => 76,  238 => 72,  234 => 71,  230 => 70,  223 => 66,  219 => 65,  215 => 64,  208 => 60,  204 => 59,  200 => 58,  192 => 53,  188 => 52,  184 => 51,  177 => 47,  173 => 46,  169 => 45,  162 => 41,  158 => 40,  154 => 39,  147 => 35,  143 => 34,  139 => 33,  132 => 29,  128 => 28,  124 => 27,  117 => 24,  111 => 21,  108 => 20,  106 => 19,  91 => 6,  81 => 5,  62 => 3,  51 => 1,  49 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit User{% endblock %}
{% form_theme form 'bootstrap_5_layout.html.twig' %}
{% block body %}
<div class=\"breadcrumbs d-flex align-items-center\" style=\"background-image: url('assets/img/contact-header.jpg');\">
      <div class=\"container position-relative d-flex flex-column align-items-center\">

        <h2>Contact</h2>
        <ol>
          <li><a href=\"index.html\">Home</a></li>
          <li>Contact</li>
        </ol>

      </div>
    </div>
    <h1>Edit User</h1>

    \t{% if form_errors(form) %}
\t\t<div class=\"alert alert-danger\">
\t\t\t{{ form_errors(form) }}
\t\t</div>
\t{% endif %}
\t{{ form_start(form) }}
\t<div class=\"offset-3 col-3\">
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.nom) }}
\t\t\t{{ form_widget(form.nom) }}
\t\t\t{{form_errors(form.nom)}}
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.prenom) }}
\t\t\t{{ form_widget(form.prenom) }}
\t\t\t{{ form_errors(form.prenom) }}
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.adress) }}
\t\t\t{{ form_widget(form.adress) }}
\t\t\t{{ form_errors(form.adress) }}
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.cin) }}
\t\t\t{{ form_widget(form.cin) }}
\t\t\t{{ form_errors(form.cin) }}
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.datenaissance) }}
\t\t\t{{ form_widget(form.datenaissance) }}
\t\t\t{{ form_errors(form.datenaissance) }}
\t\t</div>


\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.status) }}
\t\t\t{{ form_widget(form.status) }}
\t\t\t{{ form_errors(form.status) }}
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.role) }}
\t\t\t{{ form_widget(form.role) }}
\t\t\t{{ form_errors(form.role) }}
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.motpass) }}
\t\t\t{{ form_widget(form.motpass) }}
\t\t\t{{ form_errors(form.motpass) }}
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.email) }}
\t\t\t{{ form_widget(form.email) }}
\t\t\t{{ form_errors(form.email) }}
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.image) }}
\t\t\t{{ form_widget(form.image) }}
\t\t\t{{ form_errors(form.image) }}
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.numtel) }}
\t\t\t{{ form_widget(form.numtel) }}
\t\t\t{{ form_errors(form.numtel) }}
\t\t\t{{ form_row(form._token) }}
\t\t</div>
\t\t<button type=\"submit\" class=\"btn btn-primary\">Update</button>


    <a href=\"{{ path('app_user_index') }}\">back to list</a>



    {{ include('user/_delete_form.html.twig') }}
{% endblock %}


 {#{% extends 'base.html.twig' %}

{% block title %}New User{% endblock %}

{% block body %}
<div class=\"container\">
   
    <h1>Create new User</h1>

    {{ include('user/_form.html.twig') }}

    <a href=\"{{ path('app_user_index') }}\">back to list</a>
{% endblock %}
#}
{# {% extends 'base.html.twig' %}
{% form_theme form 'bootstrap_4_layout.html.twig' %}

{% block title %}New User
{% endblock %}

{% block body %}

\t{{ form_start(form) }}
\t<div class=\"container\">
\t\t<div class=\"main-body\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<div class=\"d-flex flex-column align-items-center text-center\">
\t\t\t\t\t\t\t\t<img src=\"https://bootdey.com/img/Content/avatar/avatar6.png\" alt=\"Admin\" class=\"rounded-circle p-1 bg-primary\" width=\"110\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.image) }}
\t\t\t{{ form_widget(form.image) }}
\t\t\t{{ form_errors(form.image) }}
\t\t</div>
                
                <div class=\"mt-3\">
\t\t\t\t\t\t\t\t\t<h4>John Doe</h4>
\t\t\t\t\t\t\t\t\t<p class=\"text-secondary mb-1\">Full Stack Developer</p>
\t\t\t\t\t\t\t\t\t<p class=\"text-muted font-size-sm\">Bay Area, San Francisco, CA</p>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\">Follow</button>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-outline-primary\">Message</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr class=\"my-4\">
\t\t\t\t\t\t\t<ul class=\"list-group list-group-flush\">
\t\t\t\t\t\t\t\t<li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-globe me-2 icon-inline\"><circle cx=\"12\" cy=\"12\" r=\"10\"></circle><line x1=\"2\" y1=\"12\" x2=\"22\" y2=\"12\"></line><path d=\"M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z\"></path></svg>Website</h6>
\t\t\t\t\t\t\t\t\t<span class=\"text-secondary\">https://bootdey.com</span>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-github me-2 icon-inline\"><path d=\"M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22\"></path></svg>Github</h6>
\t\t\t\t\t\t\t\t\t<span class=\"text-secondary\">bootdey</span>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-twitter me-2 icon-inline text-info\"><path d=\"M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z\"></path></svg>Twitter</h6>
\t\t\t\t\t\t\t\t\t<span class=\"text-secondary\">@bootdey</span>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-instagram me-2 icon-inline text-danger\"><rect x=\"2\" y=\"2\" width=\"20\" height=\"20\" rx=\"5\" ry=\"5\"></rect><path d=\"M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z\"></path><line x1=\"17.5\" y1=\"6.5\" x2=\"17.51\" y2=\"6.5\"></line></svg>Instagram</h6>
\t\t\t\t\t\t\t\t\t<span class=\"text-secondary\">bootdey</span>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-facebook me-2 icon-inline text-primary\"><path d=\"M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z\"></path></svg>Facebook</h6>
\t\t\t\t\t\t\t\t\t<span class=\"text-secondary\">bootdey</span>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<<div class=\"form-group\">
\t\t\t{{ form_label(form.nom) }}
\t\t\t{{ form_widget(form.nom) }}
\t\t\t<!--{{form_errors(form.nom)}}-->
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.prenom) }}
\t\t\t{{ form_widget(form.prenom) }}
\t\t\t{{ form_errors(form.prenom) }}
\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.numtel) }}
\t\t\t{{ form_widget(form.numtel) }}
\t\t\t{{ form_errors(form.numtel) }}
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.cin) }}
\t\t\t{{ form_widget(form.cin) }}
\t\t\t{{ form_errors(form.cin) }}
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.email) }}
\t\t\t{{ form_widget(form.email) }}
\t\t\t{{ form_errors(form.email) }}
\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\"></div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9 text-secondary\">
\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-primary px-4\" value=\"Save Changes\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"d-flex align-items-center mb-3\">Project Status</h5>
\t\t\t\t\t\t\t\t\t<p>Web Design</p>
\t\t\t\t\t\t\t\t\t<div class=\"progress mb-3\" style=\"height: 5px\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 80%\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>Website Markup</p>
\t\t\t\t\t\t\t\t\t<div class=\"progress mb-3\" style=\"height: 5px\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 72%\" aria-valuenow=\"72\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>One Page</p>
\t\t\t\t\t\t\t\t\t<div class=\"progress mb-3\" style=\"height: 5px\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 89%\" aria-valuenow=\"89\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>Mobile Template</p>
\t\t\t\t\t\t\t\t\t<div class=\"progress mb-3\" style=\"height: 5px\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 55%\" aria-valuenow=\"55\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>Backend API</p>
\t\t\t\t\t\t\t\t\t<div class=\"progress\" style=\"height: 5px\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 66%\" aria-valuenow=\"66\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


  
\t<div class=\"offset-3 col-3\">
\t\t

\t\t

\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.adress) }}
\t\t\t{{ form_widget(form.adress) }}
\t\t\t{{ form_errors(form.adress) }}
\t\t</div>

\t\t

\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.datenaissance) }}
\t\t\t{{ form_widget(form.datenaissance) }}
\t\t\t{{ form_errors(form.datenaissance) }}
\t\t</div>


\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.status) }}
\t\t\t{{ form_widget(form.status) }}
\t\t\t{{ form_errors(form.status) }}
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.role) }}
\t\t\t{{ form_widget(form.role) }}
\t\t\t{{ form_errors(form.role) }}
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.motpass) }}
\t\t\t{{ form_widget(form.motpass) }}
\t\t\t{{ form_errors(form.motpass) }}
\t\t</div>

\t\t

\t\t

\t\t

\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.datecreationc) }}
\t\t\t{{ form_widget(form.datecreationc) }}
\t\t\t{{ form_errors(form.datecreationc) }}
\t\t</div>
\t\t
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.tokenEx) }}
\t\t\t{{ form_widget(form.tokenEx) }}
\t\t\t{{ form_errors(form.tokenEx) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.score )}}
\t\t\t{{ form_widget(form.score) }}
\t\t\t{{ form_errors(form.score) }}
\t\t</div>
\t\t<button type=\"submit\" class=\"btn btn-primary\">Create</button>


\t\t<a href=\"{{ path('app_user_index') }}\">back to list</a>
\t</div>
{% endblock %}
 #}", "user/edit.html.twig", "C:\\Users\\aymen\\Desktop\\digidreamers\\digidreamers\\templates\\user\\edit.html.twig");
    }
}
