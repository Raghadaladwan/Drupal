<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/estore/templates/block/commerce-cart-block.html.twig */
class __TwigTemplate_2bcb77775c5979436e36ed54adc49c0c7e38c88863ac419c53e8aa8362b883a3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 2, "if" => 21];
        $filters = ["escape" => 9, "commerce_price_format" => 17, "t" => 31];
        $functions = ["url" => 10];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'commerce_price_format', 't'],
                ['url']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["classes"] = [0 => "block", 1 => "cart-block-wrapper", 2 => "has-dropdown", 3 => "clearfix"];
        // line 9
        echo "<div ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  <a href=\"";
        // line 10
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("commerce_cart.page"));
        echo "\" class=\"cart-icon\">
    <i class=\"fa fa-shopping-cart\"></i>
    <span class=\"cart-value\">";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["count"] ?? null)), "html", null, true);
        echo "</span>
  </a>

  <div class=\"my-cart-wrap\">
    <div class=\"my-cart\">Total</div>
    <div class=\"cart-total\">";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\commerce_price\TwigExtension\PriceTwigExtension')->formatPrice($this->sandbox->ensureToStringAllowed(($context["total"] ?? null))), "html", null, true);
        echo "</div>
  </div>

  <div class=\"cart-contents\">
    ";
        // line 21
        if (($context["content"] ?? null)) {
            // line 22
            echo "      <div class=\"cart-block-content\">
        ";
            // line 23
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
            echo "
      </div>

      <div class=\"cart-block-links\">
        ";
            // line 27
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["links"] ?? null)), "html", null, true);
            echo "
      </div>
    ";
        } else {
            // line 30
            echo "      <div class=\"cart-block-empty\">
        ";
            // line 31
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Cart is empty."));
            echo "
      </div>
    ";
        }
        // line 34
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/estore/templates/block/commerce-cart-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 34,  103 => 31,  100 => 30,  94 => 27,  87 => 23,  84 => 22,  82 => 21,  75 => 17,  67 => 12,  62 => 10,  57 => 9,  55 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/estore/templates/block/commerce-cart-block.html.twig", "/var/www/html/Drupal/themes/estore/templates/block/commerce-cart-block.html.twig");
    }
}
