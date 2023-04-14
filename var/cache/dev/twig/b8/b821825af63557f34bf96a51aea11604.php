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

/* user/new.html.twig */
class __TwigTemplate_5f68ea12c18bb9001aa85799f3f6fa29 extends Template
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
        // line 15
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        // line 16
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), [0 => "bootstrap_5_layout.html.twig"], true);
        // line 15
        $this->parent = $this->loadTemplate("base.html.twig", "user/new.html.twig", 15);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 18
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "New User
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 21
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "\t
\t";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        // line 24
        echo "
\t<!-- ======= Breadcrumbs ======= -->
\t<div class=\"breadcrumbs d-flex align-items-center\" style=\"background-image: url('assets/img/contact-header.jpg');\">
\t\t<div class=\"container position-relative d-flex flex-column align-items-center\">

\t\t\t<h2>S’inscrire</h2>
\t\t\t<ol>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"index.html\">Home</a>
\t\t\t\t</li>
\t\t\t\t<li>S’inscrire</li>
\t\t\t</ol>

\t\t</div>
\t</div>
\t<!-- End Breadcrumbs -->

\t
\t<section class=\"contact-form-area section-bg  pt-115 pb-120 fix\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/babva.jpg"), "html", null, true);
        echo "\" >
\t <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/aret.png"), "html", null, true);
        echo "\" class=\"background--page\" alt=\"...\"width=\"110%\"Height=\"110%\">

\t\t<div class=\"container\" style=\"margin-top:-44%;margin-left:25%;\">
\t\t\t<div
\t\t\t\tclass=\"row justify-content-end\">
\t\t\t\t<!-- Contact wrapper -->
\t\t\t\t<div class=\"col-xl-8 col-lg-9\">
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"contact-form-wrapper\">
\t\t\t\t\t\t<!-- From tittle -->
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"col-lg-12\">
\t\t\t\t\t\t\t\t<!-- Section Tittle -->
\t\t\t\t\t\t\t\t<div class=\"section-tittle mb-50\">
\t\t\t\t\t\t\t\t\t<span>Get a Qote For Free</span>
\t\t\t\t\t\t\t\t\t<h2>S’inscrire</h2>
\t\t\t\t\t\t\t\t\t<p>Rejoignez Amena aujourd’hui.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- form -->
\t\t\t\t\t\t<form action=\"#\" class=\"contact-form\">
\t\t\t\t\t\t\t<div class=\"row \">
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"input-form\">
\t\t\t\t\t\t\t\t\t\t";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "nom", [], "any", false, false, false, 69), 'label');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "nom", [], "any", false, false, false, 70), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "nom", [], "any", false, false, false, 71), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"input-form\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "prenom", [], "any", false, false, false, 77), 'label');
        echo "
\t\t\t\t\t\t\t\t\t\t\t";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "prenom", [], "any", false, false, false, 78), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t\t";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "prenom", [], "any", false, false, false, 79), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t<div class=\"input-form\">
\t\t\t\t\t\t\t\t\t\t";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "email", [], "any", false, false, false, 85), 'label');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "email", [], "any", false, false, false, 86), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "email", [], "any", false, false, false, 87), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "motpass", [], "any", false, false, false, 88), 'label');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "motpass", [], "any", false, false, false, 89), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "motpass", [], "any", false, false, false, 90), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t<div class=\"select-items\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "role", [], "any", false, false, false, 96), 'label');
        echo "
\t\t\t\t\t\t\t\t\t\t\t";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "role", [], "any", false, false, false, 97), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t\t";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "role", [], "any", false, false, false, 98), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"input-form\">
\t\t\t\t\t\t\t\t\t\t";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "adress", [], "any", false, false, false, 104), 'label');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "adress", [], "any", false, false, false, 105), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "adress", [], "any", false, false, false, 106), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"input-form\">
\t\t\t\t\t\t\t\t\t\t";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "datenaissance", [], "any", false, false, false, 111), 'label');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "datenaissance", [], "any", false, false, false, 112), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "datenaissance", [], "any", false, false, false, 113), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"input-form\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Height Width length -->
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"input-form\">
\t\t\t\t\t\t\t\t\t\t";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "numtel", [], "any", false, false, false, 122), 'label');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "numtel", [], "any", false, false, false, 123), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "numtel", [], "any", false, false, false, 124), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "_token", [], "any", false, false, false, 125), 'row');
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"input-form\">
\t\t\t\t\t\t\t\t\t\t";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "cin", [], "any", false, false, false, 130), 'label');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "cin", [], "any", false, false, false, 131), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "cin", [], "any", false, false, false, 132), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"input-form\">";
        // line 138
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-outline-success\">Create</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<a class=\"btn btn-outline-dark\" href=\"";
        // line 151
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        echo "\">back to list</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 151,  302 => 138,  294 => 132,  290 => 131,  286 => 130,  278 => 125,  274 => 124,  270 => 123,  266 => 122,  254 => 113,  250 => 112,  246 => 111,  238 => 106,  234 => 105,  230 => 104,  221 => 98,  217 => 97,  213 => 96,  204 => 90,  200 => 89,  196 => 88,  192 => 87,  188 => 86,  184 => 85,  175 => 79,  171 => 78,  167 => 77,  158 => 71,  154 => 70,  150 => 69,  121 => 43,  117 => 42,  97 => 24,  95 => 23,  92 => 22,  82 => 21,  62 => 18,  51 => 15,  49 => 16,  36 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends 'base.html.twig' %}

