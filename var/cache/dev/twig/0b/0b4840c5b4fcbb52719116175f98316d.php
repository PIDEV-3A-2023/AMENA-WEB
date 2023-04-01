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
class __TwigTemplate_d37d1c3621cb1b31c9f974580366ac09 extends Template
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

\t\t<title>Nova Bootstrap Template - Contact</title>
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
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\" rel=\"stylesheet\">


\t\t<!-- =======================================================
\t\t\t\t\t\t  * Template Name: Nova
\t\t\t\t\t\t  * Updated: Mar 10 2023 with Bootstrap v5.2.3
\t\t\t\t\t\t  * Template URL: https://bootstrapmade.com/nova-bootstrap-business-template/
\t\t\t\t\t\t  * Author: BootstrapMade.com
\t\t\t\t\t\t  * License: https://bootstrapmade.com/license/
\t\t\t\t\t\t  ======================================================== -->
\t\t";
        // line 31
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 46
        echo "

\t</head>
\t<body>
    <!-- ======= Header ======= -->
  <header id=\"header\" class=\"header d-flex align-items-center fixed-top\">
    <div class=\"container-fluid container-xl d-flex align-items-center justify-content-between\">

      <a href=\"index.html\" class=\"logo d-flex align-items-center\">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src=\"front/assets/img/logo.png\" alt=\"\"> -->
        <h1 class=\"d-flex align-items-center\">Nova</h1>
      </a>

      <i class=\"mobile-nav-toggle mobile-nav-show bi bi-list\"></i>
      <i class=\"mobile-nav-toggle mobile-nav-hide d-none bi bi-x\"></i>

      <nav id=\"navbar\" class=\"navbar\">
        <ul>
          <li><a href=\"index.html\">Home</a></li>
          <li><a href=\"about.html\">About</a></li>
          <li><a href=\"services.html\">Services</a></li>
          <li><a href=\"portfolio.html\">Portfolio</a></li>
          <li><a href=\"team.html\">Team</a></li>
          <li><a href=\"blog.html\">Blog</a></li>
          <li class=\"dropdown\"><a ><span>Dropdown</span> <i class=\"bi bi-chevron-down dropdown-indicator\"></i></a>
            <ul>
              <li><a >Dropdown 1</a></li>
              <li class=\"dropdown\"><a ><span>Deep Dropdown</span> <i class=\"bi bi-chevron-down dropdown-indicator\"></i></a>
                <ul>
                  <li><a >Deep Dropdown 1</a></li>
                  <li><a >Deep Dropdown 2</a></li>
                  <li><a >Deep Dropdown 3</a></li>
                  <li><a >Deep Dropdown 4</a></li>
                  <li><a >Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a >Dropdown 2</a></li>
              <li><a >Dropdown 3</a></li>
              <li><a >Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href=\"contact.html\" class=\"active\">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Breadcrumbs ======= -->
    <div class=\"breadcrumbs d-flex align-items-center\" style=\"background-image: url('assets/img/contact-header.jpg');\">
      <div class=\"container position-relative d-flex flex-column align-items-center\">

        <h2>Contact</h2>
        <ol>
          <li><a href=\"index.html\">Home</a></li>
          <li>Contact</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->
   <main id=\"main\">
\t\t";
        // line 108
        $this->displayBlock('body', $context, $blocks);
        // line 109
        echo "        </main><!-- End #main -->
\t\t<!-- ======= Footer ======= -->
\t\t<footer id=\"footer\" class=\"footer\">

\t\t\t<div class=\"footer-content\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row gy-4\">
\t\t\t\t\t\t<div class=\"col-lg-5 col-md-12 footer-info\">
\t\t\t\t\t\t\t<a href=\"index.html\" class=\"logo d-flex align-items-center\">
\t\t\t\t\t\t\t\t<span>Nova</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
\t\t\t\t\t\t\t<div class=\"social-links d-flex  mt-3\">
\t\t\t\t\t\t\t\t<a  class=\"twitter\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-twitter\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a  class=\"facebook\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-facebook\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a  class=\"instagram\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-instagram\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a  class=\"linkedin\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-linkedin\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-lg-2 col-6 footer-links\">
\t\t\t\t\t\t\t<h4>Useful Links</h4>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t<a >Home</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t<a >About us</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t<a >Services</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t<a >Terms of service</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t<a >Privacy policy</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-lg-2 col-6 footer-links\">
\t\t\t\t\t\t\t<h4>Our Services</h4>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t<a >Web Design</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t<a >Web Development</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t<a >Product Management</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t<a >Marketing</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t<a >Graphic Design</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-lg-3 col-md-12 footer-contact text-center text-md-start\">
\t\t\t\t\t\t\t<h4>Contact Us</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tA108 Adam Street
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\tNew York, NY 535022<br>
\t\t\t\t\t\t\t\tUnited States
\t\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t\t<strong>Phone:</strong>
\t\t\t\t\t\t\t\t+1 5589 55488 55<br>
\t\t\t\t\t\t\t\t<strong>Email:</strong>
\t\t\t\t\t\t\t\tinfo@example.com<br>
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"footer-legal\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t\t&copy; Copyright
\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t<span>Nova</span>
\t\t\t\t\t\t</strong>. All Rights Reserved
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"credits\">
\t\t\t\t\t\t<!-- All the links in the footer should remain intact. -->
\t\t\t\t\t\t<!-- You can delete the links only if you purchased the pro version. -->
\t\t\t\t\t\t<!-- Licensing information: https://bootstrapmade.com/license/ -->
\t\t\t\t\t\t<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nova-bootstrap-business-template/ -->
\t\t\t\t\t\tDesigned by<a href=\"https://bootstrapmade.com/\"> BootstrapMade</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer><!-- End Footer -->
\t\t<!-- End Footer -->

