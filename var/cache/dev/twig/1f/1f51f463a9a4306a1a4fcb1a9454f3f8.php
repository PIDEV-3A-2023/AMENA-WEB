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

/* base.html.twig */
class __TwigTemplate_2cf989a1c29020707f84d094e32bb023 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

\t\t<title>Amena Bootstrap Template - Contact</title>
\t\t<meta content=\"\" name=\"description\">
\t\t<meta
\t\tcontent=\"\" name=\"keywords\">

\t\t<!-- Favicons -->
\t\t<link href=\"front/assets/img/favicon.png\" rel=\"icon\">
\t\t<link
\t\thref=\"front/assets/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

\t\t<!-- Google Fonts -->
\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\" rel=\"stylesheet\">


\t\t";
        // line 23
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "

\t</head>
\t<body>
\t\t<!-- ======= Header ======= -->
\t\t<header id=\"header\" class=\"header d-flex align-items-center fixed-top\" style=\"margin-bottom:8%;background: rgba(27, 47, 69, 0.9);padding: 15px;\">
\t\t\t<div class=\"container-fluid container-xl d-flex align-items-center justify-content-between\">

\t\t\t\t<a href=\"index.html\" class=\"logo d-flex align-items-center\">
\t\t\t\t\t<!-- Uncomment the line below if you also wish to use an image logo -->
\t\t\t\t\t<!-- <img src=\"front/assets/img/logo.png\" alt=\"\"> -->
\t\t\t\t\t\t<h1 class=\"d-flex align-items-center\"> Amena</h1>
\t\t\t\t</a>

\t\t\t\t<i class=\"mobile-nav-toggle mobile-nav-show bi bi-list\"></i>
\t\t\t\t<i class=\"mobile-nav-toggle mobile-nav-hide d-none bi bi-x\"></i>

\t\t\t\t<nav id=\"navbar\" class=\"navbar\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"/web/index.html\">Home</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"/web/about.html\">About</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"/annonces/\">Annonces</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"/web/blog\">Blog</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t";
        // line 72
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 73
            echo "\t\t\t\t\t\t\t\t<a href='";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_index");
            echo "'>Espace Admin ?</a>
\t\t\t\t\t\t\t";
        }
        // line 75
        echo "\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t<span>Gestion</span>
\t\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down dropdown-indicator\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a>Gestion Colis</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t\t\t<span>Gestion Vehicules</span>
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down dropdown-indicator\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a>Deep Dropdown 1</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a>Deep Dropdown 2</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a>Deep Dropdown 3</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a>Deep Dropdown 4</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a>Deep Dropdown 5</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a>Gestion Annonces</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a>Gestion Gamification</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
        // line 108
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 109
            echo "\t\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t\t\t<span>Account</span>
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down dropdown-indicator\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul>


\t\t\t\t\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 118
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show");
            echo "\">

\t\t\t\t\t\t\t\t\t\t\t\tProfil</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 125, $this->source); })()), "user", [], "any", false, false, false, 125), "id", [], "any", false, false, false, 125)]), "html", null, true);
            echo "\">

\t\t\t\t\t\t\t\t\t\tSettings
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"/logout/\" class=\"active\">logout</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            // line 136
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li></li>
\t\t\t\t\t\t<li></li>

