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
class __TwigTemplate_42a4a492c2c8c938b3db714109d79e7a extends Template
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
\t\t\t\t\t\t<span class=\"align-middle\">AdminKit</span>
\t\t\t\t\t</a>

\t\t\t\t\t<ul class=\"sidebar-nav\">
\t\t\t\t\t\t<li class=\"sidebar-header\">
\t\t\t\t\t\t\tPages
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"index.html\">
\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"sliders\"></i>
\t\t\t\t\t\t\t\t<span class=\"align-middle\">Dashboard</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"pages-profile.html\">
\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"user\"></i>
\t\t\t\t\t\t\t\t<span class=\"align-middle\">Profile</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"pages-sign-in.html\">
\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"log-in\"></i>
\t\t\t\t\t\t\t\t<span class=\"align-middle\">Sign In</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"pages-sign-up.html\">
\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"user-plus\"></i>
\t\t\t\t\t\t\t\t<span class=\"align-middle\">Sign Up</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"sidebar-item active\">
\t\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"pages-blank.html\">
\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"book\"></i>
\t\t\t\t\t\t\t\t<span class=\"align-middle\">Blank</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"sidebar-header\">
\t\t\t\t\t\t\tTools & Components
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"ui-buttons.html\">
\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"square\"></i>
\t\t\t\t\t\t\t\t<span class=\"align-middle\">Buttons</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"ui-forms.html\">
\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"check-square\"></i>
\t\t\t\t\t\t\t\t<span class=\"align-middle\">Forms</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"ui-cards.html\">
\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"grid\"></i>
\t\t\t\t\t\t\t\t<span class=\"align-middle\">Cards</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"ui-typography.html\">
\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"align-left\"></i>
\t\t\t\t\t\t\t\t<span class=\"align-middle\">Typography</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"icons-feather.html\">
\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"coffee\"></i>
\t\t\t\t\t\t\t\t<span class=\"align-middle\">Icons</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"sidebar-header\">
\t\t\t\t\t\t\tPlugins & Addons
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"charts-chartjs.html\">
\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"bar-chart-2\"></i>
\t\t\t\t\t\t\t\t<span class=\"align-middle\">Charts</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"maps-google.html\">
\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"map\"></i>
\t\t\t\t\t\t\t\t<span class=\"align-middle\">Maps</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>

\t\t\t\t\t<div class=\"sidebar-cta\">
\t\t\t\t\t\t<div class=\"sidebar-cta-content\">
\t\t\t\t\t\t\t<strong class=\"d-inline-block mb-2\">Upgrade to Pro</strong>
\t\t\t\t\t\t\t<div class=\"mb-3 text-sm\">
\t\t\t\t\t\t\t\tAre you looking for more components? Check out our premium version.
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"d-grid\">
\t\t\t\t\t\t\t\t<a href=\"upgrade-to-pro.html\" class=\"btn btn-primary\">Upgrade to Pro</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>

\t\t\t<div class=\"main\">
\t\t\t\t<nav class=\"navbar navbar-expand navbar-light navbar-bg\">
\t\t\t\t\t<a class=\"sidebar-toggle js-sidebar-toggle\">
\t\t\t\t\t\t<i class=\"hamburger align-self-center\"></i>
\t\t\t\t\t</a>

