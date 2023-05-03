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

/* admin/_form.html.twig */
class __TwigTemplate_14067e1c8e78326c359987413d67370a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/_form.html.twig"));

<<<<<<< Updated upstream
        // line 11
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), [0 => "bootstrap_5_layout.html.twig"], true);
        // line 12
        echo "<div class=\"offset-3 col-3\">
";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

</div>";
=======
        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
";
        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), [0 => "bootstrap_5_layout.html.twig"], true);
        // line 3
        echo "<div class=\"offset-3 col-3\">
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), 'widget');
        echo "
    <button class=\"btn\">";
        // line 5
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 5, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
    </div>
";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form_end');
        echo "



";
>>>>>>> Stashed changes
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
<<<<<<< Updated upstream
        return array (  52 => 14,  48 => 13,  45 => 12,  43 => 11,);
=======
        return array (  61 => 7,  56 => 5,  52 => 4,  49 => 3,  47 => 2,  43 => 1,);
>>>>>>> Stashed changes
    }

    public function getSourceContext()
    {
<<<<<<< Updated upstream
        return new Source("{# <div class=\"offset-3 col-3\">
{{ form_start(form,{'attr': {'novalidate': 'novalidate'}} ) }}
    {{ form_widget(form) }}
    <button class=\"btn\">{{ button_label|default('Save') }}</button>
=======
        return new Source("{{ form_start(form) }}
{% form_theme form 'bootstrap_5_layout.html.twig' %}
<div class=\"offset-3 col-3\">
    {{ form_widget(form) }}
    <button class=\"btn\">{{ button_label|default('Save') }}</button>
    </div>
>>>>>>> Stashed changes
{{ form_end(form) }}



<<<<<<< Updated upstream

</div> #}
{% form_theme form 'bootstrap_5_layout.html.twig' %}
<div class=\"offset-3 col-3\">
{{ form_start(form,{'attr': {'novalidate': 'novalidate'}} ) }}
{{ form(form,{'attr': {'novalidate': 'novalidate'}} ) }}

</div>", "admin/_form.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\admin\\_form.html.twig");
=======
", "admin/_form.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\admin\\_form.html.twig");
>>>>>>> Stashed changes
    }
}
