<?php

/* themes/custom/magazineplus/templates/node--mt_post--teaser.html.twig */
class __TwigTemplate_fa8205a2c0ae2e2bfd02a80d4fd5ba8736281658cce035061005d7748c30d101 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 65
        $this->parent = $this->loadTemplate("node.html.twig", "themes/custom/magazineplus/templates/node--mt_post--teaser.html.twig", 65);
        $this->blocks = array(
            'header_top' => array($this, 'block_header_top'),
            'meta_area' => array($this, 'block_meta_area'),
            'content' => array($this, 'block_content'),
            'content_bottom' => array($this, 'block_content_bottom'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "node.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 67, "trans" => 81);
        $filters = array("without" => 88);
        $functions = array("attach_library" => 87);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'trans'),
                array('without'),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 66
    public function block_header_top($context, array $blocks = array())
    {
        // line 67
        echo "  ";
        if ($this->getAttribute(($context["content"] ?? null), "field_image", array())) {
            // line 68
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_image", array()), "html", null, true));
            echo "
  ";
        }
    }

    // line 71
    public function block_meta_area($context, array $blocks = array())
    {
        // line 72
        echo "  ";
        if (($context["display_submitted"] ?? null)) {
            // line 73
            echo "    <div class=\"node__user-info\">
        ";
            // line 74
            if (($context["author_picture"] ?? null)) {
                // line 75
                echo "          <div class=\"user-picture\">
            <div";
                // line 76
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["author_attributes"] ?? null), "html", null, true));
                echo ">
              ";
                // line 77
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["author_picture"] ?? null), "html", null, true));
                echo "
            </div>
          </div>
        ";
            }
            // line 81
            echo "      <div class=\"node__user-name\">";
            echo t("<span>by </span>", array());
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["author_name"] ?? null), "html", null, true));
            echo "</div>
      ";
            // line 82
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["metadata"] ?? null), "html", null, true));
            echo "
    </div>
  ";
        }
    }

    // line 86
    public function block_content($context, array $blocks = array())
    {
        // line 87
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("magazineplus/node-post"), "html", null, true));
        echo "
  ";
        // line 88
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["content"] ?? null), "field_mt_post_category", "comment", "field_image", "links"), "html", null, true));
        echo "
";
    }

    // line 90
    public function block_content_bottom($context, array $blocks = array())
    {
        // line 91
        echo "  ";
        if (((($context["display_submitted"] ?? null) || $this->getAttribute(($context["content"] ?? null), "field_mt_post_category", array())) || $this->getAttribute(($context["content"] ?? null), "comment", array()))) {
            // line 92
            echo "    <div class=\"node__meta\">
      <div class=\"node-info\">
        ";
            // line 94
            if ($this->getAttribute(($context["content"] ?? null), "field_mt_post_category", array())) {
                // line 95
                echo "          <div class=\"node-info-item node-info-item-term\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_mt_post_category", array()), "html", null, true));
                echo "</div>
        ";
            }
            // line 97
            echo "        ";
            if (($context["display_submitted"] ?? null)) {
                // line 98
                echo "          <div class=\"node-info-item node-info-item-date\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["date"] ?? null), "html", null, true));
                echo "</div>
        ";
            }
            // line 100
            echo "        ";
            if ($this->getAttribute(($context["content"] ?? null), "comment", array())) {
                // line 101
                echo "          <div class=\"node-info-item node-info-item-comments\">
            ";
                // line 102
                echo \Drupal::translation()->formatPlural(abs(                // line 104
($context["comment_count"] ?? null)), "1 comment", "@comment_count comments", array("@comment_count" =>                 // line 105
($context["comment_count"] ?? null), ));
                // line 107
                echo "          </div>
        ";
            }
            // line 109
            echo "      </div>
    </div>
  ";
        }
        // line 112
        echo "  ";
        if ($this->getAttribute(($context["content"] ?? null), "links", array())) {
            // line 113
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "links", array()), "html", null, true));
            echo "
  ";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/magazineplus/templates/node--mt_post--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 113,  168 => 112,  163 => 109,  159 => 107,  157 => 105,  156 => 104,  155 => 102,  152 => 101,  149 => 100,  143 => 98,  140 => 97,  134 => 95,  132 => 94,  128 => 92,  125 => 91,  122 => 90,  116 => 88,  111 => 87,  108 => 86,  100 => 82,  94 => 81,  87 => 77,  83 => 76,  80 => 75,  78 => 74,  75 => 73,  72 => 72,  69 => 71,  61 => 68,  58 => 67,  55 => 66,  11 => 65,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/magazineplus/templates/node--mt_post--teaser.html.twig", "/var/www/vhosts/salonefos.ihub.com.sl/httpdocs/web/themes/custom/magazineplus/templates/node--mt_post--teaser.html.twig");
    }
}
