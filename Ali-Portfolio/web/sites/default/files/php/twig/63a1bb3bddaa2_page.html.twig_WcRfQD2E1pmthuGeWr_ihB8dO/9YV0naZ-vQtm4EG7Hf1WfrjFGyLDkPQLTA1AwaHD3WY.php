<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/amun-amun/templates/page.html.twig */
class __TwigTemplate_9e512e909be553475236b60b1dde9525 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu_vertical", [], "any", false, false, true, 58)) {
            // line 59
            echo "<!-- Start: Main Navigation - Vertical -->
<div id=\"main-navigation-v\" class=\"main-navigation-wrapper w3-sidebar w3-bar-block w3-animate-left w3-theme ";
            // line 60
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_primary_menu"] ?? null), 60, $this->source), "html", null, true);
            echo "\" role=\"navigation\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Main Navigation"));
            echo "\">
  <div id=\"main-navigation-inner-v\" class=\"main-navigation-inner-v\">
    <div id=\"close-nav\" class=\"close-nav w3-button w3-bar-block w3-large w3-theme ";
            // line 62
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_primary_menu"] ?? null), 62, $this->source), "html", null, true);
            echo "\">
      ";
            // line 64
            echo "      <svg aria-hidden=\"true\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"butt\" stroke-linejoin=\"bevel\">
        <line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"></line>
        <line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"></line>
      </svg>
    </div>
    ";
            // line 69
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu_vertical", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
            echo "
  </div>
</div>
<!-- End: Main Navigation - Vertical -->
";
        }
        // line 74
        echo "
