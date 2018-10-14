<?php

/* {# inline_template_start #}<div class="views-field-field-image">
<div class="overlay-container">
<span class="overlay overlay--colored">
<a class="overlay-target-link" href="{{ path }}"></a>
<span class="overlay-inner">
<a class="overlay-title overlay-animated overlay-fade-top" href="{{ path }}">{{ title }}</a>
<span class="overlay-icons-list overlay-animated overlay-fade-bottom">
<ul class="icons-list">
{{ field_mt_facebook_account }}
{{ field_mt_twitter_account }}
{{ field_mt_youtube_account }}
<li>{{ field_mt_user }}</li>
</ul>
</span>
<a class="overlay-link overlay-animated overlay-fade-bottom" href="{{ path }}">Read More</a>
</span>
</span>
{{ field_mt_member_photo }}
</div>
</div> */
class __TwigTemplate_e1145af9858d09eaf498dd2a22da7990fbea3b3a3b0df363206cf8af5800f9eb extends Twig_Template
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
        echo "<div class=\"views-field-field-image\">
<div class=\"overlay-container\">
<span class=\"overlay overlay--colored\">
<a class=\"overlay-target-link\" href=\"";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["path"] ?? null), "html", null, true));
        echo "\"></a>
<span class=\"overlay-inner\">
<a class=\"overlay-title overlay-animated overlay-fade-top\" href=\"";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["path"] ?? null), "html", null, true));
        echo "\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</a>
<span class=\"overlay-icons-list overlay-animated overlay-fade-bottom\">
<ul class=\"icons-list\">
";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_mt_facebook_account"] ?? null), "html", null, true));
        echo "
";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_mt_twitter_account"] ?? null), "html", null, true));
        echo "
";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_mt_youtube_account"] ?? null), "html", null, true));
        echo "
<li>";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_mt_user"] ?? null), "html", null, true));
        echo "</li>
</ul>
</span>
<a class=\"overlay-link overlay-animated overlay-fade-bottom\" href=\"";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["path"] ?? null), "html", null, true));
        echo "\">Read More</a>
</span>
</span>
";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_mt_member_photo"] ?? null), "html", null, true));
        echo "
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"views-field-field-image\">
<div class=\"overlay-container\">
<span class=\"overlay overlay--colored\">
<a class=\"overlay-target-link\" href=\"{{ path }}\"></a>
<span class=\"overlay-inner\">
<a class=\"overlay-title overlay-animated overlay-fade-top\" href=\"{{ path }}\">{{ title }}</a>
<span class=\"overlay-icons-list overlay-animated overlay-fade-bottom\">
<ul class=\"icons-list\">
{{ field_mt_facebook_account }}
{{ field_mt_twitter_account }}
{{ field_mt_youtube_account }}
<li>{{ field_mt_user }}</li>
</ul>
</span>
<a class=\"overlay-link overlay-animated overlay-fade-bottom\" href=\"{{ path }}\">Read More</a>
</span>
</span>
{{ field_mt_member_photo }}
</div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 18,  98 => 15,  92 => 12,  88 => 11,  84 => 10,  80 => 9,  72 => 6,  67 => 4,  62 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"views-field-field-image\">
<div class=\"overlay-container\">
<span class=\"overlay overlay--colored\">
<a class=\"overlay-target-link\" href=\"{{ path }}\"></a>
<span class=\"overlay-inner\">
<a class=\"overlay-title overlay-animated overlay-fade-top\" href=\"{{ path }}\">{{ title }}</a>
<span class=\"overlay-icons-list overlay-animated overlay-fade-bottom\">
<ul class=\"icons-list\">
{{ field_mt_facebook_account }}
{{ field_mt_twitter_account }}
{{ field_mt_youtube_account }}
<li>{{ field_mt_user }}</li>
</ul>
</span>
<a class=\"overlay-link overlay-animated overlay-fade-bottom\" href=\"{{ path }}\">Read More</a>
</span>
</span>
{{ field_mt_member_photo }}
</div>
</div>", "");
    }
}