\t\t\t\t\t<div class=\"navbar-collapse collapse\">
\t\t\t\t\t\t<ul class=\"navbar-nav navbar-align\">
\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t<a class=\"nav-icon dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t<div class=\"position-relative\">
\t\t\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"bell\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"indicator\">4</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-end py-0\" aria-labelledby=\"alertsDropdown\">
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu-header\">
\t\t\t\t\t\t\t\t\t\t4 New Notifications
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"text-danger\" data-feather=\"alert-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-dark\">Update completed</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Restart server 12 to complete the update.</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">30m ago</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"text-warning\" data-feather=\"bell\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-dark\">Lorem ipsum</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">2h ago</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"text-primary\" data-feather=\"home\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-dark\">Login from 192.186.1.8</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">5h ago</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"text-success\" data-feather=\"user-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-dark\">New connection</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Christina accepted your request.</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">14h ago</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu-footer\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-muted\">Show all notifications</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t<a class=\"nav-icon dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t<div class=\"position-relative\">
\t\t\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"message-square\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-end py-0\" aria-labelledby=\"messagesDropdown\">
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu-header\">
\t\t\t\t\t\t\t\t\t\t<div class=\"position-relative\">
\t\t\t\t\t\t\t\t\t\t\t4 New Messages
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/avatars/avatar-5.jpg"), "html", null, true);
        echo "\" class=\"avatar img-fluid rounded-circle\" alt=\"Vanessa Tucker\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10 ps-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-dark\">Vanessa Tucker</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Nam pretium turpis et arcu. Duis arcu tortor.</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">15m ago</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/avatars/avatar-2.jpg"), "html", null, true);
        echo "\" class=\"avatar img-fluid rounded-circle\" alt=\"William Harris\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10 ps-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-dark\">William Harris</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Curabitur ligula sapien euismod vitae.</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">2h ago</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/avatars/avatar-4.jpg"), "html", null, true);
        echo "\" class=\"avatar img-fluid rounded-circle\" alt=\"Christina Mason\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10 ps-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-dark\">Christina Mason</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Pellentesque auctor neque nec urna.</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">4h ago</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/avatars/avatar-3.jpg"), "html", null, true);
        echo "\" class=\"avatar img-fluid rounded-circle\" alt=\"Sharon Lessman\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10 ps-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-dark\">Sharon Lessman</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">5h ago</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu-footer\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-muted\">Show all messages</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t<a class=\"nav-icon dropdown-toggle d-inline-block d-sm-none\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"settings\"></i>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle d-none d-sm-inline-block\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/avatars/avatar.jpg"), "html", null, true);
        echo "\" class=\"avatar img-fluid rounded me-1\" alt=\"Charles Hall\"/>
\t\t\t\t\t\t\t\t\t<span class=\"text-dark\">Charles Hall</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"pages-profile.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"align-middle me-1\" data-feather=\"user\"></i>
\t\t\t\t\t\t\t\t\t\tProfile</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"align-middle me-1\" data-feather=\"pie-chart\"></i>
\t\t\t\t\t\t\t\t\t\tAnalytics</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"index.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"align-middle me-1\" data-feather=\"settings\"></i>
\t\t\t\t\t\t\t\t\t\tSettings & Privacy</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"align-middle me-1\" data-feather=\"help-circle\"></i>
\t\t\t\t\t\t\t\t\t\tHelp Center</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Log out</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</nav>

\t\t\t\t<main class=\"content\"> ";
        // line 320
        $this->displayBlock('body', $context, $blocks);
        // line 321
        echo "\t\t\t\t\t</main>

\t\t\t\t\t<footer class=\"footer\">
\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t<div class=\"row text-muted\">
\t\t\t\t\t\t\t\t<div class=\"col-6 text-start\">
\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">
\t\t\t\t\t\t\t\t\t\t<a class=\"text-muted\" href=\"https://adminkit.io/\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t<strong>AdminKit</strong>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t<a class=\"text-muted\" href=\"https://adminkit.io/\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t<strong>Bootstrap Admin Template</strong>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t&copy;
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-6 text-end\">
\t\t\t\t\t\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-muted\" href=\"https://adminkit.io/\" target=\"_blank\">Support</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-muted\" href=\"https://adminkit.io/\" target=\"_blank\">Help Center</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-muted\" href=\"https://adminkit.io/\" target=\"_blank\">Privacy</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-muted\" href=\"https://adminkit.io/\" target=\"_blank\">Terms</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</footer>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t";
        // line 361
        $this->displayBlock('javascripts', $context, $blocks);
        // line 366
        echo "\t\t</body>

\t</html>
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
        echo "
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

    // line 320
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

    // line 361
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 362
        echo "\t\t\t\t<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
\t\t\t\t";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
\t\t\t\t<script src=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/js/app.js"), "html", null, true);
        echo "\"></script>
