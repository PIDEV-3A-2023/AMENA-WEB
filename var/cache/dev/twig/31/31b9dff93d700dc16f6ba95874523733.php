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

/* baseadmin.html.twig */
class __TwigTemplate_ae0ae5688705b4ef051931ac0e695eb4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseadmin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseadmin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<meta name=\"description\" content=\"Responsive Admin &amp; Dashboard Template based on Bootstrap 5\">
\t\t<meta name=\"author\" content=\"AdminKit\">
\t\t<meta name=\"keywords\" content=\"adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web\">

\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
\t\t<link rel=\"shortcut icon\" href=\"img/icons/icon-48x48.png\"/>

\t\t<link rel=\"canonical\" href=\"https://demo-basic.adminkit.io/pages-blank.html\"/>

\t\t<title>Blank Page | AdminKit Demo</title>


\t\t";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "

\t</head>
\t<body>
\t\t<div class=\"wrapper\">
\t\t\t<nav id=\"sidebar\" class=\"sidebar js-sidebar\">
\t\t\t\t<div class=\"sidebar-content js-simplebar\">
\t\t\t\t\t<a class=\"sidebar-brand\" href=\"index.html\">
\t\t\t\t\t\t<span class=\"align-middle\">Amena</span>
\t\t\t\t\t</a>

\t\t\t\t\t<ul class=\"sidebar-nav\">
\t\t\t\t\t\t<li class=\"sidebar-header\">
\t\t\t\t\t\t\tPages
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li
\t\t\t\t\t\t\tclass=\"sidebar-item\">
\t\t\t\t\t\t\t";
        // line 44
        echo "\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"sliders\"></i>
\t\t\t\t\t\t\t<span class=\"align-middle\">Dashboard location</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t<a class=\"sidebar-link\" href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_user_index");
        echo "\">
\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"sliders\"></i>
\t\t\t\t\t\t<span class=\"align-middle\">Dashboard user</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t<a class=\"sidebar-link\" href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_validation_index");
        echo "\">
\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"sliders\"></i>
\t\t\t\t\t\t<span class=\"align-middle\">Dashboard validation</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</a>
\t\t</li>
\t\t<li class=\"sidebar-item\">
\t\t\t<a class=\"sidebar-link\" href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_message_index");
        echo "\">
\t\t\t\t<i class=\"align-middle\" data-feather=\"sliders\"></i>
\t\t\t\t<span class=\"align-middle\">Dashboard message</span>
\t\t\t</a>
\t\t</li>

\t\t<li class=\"sidebar-item\">
\t\t\t<a class=\"sidebar-link\" href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show");
        echo "\">

\t\t\t\t<i class=\"align-middle\" data-feather=\"user\"></i>
\t\t\t\t<span class=\"align-middle\">Profile</span>
\t\t\t</a>
\t\t</li>
\t</body>
</html></ul></nav><div class=\"main\"><nav class=\"navbar navbar-expand navbar-light navbar-bg\">
<a class=\"sidebar-toggle js-sidebar-toggle\">
\t<i class=\"hamburger align-self-center\"></i>
</a>

<div class=\"navbar-collapse collapse\">
\t<ul class=\"navbar-nav navbar-align\">
\t\t<li class=\"nav-item dropdown\">
\t\t\t<a class=\"nav-icon dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" data-bs-toggle=\"dropdown\">
\t\t\t\t<div class=\"position-relative\">
\t\t\t\t\t<i class=\"align-middle\" data-feather=\"bell\"></i>
\t\t\t\t\t<span class=\"indicator\">4</span>
\t\t\t\t</div>
\t\t\t</a>
\t\t\t<div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-end py-0\" aria-labelledby=\"alertsDropdown\">
\t\t\t\t<div class=\"dropdown-menu-header\">
\t\t\t\t\t4 New Notifications
\t\t\t\t</div>
\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t<i class=\"text-danger\" data-feather=\"alert-circle\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t\t<div class=\"text-dark\">Update completed</div>
\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Restart server 12 to complete the update.</div>
\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">30m ago</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t<i class=\"text-warning\" data-feather=\"bell\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t\t<div class=\"text-dark\">Lorem ipsum</div>
\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">2h ago</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t<i class=\"text-primary\" data-feather=\"home\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t\t<div class=\"text-dark\">Login from 192.186.1.8</div>
\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">5h ago</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t<i class=\"text-success\" data-feather=\"user-plus\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t\t<div class=\"text-dark\">New connection</div>
\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Christina accepted your request.</div>
\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">14h ago</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"dropdown-menu-footer\">
\t\t\t\t\t<a href=\"#\" class=\"text-muted\">Show all notifications</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</li>
\t\t<li class=\"nav-item dropdown\">
\t\t\t<a class=\"nav-icon dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" data-bs-toggle=\"dropdown\">
\t\t\t\t<div class=\"position-relative\">
\t\t\t\t\t<i class=\"align-middle\" data-feather=\"message-square\"></i>
\t\t\t\t</div>
\t\t\t</a>
\t\t\t<div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-end py-0\" aria-labelledby=\"messagesDropdown\">
\t\t\t\t<div class=\"dropdown-menu-header\">
\t\t\t\t\t<div class=\"position-relative\">
\t\t\t\t\t\t4 New Messages
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/avatars/avatar-5.jpg"), "html", null, true);
        echo "\" class=\"avatar img-fluid rounded-circle\" alt=\"Vanessa Tucker\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-10 ps-2\">
