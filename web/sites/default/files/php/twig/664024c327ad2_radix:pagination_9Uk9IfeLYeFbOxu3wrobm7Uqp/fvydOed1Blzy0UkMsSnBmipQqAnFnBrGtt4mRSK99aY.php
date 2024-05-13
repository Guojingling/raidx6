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

/* radix:pagination */
class __TwigTemplate_985095e7f475d0b97a76607daddb6ad9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'pagination_previous' => [$this, 'block_pagination_previous'],
            'pagination_next' => [$this, 'block_pagination_next'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("sdc/radix--pagination"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->addAdditionalContext($context, "radix:pagination"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->validateProps($context, "radix:pagination"));
        // line 13
        ob_start(function () { return ''; });
        // line 14
        echo "
";
        // line 16
        $context["pagination_classes"] = twig_array_merge(["pagination-wrapper"], ((        // line 18
($context["pagination_utility_classes"] ?? null)) ?: ([])));
        // line 20
        echo "
";
        // line 21
        $context["pagination_attributes"] = ((($context["attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
        // line 22
        echo "
";
        // line 24
        $context["alignment_classes"] = ["end" => "justify-content-end", "center" => "justify-content-center", "vertical" => "flex-column", "start" => ""];
        // line 31
        echo "
";
        // line 32
        $context["alignment"] = (((twig_get_attribute($this->env, $this->source, ($context["alignment_classes"] ?? null), ($context["alignment"] ?? null), [], "array", true, true, true, 32) &&  !(null === (($__internal_compile_0 = ($context["alignment_classes"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["alignment"] ?? null)] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["alignment_classes"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["alignment"] ?? null)] ?? null) : null)) : (""));
        // line 33
        $context["show_last"] = (($context["show_last"]) ?? (true));
        // line 34
        $context["show_first"] = (($context["show_first"]) ?? (true));
        // line 35
        $context["show_ellipsis"] = (($context["show_ellipsis"]) ?? (true));
        // line 36
        echo "
";
        // line 37
        if (($context["items"] ?? null)) {
            // line 38
            echo "  <nav ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["pagination_attributes"] ?? null), "addClass", [($context["pagination_classes"] ?? null)], "method", false, false, true, 38), 38, $this->source), "html", null, true);
            echo " role=\"navigation\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            echo "\">
    <ul
      class=\"pagination pager__items js-pager__items d-flex flex-wrap ";
            // line 40
            ((($context["size"] ?? null)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ("pagination-" . ($context["size"] ?? null)), "html", null, true))) : (print ("")));
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["alignment"] ?? null), 40, $this->source), "html", null, true);
            echo "\">
      ";
            // line 42
            echo "      ";
            if ((twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 42) && ($context["show_first"] ?? null))) {
                // line 43
                echo "        <li class=\"page-item pager__item pager__item--first\">
          <a href=\"";
                // line 44
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 44), "href", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to first page"));
                echo "\" ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 44), "attributes", [], "any", false, false, true, 44), 44, $this->source), "href", "title"), "html", null, true);
                echo " class=\"page-link\">
            <span class=\"visually-hidden\">";
                // line 45
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("First page"));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 46
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, true, true, 46), "text", [], "any", true, true, true, 46)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, true, true, 46), "text", [], "any", false, false, true, 46), 46, $this->source), t("« First"))) : (t("« First"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 50
            echo "
      ";
            // line 52
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 52)) {
                // line 53
                echo "        <li class=\"page-item pager__item pager__item--previous\">
          ";
                // line 54
                $this->displayBlock('pagination_previous', $context, $blocks);
                // line 60
                echo "        </li>
      ";
            }
            // line 62
            echo "
      ";
            // line 64
            echo "      ";
            if ((twig_get_attribute($this->env, $this->source, ($context["ellipses"] ?? null), "previous", [], "any", false, false, true, 64) && ($context["show_ellipsis"] ?? null))) {
                // line 65
                echo "        <li class=\"page-item pager__item pager__item--ellipsis disabled\" role=\"presentation\">
          <span class=\"page-link\">&hellip;</span>
        </li>
      ";
            }
            // line 69
            echo "
      ";
            // line 71
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "pages", [], "any", false, false, true, 71));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 72
                echo "        <li class=\"page-item pager__item";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" is-active active") : ("")));
                echo "\">
          ";
                // line 73
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 74
                    echo "            ";
                    $context["title"] = t("Current page");
                    // line 75
                    echo "          ";
                } else {
                    // line 76
                    echo "            ";
                    $context["title"] = t("Go to page @key", ["@key" => $context["key"]]);
                    // line 77
                    echo "          ";
                }
                // line 78
                echo "          <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 78, $this->source), "html", null, true);
                echo "\" ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 78), 78, $this->source), "href", "title"), "html", null, true);
                echo " class=\"page-link\">
            <span class=\"visually-hidden\">
              ";
                // line 80
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (t("Current page")) : (t("Page"))));
                echo "
            </span>";
                // line 82
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 82, $this->source), "html", null, true);
                // line 83
                echo "</a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "
      ";
            // line 87
            if ((twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "current", [], "any", false, false, true, 87) && (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 87) || twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 87)))) {
                // line 88
                echo "        <li class=\"page-item disabled\">
          <span class=\"page-link\">
            ";
                // line 90
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (t("Page") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "current", [], "any", false, false, true, 90), 90, $this->source)), "html", null, true);
                echo "
          </span>
        </li>
      ";
            }
            // line 94
            echo "
      ";
            // line 96
            echo "      ";
            if ((twig_get_attribute($this->env, $this->source, ($context["ellipses"] ?? null), "next", [], "any", false, false, true, 96) && ($context["show_ellipsis"] ?? null))) {
                // line 97
                echo "        <li class=\"page-item pager__item pager__item--ellipsis disabled\" role=\"presentation\">
          <span class=\"page-link\">&hellip;</span>
        </li>
      ";
            }
            // line 101
            echo "
      ";
            // line 103
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 103)) {
                // line 104
                echo "        <li class=\"page-item pager__item pager__item--next\">
          ";
                // line 105
                $this->displayBlock('pagination_next', $context, $blocks);
                // line 111
                echo "        </li>
      ";
            }
            // line 113
            echo "
      ";
            // line 115
            echo "      ";
            if ((twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 115) && ($context["show_last"] ?? null))) {
                // line 116
                echo "        <li class=\"page-item pager__item pager__item--last\">
          <a href=\"";
                // line 117
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 117), "href", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to last page"));
                echo "\" ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 117), "attributes", [], "any", false, false, true, 117), 117, $this->source), "href", "title"), "html", null, true);
                echo " class=\"page-link\">
            <span class=\"visually-hidden\">";
                // line 118
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last page"));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 119
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, true, true, 119), "text", [], "any", true, true, true, 119)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, true, true, 119), "text", [], "any", false, false, true, 119), 119, $this->source), t("Last »"))) : (t("Last »"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 123
            echo "    </ul>
  </nav>
";
        }
        // line 126
        echo "
";
        $___internal_parse_2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_2_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["pagination_utility_classes", "attributes", "items", "size", "ellipses", "current"]);    }

    // line 54
    public function block_pagination_previous($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "            <a href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 55), "href", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
        echo "\" rel=\"prev\" ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 55), "attributes", [], "any", false, false, true, 55), 55, $this->source), "href", "title", "rel"), "html", null, true);
        echo " class=\"page-link\">
              <span class=\"visually-hidden\">";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous page"));
        echo "</span>
              <span aria-hidden=\"true\">";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 57), "text", [], "any", true, true, true, 57)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 57), "text", [], "any", false, false, true, 57), 57, $this->source), t("‹ Previous"))) : (t("‹ Previous"))), "html", null, true);
        echo "</span>
            </a>
          ";
    }

    // line 105
    public function block_pagination_next($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 106
        echo "            <a href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 106), "href", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
        echo "\" rel=\"next\" ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 106), "attributes", [], "any", false, false, true, 106), 106, $this->source), "href", "title", "rel"), "html", null, true);
        echo " class=\"page-link\">
              <span class=\"visually-hidden\">";
        // line 107
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next page"));
        echo "</span>
              <span aria-hidden=\"true\">";
        // line 108
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 108), "text", [], "any", true, true, true, 108)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 108), "text", [], "any", false, false, true, 108), 108, $this->source), t("Next ›"))) : (t("Next ›"))), "html", null, true);
        echo "</span>
            </a>
          ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "radix:pagination";
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
        return array (  322 => 108,  318 => 107,  309 => 106,  305 => 105,  298 => 57,  294 => 56,  285 => 55,  281 => 54,  276 => 13,  272 => 126,  267 => 123,  260 => 119,  256 => 118,  248 => 117,  245 => 116,  242 => 115,  239 => 113,  235 => 111,  233 => 105,  230 => 104,  227 => 103,  224 => 101,  218 => 97,  215 => 96,  212 => 94,  205 => 90,  201 => 88,  199 => 87,  196 => 86,  188 => 83,  186 => 82,  182 => 80,  172 => 78,  169 => 77,  166 => 76,  163 => 75,  160 => 74,  158 => 73,  153 => 72,  148 => 71,  145 => 69,  139 => 65,  136 => 64,  133 => 62,  129 => 60,  127 => 54,  124 => 53,  121 => 52,  118 => 50,  111 => 46,  107 => 45,  99 => 44,  96 => 43,  93 => 42,  87 => 40,  79 => 38,  77 => 37,  74 => 36,  72 => 35,  70 => 34,  68 => 33,  66 => 32,  63 => 31,  61 => 24,  58 => 22,  56 => 21,  53 => 20,  51 => 18,  50 => 16,  47 => 14,  45 => 13,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "radix:pagination", "themes/contrib/radix/components/pagination/pagination.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 13, "set" => 16, "if" => 37, "block" => 54, "for" => 71);
        static $filters = array("merge" => 18, "escape" => 38, "t" => 38, "without" => 44, "default" => 46, "spaceless" => 13);
        static $functions = array("create_attribute" => 21);

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'set', 'if', 'block', 'for'],
                ['merge', 'escape', 't', 'without', 'default', 'spaceless'],
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
