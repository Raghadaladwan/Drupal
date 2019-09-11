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

/* themes/estore/templates/system/page.html.twig */
class __TwigTemplate_8fc6153df236b9ed67b64855466e3c115df1daa3b82b40a19e8aef1c2d0135da extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 54, "if" => 57, "block" => 58];
        $filters = ["clean_class" => 63, "escape" => 73, "t" => 149];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape', 't'],
                []
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
        // line 54
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "fluid_container", [])) ? ("container-fluid") : ("container"));
        // line 55
        echo "
";
        // line 57
        if (($this->getAttribute(($context["page"] ?? null), "navigation", []) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", []))) {
            // line 58
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 170
        echo "
";
        // line 172
        $this->displayBlock('main', $context, $blocks);
        // line 242
        echo "

";
        // line 244
        $this->displayBlock('footer', $context, $blocks);
    }

    // line 58
    public function block_navbar($context, array $blocks = [])
    {
        // line 59
        echo "    ";
        // line 60
        $context["navbar_classes"] = [0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 62
($context["theme"] ?? null), "settings", []), "navbar_inverse", [])) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 63
($context["theme"] ?? null), "settings", []), "navbar_position", [])) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "navbar_position", []))))) : (""))];
        // line 66
        echo "    <div class=\"top-header-wrapper clearfix\">
      <div class=\"container-fluid\">
        <div class=\"left-top-header\">
          ";
        // line 69
        if ($this->getAttribute(($context["top_header"] ?? null), "header_email", [])) {
            // line 70
            echo "            <div class=\"site-email\">
              <i class=\"fa fa-envelope\"></i>

              ";
            // line 73
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["top_header"] ?? null), "header_email", [])), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 76
        echo "
          ";
        // line 77
        if ($this->getAttribute(($context["top_header"] ?? null), "header_phone", [])) {
            // line 78
            echo "            <div class=\"site-phone\">
              <i class=\"fa fa-phone\"></i>

              ";
            // line 81
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["top_header"] ?? null), "header_phone", [])), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 84
        echo "
          ";
        // line 85
        if ($this->getAttribute(($context["top_header"] ?? null), "header_location", [])) {
            // line 86
            echo "            <div class=\"site-map-marker\">
              <i class=\"fa fa-map-marker\"></i>

              ";
            // line 89
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["top_header"] ?? null), "header_location", [])), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 92
        echo "
          ";
        // line 93
        if ($this->getAttribute(($context["top_header"] ?? null), "header_shop_opens", [])) {
            // line 94
            echo "            <div class=\"site-clock-o\">
              <i class=\"fa fa-clock-o\"></i>

              ";
            // line 97
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["top_header"] ?? null), "header_shop_opens", [])), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 100
        echo "        </div>

        <div class=\"right-top-header\">
          ";
        // line 103
        if ($this->getAttribute(($context["page"] ?? null), "top_header_right", [])) {
            // line 104
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_header_right", [])), "html", null, true);
            echo "
          ";
        }
        // line 106
        echo "        </div>
      </div>
    </div>

    <div class=\"middle-header-wrapper clearfix\">
      <div class=\"container-fluid\">
        <div class=\"col-md-3\">
          ";
        // line 113
        if ($this->getAttribute(($context["page"] ?? null), "left_middle_header", [])) {
            // line 114
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "left_middle_header", [])), "html", null, true);
            echo "
          ";
        }
        // line 116
        echo "        </div>

        <div class=\"col-md-6 text-center hidden-sm hidden-xs\">
          ";
        // line 119
        if ($this->getAttribute(($context["page"] ?? null), "middle_header", [])) {
            // line 120
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "middle_header", [])), "html", null, true);
            echo "
          ";
        }
        // line 122
        echo "        </div>

        <div class=\"col-md-3\">
          ";
        // line 125
        if ($this->getAttribute(($context["page"] ?? null), "right_middle_header", [])) {
            // line 126
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "right_middle_header", [])), "html", null, true);
            echo "
          ";
        }
        // line 128
        echo "        </div>
      </div>
    </div>

    <header id=\"navbar\" role=\"banner\"
      ";
        // line 133
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method")), "html", null, true);
        echo ">

      ";
        // line 135
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method")) {
            // line 136
            echo "        <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo "\">
      ";
        }
        // line 138
        echo "
      <div class=\"navbar-header\">
        ";
        // line 140
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
        echo "

        ";
        // line 143
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 144
            echo "          <button type=\"button\"
                  class=\"navbar-toggle\"
                  data-toggle=\"collapse\"
                  data-target=\"#navbar-collapse\">

            <span class=\"sr-only\">";
            // line 149
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation"));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 155
        echo "      </div>

      ";
        // line 158
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 159
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 160
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 163
        echo "
      ";
        // line 164
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method")) {
            // line 165
            echo "        </div>
      ";
        }
        // line 167
        echo "    </header>
  ";
    }

    // line 172
    public function block_main($context, array $blocks = [])
    {
        // line 173
        echo "  ";
        // line 174
        echo "  ";
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 175
            echo "    ";
            $this->displayBlock('header', $context, $blocks);
            // line 184
            echo "  ";
        }
        // line 185
        echo "
  <div role=\"main\"
       class=\"main-container ";
        // line 187
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo " js-quickedit-main-content\">

    <div class=\"main-container-inner\">
      ";
        // line 191
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 192
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 197
            echo "      ";
        }
        // line 198
        echo "
      ";
        // line 200
        echo "      ";
        // line 201
        $context["content_classes"] = [0 => ((($this->getAttribute(        // line 202
($context["page"] ?? null), "sidebar_first", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 203
($context["page"] ?? null), "sidebar_first", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 204
($context["page"] ?? null), "sidebar_second", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 205
($context["page"] ?? null), "sidebar_first", [])) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-12") : (""))];
        // line 208
        echo "      <section";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method")), "html", null, true);
        echo ">

        ";
        // line 211
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 212
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 215
            echo "        ";
        }
        // line 216
        echo "
        ";
        // line 218
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 219
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 222
            echo "        ";
        }
        // line 223
        echo "
        ";
        // line 225
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 229
        echo "      </section>

      ";
        // line 232
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 233
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 238
            echo "      ";
        }
        // line 239
        echo "    </div>
  </div>
