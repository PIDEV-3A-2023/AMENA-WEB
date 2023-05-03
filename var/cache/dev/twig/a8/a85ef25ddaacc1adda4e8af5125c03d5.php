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

/* login/index.html.twig */
class __TwigTemplate_b14463af5946440ad962e1c7b8c12acd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "login/index.html.twig", 1);
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

        echo "Connexion
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/login.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t";
        // line 14
        echo "
<<<<<<< Updated upstream
\t

=======
\t";
        // line 15
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 15, $this->source); })())) {
            // line 16
            echo "\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 16, $this->source); })()), "html", null, true);
            echo "</div>
\t";
        }
        // line 18
        echo "
>>>>>>> Stashed changes
\t<div class=\"content\" style=\"margin-top: -90px;\">
\t\t<div class=\"flex-div\">
\t\t\t<div class=\"name-content\">
\t\t\t\t<h1 class=\"logo\">Amena</h1>
\t\t\t\t<p>Connect with friends and the world around you on Amena.</p>
\t\t\t</div>
\t\t\t<form action=\"";
<<<<<<< Updated upstream
        // line 23
=======
        // line 25
>>>>>>> Stashed changes
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" method=\"post\">
\t\t\t\t<label for=\"username\">Email:</label>
\t\t\t\t<input placeholder=\"Email or Phone Number\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
<<<<<<< Updated upstream
        // line 25
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 25, $this->source); })()), "html", null, true);
=======
        // line 27
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 27, $this->source); })()), "html", null, true);
>>>>>>> Stashed changes
        echo "\"/>

\t\t\t\t<label for=\"password\">Password:</label>
\t\t\t\t<input
\t\t\t\tplaceholder=\"Password\" type=\"password\" id=\"password\" name=\"_password\"/>

\t\t\t\t";
<<<<<<< Updated upstream
        // line 32
        echo "
\t\t\t\t<input type=\"hidden\" name=\"_target_path\" value=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        echo "\"/>
\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 34
=======
        // line 34
        echo "
\t\t\t\t<input type=\"hidden\" name=\"_target_path\" value=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        echo "\"/>
\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 36
>>>>>>> Stashed changes
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">


\t\t\t\t<button type=\"submit\" class=\"login\" style=\"background-color: #063970\">login</button>

\t\t\t\t<a href='";
<<<<<<< Updated upstream
        // line 39
=======
        // line 41
>>>>>>> Stashed changes
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "'\">Forgot Password ?</a>
\t\t\t\t<hr>
\t\t\t\t<button type=\"button\" onclick=\"window.location.href='";
<<<<<<< Updated upstream
        // line 41
=======
        // line 43
>>>>>>> Stashed changes
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        echo "'\" class=\"create-account\" style=\"background-color: #1e81b0; width: 160px;height:36px;\">Create </button>
\t\t\t</form>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "login/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
<<<<<<< Updated upstream
        return array (  165 => 41,  160 => 39,  152 => 34,  148 => 33,  145 => 32,  136 => 25,  131 => 23,  120 => 14,  118 => 11,  108 => 10,  95 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
=======
        return array (  174 => 43,  169 => 41,  161 => 36,  157 => 35,  154 => 34,  145 => 27,  140 => 25,  131 => 18,  125 => 16,  123 => 15,  120 => 14,  118 => 11,  108 => 10,  95 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
>>>>>>> Stashed changes
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Connexion
{% endblock %}
{% block stylesheets %}
\t{{parent()}}
\t<link href=\"{{asset('front/assets/css/login.css')}}\" rel=\"stylesheet\">

{% endblock %}
{% block body %}
\t{# {% if error %}
\t\t\t\t<div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t\t{% endif %} #}

<<<<<<< Updated upstream
\t
=======
\t{% if error %}
\t\t<div class=\"alert alert-danger\">{{ error }}</div>
\t{% endif %}
>>>>>>> Stashed changes

\t<div class=\"content\" style=\"margin-top: -90px;\">
\t\t<div class=\"flex-div\">
\t\t\t<div class=\"name-content\">
\t\t\t\t<h1 class=\"logo\">Amena</h1>
\t\t\t\t<p>Connect with friends and the world around you on Amena.</p>
\t\t\t</div>
\t\t\t<form action=\"{{ path('app_login') }}\" method=\"post\">
\t\t\t\t<label for=\"username\">Email:</label>
\t\t\t\t<input placeholder=\"Email or Phone Number\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\"/>

\t\t\t\t<label for=\"password\">Password:</label>
\t\t\t\t<input
\t\t\t\tplaceholder=\"Password\" type=\"password\" id=\"password\" name=\"_password\"/>

\t\t\t\t{# If you want to control the URL the user is redirected to on success#}

\t\t\t\t<input type=\"hidden\" name=\"_target_path\" value=\"{{ path('app_user_index') }}\"/>
\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">


\t\t\t\t<button type=\"submit\" class=\"login\" style=\"background-color: #063970\">login</button>

\t\t\t\t<a href='{{ path('app_forgot_password_request') }}'\">Forgot Password ?</a>
\t\t\t\t<hr>
\t\t\t\t<button type=\"button\" onclick=\"window.location.href='{{ path('app_user_new') }}'\" class=\"create-account\" style=\"background-color: #1e81b0; width: 160px;height:36px;\">Create </button>
\t\t\t</form>
\t\t</div>
\t</div>
{% endblock %}
", "login/index.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\login\\index.html.twig");
    }
}
