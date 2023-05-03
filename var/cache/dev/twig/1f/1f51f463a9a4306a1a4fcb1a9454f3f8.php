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
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"/logout/\" class=\"active\">logout</a>

\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        } else {
            // line 114
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href='";
            // line 115
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "'>login</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 118
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
            echo "\">Register</a>

\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 122
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t\t<!-- .navbar -->

\t\t\t</div>
\t\t</header>
\t\t<!-- End Header -->


\t\t<main id=\"main\"> ";
        // line 132
        $this->displayBlock('body', $context, $blocks);
        // line 133
        echo "\t\t\t</main>
\t\t\t<!-- End #main -->
\t\t\t<!-- ======= Footer ======= -->
\t\t\t<footer id=\"footer\" class=\"footer\" style=\"margin-top:38%\">

\t\t\t\t<div class=\"footer-content\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row gy-4\">
\t\t\t\t\t\t\t<div class=\"col-lg-5 col-md-12 footer-info\">
\t\t\t\t\t\t\t\t<a href=\"index.html\" class=\"logo d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<span>Amena</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
\t\t\t\t\t\t\t\t<div class=\"social-links d-flex  mt-3\">
\t\t\t\t\t\t\t\t\t<a class=\"twitter\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-twitter\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"facebook\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-facebook\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"instagram\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-instagram\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"linkedin\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-linkedin\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-lg-2 col-6 footer-links\">
\t\t\t\t\t\t\t\t<h4>Useful Links</h4>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t\t<a>Home</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t\t<a>About us</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t\t<a>Services</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t\t<a>Terms of service</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t\t<a>Privacy policy</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-lg-2 col-6 footer-links\">
\t\t\t\t\t\t\t\t<h4>Our Services</h4>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t\t<a>Web Design</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t\t<a>Web Development</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t\t<a>Product Management</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t\t<a>Marketing</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t\t<a>Graphic Design</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-12 footer-contact text-center text-md-start\">
\t\t\t\t\t\t\t\t<h4>Contact Us</h4>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tA108 Adam Street
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\tNew York, NY 535022<br>
\t\t\t\t\t\t\t\t\tUnited States
\t\t\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t\t\t<strong>Phone:</strong>
\t\t\t\t\t\t\t\t\t+1 5589 55488 55<br>
\t\t\t\t\t\t\t\t\t<strong>Email:</strong>
\t\t\t\t\t\t\t\t\tinfo@example.com<br>
\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

<<<<<<< HEAD
\t\t\t<div class=\"footer-legal\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t\t&copy; Copyright
\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t<span>Amena</span>
\t\t\t\t\t\t</strong>. All Rights Reserved
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"credits\">
\t\t\t\t\t\t<!-- All the links in the footer should remain intact. -->
\t\t\t\t\t\t<!-- You can delete the links only if you purchased the pro version. -->
\t\t\t\t\t\t<!-- Licensing information: https://bootstrapmade.com/license/ -->
\t\t\t\t\t\t<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nova-bootstrap-business-template/ -->
\t\t\t\t\t\tDesigned by<a href=\"https://bootstrapmade.com/\"> BootstrapMade</a>
=======
\t\t\t\t<div class=\"footer-legal\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t\t\t&copy; Copyright
\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t<span>Amena</span>
\t\t\t\t\t\t\t</strong>. All Rights Reserved
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"credits\">
\t\t\t\t\t\t\tDesigned by<a href=\"https://bootstrapmade.com/\">
\t\t\t\t\t\t\t\tBootstrapMade</a>
\t\t\t\t\t\t</div>
>>>>>>> 1b9c83bb09edfda666f414a2ec8b0b82973f62fa
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</footer>
\t\t\t<!-- End Footer -->
\t\t\t<!-- End Footer -->

\t\t\t<a class=\"scroll-top d-flex align-items-center justify-content-center\">
\t\t\t\t<i class=\"bi bi-arrow-up-short\"></i>
\t\t\t</a>

\t\t\t<div id=\"preloader\"></div>
\t\t\t";
        // line 257
        $this->displayBlock('javascripts', $context, $blocks);
        // line 271
        echo "\t\t</body>
\t</html>
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

    // line 132
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

    // line 257
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 258
        echo "\t\t\t\t";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
\t\t\t\t<!-- Vendor JS Files -->
\t\t\t\t<script src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/aos/aos.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/isotope-layout/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

\t\t\t\t<!-- Template Main JS File -->
\t\t\t\t<script src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/main.js"), "html", null, true);
        echo "\"></script>

\t\t\t";
        
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
        return array (  443 => 268,  437 => 265,  433 => 264,  429 => 263,  425 => 262,  421 => 261,  417 => 260,  411 => 258,  401 => 257,  383 => 132,  370 => 35,  362 => 30,  358 => 29,  354 => 28,  350 => 27,  346 => 26,  340 => 24,  330 => 23,  318 => 271,  316 => 257,  190 => 133,  188 => 132,  176 => 122,  169 => 118,  163 => 115,  160 => 114,  153 => 109,  151 => 108,  116 => 75,  110 => 73,  108 => 72,  72 => 38,  70 => 23,  46 => 1,);
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
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"/logout/\" class=\"active\">logout</a>

\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href='{{ path('app_login') }}'>login</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_user_new') }}\">Register</a>

\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t\t<!-- .navbar -->

\t\t\t</div>
\t\t</header>
\t\t<!-- End Header -->


\t\t<main id=\"main\"> {% block body %}{% endblock %}
\t\t\t</main>
\t\t\t<!-- End #main -->
\t\t\t<!-- ======= Footer ======= -->
\t\t\t<footer id=\"footer\" class=\"footer\" style=\"margin-top:38%\">

\t\t\t\t<div class=\"footer-content\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row gy-4\">
\t\t\t\t\t\t\t<div class=\"col-lg-5 col-md-12 footer-info\">
\t\t\t\t\t\t\t\t<a href=\"index.html\" class=\"logo d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<span>Amena</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
\t\t\t\t\t\t\t\t<div class=\"social-links d-flex  mt-3\">
\t\t\t\t\t\t\t\t\t<a class=\"twitter\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-twitter\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"facebook\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-facebook\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"instagram\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-instagram\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"linkedin\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-linkedin\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-lg-2 col-6 footer-links\">
\t\t\t\t\t\t\t\t<h4>Useful Links</h4>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t\t<a>Home</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t\t<a>About us</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t\t<a>Services</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t\t<a>Terms of service</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t\t<a>Privacy policy</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-lg-2 col-6 footer-links\">
\t\t\t\t\t\t\t\t<h4>Our Services</h4>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t\t<a>Web Design</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t\t<a>Web Development</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t\t<a>Product Management</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t\t<a>Marketing</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t\t<a>Graphic Design</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-12 footer-contact text-center text-md-start\">
\t\t\t\t\t\t\t\t<h4>Contact Us</h4>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tA108 Adam Street
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\tNew York, NY 535022<br>
\t\t\t\t\t\t\t\t\tUnited States
\t\t\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t\t\t<strong>Phone:</strong>
\t\t\t\t\t\t\t\t\t+1 5589 55488 55<br>
\t\t\t\t\t\t\t\t\t<strong>Email:</strong>
\t\t\t\t\t\t\t\t\tinfo@example.com<br>
\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

<<<<<<< HEAD
\t\t\t<div class=\"footer-legal\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t\t&copy; Copyright
\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t<span>Amena</span>
\t\t\t\t\t\t</strong>. All Rights Reserved
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"credits\">
\t\t\t\t\t\t<!-- All the links in the footer should remain intact. -->
\t\t\t\t\t\t<!-- You can delete the links only if you purchased the pro version. -->
\t\t\t\t\t\t<!-- Licensing information: https://bootstrapmade.com/license/ -->
\t\t\t\t\t\t<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nova-bootstrap-business-template/ -->
\t\t\t\t\t\tDesigned by<a href=\"https://bootstrapmade.com/\"> BootstrapMade</a>
=======
\t\t\t\t<div class=\"footer-legal\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t\t\t&copy; Copyright
\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t<span>Amena</span>
\t\t\t\t\t\t\t</strong>. All Rights Reserved
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"credits\">
\t\t\t\t\t\t\tDesigned by<a href=\"https://bootstrapmade.com/\">
\t\t\t\t\t\t\t\tBootstrapMade</a>
\t\t\t\t\t\t</div>
>>>>>>> 1b9c83bb09edfda666f414a2ec8b0b82973f62fa
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</footer>
\t\t\t<!-- End Footer -->
\t\t\t<!-- End Footer -->

\t\t\t<a class=\"scroll-top d-flex align-items-center justify-content-center\">
\t\t\t\t<i class=\"bi bi-arrow-up-short\"></i>
\t\t\t</a>

\t\t\t<div id=\"preloader\"></div>
\t\t\t{% block javascripts %}
\t\t\t\t{{ encore_entry_script_tags('app') }}
\t\t\t\t<!-- Vendor JS Files -->
\t\t\t\t<script src=\"{{asset('front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
\t\t\t\t<script src=\"{{asset('front/assets/vendor/aos/aos.js')}}\"></script>
\t\t\t\t<script src=\"{{asset('front/assets/vendor/glightbox/js/glightbox.min.js')}}\"></script>
\t\t\t\t<script src=\"{{asset('front/assets/vendor/swiper/swiper-bundle.min.js')}}\"></script>
\t\t\t\t<script src=\"{{asset('front/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}\"></script>
\t\t\t\t<script src=\"{{asset('front/assets/vendor/php-email-form/validate.js')}}\"></script>

\t\t\t\t<!-- Template Main JS File -->
\t\t\t\t<script src=\"{{asset('front/assets/js/main.js')}}\"></script>

\t\t\t{% endblock %}
\t\t</body>
\t</html>
", "base.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\base.html.twig");
    }
}