";
    }

    // line 175
    public function block_header($context, array $blocks = [])
    {
        // line 176
        echo "      <div class=\"header-region clearfix\" role=\"heading\">
        <div class=\"container-fluid\">
          <div class=\"header-inner text-center\">
            ";
        // line 179
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
          </div>
        </div>
      </div>
    ";
    }

    // line 192
    public function block_sidebar_first($context, array $blocks = [])
    {
        // line 193
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 194
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 212
    public function block_highlighted($context, array $blocks = [])
    {
        // line 213
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "</div>
          ";
    }

    // line 219
    public function block_help($context, array $blocks = [])
    {
        // line 220
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
          ";
    }

    // line 225
    public function block_content($context, array $blocks = [])
    {
        // line 226
        echo "          <a id=\"main-content\"></a>
          ";
        // line 227
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
        ";
    }

    // line 233
    public function block_sidebar_second($context, array $blocks = [])
    {
        // line 234
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 235
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 244
    public function block_footer($context, array $blocks = [])
    {
        // line 245
        echo "  <footer class=\"footer\" role=\"contentinfo\">
    <div class=\"footer-top clearfix\">
      <div class=\"container-fluid\">
        ";
        // line 248
        if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
            // line 249
            echo "          <div class=\"footer-first col-sm-6 col-md-3\">
            ";
            // line 250
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 253
        echo "
        ";
        // line 254
        if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
            // line 255
            echo "          <div class=\"footer-second col-sm-6 col-md-3\">
            ";
            // line 256
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 259
        echo "
        ";
        // line 260
        if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
            // line 261
            echo "          <div class=\"footer-third col-sm-6 col-md-3\">
            ";
            // line 262
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 265
        echo "
        ";
        // line 266
        if ($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])) {
            // line 267
            echo "          <div class=\"footer-fourth col-sm-6 col-md-3\">
            ";
            // line 268
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 271
        echo "      </div>
    </div>

    <div class=\"footer-bottom clearfix\">
      <div class=\"container-fluid\">
        <div class=\"footer-bottom-left\">
          ";
        // line 277
        if (($context["copyright_text"] ?? null)) {
            // line 278
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["copyright_text"] ?? null)), "html", null, true);
            echo "
          ";
        }
        // line 280
        echo "
          ";
        // line 281
        if ($this->getAttribute(($context["page"] ?? null), "footer_bottom_left", [])) {
            // line 282
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_bottom_left", [])), "html", null, true);
            echo "
          ";
        }
        // line 284
        echo "        </div>
        <div class=\"footer-bottom-right\">
          ";
        // line 286
        if (($context["theme_credits"] ?? null)) {
            // line 287
            echo "            <div class=\"theme-credits\">
              ";
            // line 288
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_credits"] ?? null)), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 291
        echo "
          ";
        // line 292
        if ($this->getAttribute(($context["page"] ?? null), "footer_bottom_right", [])) {
            // line 293
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_bottom_right", [])), "html", null, true);
            echo "
          ";
        }
        // line 295
        echo "        </div>
      </div>
    </div>
  </footer>
";
    }

    public function getTemplateName()
    {
        return "themes/estore/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  582 => 295,  576 => 293,  574 => 292,  571 => 291,  565 => 288,  562 => 287,  560 => 286,  556 => 284,  550 => 282,  548 => 281,  545 => 280,  539 => 278,  537 => 277,  529 => 271,  523 => 268,  520 => 267,  518 => 266,  515 => 265,  509 => 262,  506 => 261,  504 => 260,  501 => 259,  495 => 256,  492 => 255,  490 => 254,  487 => 253,  481 => 250,  478 => 249,  476 => 248,  471 => 245,  468 => 244,  461 => 235,  458 => 234,  455 => 233,  449 => 227,  446 => 226,  443 => 225,  436 => 220,  433 => 219,  426 => 213,  423 => 212,  416 => 194,  413 => 193,  410 => 192,  401 => 179,  396 => 176,  393 => 175,  387 => 239,  384 => 238,  381 => 233,  378 => 232,  374 => 229,  371 => 225,  368 => 223,  365 => 222,  362 => 219,  359 => 218,  356 => 216,  353 => 215,  350 => 212,  347 => 211,  341 => 208,  339 => 205,  338 => 204,  337 => 203,  336 => 202,  335 => 201,  333 => 200,  330 => 198,  327 => 197,  324 => 192,  321 => 191,  315 => 187,  311 => 185,  308 => 184,  305 => 175,  302 => 174,  300 => 173,  297 => 172,  292 => 167,  288 => 165,  286 => 164,  283 => 163,  277 => 160,  274 => 159,  271 => 158,  267 => 155,  258 => 149,  251 => 144,  248 => 143,  243 => 140,  239 => 138,  233 => 136,  231 => 135,  226 => 133,  219 => 128,  213 => 126,  211 => 125,  206 => 122,  200 => 120,  198 => 119,  193 => 116,  187 => 114,  185 => 113,  176 => 106,  170 => 104,  168 => 103,  163 => 100,  157 => 97,  152 => 94,  150 => 93,  147 => 92,  141 => 89,  136 => 86,  134 => 85,  131 => 84,  125 => 81,  120 => 78,  118 => 77,  115 => 76,  109 => 73,  104 => 70,  102 => 69,  97 => 66,  95 => 63,  94 => 62,  93 => 60,  91 => 59,  88 => 58,  84 => 244,  80 => 242,  78 => 172,  75 => 170,  71 => 58,  69 => 57,  66 => 55,  64 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/estore/templates/system/page.html.twig", "/var/www/html/Drupal/themes/estore/templates/system/page.html.twig");
    }
}
