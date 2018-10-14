<?php

/* {# inline_template_start #}<div class="rs-background-video-layer"
data-ytid="{{ field_mt_bg_video_youtube }}"
data-videoattributes="version=3&amp;enablejsapi=1&amp;html5=1&amp;hd=1&amp;wmode=opaque&amp;showinfo=0&amp;ref=0;"
data-videorate="1"
data-videoloop="loop"
data-videowidth="100%"
data-videoheight="100%"
data-videocontrols="none"
data-aspectratio="16:9"
data-autoplay="true"
data-autoplayonlyfirsttime="false"
data-nextslideatend="true"
data-forcerewind="on"
data-volume="{{ field_mt_bg_video_volume }}">
</div> */
class __TwigTemplate_88ad33c6eef9c5b126bed68c479c6e57c882d69e81cd7dc68f606d895fbb809d extends Twig_Template
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

        // line 1
        echo "<div class=\"rs-background-video-layer\"
data-ytid=\"";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_mt_bg_video_youtube"] ?? null), "html", null, true));
        echo "\"
data-videoattributes=\"version=3&amp;enablejsapi=1&amp;html5=1&amp;hd=1&amp;wmode=opaque&amp;showinfo=0&amp;ref=0;\"
data-videorate=\"1\"
data-videoloop=\"loop\"
data-videowidth=\"100%\"
data-videoheight=\"100%\"
data-videocontrols=\"none\"
data-aspectratio=\"16:9\"
data-autoplay=\"true\"
data-autoplayonlyfirsttime=\"false\"
data-nextslideatend=\"true\"
data-forcerewind=\"on\"
data-volume=\"";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_mt_bg_video_volume"] ?? null), "html", null, true));
        echo "\">
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"rs-background-video-layer\"
data-ytid=\"{{ field_mt_bg_video_youtube }}\"
data-videoattributes=\"version=3&amp;enablejsapi=1&amp;html5=1&amp;hd=1&amp;wmode=opaque&amp;showinfo=0&amp;ref=0;\"
data-videorate=\"1\"
data-videoloop=\"loop\"
data-videowidth=\"100%\"
data-videoheight=\"100%\"
data-videocontrols=\"none\"
data-aspectratio=\"16:9\"
data-autoplay=\"true\"
data-autoplayonlyfirsttime=\"false\"
data-nextslideatend=\"true\"
data-forcerewind=\"on\"
data-volume=\"{{ field_mt_bg_video_volume }}\">
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 14,  60 => 2,  57 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"rs-background-video-layer\"
data-ytid=\"{{ field_mt_bg_video_youtube }}\"
data-videoattributes=\"version=3&amp;enablejsapi=1&amp;html5=1&amp;hd=1&amp;wmode=opaque&amp;showinfo=0&amp;ref=0;\"
data-videorate=\"1\"
data-videoloop=\"loop\"
data-videowidth=\"100%\"
data-videoheight=\"100%\"
data-videocontrols=\"none\"
data-aspectratio=\"16:9\"
data-autoplay=\"true\"
data-autoplayonlyfirsttime=\"false\"
data-nextslideatend=\"true\"
data-forcerewind=\"on\"
data-volume=\"{{ field_mt_bg_video_volume }}\">
</div>", "");
    }
}
