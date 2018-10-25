<?php

/* themes/custom/magazineplus/templates/field--field-mt-video-gallery-slides.html.twig */
class __TwigTemplate_955da0b1caf77130ec001b6e1b2d4383951e603e81cd5f00fdb1994c4d1a4400 extends Twig_Template
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
        $tags = array("set" => 41, "if" => 57, "for" => 62);
        $filters = array("clean_class" => 43);
        $functions = array("attach_library" => 55);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'for'),
                array('clean_class'),
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

        // line 41
        $context["classes"] = array(0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass(        // line 43
($context["field_name"] ?? null))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass(        // line 44
($context["field_type"] ?? null))), 3 => ("field--label-" .         // line 45
($context["label_display"] ?? null)), 4 => "fullwidthbanner-container");
        // line 50
        $context["title_classes"] = array(0 => "field__label", 1 => (((        // line 52
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : ("")));
        // line 55
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("magazineplus/slider-revolution-video-gallery-init"), "html", null, true));
        echo "
<div";
        // line 56
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  ";
        // line 57
        if ( !($context["label_hidden"] ?? null)) {
            // line 58
            echo "    <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => ($context["title_classes"] ?? null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</div>
  ";
        }
        // line 60
        echo "  <div class=\"slider-revolution-video-gallery rev_slider slider-revolution fullwidthabanner\" data-version=\"5.4.8\">
    <ul>
      ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 63
            echo "        <li data-transition=\"scaledownfrombottom\" data-slotamount=\"default\" data-thumb=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "thumbnail_thumb_styled_uri", array()), "html", null, true));
            echo "\" data-rotate=\"0\" data-fstransition=\"fade\" data-fsmasterspeed=\"1500\" data-fsslotamount=\"default\" data-saveperformance=\"off\" data-title=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "slide_title", array()), "html", null, true));
            echo "\">
          <img src=\"";
            // line 64
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "thumbnail_main_styled_uri", array()), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "thumbnail_alt", array()), "html", null, true));
            echo "\" data-bgposition=\"center center\" data-bgfit=\"100% 0%\" data-bgrepeat=\"no-repeat\" class=\"rev-slidebg\" data-no-retina>
          <div class=\"tp-caption tp-resizeme tp-videolayer\"
            data-x=\"center\"
            data-hoffset=\"\"
            data-y=\"center\"
            data-voffset=\"\"
            data-width=\"['auto']\"
            data-height=\"['auto']\"
            data-transform_idle=\"o:1;\"
            data-transform_in=\"opacity:0;s:300;e:Power2.easeInOut;\"
            data-transform_out=\"opacity:0;s:300;s:300;\"
            data-start=\"500\"
            data-responsive_offset=\"on\"
            ";
            // line 77
            if ($this->getAttribute($context["item"], "youtube_id", array())) {
                // line 78
                echo "              data-ytid=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "youtube_id", array()), "html", null, true));
                echo "\"
              data-videoattributes=\"version=3&amp;enablejsapi=1&amp;html5=1&amp;wmode=opaque&amp;showinfo=0&amp;ref=0;\"
            ";
            } elseif ($this->getAttribute(            // line 80
$context["item"], "vimeo_id", array())) {
                // line 81
                echo "              data-vimeoid=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "vimeo_id", array()), "html", null, true));
                echo "\"
              data-videoattributes=\"title=0&amp;byline=0&amp;portrait=0&amp;api=1\"
            ";
            }
            // line 84
            echo "            data-videorate=\"1\"
            data-videowidth=\"1170px\"
            data-videoheight=\"660px\"
            data-videocontrols=\"controls\"
            data-videoloop=\"none\"
            data-autoplay=\"on\"
            data-nextslideatend=\"true\"
            data-volume=\"";
            // line 91
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "volume", array()), "html", null, true));
            echo "\"
            data-forcerewind=\"on\"
            style=\"z-index: 5;\">
          </div>
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "    </ul>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/magazineplus/templates/field--field-mt-video-gallery-slides.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 97,  128 => 91,  119 => 84,  112 => 81,  110 => 80,  104 => 78,  102 => 77,  84 => 64,  77 => 63,  73 => 62,  69 => 60,  61 => 58,  59 => 57,  55 => 56,  51 => 55,  49 => 52,  48 => 50,  46 => 45,  45 => 44,  44 => 43,  43 => 41,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/magazineplus/templates/field--field-mt-video-gallery-slides.html.twig", "/var/www/vhosts/salonfos.com/httpdocs/web/themes/custom/magazineplus/templates/field--field-mt-video-gallery-slides.html.twig");
    }
}
