<?php

/* themes/custom/magazineplus/templates/node--mt_post.html.twig */
class __TwigTemplate_dcae68bc2ea6bd51899ba0322533c96e56c28e2a561494c890840b498cecc5f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 65
        $this->parent = $this->loadTemplate("node.html.twig", "themes/custom/magazineplus/templates/node--mt_post.html.twig", 65);
        $this->blocks = array(
            'node_side' => array($this, 'block_node_side'),
            'meta_area' => array($this, 'block_meta_area'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "node.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 68, "trans" => 85);
        $filters = array("url_encode" => 122, "without" => 221);
        $functions = array("attach_library" => 82, "url" => 122);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'trans'),
                array('url_encode', 'without'),
                array('attach_library', 'url')
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
    public function block_node_side($context, array $blocks = array())
    {
        // line 67
        echo "  <div class=\"node__side\">
    ";
        // line 68
        if ((((((($context["display_submitted"] ?? null) || $this->getAttribute(($context["mt_setting"] ?? null), "reading_time", array())) || $this->getAttribute(($context["mt_setting"] ?? null), "share_links", array())) || $this->getAttribute(($context["mt_setting"] ?? null), "font_resize", array())) || $this->getAttribute(($context["mt_setting"] ?? null), "post_progress", array())) || $this->getAttribute(($context["mt_setting"] ?? null), "print_button", array()))) {
            // line 69
            echo "      ";
            if (($context["display_submitted"] ?? null)) {
                // line 70
                echo "        <div class=\"node__user-info\">
          ";
                // line 71
                if (($context["author_picture"] ?? null)) {
                    // line 72
                    echo "            <div class=\"user-picture\">
              <div";
                    // line 73
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["author_attributes"] ?? null), "html", null, true));
                    echo ">
                ";
                    // line 74
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["author_picture"] ?? null), "html", null, true));
                    echo "
              </div>
            </div>
          ";
                }
                // line 78
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["metadata"] ?? null), "html", null, true));
                echo "
        </div>
      ";
            }
            // line 81
            echo "      ";
            if ($this->getAttribute(($context["mt_setting"] ?? null), "reading_time", array())) {
                // line 82
                echo "        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("magazineplus/reading-time"), "html", null, true));
                echo "
        <div class=\"reading-time\">
          ";
                // line 84
                if ((($context["minutes"] ?? null) < 1)) {
                    // line 85
                    echo "            ";
                    echo t("1<div class=\"reading-time__text\">min read</div>", array());
                    // line 88
                    echo "          ";
                } else {
                    // line 89
                    echo "            ";
                    echo t("@minutes<div class=\"reading-time__text\">min read</div>", array("@minutes" =>                     // line 90
($context["minutes"] ?? null), ));
                    // line 92
                    echo "          ";
                }
                // line 93
                echo "        </div>
      ";
            }
            // line 95
            echo "      ";
            if ($this->getAttribute(($context["mt_setting"] ?? null), "affix_side", array())) {
                // line 96
                echo "        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("magazineplus/node-side-affix"), "html", null, true));
                echo "
        <div id=\"affix\">
      ";
            }
            // line 99
            echo "      ";
            if ($this->getAttribute(($context["mt_setting"] ?? null), "font_resize", array())) {
                // line 100
                echo "        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("magazineplus/font-resize"), "html", null, true));
                echo "
        <div class=\"content-font-settings\">
            <div class=\"font-resize\">
              <a href=\"#\" id=\"decfont\">A-</a>
              <a href=\"#\" id=\"incfont\">A+</a>
            </div>
        </div>
      ";
            }
            // line 108
            echo "      ";
            if ($this->getAttribute(($context["mt_setting"] ?? null), "post_progress", array())) {
                // line 109
                echo "        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("magazineplus/post-progress"), "html", null, true));
                echo "
        <div class=\"post-progress\">
          <div class=\"post-progress__value\"></div>
          <div class=\"post-progress__text\">";
                // line 112
                echo t("read", array());
                echo "</div>
          <div class=\"post-progress__bar\"></div>
        </div>
      ";
            }
            // line 116
            echo "      ";
            if ((($this->getAttribute(($context["mt_setting"] ?? null), "share_links_print_position", array()) == "node-side") && ($this->getAttribute(($context["mt_setting"] ?? null), "share_links", array()) || $this->getAttribute(($context["mt_setting"] ?? null), "print_button", array())))) {
                // line 117
                echo "        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("magazineplus/share-links"), "html", null, true));
                echo "
        <div class=\"share-links\">
          <ul>
            ";
                // line 120
                if ($this->getAttribute(($context["mt_setting"] ?? null), "share_links", array())) {
                    // line 121
                    echo "              <li class=\"facebook";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute(($context["mt_setting"] ?? null), "print_button", array())) ? (" print-button-enabled") : (""))));
                    echo "\">
                <a href=\"https://www.facebook.com/sharer/sharer.php?u=";
                    // line 122
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("entity.node.canonical", array("node" => $this->getAttribute(($context["node"] ?? null), "id", array()))), "html", null, true));
                    echo "&t=";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_urlencode_filter($this->getAttribute(($context["node"] ?? null), "label", array()), true), "html", null, true));
                    echo "\" onclick=\"window.open(this.href, 'facebook-share','width=580,height=296');return false;\">
                    <i class=\"fa fa-facebook\"><span class=\"sr-only\">facebook</span></i>
                </a>
              </li>
              <li class=\"twitter";
                    // line 126
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute(($context["mt_setting"] ?? null), "print_button", array())) ? (" print-button-enabled") : (""))));
                    echo "\">
                <a href=\"http://twitter.com/share?text=";
                    // line 127
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_urlencode_filter($this->getAttribute(($context["node"] ?? null), "label", array()), true), "html", null, true));
                    echo "&url=";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("entity.node.canonical", array("node" => $this->getAttribute(($context["node"] ?? null), "id", array()))), "html", null, true));
                    echo "\" onclick=\"window.open(this.href, 'twitter-share', 'width=550,height=235');return false;\">
                    <i class=\"fa fa-twitter\"><span class=\"sr-only\">twitter</span></i>
                </a>
              </li>
              <li class=\"email";
                    // line 131
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute(($context["mt_setting"] ?? null), "print_button", array())) ? (" print-button-enabled") : (""))));
                    echo "\">
                <a href=\"mailto:?Subject=";
                    // line 132
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_urlencode_filter($this->getAttribute(($context["node"] ?? null), "label", array()), true), "html", null, true));
                    echo "&amp;Body=";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("entity.node.canonical", array("node" => $this->getAttribute(($context["node"] ?? null), "id", array()))), "html", null, true));
                    echo "\">
                    <i class=\"fa fa-envelope-o\"><span class=\"sr-only\">email</span></i>
                </a>
              </li>
            ";
                }
                // line 137
                echo "            ";
                if ($this->getAttribute(($context["mt_setting"] ?? null), "print_button", array())) {
                    // line 138
                    echo "              <li class=\"print";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute(($context["mt_setting"] ?? null), "share_links", array())) ? (" share-links-enabled") : (""))));
                    echo "\">
                <div class=\"print\">
                  <a href=\"javascript:window.print()\" class=\"print-button\">
                    <i class=\"fa fa-print\"><span class=\"sr-only\">print</span></i>
                  </a>
                </div>
              </li>
            ";
                }
                // line 146
                echo "          </ul>
        </div>
      ";
            }
            // line 149
            echo "      ";
            if ($this->getAttribute(($context["mt_setting"] ?? null), "affix_side", array())) {
                // line 150
                echo "        </div>
      ";
            }
            // line 152
            echo "      ";
            if ((($this->getAttribute(($context["mt_setting"] ?? null), "share_links_print_position", array()) == "bottom") && ($this->getAttribute(($context["mt_setting"] ?? null), "share_links", array()) || $this->getAttribute(($context["mt_setting"] ?? null), "print_button", array())))) {
                // line 153
                echo "        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("magazineplus/share-links"), "html", null, true));
                echo "
        ";
                // line 154
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("magazineplus/fixed-share-links"), "html", null, true));
                echo "
        <div class=\"share-links\">
          <ul>
            ";
                // line 157
                if ($this->getAttribute(($context["mt_setting"] ?? null), "share_links", array())) {
                    // line 158
                    echo "              <li class=\"facebook";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute(($context["mt_setting"] ?? null), "print_button", array())) ? (" print-button-enabled") : (""))));
                    echo "\">
                <a href=\"https://www.facebook.com/sharer/sharer.php?u=";
                    // line 159
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("entity.node.canonical", array("node" => $this->getAttribute(($context["node"] ?? null), "id", array()))), "html", null, true));
                    echo "&t=";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_urlencode_filter($this->getAttribute(($context["node"] ?? null), "label", array()), true), "html", null, true));
                    echo "\" onclick=\"window.open(this.href, 'facebook-share','width=580,height=296');return false;\">
                    <i class=\"fa fa-facebook\"><span class=\"sr-only\">facebook</span></i>
                </a>
              </li>
              <li class=\"twitter";
                    // line 163
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute(($context["mt_setting"] ?? null), "print_button", array())) ? (" print-button-enabled") : (""))));
                    echo "\">
                <a href=\"http://twitter.com/share?text=";
                    // line 164
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_urlencode_filter($this->getAttribute(($context["node"] ?? null), "label", array()), true), "html", null, true));
                    echo "&url=";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("entity.node.canonical", array("node" => $this->getAttribute(($context["node"] ?? null), "id", array()))), "html", null, true));
                    echo "\" onclick=\"window.open(this.href, 'twitter-share', 'width=550,height=235');return false;\">
                    <i class=\"fa fa-twitter\"><span class=\"sr-only\">twitter</span></i>
                </a>
              </li>
              <li class=\"email";
                    // line 168
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute(($context["mt_setting"] ?? null), "print_button", array())) ? (" print-button-enabled") : (""))));
                    echo "\">
                <a href=\"mailto:?Subject=";
                    // line 169
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_urlencode_filter($this->getAttribute(($context["node"] ?? null), "label", array()), true), "html", null, true));
                    echo "&amp;Body=";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("entity.node.canonical", array("node" => $this->getAttribute(($context["node"] ?? null), "id", array()))), "html", null, true));
                    echo "\">
                    <i class=\"fa fa-envelope-o\"><span class=\"sr-only\">email</span></i>
                </a>
              </li>
            ";
                }
                // line 174
                echo "            ";
                if ($this->getAttribute(($context["mt_setting"] ?? null), "print_button", array())) {
                    // line 175
                    echo "              <li class=\"print";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute(($context["mt_setting"] ?? null), "share_links", array())) ? (" share-links-enabled") : (""))));
                    echo "\">
                <div class=\"print\">
                  <a href=\"javascript:window.print()\" class=\"print-button\">
                    <i class=\"fa fa-print\"><span class=\"sr-only\">print</span></i>
                  </a>
                </div>
              </li>
            ";
                }
                // line 183
                echo "          </ul>
        </div>
      ";
            }
            // line 186
            echo "    ";
        }
        // line 187
        echo "  </div>