{% block title %}New User{% endblock %}

{% block body %}
<div class=\"container\"style=\"margin-top: 90px;\">
   
    <h1>Create new User</h1>

    {{ include('user/_form.html.twig') }}

    <a href=\"{{ path('app_user_index') }}\">back to list</a>
{% endblock %} #}

{% extends 'base.html.twig' %}
{% form_theme form 'bootstrap_5_layout.html.twig' %}

{% block title %}New User
{% endblock %}

{% block body %}
\t
\t{{ form_start(form,{'attr': {'novalidate': 'novalidate'}}
\t) }}
\t<!-- ======= Breadcrumbs ======= -->
\t<div class=\"breadcrumbs d-flex align-items-center\" style=\"background-image: url('assets/img/contact-header.jpg');\">
\t\t<div class=\"container position-relative d-flex flex-column align-items-center\">

\t\t\t<h2>S’inscrire</h2>
\t\t\t<ol>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"index.html\">Home</a>
\t\t\t\t</li>
\t\t\t\t<li>S’inscrire</li>
\t\t\t</ol>

\t\t</div>
\t</div>
\t<!-- End Breadcrumbs -->

\t
\t<section class=\"contact-form-area section-bg  pt-115 pb-120 fix\" src=\"{{ asset('front/assets/img/babva.jpg') }}\" >
\t <img src=\"{{ asset('front/assets/img/aret.png') }}\" class=\"background--page\" alt=\"...\"width=\"110%\"Height=\"110%\">

\t\t<div class=\"container\" style=\"margin-top:-44%;margin-left:25%;\">
\t\t\t<div
\t\t\t\tclass=\"row justify-content-end\">
\t\t\t\t<!-- Contact wrapper -->
\t\t\t\t<div class=\"col-xl-8 col-lg-9\">
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"contact-form-wrapper\">
\t\t\t\t\t\t<!-- From tittle -->
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"col-lg-12\">
\t\t\t\t\t\t\t\t<!-- Section Tittle -->
\t\t\t\t\t\t\t\t<div class=\"section-tittle mb-50\">
\t\t\t\t\t\t\t\t\t<span>Get a Qote For Free</span>
\t\t\t\t\t\t\t\t\t<h2>S’inscrire</h2>
\t\t\t\t\t\t\t\t\t<p>Rejoignez Amena aujourd’hui.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- form -->
\t\t\t\t\t\t<form action=\"#\" class=\"contact-form\">
\t\t\t\t\t\t\t<div class=\"row \">
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"input-form\">
\t\t\t\t\t\t\t\t\t\t{{ form_label(form.nom) }}
\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.nom) }}
\t\t\t\t\t\t\t\t\t\t{{form_errors(form.nom)}}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"input-form\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t{{ form_label(form.prenom) }}
\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.prenom) }}
\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.prenom) }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t<div class=\"input-form\">
\t\t\t\t\t\t\t\t\t\t{{ form_label(form.email) }}
\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.email) }}
\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.email) }}
\t\t\t\t\t\t\t\t\t\t{{ form_label(form.motpass) }}
\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.motpass) }}
\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.motpass) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t<div class=\"select-items\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t{{ form_label(form.role) }}
\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.role) }}
\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.role) }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"input-form\">
\t\t\t\t\t\t\t\t\t\t{{ form_label(form.adress) }}
\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.adress) }}
\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.adress) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"input-form\">
\t\t\t\t\t\t\t\t\t\t{{ form_label(form.datenaissance) }}
\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.datenaissance) }}
\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.datenaissance) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"input-form\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Height Width length -->
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"input-form\">
\t\t\t\t\t\t\t\t\t\t{{ form_label(form.numtel) }}
\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.numtel) }}
\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.numtel) }}
\t\t\t\t\t\t\t\t\t\t{{ form_row(form._token) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"input-form\">
\t\t\t\t\t\t\t\t\t\t{{ form_label(form.cin) }}
\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.cin) }}
\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.cin) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"input-form\">{# <input type=\"text\" placeholder=\"length\"> #}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-outline-success\">Create</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<a class=\"btn btn-outline-dark\" href=\"{{ path('app_user_index') }}\">back to list</a>
{% endblock %}
", "user/new.html.twig", "C:\\Users\\aymen\\Desktop\\digidreamers\\digidreamers\\templates\\user\\new.html.twig");
    }
}
