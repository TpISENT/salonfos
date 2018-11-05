<?php

/* modules/juicerio/templates/juicer-feed.html.twig */
class __TwigTemplate_8803a6441160790e1538903f21ab965f60de42be2c9baa44f6d9841809e4cd71 extends Twig_Template
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
        $tags = array("if" => 10);
        $filters = array();
        $functions = array("attach_library" => 9);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
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

        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("juicerio/juicer.juicerio"), "html", null, true));
        echo "
<ul class=\"juicer-feed\" ";
        // line 10
        if (($context["feed_id"] ?? null)) {
            echo "data-feed-id=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["feed_id"] ?? null), "html", null, true));
            echo "\"";
        }
        echo " ";
        if (($context["post_num"] ?? null)) {
            echo "data-per=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["post_num"] ?? null), "html", null, true));
            echo "\"";
        }
        echo " ";
        if (($context["infinite_pages"] ?? null)) {
            echo "data-pages=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["infinite_pages"] ?? null), "html", null, true));
            echo "\"";
        }
        echo " ";
        if (($context["gutter_amt"] ?? null)) {
            echo "data-gutter=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["gutter_amt"] ?? null), "html", null, true));
            echo "\"";
        }
        echo " ";
        if (($context["column_num"] ?? null)) {
            echo "data-columns=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["column_num"] ?? null), "html", null, true));
            echo "\"";
        }
        echo " ";
        if (($context["filters"] ?? null)) {
            echo "data-filter=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["filters"] ?? null), "html", null, true));
            echo "\"";
        }
        echo "></ul>";
    }

    public function getTemplateName()
    {
        return "modules/juicerio/templates/juicer-feed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  43 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/juicerio/templates/juicer-feed.html.twig", "/var/www/vhosts/salonfos.com/httpdocs/web/modules/juicerio/templates/juicer-feed.html.twig");
    }
}