";
    }

    // line 189
    public function block_meta_area($context, array $blocks = array())
    {
        // line 190
        echo "  ";
        if (($context["display_submitted"] ?? null)) {
            // line 191
            echo "    <div class=\"node__user-info\">
      <div class=\"user-name\">";
            // line 192
            echo t("<span>by </span>", array());
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["author_name"] ?? null), "html", null, true));
            echo "</div>
      ";
            // line 193
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["metadata"] ?? null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 196
        echo "  ";
        if (((($context["display_submitted"] ?? null) || $this->getAttribute(($context["content"] ?? null), "field_mt_post_category", array())) || $this->getAttribute(($context["content"] ?? null), "comment", array()))) {
            // line 197
            echo "    <div class=\"node__meta\">
      <div class=\"node-info\">
        ";
            // line 199
            if ($this->getAttribute(($context["content"] ?? null), "field_mt_post_category", array())) {
                // line 200
                echo "          <div class=\"node-info-item node-info-item-term\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_mt_post_category", array()), "html", null, true));
                echo "</div>
        ";
            }
            // line 202
            echo "        ";
            if (($context["display_submitted"] ?? null)) {
                // line 203
                echo "          <div class=\"node-info-item node-info-item-date\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["date"] ?? null), "html", null, true));
                echo "</div>
        ";
            }
            // line 205
            echo "        ";
            if ($this->getAttribute(($context["content"] ?? null), "comment", array())) {
                // line 206
                echo "          <div class=\"node-info-item node-info-item-comments\">
            ";
                // line 207
                echo \Drupal::translation()->formatPlural(abs(                // line 209
($context["comment_count"] ?? null)), "1 comment", "@comment_count comments", array("@comment_count" =>                 // line 210
($context["comment_count"] ?? null), ));
                // line 212
                echo "          </div>
        ";
            }
            // line 214
            echo "      </div>
    </div>
  ";
        }
    }

    // line 218
    public function block_content($context, array $blocks = array())
    {
        // line 219
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("magazineplus/node-post"), "html", null, true));
        echo "
  <div class=\"node__main-content-section\">
    ";
        // line 221
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["content"] ?? null), "links", "field_mt_post_category", "comment"), "html", null, true));
        echo "
  </div>
  ";
        // line 223
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "comment", array()), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/magazineplus/templates/node--mt_post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  405 => 223,  400 => 221,  394 => 219,  391 => 218,  384 => 214,  380 => 212,  378 => 210,  377 => 209,  376 => 207,  373 => 206,  370 => 205,  364 => 203,  361 => 202,  355 => 200,  353 => 199,  349 => 197,  346 => 196,  340 => 193,  335 => 192,  332 => 191,  329 => 190,  326 => 189,  321 => 187,  318 => 186,  313 => 183,  301 => 175,  298 => 174,  288 => 169,  284 => 168,  275 => 164,  271 => 163,  262 => 159,  257 => 158,  255 => 157,  249 => 154,  244 => 153,  241 => 152,  237 => 150,  234 => 149,  229 => 146,  217 => 138,  214 => 137,  204 => 132,  200 => 131,  191 => 127,  187 => 126,  178 => 122,  173 => 121,  171 => 120,  164 => 117,  161 => 116,  154 => 112,  147 => 109,  144 => 108,  132 => 100,  129 => 99,  122 => 96,  119 => 95,  115 => 93,  112 => 92,  110 => 90,  108 => 89,  105 => 88,  102 => 85,  100 => 84,  94 => 82,  91 => 81,  84 => 78,  77 => 74,  73 => 73,  70 => 72,  68 => 71,  65 => 70,  62 => 69,  60 => 68,  57 => 67,  54 => 66,  11 => 65,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/magazineplus/templates/node--mt_post.html.twig", "/var/www/vhosts/salonfos.com/httpdocs/web/themes/custom/magazineplus/templates/node--mt_post.html.twig");
    }
}