\t\t\t\t\t\t\t\t<div class=\"text-dark\">Vanessa Tucker</div>
\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Nam pretium turpis et arcu. Duis arcu tortor.</div>
\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">15m ago</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/avatars/avatar-2.jpg"), "html", null, true);
        echo "\" class=\"avatar img-fluid rounded-circle\" alt=\"William Harris\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-10 ps-2\">
\t\t\t\t\t\t\t\t<div class=\"text-dark\">William Harris</div>
\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Curabitur ligula sapien euismod vitae.</div>
\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">2h ago</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/avatars/avatar-4.jpg"), "html", null, true);
        echo "\" class=\"avatar img-fluid rounded-circle\" alt=\"Christina Mason\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-10 ps-2\">
\t\t\t\t\t\t\t\t<div class=\"text-dark\">Christina Mason</div>
\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Pellentesque auctor neque nec urna.</div>
\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">4h ago</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/avatars/avatar-3.jpg"), "html", null, true);
        echo "\" class=\"avatar img-fluid rounded-circle\" alt=\"Sharon Lessman\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-10 ps-2\">
\t\t\t\t\t\t\t\t<div class=\"text-dark\">Sharon Lessman</div>
\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">5h ago</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"dropdown-menu-footer\">
\t\t\t\t\t<a href=\"#\" class=\"text-muted\">Show all messages</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</li>
\t\t<li class=\"nav-item dropdown\">
\t\t\t<a class=\"nav-icon dropdown-toggle d-inline-block d-sm-none\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t<i class=\"align-middle\" data-feather=\"settings\"></i>
\t\t\t</a>

\t\t\t<a class=\"nav-link dropdown-toggle d-none d-sm-inline-block\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t<img src=\"";
        // line 223
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 223, $this->source); })()), "user", [], "any", false, false, false, 223), "image", [], "any", false, false, false, 223), "html", null, true);
        echo "\" class=\"avatar img-fluid rounded me-1\" alt=\"Charles Hall\"/>
\t\t\t\t<span class=\"text-dark\">
\t\t\t\t\t";
        // line 225
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 226
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 226, $this->source); })()), "user", [], "any", false, false, false, 226), "email", [], "any", false, false, false, 226), "html", null, true);
            echo "
\t\t\t\t\t";
        }
        // line 228
        echo "\t\t\t\t</span>
\t\t\t</a>
\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 231, $this->source); })()), "user", [], "any", false, false, false, 231), "id", [], "any", false, false, false, 231)]), "html", null, true);
        echo "\">
\t\t\t\t\t<i class=\"align-middle me-1\" data-feather=\"user\"></i>
\t\t\t\t\tProfile</a>
\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t<i class=\"align-middle me-1\" data-feather=\"pie-chart\"></i>
\t\t\t\t\tAnalytics</a>
\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 238, $this->source); })()), "user", [], "any", false, false, false, 238), "id", [], "any", false, false, false, 238)]), "html", null, true);
        echo "\">
\t\t\t\t\t<i class=\"align-middle me-1\" data-feather=\"settings\"></i>
\t\t\t\t\tSettings & Privacy</a>
\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t<i class=\"align-middle me-1\" data-feather=\"help-circle\"></i>
\t\t\t\t\tHelp Center</a>
\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t<a class=\"dropdown-item\" href=\"/logout\">Log out</a>
\t\t\t</div>
\t\t</li>
\t</ul>
</div></nav><main class=\"content\"> ";
        // line 249
        $this->displayBlock('body', $context, $blocks);
        // line 250
        echo "</main>

<footer class=\"footer\"></footer></div></div>";
        // line 252
        $this->displayBlock('javascripts', $context, $blocks);
        echo "</body></html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "\t\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
\t\t\t";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
\t\t\t<link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/css/app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap\" rel=\"stylesheet\">

