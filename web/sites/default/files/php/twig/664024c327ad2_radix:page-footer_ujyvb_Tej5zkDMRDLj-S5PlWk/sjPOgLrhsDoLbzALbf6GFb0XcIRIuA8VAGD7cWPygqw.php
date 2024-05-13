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

/* radix:page-footer */
class __TwigTemplate_512bdc4eadfb393d2139951b4cd363ba extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_inner_footer' => [$this, 'block_page_inner_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("sdc/radix--page-footer"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->addAdditionalContext($context, "radix:page-footer"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->validateProps($context, "radix:page-footer"));
        // line 7
        ob_start(function () { return ''; });
        // line 8
        echo "
";
        // line 9
        $context["footer_attributes"] = ((($context["footer_attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
        // line 11
        $context["footer_classes"] = twig_array_merge(["page__footer"], ((        // line 13
($context["footer_utility_classes"] ?? null)) ?: ([])));
        // line 15
        echo "
";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 16)) {
            // line 17
            echo "  <footer ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["footer_attributes"] ?? null), "addClass", [($context["footer_classes"] ?? null)], "method", false, false, true, 17), 17, $this->source), "html", null, true);
            echo ">
    <div class=\"container\">
      <div class=\"d-flex flex-wrap justify-content-md-between align-items-md-center\">
        ";
            // line 20
            $this->displayBlock('page_inner_footer', $context, $blocks);
            // line 23
            echo "      </div>
    </div>
  </footer>
";
        }
        // line 27
        echo "
";
        $___internal_parse_12_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_12_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["footer_utility_classes", "page"]);    }

    // line 20
    public function block_page_inner_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "          ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo "
        ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "radix:page-footer";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  87 => 21,  83 => 20,  78 => 7,  74 => 27,  68 => 23,  66 => 20,  59 => 17,  57 => 16,  54 => 15,  52 => 13,  51 => 11,  49 => 9,  46 => 8,  44 => 7,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "radix:page-footer", "themes/contrib/radix/components/page-footer/page-footer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 7, "set" => 9, "if" => 16, "block" => 20);
        static $filters = array("merge" => 13, "escape" => 17, "spaceless" => 7);
        static $functions = array("create_attribute" => 9);

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'set', 'if', 'block'],
                ['merge', 'escape', 'spaceless'],
                ['create_attribute']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
