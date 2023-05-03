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

/* annonces/indexfront.html.twig */
class __TwigTemplate_367124f697937dd07d930c3b31aeb6c1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonces/indexfront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonces/indexfront.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "annonces/indexfront.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/cc.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo " <div class=\"container\">
 <div class=\"row justify-content-center\">
   <div class=\"col-md-10\">
     <h1 class=\"text-center\">Liste des annonces</h1>
      <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_annonces_new");
        echo "\" class=\"btn btn-primary mb-3\">Ajouter une nouvelle annonce</a>    
      <table class=\"table\">
        <tbody>
          ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 16, $this->source); })()), 1));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 17
            echo "          <tr>
           ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["annonce"]);
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 19
                echo "           <td>
            <div class=\"card\" style=\"width: 100%;\">
               <div class=\"card-body\">
                <h5 class=\"card-title\">";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "Type", [], "any", false, false, false, 22), "html", null, true);
                echo "</h5>
                <ul class=\"list-unstyled\">
               <li><strong>Ville de départ :</strong> ";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "villeDep", [], "any", false, false, false, 24), "html", null, true);
                echo "</li>
               <li><strong>Ville d'arrivée :</strong> ";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "villeArr", [], "any", false, false, false, 25), "html", null, true);
                echo "</li>
               <li><strong>Date de départ :</strong> ";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "DateDep", [], "any", false, false, false, 26), "html", null, true);
                echo "</li>
                <li><strong>Date d'arrivée :</strong> ";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "DateArr", [], "any", false, false, false, 27), "html", null, true);
                echo "</li>
               <li><strong>Description :</strong> ";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "description", [], "any", false, false, false, 28), "html", null, true);
                echo "</li>
               </ul>
             <div class=\"float-right btn-group btn-group-sm\">
              <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_annonces_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 31)]), "html", null, true);
                echo "\" class=\"btn btn-primary tooltips\" data-placement=\"top\" data-toggle=\"tooltip\" data-original-title=\"Modifier\"><i class=\"fa fa-pencil\"></i></a>
              <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_annonces_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 32)]), "html", null, true);
                echo "\" class=\"btn btn-secondary tooltips\" data-placement=\"top\" data-toggle=\"tooltip\" data-original-title=\"Supprimer\"><i class=\"fa fa-times\"></i></a>
            </div>
          </div>
        </div>
      </td>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "  </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
       </tbody>
      </table>
      
      <div class=\"pagination\">
    ";
        // line 45
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 45, $this->source); })()));
        echo "
</div>

     </div>
     </div>
     </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "annonces/indexfront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 45,  173 => 40,  166 => 38,  154 => 32,  150 => 31,  144 => 28,  140 => 27,  136 => 26,  132 => 25,  128 => 24,  123 => 22,  118 => 19,  114 => 18,  111 => 17,  107 => 16,  101 => 13,  95 => 9,  85 => 8,  73 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
{{ parent() }}
<link href=\"{{ asset('front/assets/css/cc.css') }}\" rel=\"stylesheet\">
{% endblock %}

{% block body %}
 <div class=\"container\">
 <div class=\"row justify-content-center\">
   <div class=\"col-md-10\">
     <h1 class=\"text-center\">Liste des annonces</h1>
      <a href=\"{{ path('app_annonces_new') }}\" class=\"btn btn-primary mb-3\">Ajouter une nouvelle annonce</a>    
      <table class=\"table\">
        <tbody>
          {% for annonce in annonces|batch(1) %}
          <tr>
           {% for a in annonce %}
           <td>
            <div class=\"card\" style=\"width: 100%;\">
               <div class=\"card-body\">
                <h5 class=\"card-title\">{{ a.Type }}</h5>
                <ul class=\"list-unstyled\">
               <li><strong>Ville de départ :</strong> {{ a.villeDep }}</li>
               <li><strong>Ville d'arrivée :</strong> {{ a.villeArr }}</li>
               <li><strong>Date de départ :</strong> {{ a.DateDep }}</li>
                <li><strong>Date d'arrivée :</strong> {{ a.DateArr }}</li>
               <li><strong>Description :</strong> {{ a.description }}</li>
               </ul>
             <div class=\"float-right btn-group btn-group-sm\">
              <a href=\"{{ path('app_annonces_edit', {'id': a.id}) }}\" class=\"btn btn-primary tooltips\" data-placement=\"top\" data-toggle=\"tooltip\" data-original-title=\"Modifier\"><i class=\"fa fa-pencil\"></i></a>
              <a href=\"{{ path('app_annonces_delete', {'id': a.id}) }}\" class=\"btn btn-secondary tooltips\" data-placement=\"top\" data-toggle=\"tooltip\" data-original-title=\"Supprimer\"><i class=\"fa fa-times\"></i></a>
            </div>
          </div>
        </div>
      </td>
    {% endfor %}
  </tr>
{% endfor %}

       </tbody>
      </table>
      
      <div class=\"pagination\">
    {{ knp_pagination_render(annonces) }}
</div>

     </div>
     </div>
     </div>
{% endblock %}", "annonces/indexfront.html.twig", "C:\\Users\\aymen\\Desktop\\prositsym\\digidreamers\\templates\\annonces\\indexfront.html.twig");
    }
}
