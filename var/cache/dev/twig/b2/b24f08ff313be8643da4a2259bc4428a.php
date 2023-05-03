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

/* ReclamationsType.php */
class __TwigTemplate_16d4c148d98a096fcadf86f12833e00b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ReclamationsType.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ReclamationsType.php"));

        // line 1
        echo "<?php

namespace App\\Form;

use App\\Entity\\Reclamations;
use Symfony\\Component\\DomCrawler\\Field\\TextareaFormField;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Validator\\Constraints\\DateTime;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType;
use Symfony\\Component\\Validator\\Constraints\\Choice;
use Symfony\\Component\\Validator\\Constraints\\GreaterThan;
use Symfony\\Component\\Validator\\Constraints\\Length;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;
use Symfony\\Component\\Validator\\Constraints\\NotNull;



class ReclamationsType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        
          
        \$builder
        
        ->add('objet')
        ->add('description')
        ->add('idC')
        ->add('Enregistrer', SubmitType::class);
        ;
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults([
            'data_class' => Reclamations::class,
        ]);
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "ReclamationsType.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace App\\Form;

use App\\Entity\\Reclamations;
use Symfony\\Component\\DomCrawler\\Field\\TextareaFormField;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Validator\\Constraints\\DateTime;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType;
use Symfony\\Component\\Validator\\Constraints\\Choice;
use Symfony\\Component\\Validator\\Constraints\\GreaterThan;
use Symfony\\Component\\Validator\\Constraints\\Length;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;
use Symfony\\Component\\Validator\\Constraints\\NotNull;



class ReclamationsType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        
          
        \$builder
        
        ->add('objet')
        ->add('description')
        ->add('idC')
        ->add('Enregistrer', SubmitType::class);
        ;
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults([
            'data_class' => Reclamations::class,
        ]);
    }
}
", "ReclamationsType.php", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\ReclamationsType.php");
    }
}