\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 249
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 252
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/js/app.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "baseadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  401 => 252,  383 => 249,  369 => 22,  365 => 21,  362 => 20,  352 => 19,  340 => 252,  336 => 250,  334 => 249,  320 => 238,  310 => 231,  305 => 228,  299 => 226,  297 => 225,  292 => 223,  268 => 202,  253 => 190,  238 => 178,  223 => 166,  125 => 71,  115 => 64,  104 => 56,  95 => 50,  87 => 44,  68 => 26,  66 => 19,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<meta name=\"description\" content=\"Responsive Admin &amp; Dashboard Template based on Bootstrap 5\">
\t\t<meta name=\"author\" content=\"AdminKit\">
\t\t<meta name=\"keywords\" content=\"adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web\">

\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
\t\t<link rel=\"shortcut icon\" href=\"img/icons/icon-48x48.png\"/>

\t\t<link rel=\"canonical\" href=\"https://demo-basic.adminkit.io/pages-blank.html\"/>

\t\t<title>Blank Page | AdminKit Demo</title>


\t\t{% block stylesheets %}
\t\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
\t\t\t{{ encore_entry_link_tags('app') }}
\t\t\t<link href=\"{{asset('back/assets/css/app.css')}}\" rel=\"stylesheet\">
\t\t\t<link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap\" rel=\"stylesheet\">

\t\t{% endblock %}


\t</head>
\t<body>
\t\t<div class=\"wrapper\">
\t\t\t<nav id=\"sidebar\" class=\"sidebar js-sidebar\">
\t\t\t\t<div class=\"sidebar-content js-simplebar\">
\t\t\t\t\t<a class=\"sidebar-brand\" href=\"index.html\">
\t\t\t\t\t\t<span class=\"align-middle\">Amena</span>
\t\t\t\t\t</a>