\t\t<a  class=\"scroll-top d-flex align-items-center justify-content-center\">
\t\t\t<i class=\"bi bi-arrow-up-short\"></i>
\t\t</a>

\t\t<div id=\"preloader\"></div>
\t\t";
        // line 234
        $this->displayBlock('javascripts', $context, $blocks);
        // line 248
        echo "\t</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 31
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 32
        echo "\t\t\t";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
\t\t\t<!-- Vendor CSS Files -->
\t\t\t<link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/aos/aos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link
\t\t\thref=\"front/assets/vendor/remixicon/remixicon.css\" rel=\"stylesheet\">

\t\t\t<!-- Template Main CSS File -->
\t\t\t<link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 108
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

    // line 234
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 235
        echo "\t\t\t";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
\t\t\t<!-- Vendor JS Files -->
\t\t\t<script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/aos/aos.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/isotope-layout/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

\t\t\t<!-- Template Main JS File -->
\t\t\t<script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/main.js"), "html", null, true);
        echo "\"></script>

\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  400 => 245,  394 => 242,  390 => 241,  386 => 240,  382 => 239,  378 => 238,  374 => 237,  368 => 235,  358 => 234,  340 => 108,  327 => 43,  319 => 38,  315 => 37,  311 => 36,  307 => 35,  303 => 34,  297 => 32,  287 => 31,  275 => 248,  273 => 234,  146 => 109,  144 => 108,  80 => 46,  78 => 31,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

\t\t<title>Nova Bootstrap Template - Contact</title>
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
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\" rel=\"stylesheet\">


\t\t<!-- =======================================================
\t\t\t\t\t\t  * Template Name: Nova
\t\t\t\t\t\t  * Updated: Mar 10 2023 with Bootstrap v5.2.3
\t\t\t\t\t\t  * Template URL: https://bootstrapmade.com/nova-bootstrap-business-template/
\t\t\t\t\t\t  * Author: BootstrapMade.com
\t\t\t\t\t\t  * License: https://bootstrapmade.com/license/
\t\t\t\t\t\t  ======================================================== -->
\t\t{% block stylesheets %}
\t\t\t{{ encore_entry_link_tags('app') }}
\t\t\t<!-- Vendor CSS Files -->
\t\t\t<link href=\"{{asset('front/assets/vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{asset('front/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{asset('front/assets/vendor/aos/aos.css')}}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{asset('front/assets/vendor/glightbox/css/glightbox.min.css')}}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{asset('front/assets/vendor/swiper/swiper-bundle.min.css')}}\" rel=\"stylesheet\">
\t\t\t<link
\t\t\thref=\"front/assets/vendor/remixicon/remixicon.css\" rel=\"stylesheet\">

\t\t\t<!-- Template Main CSS File -->
\t\t\t<link href=\"{{asset('front/assets/css/main.css')}}\" rel=\"stylesheet\">

\t\t{% endblock %}


