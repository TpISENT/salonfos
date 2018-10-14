<?php

/* themes/custom/magazineplus/templates/views-view-field--mt_slideshow_boxed_width--nothing.html.twig */
class __TwigTemplate_857564d1255c27f903faa3c31bff3e9ccd3f9030da71d79db1c9ba7fde734b86 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
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

        // line 22
        echo "<div class=\"tp-caption transparent-background\"
  data-x=\"left\"
  data-y=\"top\"
  data-start=\"0\"
  data-basealign=\"slide\"
  data-width=\"full\"
  data-height=\"full\">
</div>

";
        // line 32
        echo "<div class=\"tp-caption\"
  data-x=\"[left,left,left,left]\"
  data-y=\"[bottom,bottom,bottom,bottom]\"
  data-hoffset=\"[50,50,50,20]\"
  data-voffset=\"[50,50,50,20]\"
  data-fontweight=\"400\"
  data-whitespace=\"normal\"
  data-basealign=\"slide\"
  data-start=\"1200\"
  data-width=\"[570,570,570,400]\"
  data-transform_idle=\"o:1\"
  data-transform_in=\"y:[-100%];sX:1;sY:1;o:0;s:1000;e:Power4.easeInOut;\"
  data-transform_out=\"y:[100%];o:0;s:1000;e:Power2.easeInOut;\">
    ";
        // line 45
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["output"] ?? null), "html", null, true));
        // line 46
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/magazineplus/templates/views-view-field--mt_slideshow_boxed_width--nothing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 46,  69 => 45,  54 => 32,  43 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/magazineplus/templates/views-view-field--mt_slideshow_boxed_width--nothing.html.twig", "/var/www/vhosts/salonefos.ihub.com.sl/httpdocs/web/themes/custom/magazineplus/templates/views-view-field--mt_slideshow_boxed_width--nothing.html.twig");
    }
}