\t\t\t\t\t";
        } else {
            // line 142
            echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href='";
            // line 143
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "'>login</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 146
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
            echo "\">Register</a>

\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 150
        echo "\t\t\t\t</ul>
\t\t\t</ul>
\t\t</nav>
\t\t<!-- .navbar -->
\t</body>
</html></div></header><!-- End Header --><main id=\"main\"> ";
        // line 155
        $this->displayBlock('body', $context, $blocks);
        echo "</main><!-- End #main --><!-- ======= Footer ======= --><footer id=\"footer\" class=\"footer\" style=\"margin-top:38%\">

<div class=\"footer-content\">
\t<div class=\"container\">
\t\t<div class=\"row gy-4\">
\t\t\t<div class=\"col-lg-5 col-md-12 footer-info\">
\t\t\t\t<a href=\"index.html\" class=\"logo d-flex align-items-center\">
\t\t\t\t\t<span>Amena</span>
\t\t\t\t</a>
\t\t\t\t<p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
\t\t\t\t<div class=\"social-links d-flex  mt-3\">
\t\t\t\t\t<a class=\"twitter\">
\t\t\t\t\t\t<i class=\"bi bi-twitter\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"facebook\">
\t\t\t\t\t\t<i class=\"bi bi-facebook\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"instagram\">
\t\t\t\t\t\t<i class=\"bi bi-instagram\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"linkedin\">
\t\t\t\t\t\t<i class=\"bi bi-linkedin\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-2 col-6 footer-links\">
\t\t\t\t<h4>Useful Links</h4>
\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t<a>Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t<a>About us</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t<a>Services</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t<a>Terms of service</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t<a>Privacy policy</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>

\t\t\t<div class=\"col-lg-2 col-6 footer-links\">
\t\t\t\t<h4>Our Services</h4>
\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t<a>Web Design</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t<a>Web Development</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t<a>Product Management</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t<a>Marketing</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t<a>Graphic Design</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>

\t\t\t<div class=\"col-lg-3 col-md-12 footer-contact text-center text-md-start\">
\t\t\t\t<h4>Contact Us</h4>
\t\t\t\t<p>
\t\t\t\t\tA108 Adam Street
\t\t\t\t\t<br>
\t\t\t\t\tNew York, NY 535022<br>
\t\t\t\t\tUnited States
\t\t\t\t\t<br><br>
\t\t\t\t\t<strong>Phone:</strong>
\t\t\t\t\t+1 5589 55488 55<br>
\t\t\t\t\t<strong>Email:</strong>
\t\t\t\t\tinfo@example.com<br>
\t\t\t\t</p>

\t\t\t</div>

\t\t</div>
\t</div>
</div>

<div class=\"footer-legal\">
\t<div class=\"container\">
\t\t<div class=\"copyright\">
\t\t\t&copy; Copyright
\t\t\t<strong>
\t\t\t\t<span>Amena</span>
\t\t\t</strong>. All Rights Reserved
\t\t</div>
\t\t<div class=\"credits\">
\t\t\tDesigned by<a href=\"https://bootstrapmade.com/\">
\t\t\t\tBootstrapMade</a>
\t\t</div>
\t</div>
</div></footer><!-- End Footer --><!-- End Footer --><a class=\"scroll-top d-flex align-items-center justify-content-center\">
<i class=\"bi bi-arrow-up-short\"></i></a><div id=\"preloader\"></div>";
        // line 267
        $this->displayBlock('javascripts', $context, $blocks);
        // line 278
        echo "</body></html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 23
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 24
        echo "\t\t\t";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
\t\t\t<!-- Vendor CSS Files -->
\t\t\t<link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/aos/aos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"front/assets/vendor/remixicon/remixicon.css\" rel=\"stylesheet\">
\t\t\t<link
\t\t\thref=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\">
\t\t\t<!-- Template Main CSS File -->
\t\t\t<link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 155
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

    // line 267
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 268
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
<!-- Vendor JS Files -->
<script src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/aos/aos.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/isotope-layout/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

<!-- Template Main JS File -->
<script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/main.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  456 => 278,  450 => 275,  446 => 274,  442 => 273,  438 => 272,  434 => 271,  430 => 270,  425 => 268,  415 => 267,  397 => 155,  384 => 35,  376 => 30,  372 => 29,  368 => 28,  364 => 27,  360 => 26,  354 => 24,  344 => 23,  333 => 278,  331 => 267,  216 => 155,  209 => 150,  202 => 146,  196 => 143,  193 => 142,  185 => 136,  174 => 125,  164 => 118,  153 => 109,  151 => 108,  116 => 75,  110 => 73,  108 => 72,  72 => 38,  70 => 23,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

\t\t<title>Amena Bootstrap Template - Contact</title>
\t\t<meta content=\"\" name=\"description\">
\t\t<meta
\t\tcontent=\"\" name=\"keywords\">

\t\t<!-- Favicons -->
\t\t<link href=\"front/assets/img/favicon.png\" rel=\"icon\">
\t\t<link
\t\thref=\"front/assets/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

\t\t<!-- Google Fonts -->
\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\" rel=\"stylesheet\">


\t\t{% block stylesheets %}
\t\t\t{{ encore_entry_link_tags('app') }}
\t\t\t<!-- Vendor CSS Files -->
\t\t\t<link href=\"{{asset('front/assets/vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{asset('front/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{asset('front/assets/vendor/aos/aos.css')}}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{asset('front/assets/vendor/glightbox/css/glightbox.min.css')}}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{asset('front/assets/vendor/swiper/swiper-bundle.min.css')}}\" rel=\"stylesheet\">
\t\t\t<link href=\"front/assets/vendor/remixicon/remixicon.css\" rel=\"stylesheet\">
\t\t\t<link
\t\t\thref=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\">
\t\t\t<!-- Template Main CSS File -->
\t\t\t<link href=\"{{asset('front/assets/css/main.css')}}\" rel=\"stylesheet\">

\t\t{% endblock %}


\t</head>
\t<body>
\t\t<!-- ======= Header ======= -->
\t\t<header id=\"header\" class=\"header d-flex align-items-center fixed-top\" style=\"margin-bottom:8%;background: rgba(27, 47, 69, 0.9);padding: 15px;\">
\t\t\t<div class=\"container-fluid container-xl d-flex align-items-center justify-content-between\">

\t\t\t\t<a href=\"index.html\" class=\"logo d-flex align-items-center\">
\t\t\t\t\t<!-- Uncomment the line below if you also wish to use an image logo -->
\t\t\t\t\t<!-- <img src=\"front/assets/img/logo.png\" alt=\"\"> -->
\t\t\t\t\t\t<h1 class=\"d-flex align-items-center\"> Amena</h1>
\t\t\t\t</a>

\t\t\t\t<i class=\"mobile-nav-toggle mobile-nav-show bi bi-list\"></i>
\t\t\t\t<i class=\"mobile-nav-toggle mobile-nav-hide d-none bi bi-x\"></i>

\t\t\t\t<nav id=\"navbar\" class=\"navbar\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"/web/index.html\">Home</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"/web/about.html\">About</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"/annonces/\">Annonces</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"/web/blog\">Blog</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t\t\t<a href='{{ path('app_admin_index') }}'>Espace Admin ?</a>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t<span>Gestion</span>
\t\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down dropdown-indicator\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a>Gestion Colis</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t\t\t<span>Gestion Vehicules</span>
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down dropdown-indicator\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a>Deep Dropdown 1</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a>Deep Dropdown 2</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a>Deep Dropdown 3</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a>Deep Dropdown 4</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a>Deep Dropdown 5</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a>Gestion Annonces</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a>Gestion Gamification</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t\t\t<span>Account</span>
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down dropdown-indicator\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul>


\t\t\t\t\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_user_show') }}\">

\t\t\t\t\t\t\t\t\t\t\t\tProfil</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_user_edit', {'id': app.user.id }) }}\">

\t\t\t\t\t\t\t\t\t\tSettings
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"/logout/\" class=\"active\">logout</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{# <li>
\t\t\t\t\t\t\t\t\t<a>Deep Dropdown 5</a>
\t\t\t\t\t\t\t\t</li> #}
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li></li>
\t\t\t\t\t\t<li></li>

\t\t\t\t\t{% else %}
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href='{{ path('app_login') }}'>login</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{ path('app_user_new') }}\">Register</a>