\t</head>
\t<body>
    <!-- ======= Header ======= -->
  <header id=\"header\" class=\"header d-flex align-items-center fixed-top\">
    <div class=\"container-fluid container-xl d-flex align-items-center justify-content-between\">

      <a href=\"index.html\" class=\"logo d-flex align-items-center\">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src=\"front/assets/img/logo.png\" alt=\"\"> -->
        <h1 class=\"d-flex align-items-center\">Nova</h1>
      </a>

      <i class=\"mobile-nav-toggle mobile-nav-show bi bi-list\"></i>
      <i class=\"mobile-nav-toggle mobile-nav-hide d-none bi bi-x\"></i>

      <nav id=\"navbar\" class=\"navbar\">
        <ul>
          <li><a href=\"index.html\">Home</a></li>
          <li><a href=\"about.html\">About</a></li>
          <li><a href=\"services.html\">Services</a></li>
          <li><a href=\"portfolio.html\">Portfolio</a></li>
          <li><a href=\"team.html\">Team</a></li>
          <li><a href=\"blog.html\">Blog</a></li>
          <li class=\"dropdown\"><a ><span>Dropdown</span> <i class=\"bi bi-chevron-down dropdown-indicator\"></i></a>
            <ul>
              <li><a >Dropdown 1</a></li>
              <li class=\"dropdown\"><a ><span>Deep Dropdown</span> <i class=\"bi bi-chevron-down dropdown-indicator\"></i></a>
                <ul>
                  <li><a >Deep Dropdown 1</a></li>
                  <li><a >Deep Dropdown 2</a></li>
                  <li><a >Deep Dropdown 3</a></li>
                  <li><a >Deep Dropdown 4</a></li>
                  <li><a >Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a >Dropdown 2</a></li>
              <li><a >Dropdown 3</a></li>
              <li><a >Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href=\"contact.html\" class=\"active\">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Breadcrumbs ======= -->
    <div class=\"breadcrumbs d-flex align-items-center\" style=\"background-image: url('assets/img/contact-header.jpg');\">
      <div class=\"container position-relative d-flex flex-column align-items-center\">

        <h2>Contact</h2>
        <ol>
          <li><a href=\"index.html\">Home</a></li>
          <li>Contact</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->
   <main id=\"main\">
\t\t{% block body %}{% endblock %}
        </main><!-- End #main -->
\t\t<!-- ======= Footer ======= -->
\t\t<footer id=\"footer\" class=\"footer\">

\t\t\t<div class=\"footer-content\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row gy-4\">
\t\t\t\t\t\t<div class=\"col-lg-5 col-md-12 footer-info\">
\t\t\t\t\t\t\t<a href=\"index.html\" class=\"logo d-flex align-items-center\">
\t\t\t\t\t\t\t\t<span>Nova</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
\t\t\t\t\t\t\t<div class=\"social-links d-flex  mt-3\">
\t\t\t\t\t\t\t\t<a  class=\"twitter\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-twitter\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a  class=\"facebook\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-facebook\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a  class=\"instagram\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-instagram\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a  class=\"linkedin\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-linkedin\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-lg-2 col-6 footer-links\">
\t\t\t\t\t\t\t<h4>Useful Links</h4>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t<a >Home</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t<a >About us</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t<a >Services</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t<a >Terms of service</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t<a >Privacy policy</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-lg-2 col-6 footer-links\">
\t\t\t\t\t\t\t<h4>Our Services</h4>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t<a >Web Design</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t<a >Web Development</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t<a >Product Management</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t<a >Marketing</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t<a >Graphic Design</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-lg-3 col-md-12 footer-contact text-center text-md-start\">
\t\t\t\t\t\t\t<h4>Contact Us</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tA108 Adam Street
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\tNew York, NY 535022<br>
\t\t\t\t\t\t\t\tUnited States
\t\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t\t<strong>Phone:</strong>
\t\t\t\t\t\t\t\t+1 5589 55488 55<br>
\t\t\t\t\t\t\t\t<strong>Email:</strong>
\t\t\t\t\t\t\t\tinfo@example.com<br>
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"footer-legal\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t\t&copy; Copyright
\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t<span>Nova</span>
\t\t\t\t\t\t</strong>. All Rights Reserved
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"credits\">
\t\t\t\t\t\t<!-- All the links in the footer should remain intact. -->
\t\t\t\t\t\t<!-- You can delete the links only if you purchased the pro version. -->
\t\t\t\t\t\t<!-- Licensing information: https://bootstrapmade.com/license/ -->
\t\t\t\t\t\t<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nova-bootstrap-business-template/ -->
\t\t\t\t\t\tDesigned by<a href=\"https://bootstrapmade.com/\"> BootstrapMade</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer><!-- End Footer -->
\t\t<!-- End Footer -->

\t\t<a  class=\"scroll-top d-flex align-items-center justify-content-center\">
\t\t\t<i class=\"bi bi-arrow-up-short\"></i>
\t\t</a>

\t\t<div id=\"preloader\"></div>
\t\t{% block javascripts %}
\t\t\t{{ encore_entry_script_tags('app') }}
\t\t\t<!-- Vendor JS Files -->
\t\t\t<script src=\"{{asset('front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('front/assets/vendor/aos/aos.js')}}\"></script>
\t\t\t<script src=\"{{asset('front/assets/vendor/glightbox/js/glightbox.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('front/assets/vendor/swiper/swiper-bundle.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('front/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('front/assets/vendor/php-email-form/validate.js')}}\"></script>

\t\t\t<!-- Template Main JS File -->
\t\t\t<script src=\"{{asset('front/assets/js/main.js')}}\"></script>

\t\t{% endblock %}
\t</body>
</html>
", "base.html.twig", "C:\\Users\\aymen\\Desktop\\digidreamers\\digidreamers\\templates\\base.html.twig");
    }
}
