<?php

/* themes/custom/magazineplus/templates/views-view-list--mt_internal_banner--block.html.twig */
class __TwigTemplate_1a82443325a239c42e54076a72c675c94904f01e414b10af1aa70f15b7308572 extends Twig_Template
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
        $tags = array("if" => 22, "for" => 30);
        $filters = array("length" => 22);
        $functions = array("attach_library" => 21);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for'),
                array('length'),
                array('attach_library')
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

        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("magazineplus/slider-revolution-internal-banner-init"), "html", null, true));
        echo "
<div id=\"slideshow-internal\" class=\"slideshow-internal slider-revolution-wrapper rev_slider_wrapper ";
        // line 22
        if ((twig_length_filter($this->env, ($context["rows"] ?? null)) <= 1)) {
            echo "one-slide";
        }
        echo "\" >
  <div";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "rev_slider"), "method"), "html", null, true));
        echo " data-version=\"5.4.8\">
  ";
        // line 24
        if (($context["title"] ?? null)) {
            // line 25
            echo "    <h3>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "</h3>
  ";
        }
        // line 27
        echo "
  <";
        // line 28
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["list"] ?? null), "type", array()), "html", null, true));
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["list"] ?? null), "attributes", array()), "html", null, true));
        echo ">

    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 31
            echo "      <li";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["row"], "attributes", array()), "html", null, true));
            echo " data-transition=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["mt_setting"] ?? null), "rs_slideshow_internal_effect", array()), "html", null, true));
            echo "\" data-slotamount=\"default\" data-masterspeed=\"default\" data-thumb=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["row"], "slide_thumbnail", array()), "html", null, true));
            echo "\" data-title=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["row"], "content", array()), "#row", array(), "array"), "node__field_mt_banner_image_field_mt_banner_image_title", array()), "html", null, true));
            echo "\">

        ";
            // line 33
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true));
            echo "

        ";
            // line 36
            echo "        <div class=\"tp-caption transparent-background\"
          data-x=\"left\"
          data-y=\"top\"
          data-start=\"0\"
          data-basealign=\"slide\"
          data-width=\"full\"
          data-height=\"full\">
        </div>

        ";
            // line 45
            if ($this->getAttribute($this->getAttribute($this->getAttribute($context["row"], "content", array()), "#row", array(), "array"), "node__field_mt_banner_image_field_mt_banner_image_title", array())) {
                // line 46
                echo "          <div class=\"tp-caption\"
            data-x=\"[left,left,left,left]\"
            data-y=\"[bottom,bottom,bottom,bottom]\"
            data-hoffset=\"[50,50,50,20]\"
            data-voffset=\"[50,50,50,20]\"
            data-fontweight=\"400\"
            data-whitespace=\"normal\"
            data-basealign=\"grid\"
            data-start=\"1200\"
            data-width=\"[570,570,570,400]\"
            data-transform_idle=\"o:1\"
            data-transform_in=\"y:[-100%];sX:1;sY:1;o:0;s:1000;e:Power4.easeInOut;\"
            data-transform_out=\"y:[100%];o:0;s:1000;e:Power2.easeInOut;\">
              <div class=\"tp-caption__title\">
                ";
                // line 60
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["row"], "content", array()), "#row", array(), "array"), "node__field_mt_banner_image_field_mt_banner_image_title", array()), "html", null, true));
                echo "
              </div>
          </div>
        ";
            }
            // line 64
            echo "
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "
  </";
        // line 68
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["list"] ?? null), "type", array()), "html", null, true));
        echo ">
  <div class=\"tp-bannertimer tp-bottom\"></div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/magazineplus/templates/views-view-list--mt_internal_banner--block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 68,  139 => 67,  131 => 64,  124 => 60,  108 => 46,  106 => 45,  95 => 36,  90 => 33,  78 => 31,  74 => 30,  68 => 28,  65 => 27,  59 => 25,  57 => 24,  53 => 23,  47 => 22,  43 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/magazineplus/templates/views-view-list--mt_internal_banner--block.html.twig", "/var/www/vhosts/salonfos.com/httpdocs/web/themes/custom/magazineplus/templates/views-view-list--mt_internal_banner--block.html.twig");
    }
}
