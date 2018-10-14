<?php

/* themes/custom/magazineplus/templates/node--mt_team_member.html.twig */
class __TwigTemplate_72b26292c56368cbf70d6acc5b6ac8d365bd4c4a84a362a33c26af2a9bd246db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("node.html.twig", "themes/custom/magazineplus/templates/node--mt_team_member.html.twig", 1);
        $this->blocks = array(
            'header_top' => array($this, 'block_header_top'),
            'title_area' => array($this, 'block_title_area'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "node.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 9, "trans" => 34);
        $filters = array("render" => 9, "without" => 66);
        $functions = array("attach_library" => 11, "path" => 34);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'trans'),
                array('render', 'without'),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_header_top($context, array $blocks = array())
    {
        // line 9
        echo "  ";
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_mt_member_photo", array()))) {
            // line 10
            echo "      ";
            if (($context["page"] ?? null)) {
                // line 11
                echo "       ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("magazineplus/magnific-popup-field-member-photo-init"), "html", null, true));
                echo "
      ";
            }
            // line 13
            echo "      <div class=\"photo-container\">
        ";
            // line 14
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_mt_member_photo", array()), "html", null, true));
            echo "
      </div>
  ";
        }
    }

    // line 18
    public function block_title_area($context, array $blocks = array())
    {
        // line 19
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
    ";
        // line 20
        if ( !($context["page"] ?? null)) {
            // line 21
            echo "      <h2";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => "node__title"), "method"), "html", null, true));
            echo ">
        <a href=\"";
            // line 22
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</a>
      </h2>
    ";
        } else {
            // line 25
            echo "      <h2";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => "node__title title sr-only"), "method"), "html", null, true));
            echo ">
        ";
            // line 26
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "
      </h2>
    ";
        }
        // line 29
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "
  ";
        // line 30
        if (((($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_mt_facebook_account", array())) || $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_mt_twitter_account", array()))) || $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_mt_youtube_account", array()))) || $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_mt_user", array())))) {
            // line 31
            echo "    <ul class=\"icons-list\">
      ";
            // line 32
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_mt_user", array()))) {
                // line 33
                echo "        <li>
          <a class=\"tooltip--white\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"\" data-original-title=\"";
                // line 34
                echo t("VIEW USER CONTRIBUTIONS", array());
                echo "\" href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("entity.user.canonical", array("user" => $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_mt_user", array()), "target_id", array()))), "html", null, true));
                echo "\" class=\"link--dark\">
            <i class=\"fa fa-user\"><span class=\"sr-only\">User Profile</span></i>
          </a>
        </li>
      ";
            }
            // line 39
            echo "      ";
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_mt_facebook_account", array()))) {
                // line 40
                echo "        <li>
          <a target=\"_blank\" class=\"tooltip--white\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"\" data-original-title=\"";
                // line 41
                echo t("FACEBOOK", array());
                echo "\" href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_mt_facebook_account", array()), "value", array()), "html", null, true));
                echo "\" class=\"link--dark\">
            <i class=\"fa fa-facebook\"><span class=\"sr-only\">facebook</span></i>
          </a>
        </li>
      ";
            }
            // line 46
            echo "      ";
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_mt_twitter_account", array()))) {
                // line 47
                echo "        <li>
          <a target=\"_blank\" class=\"tooltip--white\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"\" data-original-title=\"";
                // line 48
                echo t("TWITTER", array());
                echo "\" href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_mt_twitter_account", array()), "value", array()), "html", null, true));
                echo "\" class=\"link--dark\">
            <i class=\"fa fa-twitter\"><span class=\"sr-only\">twitter</span></i>
          </a>
        </li>
      ";
            }
            // line 53
            echo "      ";
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_mt_youtube_account", array()))) {
                // line 54
                echo "        <li>
          <a target=\"_blank\" class=\"tooltip--white\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"\" data-original-title=\"";
                // line 55
                echo t("YOUTUBE", array());
                echo "\" href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_mt_youtube_account", array()), "value", array()), "html", null, true));
                echo "\" class=\"link--dark\">
            <i class=\"fa fa-youtube\"><span class=\"sr-only\">youtube</span></i>
          </a>
        </li>
      ";
            }
            // line 60
            echo "    </ul>
  ";
        }
    }

    // line 63
    public function block_content($context, array $blocks = array())
    {
        // line 64
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("magazineplus/node-team-member"), "html", null, true));
        echo "
  <div class=\"content\">
    ";
        // line 66
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["content"] ?? null), "field_mt_member_photo", "field_mt_facebook_account", "field_mt_user", "field_mt_twitter_account", "field_mt_youtube_account"), "html", null, true));
        echo "
  </div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/magazineplus/templates/node--mt_team_member.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 66,  196 => 64,  193 => 63,  187 => 60,  177 => 55,  174 => 54,  171 => 53,  161 => 48,  158 => 47,  155 => 46,  145 => 41,  142 => 40,  139 => 39,  129 => 34,  126 => 33,  124 => 32,  121 => 31,  119 => 30,  114 => 29,  108 => 26,  103 => 25,  95 => 22,  90 => 21,  88 => 20,  83 => 19,  80 => 18,  72 => 14,  69 => 13,  63 => 11,  60 => 10,  57 => 9,  54 => 8,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/magazineplus/templates/node--mt_team_member.html.twig", "/var/www/vhosts/salonefos.ihub.com.sl/httpdocs/web/themes/custom/magazineplus/templates/node--mt_team_member.html.twig");
    }
}