\t\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}
\t\t\t\t</ul>
\t\t\t</ul>
\t\t</nav>
\t\t<!-- .navbar -->
\t</body>
</html></div></header><!-- End Header --><main id=\"main\"> {% block body %}{% endblock %}</main><!-- End #main --><!-- ======= Footer ======= --><footer id=\"footer\" class=\"footer\" style=\"margin-top:38%\">

<div class=\"footer-content\">
\t<div class=\"container\">
\t\t<div class=\"row gy-4\">
\t\t\t<div class=\"col-lg-5 col-md-12 footer-info\">
\t\t\t\t<a href=\"index.html\" class=\"logo d-flex align-items-center\">
\t\t\t\t\t<span>Amena</span>
\t\t\t\t</a>
\t\t\t\t<p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
\t\t\t\t<div class=\"social-links d-flex  mt-3\">
\t\t\t\t\t<a class=\"twitter\">
\t\t\t\t\t\t<i class=\"bi bi-twitter\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"facebook\">
\t\t\t\t\t\t<i class=\"bi bi-facebook\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"instagram\">
\t\t\t\t\t\t<i class=\"bi bi-instagram\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"linkedin\">
\t\t\t\t\t\t<i class=\"bi bi-linkedin\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-2 col-6 footer-links\">
\t\t\t\t<h4>Useful Links</h4>
\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t<a>Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t<a>About us</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t<a>Services</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t<a>Terms of service</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t<a>Privacy policy</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>