\t\t\t";
        
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
        return array (  504 => 364,  500 => 363,  497 => 362,  487 => 361,  469 => 320,  455 => 22,  451 => 21,  448 => 20,  438 => 19,  425 => 366,  423 => 361,  381 => 321,  379 => 320,  351 => 295,  327 => 274,  312 => 262,  297 => 250,  282 => 238,  68 => 26,  66 => 19,  46 => 1,);
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
\t\t\t\t\t\t<span class=\"align-middle\">AdminKit</span>
\t\t\t\t\t</a>

\t\t\t\t\t<ul class=\"sidebar-nav\">
\t\t\t\t\t\t<li class=\"sidebar-header\">
\t\t\t\t\t\t\tPages
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"index.html\">
\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"sliders\"></i>
\t\t\t\t\t\t\t\t<span class=\"align-middle\">Dashboard</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"pages-profile.html\">
\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"user\"></i>
\t\t\t\t\t\t\t\t<span class=\"align-middle\">Profile</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"pages-sign-in.html\">
\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"log-in\"></i>
\t\t\t\t\t\t\t\t<span class=\"align-middle\">Sign In</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"pages-sign-up.html\">
\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"user-plus\"></i>
\t\t\t\t\t\t\t\t<span class=\"align-middle\">Sign Up</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"sidebar-item active\">
\t\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"pages-blank.html\">
\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"book\"></i>
\t\t\t\t\t\t\t\t<span class=\"align-middle\">Blank</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"sidebar-header\">
\t\t\t\t\t\t\tTools & Components
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"ui-buttons.html\">
\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"square\"></i>
\t\t\t\t\t\t\t\t<span class=\"align-middle\">Buttons</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"ui-forms.html\">
\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"check-square\"></i>
\t\t\t\t\t\t\t\t<span class=\"align-middle\">Forms</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"ui-cards.html\">
\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"grid\"></i>
\t\t\t\t\t\t\t\t<span class=\"align-middle\">Cards</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"ui-typography.html\">
\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"align-left\"></i>
\t\t\t\t\t\t\t\t<span class=\"align-middle\">Typography</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"icons-feather.html\">
\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"coffee\"></i>
\t\t\t\t\t\t\t\t<span class=\"align-middle\">Icons</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"sidebar-header\">
\t\t\t\t\t\t\tPlugins & Addons
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"charts-chartjs.html\">
\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"bar-chart-2\"></i>
\t\t\t\t\t\t\t\t<span class=\"align-middle\">Charts</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"maps-google.html\">
\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"map\"></i>
\t\t\t\t\t\t\t\t<span class=\"align-middle\">Maps</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>

\t\t\t\t\t<div class=\"sidebar-cta\">
\t\t\t\t\t\t<div class=\"sidebar-cta-content\">
\t\t\t\t\t\t\t<strong class=\"d-inline-block mb-2\">Upgrade to Pro</strong>
\t\t\t\t\t\t\t<div class=\"mb-3 text-sm\">
\t\t\t\t\t\t\t\tAre you looking for more components? Check out our premium version.
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"d-grid\">
\t\t\t\t\t\t\t\t<a href=\"upgrade-to-pro.html\" class=\"btn btn-primary\">Upgrade to Pro</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>

\t\t\t<div class=\"main\">
\t\t\t\t<nav class=\"navbar navbar-expand navbar-light navbar-bg\">
\t\t\t\t\t<a class=\"sidebar-toggle js-sidebar-toggle\">
\t\t\t\t\t\t<i class=\"hamburger align-self-center\"></i>
\t\t\t\t\t</a>