<!-- Start: Page Wrapper -->
<div class=\"page-wrapper w3-col w3-clear w3-animate-opacity w3-text-theme ";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_page_wrapper"] ?? null), 76, $this->source), "html", null, true);
        echo "\">

  ";
        // line 78
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "fixed_search_bar", [], "any", false, false, true, 78)) {
            // line 79
            echo "  <!-- Start: Fixed Search Bar -->
  <div id=\"search-slide\" class=\"w3-col w3-clear  w3-theme-l5 search-slide-wrapper\" role=\"search\" aria-label=\"";
            // line 80
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Search Bar"));
            echo "\">
    <div id=\"search-slide-inner\" class=\"w3-row search-slide-inner ";
            // line 81
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 81, $this->source), "html", null, true);
            echo "\">
      ";
            // line 82
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "fixed_search_bar", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
            echo "
      <div class=\"w3-button close-search\">
      ";
            // line 85
            echo "      <svg aria-hidden=\"true\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"butt\" stroke-linejoin=\"bevel\">
        <line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"></line>
        <line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"></line>
      </svg>
      </div>
    </div>
  </div>
  <!-- End: Fixed Search Bar -->
  ";
        }
        // line 94
        echo "
  ";
        // line 95
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 95)) {
            // line 96
            echo "  <!-- Start: Main Navigation - Horizontal -->
  <div id=\"main-navigation-h\" class=\"w3-col w3-clear main-navigation-wrapper w3-theme ";
            // line 97
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_primary_menu"] ?? null), 97, $this->source), "html", null, true);
            echo "\" role=\"navigation\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Main Navigation"));
            echo "\">
    <div id=\"main-navigation-inner-h\" class=\"d8-fade w3-row main-navigation-inner-h ";
            // line 98
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 98, $this->source), "html", null, true);
            echo "\">
      <div class=\"mobile-nav w3-hide-large w3-button w3-block w3-left-align w3-large ";
            // line 99
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_primary_menu"] ?? null), 99, $this->source), "html", null, true);
            echo "\">
        ";
            // line 101
            echo "        <svg aria-hidden=\"true\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"butt\" stroke-linejoin=\"bevel\">
          <line x1=\"3\" y1=\"12\" x2=\"21\" y2=\"12\"></line>
          <line x1=\"3\" y1=\"6\" x2=\"21\" y2=\"6\"></line>
          <line x1=\"3\" y1=\"18\" x2=\"21\" y2=\"18\"></line>
        </svg>
      </div>
      ";
            // line 107
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
            echo "
      ";
            // line 108
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu_vertical", [], "any", false, false, true, 108)) {
                // line 109
                echo "      <div id=\"open-nav-inner\" class=\"open-nav-inner w3-large ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_primary_menu"] ?? null), 109, $this->source), "html", null, true);
                echo "\">
        ";
                // line 111
                echo "        <svg aria-hidden=\"true\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"butt\" stroke-linejoin=\"bevel\">
          <line x1=\"3\" y1=\"12\" x2=\"21\" y2=\"12\"></line>
          <line x1=\"3\" y1=\"6\" x2=\"21\" y2=\"6\"></line>
          <line x1=\"3\" y1=\"18\" x2=\"21\" y2=\"18\"></line>
        </svg>
      </div>
      ";
            }
            // line 118
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "fixed_search_bar", [], "any", false, false, true, 118)) {
                // line 119
                echo "      <div id=\"open-search\" class=\"open-search w3-large\">
          ";
                // line 121
                echo "          <svg aria-hidden=\"true\" focusable=\"false\" data-icon=\"magnifying-glass\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"3\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
            <circle cx=\"11\" cy=\"11\" r=\"8\"></circle>
            <line x1=\"21\" y1=\"21\" x2=\"16.65\" y2=\"16.65\"></line>
          </svg>
      </div>
      ";
            }
            // line 127
            echo "    </div>
  </div>
  <!-- End: Main Navigation - Horizontal -->
  ";
        }
        // line 131
        echo "
  <!-- Start: Header -->
  <header id=\"header\" class=\"w3-col w3-clear w3-theme-l4 ";
        // line 133
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sitename_animation"] ?? null), 133, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_header"] ?? null), 133, $this->source), "html", null, true);
        echo "\" role=\"banner\" aria-label=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site header"));
        echo "\">
    <div id=\"header-inner\" class=\"d8-fade w3-container header-inner ";
        // line 134
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 134, $this->source), "html", null, true);
        echo "\">
      ";
        // line 135
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 135)) {
            // line 136
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 136), 136, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 138
        echo "    </div>
  </header>
  <!-- End: Header -->

  ";
        // line 142
        if ((($context["is_front"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "welcome_text", [], "any", false, false, true, 142))) {
            // line 143
            echo "  <!-- Start: Welcome Text -->
  <div id=\"welcome-text\" class=\"w3-col w3-clear w3-theme-l5 ";
            // line 144
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_welcome_text"] ?? null), 144, $this->source), "html", null, true);
            echo "\">
    <div id=\"welcome-text-inner\" class=\"d8-fade w3-row welcome-text-inner ";
            // line 145
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 145, $this->source), "html", null, true);
            echo "\">
      ";
            // line 146
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "welcome_text", [], "any", false, false, true, 146), 146, $this->source), "html", null, true);
            echo "
    </div>
  </div>
  <!-- End: Welcome Text -->
  ";
        }
        // line 151
        echo "
  ";
        // line 152
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 152)) {
            // line 153
            echo "  <!-- Start: Highlighted -->
  <div id=\"highlighted\" class=\"w3-col w3-clear w3-theme-l2 ";
            // line 154
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_highlighted"] ?? null), 154, $this->source), "html", null, true);
            echo "\">
    <div id=\"highlighted-inner\" class=\"d8-fade w3-row highlighted-inner ";
            // line 155
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 155, $this->source), "html", null, true);
            echo "\">
      ";
            // line 156
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 156), 156, $this->source), "html", null, true);
            echo "
    </div>
  </div>
  <!-- End: Highlighted -->
  ";
        }
        // line 161
        echo "
  ";
        // line 162
        if (($context["is_front"] ?? null)) {
            // line 163
            echo "    ";
            if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_first", [], "any", false, false, true, 163) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_second", [], "any", false, false, true, 163)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_third", [], "any", false, false, true, 163))) {
                // line 164
                echo "  <!-- Start: Top Container -->
  <div id=\"top-container\" class=\"w3-col w3-clear w3-theme-l4 ";
                // line 165
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_top_container"] ?? null), 165, $this->source), "html", null, true);
                echo "\">
    <div id=\"top-container-inner\" class=\"w3-row-padding top-container-inner ";
                // line 166
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 166, $this->source), "html", null, true);
                echo "\">
      ";
                // line 167
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_first", [], "any", false, false, true, 167)) {
                    // line 168
                    echo "      <!-- Start: Top container first region -->
      <div class=\"";
                    // line 169
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_w3css"] ?? null), 169, $this->source), "html", null, true);
                    echo " top-box ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["top_region"] ?? null)) ? ("top-region") : ("")));
                    echo " first-top\" >
        <div class=\"d8-fade w3-mobile ";
                    // line 170
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["border_animation"] ?? null)) ? ("animate-border") : ("")));
                    echo " w3-theme-l5 ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_top_first"] ?? null), 170, $this->source), "html", null, true);
                    echo "\">
         ";
                    // line 171
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_first", [], "any", false, false, true, 171), 171, $this->source), "html", null, true);
                    echo "
        </div>
      </div>
      <!-- End: Top Container First -->
      ";
                }
                // line 176
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_second", [], "any", false, false, true, 176)) {
                    // line 177
                    echo "      <!-- Start: Top Container Second  -->
      <div class=\"";
                    // line 178
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_w3css"] ?? null), 178, $this->source), "html", null, true);
                    echo " top-box ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["top_region"] ?? null)) ? ("top-region") : ("")));
                    echo " second-top\">
        <div class=\"d8-fade w3-mobile ";
                    // line 179
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["border_animation"] ?? null)) ? ("animate-border") : ("")));
                    echo " w3-theme-l5 ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_top_second"] ?? null), 179, $this->source), "html", null, true);
                    echo "\">
         ";
                    // line 180
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_second", [], "any", false, false, true, 180), 180, $this->source), "html", null, true);
                    echo "
        </div>
      </div>
      <!-- End: Top Container Second -->
      ";
                }
                // line 185
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_third", [], "any", false, false, true, 185)) {
                    // line 186
                    echo "      <!-- Start: Top Container Third -->
      <div class=\"";
                    // line 187
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_w3css"] ?? null), 187, $this->source), "html", null, true);
                    echo " top-box ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["top_region"] ?? null)) ? ("top-region") : ("")));
                    echo " third-top\">
        <div class=\"d8-fade w3-mobile ";
                    // line 188
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["border_animation"] ?? null)) ? ("animate-border") : ("")));
                    echo " w3-theme-l5 ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_top_third"] ?? null), 188, $this->source), "html", null, true);
                    echo "\">
          ";
                    // line 189
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_third", [], "any", false, false, true, 189), 189, $this->source), "html", null, true);
                    echo "
        </div>
      </div>
      <!-- End: Top Container Third -->
      ";
                }
                // line 194
                echo "    </div>
  </div>
  <!-- End: Top container -->
    ";
            }
            // line 198
            echo "  ";
        }
        // line 199
        echo "
  ";
        // line 200
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 200) &&  !($context["is_front"] ?? null))) {
            // line 201
            echo "  <!-- Start: Page Title -->
  <div id=\"page-title\" class=\"w3-col w3-clear w3-theme-d5 ";
            // line 202
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pagetitle_animation"] ?? null), 202, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_page_title"] ?? null), 202, $this->source), "html", null, true);
            echo "\">
    <div id=\"page-title-inner\" class=\"d8-fade w3-row page-title-inner ";
            // line 203
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 203, $this->source), "html", null, true);
            echo "\">
      ";
            // line 204
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 204), 204, $this->source), "html", null, true);
            echo "
    </div>
  </div>
  <!-- End: Page Title -- >
  ";
        }
        // line 209
        echo "
  <!-- Start: Main -->
  <div id=\"main-container\" class=\"w3-col w3-clear w3-theme-l5 ";
        // line 211
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_main"] ?? null), 211, $this->source), "html", null, true);
        echo "\">
    <div id=\"main-container-inner\" class=\"w3-row main-container-inner ";
        // line 212
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 212, $this->source), "html", null, true);
        echo "\">
      ";
        // line 213
        if (twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 213))))) {
            // line 214
            echo "      <!-- Breadcrumb -->
      <div class=\"w3-col ";
            // line 215
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_breadcrumb"] ?? null), 215, $this->source), "html", null, true);
            echo "\">
        ";
            // line 216
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 216), 216, $this->source), "html", null, true);
            echo "
      </div>
      <!-- End: Breadcrumb -->
      ";
        }
        // line 220
        echo "      <!-- Start Main Container  -->
      <div class=\"w3-col w3-clear w3-row-padding\">
        ";
        // line 222
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 222)) {
            // line 223
            echo "        <!-- Start Left SideBar -->
        <div class =\"";
            // line 224
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 224, $this->source), "html", null, true);
            echo " main-box ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["main_region"] ?? null)) ? ("main-region") : ("")));
            echo " first-sidebar\" role=\"complementary\">
          <div class=\"d8-fade w3-sidebar-first w3-mobile ";
            // line 225
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_sidebar_first"] ?? null), 225, $this->source), "html", null, true);
            echo "\">
            ";
            // line 226
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 226), 226, $this->source), "html", null, true);
            echo "
          </div>
        </div>
        <!-- End: Left SideBar -->
        ";
        }
        // line 231
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 231)) {
            // line 232
            echo "        <!-- Start: Main Content -->
        <div class=\"";
            // line 233
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_w3css"] ?? null), 233, $this->source), "html", null, true);
            echo " main-box ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["main_region"] ?? null)) ? ("main-region") : ("")));
            echo " w3css-content\" role=\"main\">
          <div class=\"d8-fade w3-mobile  ";
            // line 234
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_content"] ?? null), 234, $this->source), "html", null, true);
            echo "\">
            ";
            // line 235
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 235), 235, $this->source), "html", null, true);
            echo "
          </div>
        </div>
        <!-- End: Main Content -->
        ";
        }
        // line 240
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 240)) {
            // line 241
            echo "        <!-- Start: Right SideBar -->
        <div class=\"";
            // line 242
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 242, $this->source), "html", null, true);
            echo " main-box ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["main_region"] ?? null)) ? ("main-region") : ("")));
            echo " second-sidebar\" role=\"complementary\">
          <div class=\"d8-fade w3-sidebar-second w3-mobile ";
            // line 243
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_sidebar_second"] ?? null), 243, $this->source), "html", null, true);
            echo "\">
            ";
            // line 244
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 244), 244, $this->source), "html", null, true);
            echo "
          </div>
        </div>
        <!-- End: Right SideBar -->
        ";
        }
        // line 249
        echo "      </div>
      <!-- Endn: Main Container  -->
    </div>
  </div>
  <!-- End: Main -->

  ";
        // line 255
        if (($context["is_front"] ?? null)) {
            // line 256
            echo "    ";
            if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 256) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 256)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 256))) {
                // line 257
                echo "  <!-- start: Footer -->
  <div id=\"footer-container\" class=\"w3-col w3-clear w3-theme-d3 ";
                // line 258
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_footer_container"] ?? null), 258, $this->source), "html", null, true);
                echo "\">
    <div id=\"footer-container-inner\" class=\"w3-row-padding footer-container-inner ";
                // line 259
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 259, $this->source), "html", null, true);
                echo "\">
      ";
                // line 260
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 260)) {
                    // line 261
                    echo "      <!-- Start: Footer First  -->
      <div class=\"";
                    // line 262
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_w3css"] ?? null), 262, $this->source), "html", null, true);
                    echo " footer-box ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_region"] ?? null)) ? ("footer-region") : ("")));
                    echo " first-footer\">
        <div class=\"d8-fade w3-mobile ";
                    // line 263
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["border_animation"] ?? null)) ? ("animate-border") : ("")));
                    echo " w3-theme-l4 ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_footer_first"] ?? null), 263, $this->source), "html", null, true);
                    echo "\">
          ";
                    // line 264
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 264), 264, $this->source), "html", null, true);
                    echo "
        </div>
      </div>
      <!-- End: Footer First -->
      ";
                }
                // line 269
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 269)) {
                    // line 270
                    echo "      <!-- Start: Footer Second Region -->
      <div class=\"";
                    // line 271
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_w3css"] ?? null), 271, $this->source), "html", null, true);
                    echo " footer-box ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_region"] ?? null)) ? ("footer-region") : ("")));
                    echo " second-footer\">
        <div class=\"d8-fade w3-mobile ";
                    // line 272
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["border_animation"] ?? null)) ? ("animate-border") : ("")));
                    echo " w3-theme-l5 ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_footer_second"] ?? null), 272, $this->source), "html", null, true);
                    echo "\">
          ";
                    // line 273
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 273), 273, $this->source), "html", null, true);
                    echo "
        </div>
      </div>
    <!-- End: Footer Second -->
      ";
                }
                // line 278
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 278)) {
                    // line 279
                    echo "      <!-- Start: Footer Third -->
      <div class=\"";
                    // line 280
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_w3css"] ?? null), 280, $this->source), "html", null, true);
                    echo " footer-box ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_region"] ?? null)) ? ("footer-region") : ("")));
                    echo " third-footer\">
        <div class=\"d8-fade w3-mobile ";
                    // line 281
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["border_animation"] ?? null)) ? ("animate-border") : ("")));
                    echo " w3-theme-l4 ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_footer_third"] ?? null), 281, $this->source), "html", null, true);
                    echo "\">
          ";
                    // line 282
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 282), 282, $this->source), "html", null, true);
                    echo "
        </div>
      </div>
      <!-- End: Footer Third -->
      ";
                }
                // line 287
                echo "    </div>
  </div>
  <!-- End: Footer -->
    ";
            }
            // line 291
            echo "  ";
        }
        // line 292
        echo "
  ";
        // line 293
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 293) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 293)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 293)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 293))) {
            // line 294
            echo "  <!-- Start: Bottom -->
  <div id=\"bottom-container\" class=\"w3-col w3-clear w3-theme-l2 ";
            // line 295
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_bottom_container"] ?? null), 295, $this->source), "html", null, true);
            echo "\">
    <div id=\"bottom-container-inner\" class=\"w3-row-padding bottom-container-inner ";
            // line 296
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 296, $this->source), "html", null, true);
            echo "\">
        ";
            // line 297
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 297)) {
                // line 298
                echo "        <!-- Start: Bottom First -->
        <div class=\"";
                // line 299
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_w3css"] ?? null), 299, $this->source), "html", null, true);
                echo " bottom-box ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["bottom_region"] ?? null)) ? ("bottom-region") : ("")));
                echo " first-bottom\">
          <div class=\"d8-fade w3-mobile ";
                // line 300
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["border_animation"] ?? null)) ? ("animate-border") : ("")));
                echo " w3-theme-l4 ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_bottom_first"] ?? null), 300, $this->source), "html", null, true);
                echo "\">
            ";
                // line 301
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 301), 301, $this->source), "html", null, true);
                echo "
          </div>
        </div>
        <!-- End: Bottom First -->
        ";
            }
            // line 306
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 306)) {
                // line 307
                echo "        <!-- Start: Bottom Second -->
        <div class=\"";
                // line 308
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_w3css"] ?? null), 308, $this->source), "html", null, true);
                echo " bottom-box ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["bottom_region"] ?? null)) ? ("bottom-region") : ("")));
                echo " second-bottom\">
          <div class=\"d8-fade w3-mobile ";
                // line 309
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["border_animation"] ?? null)) ? ("animate-border") : ("")));
                echo " w3-theme-l4 ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_bottom_second"] ?? null), 309, $this->source), "html", null, true);
                echo "\">
            ";
                // line 310
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 310), 310, $this->source), "html", null, true);
                echo "
          </div>
        </div>
        <!-- End: Bottom Second -->
        ";
            }
            // line 315
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 315)) {
                // line 316
                echo "        <!-- Start: Bottom Third  -->
        <div class=\"";
                // line 317
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_w3css"] ?? null), 317, $this->source), "html", null, true);
                echo " bottom-box ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["bottom_region"] ?? null)) ? ("bottom-region") : ("")));
                echo " third-bottom\">
          <div class=\"d8-fade w3-mobile ";
                // line 318
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["border_animation"] ?? null)) ? ("animate-border") : ("")));
                echo " w3-theme-l4 ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_bottom_third"] ?? null), 318, $this->source), "html", null, true);
                echo "\">
            ";
                // line 319
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 319), 319, $this->source), "html", null, true);
                echo "
          </div>
        </div>
        <!-- End: Bottom Third -->
        ";
            }
            // line 324
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 324)) {
                // line 325
                echo "        <!-- Start: Bottom Forth  -->
        <div class =\"";
                // line 326
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_w3css"] ?? null), 326, $this->source), "html", null, true);
                echo " bottom-box ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["bottom_region"] ?? null)) ? ("bottom-region") : ("")));
                echo " forth-bottom\">
          <div class=\"d8-fade w3-mobile ";
                // line 327
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["border_animation"] ?? null)) ? ("animate-border") : ("")));
                echo " w3-theme-l4 ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_bottom_forth"] ?? null), 327, $this->source), "html", null, true);
                echo "\">
            ";
                // line 328
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 328), 328, $this->source), "html", null, true);
                echo "
          </div>
        </div>
        <!-- End: Bottom Forth -->
        ";
            }
            // line 333
            echo "    </div>
  </div>
  <!-- End: Bottom -->
  ";
        }
        // line 337
        echo "
  ";
        // line 338
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 338) || ($context["show_social_icon"] ?? null))) {
            // line 339
            echo "  <!-- Start: Footer Menu -->
  <div id=\"footer-menu\" class=\"w3-col w3-clear w3-theme-d4 ";
            // line 340
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_footer_menu"] ?? null), 340, $this->source), "html", null, true);
            echo "\">
    <div id=\"footer-menu-inner\" class=\"w3-row footer-menu-inner ";
            // line 341
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 341, $this->source), "html", null, true);
            echo "\">
      ";
            // line 342
            if (($context["show_social_icon"] ?? null)) {
                // line 343
                echo "        <!-- Start: Social Media -->
      <div class=\"d8-fade w3-center w3-container w3-mobile social-media\">
        ";
                // line 345
                if (($context["facebook_url"] ?? null)) {
                    // line 346
                    echo "        <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 346, $this->source), "html", null, true);
                    echo "\" title=\"Facebook\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-blue w3-show-inline-block w3-xlarge w3-padding\" target=\"_blank\"><i class=\"w3-social-icon fa-facebook\"></i></a>
        ";
                }
                // line 348
                echo "        ";
                if (($context["twitter_url"] ?? null)) {
                    // line 349
                    echo "        <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 349, $this->source), "html", null, true);
                    echo "\" title=\"Twitter\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-blue w3-show-inline-block w3-xlarge w3-padding\" target=\"_blank\"><i class=\"w3-social-icon fa-twitter\"></i></a>
        ";
                }
                // line 351
                echo "        ";
                if (($context["pinterest_url"] ?? null)) {
                    // line 352
                    echo "        <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null), 352, $this->source), "html", null, true);
                    echo "\" title=\"Pinterest\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-red w3-show-inline-block w3-xlarge w3-padding\" target=\"_blank\"><i class=\"w3-social-icon fa-pinterest\"></i></a>
        ";
                }
                // line 354
                echo "        ";
                if (($context["google_plus_url"] ?? null)) {
                    // line 355
                    echo "        <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null), 355, $this->source), "html", null, true);
                    echo "\" title=\"Google\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-red w3-show-inline-block w3-xlarge w3-padding\" target=\"_blank\"><i class=\"w3-social-icon fa-google-plus\"></i></a>
        ";
                }
                // line 357
                echo "        ";
                if (($context["linkedin_url"] ?? null)) {
                    // line 358
                    echo "        <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 358, $this->source), "html", null, true);
                    echo "\" title=\"Linkedin\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-blue w3-show-inline-block w3-xlarge w3-padding\" target=\"_blank\"><i class=\"w3-social-icon fa-linkedin\"></i></a>
        ";
                }
                // line 360
                echo "        ";
                if (($context["instagram_url"] ?? null)) {
                    // line 361
                    echo "        <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null), 361, $this->source), "html", null, true);
                    echo "\" title=\"Instagram\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-red w3-show-inline-block w3-xlarge w3-padding\" target=\"_blank\"><i class=\"w3-social-icon fa-instagram\"></i></a>
        ";
                }
                // line 363
                echo "        ";
                if (($context["youtube_url"] ?? null)) {
                    // line 364
                    echo "        <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["youtube_url"] ?? null), 364, $this->source), "html", null, true);
                    echo "\" title=\"Youtube\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-red w3-show-inline-block w3-xlarge w3-padding\" target=\"_blank\"><i class=\"w3-social-icon fa-youtube\"></i></a>
        ";
                }
                // line 366
                echo "        ";
                if (($context["drupal_url"] ?? null)) {
                    // line 367
                    echo "        <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["drupal_url"] ?? null), 367, $this->source), "html", null, true);
                    echo "\" title=\"Drupal\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-blue w3-show-inline-block w3-xlarge w3-padding\" target=\"_blank\" ><i class=\"w3-social-icon fa-drupal\"></i></a>
        ";
                }
                // line 369
                echo "        ";
                if (($context["rss_url"] ?? null)) {
                    // line 370
                    echo "        <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null), 370, $this->source), "html", null, true);
                    echo "\" title=\"RSS Feed\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-orange w3-show-inline-block w3-xlarge w3-padding\" target=\"_blank\" ><i class=\"w3-social-icon fa-rss\"></i></a>
        ";
                }
                // line 372
                echo "      </div>
      <!-- End: Social Media -->
      ";
            }
            // line 375
            echo "      <!-- Start: Bottom Menu -->
      ";
            // line 376
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 376)) {
                // line 377
                echo "      <div class=\"d8-fade w3-container w3-center w3-mobile\">
        ";
                // line 378
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 378), 378, $this->source), "html", null, true);
                echo "
      </div>
      <!-- End: Bottom Menu -->
      ";
            }
            // line 382
            echo "    </div>
  </div>
  <!-- End: Footer Menu -->
  ";
        }
        // line 386
        echo "
  ";
        // line 387
        if ((($context["copyright_text"] ?? null) || ($context["show_credit_link"] ?? null))) {
            // line 388
            echo "  <!-- Start: Copyright -->
  <div id=\"copyright\" class=\"w3-col w3-clear w3-theme-d5 ";
            // line 389
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_copyright"] ?? null), 389, $this->source), "html", null, true);
            echo "\">
    <div id=\"copyright-inner\" class=\"w3-row copyright-inner ";
            // line 390
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 390, $this->source), "html", null, true);
            echo "\">
    ";
            // line 391
            if (($context["copyright_text"] ?? null)) {
                // line 392
                echo "      <!-- Start: Copyright -->
      <div class=\"w3-half w3-container w3-mobile\">
        <p class=\"w3-section w3-left-align w3-opacity w3-hover-opacity-off\">";
                // line 394
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["copyright_text"] ?? null), 394, $this->source), "html", null, true);
                echo "</p>
      </div>
      <!-- End: Copyright -->
    ";
            }
            // line 398
            echo "    ";
            if (($context["show_credit_link"] ?? null)) {
                // line 399
                echo "      <!-- Start: Credit Link -->
      <div class=\"w3-half w3-container w3-mobile\">
        <p class=\"w3-section w3-right-align w3-opacity w3-hover-opacity-off\">Developed &#38; Designed by <a href=\"https://www.alaahaddad.com\" title=\"Alaa Haddad\" target=\"_blank\">Alaa Haddad</a></p>
      </div>
      <!-- End: Credit Link -->
    ";
            }
            // line 405
            echo "    </div>
  </div>
  <!-- End: Copyright -->
  ";
        }
        // line 409
        echo "</div>