\t\t\t\t\t<ul class=\"sidebar-nav\">
\t\t\t\t\t\t<li class=\"sidebar-header\">
\t\t\t\t\t\t\tPages
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li
\t\t\t\t\t\t\tclass=\"sidebar-item\">
\t\t\t\t\t\t\t{# <a class=\"sidebar-link\" href=\"{{ url('app_reservation_index') }}\"> #}
\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"sliders\"></i>
\t\t\t\t\t\t\t<span class=\"align-middle\">Dashboard location</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t<a class=\"sidebar-link\" href=\"{{ url('app_user_index') }}\">
\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"sliders\"></i>
\t\t\t\t\t\t<span class=\"align-middle\">Dashboard user</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t<a class=\"sidebar-link\" href=\"{{ url('app_validation_index') }}\">
\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"sliders\"></i>
\t\t\t\t\t\t<span class=\"align-middle\">Dashboard validation</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</a>
\t\t</li>
\t\t<li class=\"sidebar-item\">
\t\t\t<a class=\"sidebar-link\" href=\"{{ url('app_message_index') }}\">
\t\t\t\t<i class=\"align-middle\" data-feather=\"sliders\"></i>
\t\t\t\t<span class=\"align-middle\">Dashboard message</span>
\t\t\t</a>
\t\t</li>

\t\t<li class=\"sidebar-item\">
\t\t\t<a class=\"sidebar-link\" href=\"{{ path('app_user_show') }}\">

\t\t\t\t<i class=\"align-middle\" data-feather=\"user\"></i>
\t\t\t\t<span class=\"align-middle\">Profile</span>
\t\t\t</a>
\t\t</li>
\t</body>
</html></ul></nav><div class=\"main\"><nav class=\"navbar navbar-expand navbar-light navbar-bg\">
<a class=\"sidebar-toggle js-sidebar-toggle\">
\t<i class=\"hamburger align-self-center\"></i>
</a>

<div class=\"navbar-collapse collapse\">
\t<ul class=\"navbar-nav navbar-align\">
\t\t<li class=\"nav-item dropdown\">
\t\t\t<a class=\"nav-icon dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" data-bs-toggle=\"dropdown\">
\t\t\t\t<div class=\"position-relative\">
\t\t\t\t\t<i class=\"align-middle\" data-feather=\"bell\"></i>
\t\t\t\t\t<span class=\"indicator\">4</span>
\t\t\t\t</div>
\t\t\t</a>
\t\t\t<div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-end py-0\" aria-labelledby=\"alertsDropdown\">
\t\t\t\t<div class=\"dropdown-menu-header\">
\t\t\t\t\t4 New Notifications
\t\t\t\t</div>
\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t<i class=\"text-danger\" data-feather=\"alert-circle\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t\t<div class=\"text-dark\">Update completed</div>
\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Restart server 12 to complete the update.</div>
\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">30m ago</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t<i class=\"text-warning\" data-feather=\"bell\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t\t<div class=\"text-dark\">Lorem ipsum</div>
\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">2h ago</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t<i class=\"text-primary\" data-feather=\"home\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t\t<div class=\"text-dark\">Login from 192.186.1.8</div>
\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">5h ago</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t<i class=\"text-success\" data-feather=\"user-plus\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t\t<div class=\"text-dark\">New connection</div>
\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Christina accepted your request.</div>
\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">14h ago</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"dropdown-menu-footer\">
\t\t\t\t\t<a href=\"#\" class=\"text-muted\">Show all notifications</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</li>
\t\t<li class=\"nav-item dropdown\">
\t\t\t<a class=\"nav-icon dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" data-bs-toggle=\"dropdown\">
\t\t\t\t<div class=\"position-relative\">
\t\t\t\t\t<i class=\"align-middle\" data-feather=\"message-square\"></i>
\t\t\t\t</div>
\t\t\t</a>
\t\t\t<div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-end py-0\" aria-labelledby=\"messagesDropdown\">
\t\t\t\t<div class=\"dropdown-menu-header\">
\t\t\t\t\t<div class=\"position-relative\">
\t\t\t\t\t\t4 New Messages
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t<img src=\"{{asset('back/assets/img/avatars/avatar-5.jpg')}}\" class=\"avatar img-fluid rounded-circle\" alt=\"Vanessa Tucker\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-10 ps-2\">
\t\t\t\t\t\t\t\t<div class=\"text-dark\">Vanessa Tucker</div>
\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Nam pretium turpis et arcu. Duis arcu tortor.</div>
\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">15m ago</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t<img src=\"{{asset('back/assets/img/avatars/avatar-2.jpg')}}\" class=\"avatar img-fluid rounded-circle\" alt=\"William Harris\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-10 ps-2\">
\t\t\t\t\t\t\t\t<div class=\"text-dark\">William Harris</div>
\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Curabitur ligula sapien euismod vitae.</div>
\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">2h ago</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t<img src=\"{{asset('back/assets/img/avatars/avatar-4.jpg')}}\" class=\"avatar img-fluid rounded-circle\" alt=\"Christina Mason\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-10 ps-2\">
\t\t\t\t\t\t\t\t<div class=\"text-dark\">Christina Mason</div>
\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Pellentesque auctor neque nec urna.</div>
\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">4h ago</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t<img src=\"{{asset('back/assets/img/avatars/avatar-3.jpg')}}\" class=\"avatar img-fluid rounded-circle\" alt=\"Sharon Lessman\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-10 ps-2\">
\t\t\t\t\t\t\t\t<div class=\"text-dark\">Sharon Lessman</div>
\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">5h ago</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"dropdown-menu-footer\">
\t\t\t\t\t<a href=\"#\" class=\"text-muted\">Show all messages</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</li>
\t\t<li class=\"nav-item dropdown\">
\t\t\t<a class=\"nav-icon dropdown-toggle d-inline-block d-sm-none\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t<i class=\"align-middle\" data-feather=\"settings\"></i>
\t\t\t</a>

\t\t\t<a class=\"nav-link dropdown-toggle d-none d-sm-inline-block\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t<img src=\"{{ app.user.image }}\" class=\"avatar img-fluid rounded me-1\" alt=\"Charles Hall\"/>
\t\t\t\t<span class=\"text-dark\">
\t\t\t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t\t\t\t{{ app.user.email }}
\t\t\t\t\t{% endif %}
\t\t\t\t</span>
\t\t\t</a>
\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_user_show', {'id': app.user.id }) }}\">
\t\t\t\t\t<i class=\"align-middle me-1\" data-feather=\"user\"></i>
\t\t\t\t\tProfile</a>
\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t<i class=\"align-middle me-1\" data-feather=\"pie-chart\"></i>
\t\t\t\t\tAnalytics</a>
\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_user_edit', {'id': app.user.id }) }}\">
\t\t\t\t\t<i class=\"align-middle me-1\" data-feather=\"settings\"></i>
\t\t\t\t\tSettings & Privacy</a>
\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t<i class=\"align-middle me-1\" data-feather=\"help-circle\"></i>
\t\t\t\t\tHelp Center</a>
\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t<a class=\"dropdown-item\" href=\"/logout\">Log out</a>
\t\t\t</div>
\t\t</li>
\t</ul>
</div></nav><main class=\"content\"> {% block body %}{% endblock %}
</main>

<footer class=\"footer\"></footer></div></div>{% block javascripts %}{{ encore_entry_script_tags('app') }}<script src=\"{{asset('back/assets/js/app.js')}}\"></script>{% endblock %}</body></html>
", "baseadmin.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\baseadmin.html.twig");
    }
}