\t\t\t\t\t<div class=\"navbar-collapse collapse\">
\t\t\t\t\t\t<ul class=\"navbar-nav navbar-align\">
\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t<a class=\"nav-icon dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t<div class=\"position-relative\">
\t\t\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"bell\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"indicator\">4</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-end py-0\" aria-labelledby=\"alertsDropdown\">
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu-header\">
\t\t\t\t\t\t\t\t\t\t4 New Notifications
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"text-danger\" data-feather=\"alert-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-dark\">Update completed</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Restart server 12 to complete the update.</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">30m ago</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"text-warning\" data-feather=\"bell\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-dark\">Lorem ipsum</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">2h ago</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"text-primary\" data-feather=\"home\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-dark\">Login from 192.186.1.8</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">5h ago</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"text-success\" data-feather=\"user-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-dark\">New connection</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Christina accepted your request.</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">14h ago</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu-footer\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-muted\">Show all notifications</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t<a class=\"nav-icon dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t<div class=\"position-relative\">
\t\t\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"message-square\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-end py-0\" aria-labelledby=\"messagesDropdown\">
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu-header\">
\t\t\t\t\t\t\t\t\t\t<div class=\"position-relative\">
\t\t\t\t\t\t\t\t\t\t\t4 New Messages
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('back/assets/img/avatars/avatar-5.jpg')}}\" class=\"avatar img-fluid rounded-circle\" alt=\"Vanessa Tucker\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10 ps-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-dark\">Vanessa Tucker</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Nam pretium turpis et arcu. Duis arcu tortor.</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">15m ago</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('back/assets/img/avatars/avatar-2.jpg')}}\" class=\"avatar img-fluid rounded-circle\" alt=\"William Harris\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10 ps-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-dark\">William Harris</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Curabitur ligula sapien euismod vitae.</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">2h ago</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('back/assets/img/avatars/avatar-4.jpg')}}\" class=\"avatar img-fluid rounded-circle\" alt=\"Christina Mason\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10 ps-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-dark\">Christina Mason</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Pellentesque auctor neque nec urna.</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">4h ago</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('back/assets/img/avatars/avatar-3.jpg')}}\" class=\"avatar img-fluid rounded-circle\" alt=\"Sharon Lessman\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10 ps-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-dark\">Sharon Lessman</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">5h ago</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu-footer\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-muted\">Show all messages</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t<a class=\"nav-icon dropdown-toggle d-inline-block d-sm-none\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"settings\"></i>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle d-none d-sm-inline-block\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t<img src=\"{{asset('back/assets/img/avatars/avatar.jpg')}}\" class=\"avatar img-fluid rounded me-1\" alt=\"Charles Hall\"/>
\t\t\t\t\t\t\t\t\t<span class=\"text-dark\">Charles Hall</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"pages-profile.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"align-middle me-1\" data-feather=\"user\"></i>
\t\t\t\t\t\t\t\t\t\tProfile</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"align-middle me-1\" data-feather=\"pie-chart\"></i>
\t\t\t\t\t\t\t\t\t\tAnalytics</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"index.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"align-middle me-1\" data-feather=\"settings\"></i>
\t\t\t\t\t\t\t\t\t\tSettings & Privacy</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"align-middle me-1\" data-feather=\"help-circle\"></i>
\t\t\t\t\t\t\t\t\t\tHelp Center</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Log out</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</nav>

\t\t\t\t<main class=\"content\"> {% block body %}{% endblock %}
\t\t\t\t\t</main>

\t\t\t\t\t<footer class=\"footer\">
\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t<div class=\"row text-muted\">
\t\t\t\t\t\t\t\t<div class=\"col-6 text-start\">
\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">
\t\t\t\t\t\t\t\t\t\t<a class=\"text-muted\" href=\"https://adminkit.io/\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t<strong>AdminKit</strong>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t<a class=\"text-muted\" href=\"https://adminkit.io/\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t<strong>Bootstrap Admin Template</strong>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t&copy;
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-6 text-end\">
\t\t\t\t\t\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-muted\" href=\"https://adminkit.io/\" target=\"_blank\">Support</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-muted\" href=\"https://adminkit.io/\" target=\"_blank\">Help Center</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-muted\" href=\"https://adminkit.io/\" target=\"_blank\">Privacy</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-muted\" href=\"https://adminkit.io/\" target=\"_blank\">Terms</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</footer>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t{% block javascripts %}
\t\t\t\t<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
\t\t\t\t{{ encore_entry_script_tags('app') }}
\t\t\t\t<script src=\"{{asset('back/assets/js/app.js')}}\"></script>
\t\t\t{% endblock %}
\t\t</body>

\t</html>
", "baseadmin.html.twig", "C:\\Users\\aymen\\Desktop\\digidreamers\\digidreamers\\templates\\baseadmin.html.twig");
    }
}