<!-- End: Page Wrapper -->
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/amun-amun/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  896 => 409,  890 => 405,  882 => 399,  879 => 398,  872 => 394,  868 => 392,  866 => 391,  862 => 390,  858 => 389,  855 => 388,  853 => 387,  850 => 386,  844 => 382,  837 => 378,  834 => 377,  832 => 376,  829 => 375,  824 => 372,  818 => 370,  815 => 369,  809 => 367,  806 => 366,  800 => 364,  797 => 363,  791 => 361,  788 => 360,  782 => 358,  779 => 357,  773 => 355,  770 => 354,  764 => 352,  761 => 351,  755 => 349,  752 => 348,  746 => 346,  744 => 345,  740 => 343,  738 => 342,  734 => 341,  730 => 340,  727 => 339,  725 => 338,  722 => 337,  716 => 333,  708 => 328,  702 => 327,  696 => 326,  693 => 325,  690 => 324,  682 => 319,  676 => 318,  670 => 317,  667 => 316,  664 => 315,  656 => 310,  650 => 309,  644 => 308,  641 => 307,  638 => 306,  630 => 301,  624 => 300,  618 => 299,  615 => 298,  613 => 297,  609 => 296,  605 => 295,  602 => 294,  600 => 293,  597 => 292,  594 => 291,  588 => 287,  580 => 282,  574 => 281,  568 => 280,  565 => 279,  562 => 278,  554 => 273,  548 => 272,  542 => 271,  539 => 270,  536 => 269,  528 => 264,  522 => 263,  516 => 262,  513 => 261,  511 => 260,  507 => 259,  503 => 258,  500 => 257,  497 => 256,  495 => 255,  487 => 249,  479 => 244,  475 => 243,  469 => 242,  466 => 241,  463 => 240,  455 => 235,  451 => 234,  445 => 233,  442 => 232,  439 => 231,  431 => 226,  427 => 225,  421 => 224,  418 => 223,  416 => 222,  412 => 220,  405 => 216,  401 => 215,  398 => 214,  396 => 213,  392 => 212,  388 => 211,  384 => 209,  376 => 204,  372 => 203,  366 => 202,  363 => 201,  361 => 200,  358 => 199,  355 => 198,  349 => 194,  341 => 189,  335 => 188,  329 => 187,  326 => 186,  323 => 185,  315 => 180,  309 => 179,  303 => 178,  300 => 177,  297 => 176,  289 => 171,  283 => 170,  277 => 169,  274 => 168,  272 => 167,  268 => 166,  264 => 165,  261 => 164,  258 => 163,  256 => 162,  253 => 161,  245 => 156,  241 => 155,  237 => 154,  234 => 153,  232 => 152,  229 => 151,  221 => 146,  217 => 145,  213 => 144,  210 => 143,  208 => 142,  202 => 138,  196 => 136,  194 => 135,  190 => 134,  182 => 133,  178 => 131,  172 => 127,  164 => 121,  161 => 119,  158 => 118,  149 => 111,  144 => 109,  142 => 108,  138 => 107,  130 => 101,  126 => 99,  122 => 98,  116 => 97,  113 => 96,  111 => 95,  108 => 94,  97 => 85,  92 => 82,  88 => 81,  84 => 80,  81 => 79,  79 => 78,  74 => 76,  70 => 74,  62 => 69,  55 => 64,  51 => 62,  44 => 60,  41 => 59,  39 => 58,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/amun-amun/templates/page.html.twig", "C:\\xampp\\htdocs\\DrupalProjects\\Ali-Portfolio\\web\\themes\\contrib\\amun-amun\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 58);
        static $filters = array("escape" => 60, "t" => 60, "trim" => 213, "striptags" => 213, "render" => 213);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't', 'trim', 'striptags', 'render'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
