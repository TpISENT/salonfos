<?php

/* themes/custom/magazineplus/templates/maintenance-page.html.twig */
class __TwigTemplate_b3243b36dece11ddb236fa40687a9f56c2dfcb05c7b2e4143bdb997856984a87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 30);
        $filters = array("t" => 32);
        $functions = array("attach_library" => 12, "path" => 32);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('t'),
                array('attach_library', 'path')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 11
        echo "
";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("magazineplus/maintenance-page"), "html", null, true));
        echo "

";
        // line 15
        echo "<div class=\"page-container\">

  ";
        // line 18
        echo "  <div class=\"header-container\">

    ";
        // line 21
        echo "    <div class=\"clearfix header-top region--dark-typography region--white-background\">
      <div class=\"container\">
        ";
        // line 24
        echo "        <div class=\"clearfix header-top__container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix header-top__section header-top-first\">
                <div class=\"site-branding\">
                  <div class=\"logo-and-site-name-wrapper clearfix\">
                    ";
        // line 30
        if (($context["logo"] ?? null)) {
            // line 31
            echo "                      <div class=\"logo\">
                        <a href=\"";
            // line 32
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>")));
            echo "\" title=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
            echo "\" rel=\"home\" class=\"site-branding__logo\">
                          <img src=\"";
            // line 33
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["logo"] ?? null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
            echo "\" />
                        </a>
                      </div>
                    ";
        }
        // line 37
        echo "                    ";
        if (($context["site_name"] ?? null)) {
            // line 38
            echo "                      <div class=\"site-name site-branding__name\">
                        <a href=\"";
            // line 39
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>")));
            echo "\" title=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
            echo "\" rel=\"home\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true));
            echo "</a>
                      </div>
                    ";
        }
        // line 42
        echo "                    ";
        if (($context["site_slogan"] ?? null)) {
            // line 43
            echo "                      <div class=\"site-slogan site-branding__slogan\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_slogan"] ?? null), "html", null, true));
            echo "</div>
                    ";
        }
        // line 45
        echo "                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        ";
        // line 52
        echo "      </div>
    </div>
    ";
        // line 55
        echo "
  </div>
  ";
        // line 58
        echo "
  <div class=\"system-messages\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
        // line 63
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "system_messages", array()), "html", null, true));
        echo "
        </div>
      </div>
    </div>
  </div>

  ";
        // line 70
        echo "  <div class=\"clearfix main-content region--dark-typography region--white-background\">
    <div class=\"container\">
      <div class=\"clearfix main-content__container\">
        <div class=\"row\">
          <section class=\"col-md-8\">
            ";
        // line 76
        echo "            <div class=\"clearfix main-content__section\">
              ";
        // line 77
        if (($context["title"] ?? null)) {
            // line 78
            echo "                <h1 class=\"title page-title\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "</h1>
              ";
        }
        // line 80
        echo "              ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
            </div>
            ";
        // line 83
        echo "          </section>
          <aside class=\"col-md-4\">
            ";
        // line 86
        echo "            <section class=\"sidebar__section sidebar-second clearfix\">
            </section>
            ";
        // line 89
        echo "          </aside>
        </div>
      </div>
    </div>
  </div>
  ";
        // line 95
        echo "
  ";
        // line 97
        echo "  <footer class=\"clearfix footer region--light-typography region--dark-background\">
    <div class=\"container\">
      <div class=\"clearfix footer__container\">
        <div class=\"row\">
          <div class=\"col-sm-4 col-lg-2\">
            ";
        // line 103
        echo "            <div class=\"clearfix footer__section footer-first\">
            </div>
            ";
        // line 106
        echo "          </div>
          <div class=\"col-sm-4 col-lg-2\">
            ";
        // line 109
        echo "            <div class=\"clearfix footer__section footer-second\">
            </div>
            ";
        // line 112
        echo "          </div>
          <div class=\"clearfix visible-xs-block\"></div>
          <div class=\"col-sm-4 col-lg-2\">
            ";
        // line 116
        echo "            <div class=\"clearfix footer__section footer-third\">
            </div>
            ";
        // line 119
        echo "          </div>
          <div class=\"clearfix visible-xs-block visible-sm-block visible-md-block\"></div>
          <div class=\"col-sm-6 col-lg-3\">
            ";
        // line 123
        echo "            <div class=\"clearfix footer__section footer-fourth\">
            </div>
            ";
        // line 126
        echo "          </div>
          <div class=\"col-sm-6 col-lg-3\">
            ";
        // line 129
        echo "            <div class=\"clearfix footer__section footer-fifth\">
            </div>
            ";
        // line 132
        echo "          </div>
        </div>
      </div>
    </div>
  </footer>
  ";
        // line 138
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/magazineplus/templates/maintenance-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 138,  235 => 132,  231 => 129,  227 => 126,  223 => 123,  218 => 119,  214 => 116,  209 => 112,  205 => 109,  201 => 106,  197 => 103,  190 => 97,  187 => 95,  180 => 89,  176 => 86,  172 => 83,  166 => 80,  160 => 78,  158 => 77,  155 => 76,  148 => 70,  139 => 63,  132 => 58,  128 => 55,  124 => 52,  116 => 45,  110 => 43,  107 => 42,  97 => 39,  94 => 38,  91 => 37,  82 => 33,  76 => 32,  73 => 31,  71 => 30,  63 => 24,  59 => 21,  55 => 18,  51 => 15,  46 => 12,  43 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/magazineplus/templates/maintenance-page.html.twig", "/var/www/vhosts/salonfos.com/httpdocs/web/themes/custom/magazineplus/templates/maintenance-page.html.twig");
    }
}
