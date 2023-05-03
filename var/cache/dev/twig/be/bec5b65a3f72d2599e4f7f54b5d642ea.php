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

/* admin/edit.html.twig */
class __TwigTemplate_34e9de8f519acd1181c1f0b7cf8ed27a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
<<<<<<< Updated upstream
=======
            'title' => [$this, 'block_title'],
>>>>>>> Stashed changes
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
<<<<<<< Updated upstream
        // line 14
=======
        // line 1
>>>>>>> Stashed changes
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/edit.html.twig"));

<<<<<<< Updated upstream
        $this->parent = $this->loadTemplate("base.html.twig", "admin/edit.html.twig", 14);
=======
        $this->parent = $this->loadTemplate("base.html.twig", "admin/edit.html.twig", 1);
>>>>>>> Stashed changes
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

<<<<<<< Updated upstream
    // line 16
=======
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
>>>>>>> Stashed changes
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

<<<<<<< Updated upstream
        // line 17
        echo "<br>
<br>
<br>
<br>
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <h1>Modifier l'utilisateur ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "nom", [], "any", false, false, false, 24), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "prenom", [], "any", false, false, false, 24), "html", null, true);
        echo "</h1>
    </div>
  </div>
  <div class=\"row\">
    <div class=\"col-md-6\">
      ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_start');
        echo "

      ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31), 'row');
        echo "
      ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "roles", [], "any", false, false, false, 32), 'row');
        echo "
      ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "password", [], "any", false, false, false, 33), 'row');
        echo "
      ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "nom", [], "any", false, false, false, 34), 'row');
        echo "
      ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "prenom", [], "any", false, false, false, 35), 'row');
        echo "
      ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "adress", [], "any", false, false, false, 36), 'row');
        echo "
      ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "cin", [], "any", false, false, false, 37), 'row');
        echo "
      ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "date_naissance", [], "any", false, false, false, 38), 'row');
        echo "
      ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "date_creation_c", [], "any", false, false, false, 39), 'row');
        echo "
      ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "status", [], "any", false, false, false, 40), 'row');
        echo "
      ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "token", [], "any", false, false, false, 41), 'row');
        echo "
      ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "score", [], "any", false, false, false, 42), 'row');
        echo "
      ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "numtel", [], "any", false, false, false, 43), 'row');
        echo "
      ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "image", [], "any", false, false, false, 44), 'row');
        echo "
      ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "compte_ex", [], "any", false, false, false, 45), 'row');
        echo "
      ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "token_ex", [], "any", false, false, false, 46), 'row');
        echo "

      <button type=\"submit\" class=\"btn btn-primary\">Modifier</button>

      ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), 'form_end');
        echo "
    </div>
  </div>
  <div class=\"row mt-3\">
    <div class=\"col-md-6\">
      <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_index");
        echo "\" class=\"btn btn-secondary\">Retour à la liste</a>
    </div>
  </div>
  <div class=\"row mt-3\">
    <div class=\"col-md-6\">
      ";
        // line 60
        echo twig_include($this->env, $context, "admin/_delete_form.html.twig");
        echo "
    </div>
  </div>
</div>
=======
        // line 6
        echo "    <h1>Edit User</h1>

    ";
        // line 8
        echo twig_include($this->env, $context, "admin/_form.html.twig", ["button_label" => "Update"]);
        echo "

    <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_index");
        echo "\">back to list</a>

    ";
        // line 12
        echo twig_include($this->env, $context, "admin/_delete_form.html.twig");
        echo "
>>>>>>> Stashed changes
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
<<<<<<< Updated upstream
        return array (  175 => 60,  167 => 55,  159 => 50,  152 => 46,  148 => 45,  144 => 44,  140 => 43,  136 => 42,  132 => 41,  128 => 40,  124 => 39,  120 => 38,  116 => 37,  112 => 36,  108 => 35,  104 => 34,  100 => 33,  96 => 32,  92 => 31,  87 => 29,  77 => 24,  68 => 17,  58 => 16,  35 => 14,);
=======
        return array (  102 => 12,  97 => 10,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
>>>>>>> Stashed changes
    }

    public function getSourceContext()
    {
<<<<<<< Updated upstream
        return new Source("{# {% extends 'base.html.twig' %}
=======
        return new Source("{% extends 'base.html.twig' %}
>>>>>>> Stashed changes

{% block title %}Edit User{% endblock %}

{% block body %}
    <h1>Edit User</h1>

    {{ include('admin/_form.html.twig', {'button_label': 'Update'}) }}

    <a href=\"{{ path('app_admin_index') }}\">back to list</a>

    {{ include('admin/_delete_form.html.twig') }}
{% endblock %}
<<<<<<< Updated upstream
 #}{% extends 'base.html.twig' %}

{% block body %}
<br>
<br>
<br>
<br>
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <h1>Modifier l'utilisateur {{ user.nom }} {{ user.prenom }}</h1>
    </div>
  </div>
  <div class=\"row\">
    <div class=\"col-md-6\">
      {{ form_start(form) }}

      {{ form_row(form.email) }}
      {{ form_row(form.roles) }}
      {{ form_row(form.password) }}
      {{ form_row(form.nom) }}
      {{ form_row(form.prenom) }}
      {{ form_row(form.adress) }}
      {{ form_row(form.cin) }}
      {{ form_row(form.date_naissance) }}
      {{ form_row(form.date_creation_c) }}
      {{ form_row(form.status) }}
      {{ form_row(form.token) }}
      {{ form_row(form.score) }}
      {{ form_row(form.numtel) }}
      {{ form_row(form.image) }}
      {{ form_row(form.compte_ex) }}
      {{ form_row(form.token_ex) }}

      <button type=\"submit\" class=\"btn btn-primary\">Modifier</button>

      {{ form_end(form) }}
    </div>
  </div>
  <div class=\"row mt-3\">
    <div class=\"col-md-6\">
      <a href=\"{{ path('app_admin_index') }}\" class=\"btn btn-secondary\">Retour à la liste</a>
    </div>
  </div>
  <div class=\"row mt-3\">
    <div class=\"col-md-6\">
      {{ include('admin/_delete_form.html.twig') }}
    </div>
  </div>
</div>
{% endblock %}
=======
>>>>>>> Stashed changes
", "admin/edit.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\admin\\edit.html.twig");
    }
}