\t\t\t<div class=\"col-lg-2 col-6 footer-links\">
\t\t\t\t<h4>Our Services</h4>
\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t<a>Web Design</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t<a>Web Development</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t<a>Product Management</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t<a>Marketing</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t<a>Graphic Design</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>

\t\t\t<div class=\"col-lg-3 col-md-12 footer-contact text-center text-md-start\">
\t\t\t\t<h4>Contact Us</h4>
\t\t\t\t<p>
\t\t\t\t\tA108 Adam Street
\t\t\t\t\t<br>
\t\t\t\t\tNew York, NY 535022<br>
\t\t\t\t\tUnited States
\t\t\t\t\t<br><br>
\t\t\t\t\t<strong>Phone:</strong>
\t\t\t\t\t+1 5589 55488 55<br>
\t\t\t\t\t<strong>Email:</strong>
\t\t\t\t\tinfo@example.com<br>
\t\t\t\t</p>

\t\t\t</div>

\t\t</div>
\t</div>
</div>

<div class=\"footer-legal\">
\t<div class=\"container\">
\t\t<div class=\"copyright\">
\t\t\t&copy; Copyright
\t\t\t<strong>
\t\t\t\t<span>Amena</span>
\t\t\t</strong>. All Rights Reserved
\t\t</div>
\t\t<div class=\"credits\">
\t\t\tDesigned by<a href=\"https://bootstrapmade.com/\">
\t\t\t\tBootstrapMade</a>
\t\t</div>
\t</div>
</div></footer><!-- End Footer --><!-- End Footer --><a class=\"scroll-top d-flex align-items-center justify-content-center\">
<i class=\"bi bi-arrow-up-short\"></i></a><div id=\"preloader\"></div>{% block javascripts %}
{{ encore_entry_script_tags('app') }}
<!-- Vendor JS Files -->
<script src=\"{{asset('front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
<script src=\"{{asset('front/assets/vendor/aos/aos.js')}}\"></script>
<script src=\"{{asset('front/assets/vendor/glightbox/js/glightbox.min.js')}}\"></script>
<script src=\"{{asset('front/assets/vendor/swiper/swiper-bundle.min.js')}}\"></script>
<script src=\"{{asset('front/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}\"></script>
<script src=\"{{asset('front/assets/vendor/php-email-form/validate.js')}}\"></script>

<!-- Template Main JS File -->
<script src=\"{{asset('front/assets/js/main.js')}}\"></script>{% endblock %}</body></html>
", "base.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\base.html.twig");
    }
}
