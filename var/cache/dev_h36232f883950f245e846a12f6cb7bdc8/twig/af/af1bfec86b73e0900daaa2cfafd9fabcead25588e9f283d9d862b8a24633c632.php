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

/* @Storefront/storefront/element/cms-element-image-gallery.html.twig */
class __TwigTemplate_ed74c189a430e34a3a1798b22ee362f5cf370d4b73b3d7c5b9ee005cf3ffd6a7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'element_image_gallery' => [$this, 'block_element_image_gallery'],
            'element_image_gallery_alignment' => [$this, 'block_element_image_gallery_alignment'],
            'element_image_gallery_inner' => [$this, 'block_element_image_gallery_inner'],
            'element_image_gallery_inner_col' => [$this, 'block_element_image_gallery_inner_col'],
            'element_image_gallery_inner_wrapper' => [$this, 'block_element_image_gallery_inner_wrapper'],
            'element_image_gallery_inner_multiple_slides' => [$this, 'block_element_image_gallery_inner_multiple_slides'],
            'element_image_gallery_inner_container' => [$this, 'block_element_image_gallery_inner_container'],
            'element_image_gallery_inner_items' => [$this, 'block_element_image_gallery_inner_items'],
            'element_image_gallery_inner_item' => [$this, 'block_element_image_gallery_inner_item'],
            'element_image_gallery_inner_controls' => [$this, 'block_element_image_gallery_inner_controls'],
            'element_image_gallery_inner_control_items' => [$this, 'block_element_image_gallery_inner_control_items'],
            'element_image_gallery_inner_control_prev' => [$this, 'block_element_image_gallery_inner_control_prev'],
            'element_image_gallery_inner_control_prev_icon' => [$this, 'block_element_image_gallery_inner_control_prev_icon'],
            'element_image_gallery_inner_control_next' => [$this, 'block_element_image_gallery_inner_control_next'],
            'element_image_gallery_inner_control_next_icon' => [$this, 'block_element_image_gallery_inner_control_next_icon'],
            'element_image_gallery_inner_single' => [$this, 'block_element_image_gallery_inner_single'],
            'element_image_gallery_slider_dots' => [$this, 'block_element_image_gallery_slider_dots'],
            'element_image_gallery_slider_dots_buttons' => [$this, 'block_element_image_gallery_slider_dots_buttons'],
            'element_image_gallery_slider_dots_button' => [$this, 'block_element_image_gallery_slider_dots_button'],
            'element_image_gallery_inner_thumbnails_col' => [$this, 'block_element_image_gallery_inner_thumbnails_col'],
            'element_image_gallery_inner_thumbnails' => [$this, 'block_element_image_gallery_inner_thumbnails'],
            'element_image_gallery_inner_thumbnails_items' => [$this, 'block_element_image_gallery_inner_thumbnails_items'],
            'element_image_gallery_inner_thumbnails_item' => [$this, 'block_element_image_gallery_inner_thumbnails_item'],
            'element_image_gallery_inner_thumbnails_item_inner' => [$this, 'block_element_image_gallery_inner_thumbnails_item_inner'],
            'element_image_gallery_inner_thumbnails_controls' => [$this, 'block_element_image_gallery_inner_thumbnails_controls'],
            'element_image_gallery_inner_thumbnails_controls_prev' => [$this, 'block_element_image_gallery_inner_thumbnails_controls_prev'],
            'element_image_gallery_inner_thumbnails_controls_next' => [$this, 'block_element_image_gallery_inner_thumbnails_controls_next'],
            'element_image_gallery_inner_zoom_modal_wrapper' => [$this, 'block_element_image_gallery_inner_zoom_modal_wrapper'],
            'element_image_gallery_inner_zoom_modal' => [$this, 'block_element_image_gallery_inner_zoom_modal'],
            'element_image_gallery_inner_zoom_modal_dialog' => [$this, 'block_element_image_gallery_inner_zoom_modal_dialog'],
            'element_image_gallery_inner_zoom_modal_content' => [$this, 'block_element_image_gallery_inner_zoom_modal_content'],
            'element_image_gallery_inner_zoom_modal_close_button' => [$this, 'block_element_image_gallery_inner_zoom_modal_close_button'],
            'element_image_gallery_inner_zoom_modal_close_icon' => [$this, 'block_element_image_gallery_inner_zoom_modal_close_icon'],
            'element_image_gallery_inner_zoom_modal_body' => [$this, 'block_element_image_gallery_inner_zoom_modal_body'],
            'element_image_gallery_inner_zoom_modal_action_buttons' => [$this, 'block_element_image_gallery_inner_zoom_modal_action_buttons'],
            'element_image_gallery_inner_zoom_modal_action_zoom_out' => [$this, 'block_element_image_gallery_inner_zoom_modal_action_zoom_out'],
            'element_image_gallery_inner_zoom_modal_action_zoom_out_icon' => [$this, 'block_element_image_gallery_inner_zoom_modal_action_zoom_out_icon'],
            'element_image_gallery_inner_zoom_modal_action_zoom_reset' => [$this, 'block_element_image_gallery_inner_zoom_modal_action_zoom_reset'],
            'element_image_gallery_inner_zoom_modal_action_zoom_reset_icon' => [$this, 'block_element_image_gallery_inner_zoom_modal_action_zoom_reset_icon'],
            'element_image_gallery_inner_zoom_modal_action_zoom_in' => [$this, 'block_element_image_gallery_inner_zoom_modal_action_zoom_in'],
            'element_image_gallery_inner_zoom_modal_action_zoom_in_icon' => [$this, 'block_element_image_gallery_inner_zoom_modal_action_zoom_in_icon'],
            'element_image_gallery_inner_zoom_modal_slider' => [$this, 'block_element_image_gallery_inner_zoom_modal_slider'],
            'element_image_gallery_inner_zoom_modal_slider_items' => [$this, 'block_element_image_gallery_inner_zoom_modal_slider_items'],
            'element_image_gallery_inner_zoom_modal_slider_item' => [$this, 'block_element_image_gallery_inner_zoom_modal_slider_item'],
            'element_image_gallery_inner_zoom_modal_slider_item_zoom_container' => [$this, 'block_element_image_gallery_inner_zoom_modal_slider_item_zoom_container'],
            'element_image_gallery_inner_zoom_modal_slider_item_image' => [$this, 'block_element_image_gallery_inner_zoom_modal_slider_item_image'],
            'element_image_gallery_inner_zoom_modal_slider_controls' => [$this, 'block_element_image_gallery_inner_zoom_modal_slider_controls'],
            'element_image_gallery_inner_zoom_modal_slider_control_prev' => [$this, 'block_element_image_gallery_inner_zoom_modal_slider_control_prev'],
            'element_image_gallery_inner_zoom_modal_slider_control_prev_icon' => [$this, 'block_element_image_gallery_inner_zoom_modal_slider_control_prev_icon'],
            'element_image_gallery_inner_zoom_modal_slider_control_next' => [$this, 'block_element_image_gallery_inner_zoom_modal_slider_control_next'],
            'element_image_gallery_inner_zoom_modal_slider_control_next_icon' => [$this, 'block_element_image_gallery_inner_zoom_modal_slider_control_next_icon'],
            'element_image_gallery_inner_zoom_modal_footer' => [$this, 'block_element_image_gallery_inner_zoom_modal_footer'],
            'element_image_gallery_inner_zoom_modal_thumbnails_controls' => [$this, 'block_element_image_gallery_inner_zoom_modal_thumbnails_controls'],
            'element_image_gallery_inner_zoom_modal_thumbnails' => [$this, 'block_element_image_gallery_inner_zoom_modal_thumbnails'],
            'element_image_gallery_inner_zoom_modal_thumbnails_items' => [$this, 'block_element_image_gallery_inner_zoom_modal_thumbnails_items'],
            'element_image_gallery_inner_zoom_modal_thumbnails_item' => [$this, 'block_element_image_gallery_inner_zoom_modal_thumbnails_item'],
            'element_image_gallery_inner_zoom_modal_thumbnails_item_inner' => [$this, 'block_element_image_gallery_inner_zoom_modal_thumbnails_item_inner'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/element/cms-element-image-gallery.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/element/cms-element-image-gallery.html.twig"));

        // line 1
        $this->displayBlock('element_image_gallery', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_element_image_gallery($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery"));

        // line 2
        echo "    ";
        // line 3
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "fieldConfig", [], "any", true, true, false, 3) && twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "data", [], "any", true, true, false, 3))) {
            // line 4
            echo "        ";
            $context["sliderConfig"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "fieldConfig", [], "any", false, false, false, 4), "elements", [], "any", false, false, false, 4);
            // line 5
            echo "
        ";
            // line 6
            $context["mediaItems"] = [];
            // line 7
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "data", [], "any", false, false, false, 7), "sliderItems", [], "any", false, false, false, 7));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 8
                echo "            ";
                $context["mediaItems"] = twig_array_merge(($context["mediaItems"] ?? null), [0 => twig_get_attribute($this->env, $this->source, $context["item"], "media", [], "any", false, false, false, 8)]);
                // line 9
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "
        ";
            // line 11
            $context["zoom"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "zoom", [], "any", false, false, false, 11), "value", [], "any", false, false, false, 11);
            // line 12
            echo "        ";
            $context["gutter"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "gutter", [], "any", false, false, false, 12), "value", [], "any", false, false, false, 12);
            // line 13
            echo "        ";
            $context["keepAspectRatioOnZoom"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "keepAspectRatioOnZoom", [], "any", false, false, false, 13), "value", [], "any", false, false, false, 13);
            // line 14
            echo "        ";
            $context["magnifierOverGallery"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "magnifierOverGallery", [], "any", false, false, false, 14), "value", [], "any", false, false, false, 14);
            // line 15
            echo "        ";
            $context["zoomModal"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "fullScreen", [], "any", false, false, false, 15), "value", [], "any", false, false, false, 15);
            // line 16
            echo "        ";
            $context["minHeight"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "minHeight", [], "any", false, false, false, 16), "value", [], "any", false, false, false, 16);
            // line 17
            echo "        ";
            $context["displayMode"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "displayMode", [], "any", false, false, false, 17), "value", [], "any", false, false, false, 17);
            // line 18
            echo "        ";
            $context["navigationArrows"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "navigationArrows", [], "any", false, false, false, 18), "value", [], "any", false, false, false, 18);
            // line 19
            echo "        ";
            $context["navigationDots"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "navigationDots", [], "any", false, false, false, 19), "value", [], "any", false, false, false, 19);
            // line 20
            echo "        ";
            $context["galleryPosition"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "galleryPosition", [], "any", false, false, false, 20), "value", [], "any", false, false, false, 20);
            // line 21
            echo "        ";
            $context["verticalAlign"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "verticalAlign", [], "any", false, false, false, 21), "value", [], "any", false, false, false, 21);
            // line 22
            echo "        ";
            $context["zoomImageContainerSelector"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "zoomImageContainerSelector", [], "any", false, false, false, 22), "value", [], "any", false, false, false, 22);
            // line 23
            echo "    ";
        }
        // line 24
        echo "
    ";
        // line 25
        if ( !array_key_exists("fallbackImageTitle", $context)) {
            // line 26
            echo "        ";
            $context["fallbackImageTitle"] = "";
            // line 27
            echo "    ";
        }
        // line 28
        echo "
    ";
        // line 30
        echo "    ";
        $context["imageCount"] = twig_length_filter($this->env, ($context["mediaItems"] ?? null));
        // line 31
        echo "
    ";
        // line 33
        echo "    ";
        $context["maxItemsToShowMobileNav"] = 5;
        // line 34
        echo "    ";
        $context["maxItemsToShowNav"] = 8;
        // line 35
        echo "
    ";
        // line 36
        $context["magnifierOptions"] = [];
        // line 37
        echo "
    ";
        // line 38
        if (($context["magnifierOverGallery"] ?? null)) {
            // line 39
            echo "        ";
            $context["magnifierOptions"] = twig_array_merge(($context["magnifierOptions"] ?? null), ["magnifierOverGallery" => true, "cursorType" => "crosshair"]);
            // line 43
            echo "    ";
        }
        // line 44
        echo "
    ";
        // line 45
        if ((array_key_exists("keepAspectRatioOnZoom", $context) &&  !(null === ($context["keepAspectRatioOnZoom"] ?? null)))) {
            // line 46
            echo "        ";
            $context["magnifierOptions"] = twig_array_merge(($context["magnifierOptions"] ?? null), ["keepAspectRatioOnZoom" =>             // line 47
($context["keepAspectRatioOnZoom"] ?? null)]);
            // line 49
            echo "    ";
        }
        // line 50
        echo "
    ";
        // line 51
        if (($context["zoomImageContainerSelector"] ?? null)) {
            // line 52
            echo "        ";
            $context["magnifierOptions"] = twig_array_merge(($context["magnifierOptions"] ?? null), ["zoomImageContainerSelector" =>             // line 53
($context["zoomImageContainerSelector"] ?? null)]);
            // line 55
            echo "    ";
        }
        // line 56
        echo "
    <div class=\"cms-element-";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "type", [], "any", false, false, false, 57), "html", null, true);
        if (((0 === twig_compare(($context["displayMode"] ?? null), "standard")) && ($context["verticalAlign"] ?? null))) {
            echo " has-vertical-alignment";
        }
        echo "\">
        ";
        // line 58
        $this->displayBlock('element_image_gallery_alignment', $context, $blocks);
        // line 492
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 58
    public function block_element_image_gallery_alignment($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_alignment"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_alignment"));

        // line 59
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "verticalAlign", [], "any", false, false, false, 59), "value", [], "any", false, false, false, 59)) {
            // line 60
            echo "                <div class=\"cms-element-alignment";
            if ((0 === twig_compare(($context["verticalAlign"] ?? null), "center"))) {
                echo " align-self-center";
            } elseif ((0 === twig_compare(($context["verticalAlign"] ?? null), "flex-end"))) {
                echo " align-self-end";
            } else {
                echo " align-self-start";
            }
            echo "\">
            ";
        }
        // line 62
        echo "
                ";
        // line 63
        $context["gallerySliderOptions"] = ["slider" => ["navPosition" => "bottom", "speed" => 500, "gutter" => ((        // line 67
($context["gutter"] ?? null)) ? (($context["gutter"] ?? null)) : (0)), "controls" => ((        // line 68
($context["navigationArrows"] ?? null)) ? (true) : (false)), "autoHeight" => false, "startIndex" => ((        // line 70
($context["startIndexThumbnails"] ?? null)) ? (($context["startIndexThumbnails"] ?? null)) : (null))], "thumbnailSlider" => ["items" => (((0 === twig_compare(        // line 73
($context["galleryPosition"] ?? null), "underneath"))) ? (6) : (5)), "slideBy" => (((0 === twig_compare(        // line 74
($context["galleryPosition"] ?? null), "underneath"))) ? (5) : (4)), "controls" => true, "startIndex" => ((        // line 76
($context["startIndexThumbnails"] ?? null)) ? (($context["startIndexThumbnails"] ?? null)) : (null)), "responsive" => ["xs" => ["enabled" => false, "controls" => false], "sm" => ["enabled" => false, "controls" => false]]]];
        // line 89
        echo "
                ";
        // line 90
        if ((0 === twig_compare(($context["galleryPosition"] ?? null), "left"))) {
            // line 91
            echo "                    ";
            $context["gallerySliderOptions"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\ReplaceRecursiveFilter']->replaceRecursive(($context["gallerySliderOptions"] ?? null), ["thumbnailSlider" => ["responsive" => ["md" => ["axis" => "vertical"], "lg" => ["axis" => "vertical"], "xl" => ["axis" => "vertical"]]]]);
            // line 106
            echo "                ";
        }
        // line 107
        echo "
                ";
        // line 108
        $this->displayBlock('element_image_gallery_inner', $context, $blocks);
        // line 487
        echo "
            ";
        // line 488
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "verticalAlign", [], "any", false, false, false, 488), "value", [], "any", false, false, false, 488)) {
            // line 489
            echo "                </div>
            ";
        }
        // line 491
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 108
    public function block_element_image_gallery_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner"));

        // line 109
        echo "                    <div class=\"row gallery-slider-row";
        if ((0 === twig_compare(($context["imageCount"] ?? null), 1))) {
            echo " is-single-image";
        } else {
            echo " is-loading";
        }
        echo " js-gallery-zoom-modal-container\"
                            ";
        // line 110
        if (($context["zoom"] ?? null)) {
            // line 111
            echo "                                data-magnifier=\"true\"
                            ";
        }
        // line 113
        echo "                            ";
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["magnifierOptions"] ?? null)), 0))) {
            // line 114
            echo "                                data-magnifier-options='";
            echo json_encode(($context["magnifierOptions"] ?? null));
            echo "'
                            ";
        }
        // line 116
        echo "                            ";
        if ((1 === twig_compare(($context["imageCount"] ?? null), 1))) {
            // line 117
            echo "                                data-gallery-slider=\"true\"
                                data-gallery-slider-options='";
            // line 118
            echo twig_escape_filter($this->env, json_encode(($context["gallerySliderOptions"] ?? null)), "html", null, true);
            echo "'
                            ";
        }
        // line 119
        echo ">

                        ";
        // line 121
        $this->displayBlock('element_image_gallery_inner_col', $context, $blocks);
        // line 240
        echo "
                        ";
        // line 241
        $this->displayBlock('element_image_gallery_inner_thumbnails_col', $context, $blocks);
        // line 306
        echo "
                        ";
        // line 307
        $this->displayBlock('element_image_gallery_inner_zoom_modal_wrapper', $context, $blocks);
        // line 485
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 121
    public function block_element_image_gallery_inner_col($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_col"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_col"));

        // line 122
        echo "                            <div class=\"gallery-slider-col";
        if ((0 === twig_compare(($context["galleryPosition"] ?? null), "left"))) {
            echo " col order-1 order-md-2";
        } elseif ((0 === twig_compare(($context["galleryPosition"] ?? null), "underneath"))) {
            echo " col-12 order-1";
        }
        echo "\"
                                 ";
        // line 123
        if (($context["zoomModal"] ?? null)) {
            echo "data-zoom-modal=\"true\"";
        }
        echo ">
                                ";
        // line 125
        echo "                                <div class=\"base-slider gallery-slider";
        if ((0 === twig_compare(($context["navigationArrows"] ?? null), "outside"))) {
            echo " has-nav-outside";
        }
        if ((0 === twig_compare(($context["navigationDots"] ?? null), "outside"))) {
            echo " has-dots-outside";
        }
        if (($context["magnifierOverGallery"] ?? null)) {
            echo " js-magnifier-zoom-image-container";
        }
        echo "\">
                                    ";
        // line 126
        $this->displayBlock('element_image_gallery_inner_wrapper', $context, $blocks);
        // line 221
        echo "
                                    ";
        // line 222
        $this->displayBlock('element_image_gallery_slider_dots', $context, $blocks);
        // line 237
        echo "                                </div>
                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 126
    public function block_element_image_gallery_inner_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_wrapper"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_wrapper"));

        // line 127
        echo "                                        ";
        if ((1 === twig_compare(($context["imageCount"] ?? null), 1))) {
            // line 128
            echo "                                            ";
            $this->displayBlock('element_image_gallery_inner_multiple_slides', $context, $blocks);
            // line 190
            echo "                                        ";
        } else {
            // line 191
            echo "                                            ";
            $this->displayBlock('element_image_gallery_inner_single', $context, $blocks);
            // line 219
            echo "                                        ";
        }
        // line 220
        echo "                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 128
    public function block_element_image_gallery_inner_multiple_slides($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_multiple_slides"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_multiple_slides"));

        // line 129
        echo "                                                ";
        $this->displayBlock('element_image_gallery_inner_container', $context, $blocks);
        // line 162
        echo "
                                                ";
        // line 163
        $this->displayBlock('element_image_gallery_inner_controls', $context, $blocks);
        // line 189
        echo "                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 129
    public function block_element_image_gallery_inner_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_container"));

        // line 130
        echo "                                                    <div class=\"gallery-slider-container\"
                                                         data-gallery-slider-container=\"true\">
                                                        ";
        // line 132
        $this->displayBlock('element_image_gallery_inner_items', $context, $blocks);
        // line 160
        echo "                                                    </div>
                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 132
    public function block_element_image_gallery_inner_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_items"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_items"));

        // line 133
        echo "                                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mediaItems"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 134
            echo "                                                                ";
            $this->displayBlock('element_image_gallery_inner_item', $context, $blocks);
            // line 158
            echo "                                                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 134
    public function block_element_image_gallery_inner_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_item"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_item"));

        // line 135
        echo "                                                                    <div class=\"gallery-slider-item-container\">
                                                                        <div class=\"gallery-slider-item is-";
        // line 136
        echo twig_escape_filter($this->env, ($context["displayMode"] ?? null), "html", null, true);
        echo " js-magnifier-container\"";
        if ((($context["minHeight"] ?? null) && ((0 === twig_compare(($context["displayMode"] ?? null), "cover")) || (0 === twig_compare(($context["displayMode"] ?? null), "contain"))))) {
            echo " style=\"min-height: ";
            echo twig_escape_filter($this->env, ($context["minHeight"] ?? null), "html", null, true);
            echo "\"";
        }
        echo ">
                                                                            ";
        // line 137
        $context["attributes"] = ["class" => "img-fluid gallery-slider-image magnifier-image js-magnifier-image", "alt" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 139
($context["image"] ?? null), "translated", [], "any", false, false, false, 139), "alt", [], "any", false, false, false, 139)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "translated", [], "any", false, false, false, 139), "alt", [], "any", false, false, false, 139)) : (($context["fallbackImageTitle"] ?? null))), "title" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 140
($context["image"] ?? null), "translated", [], "any", false, false, false, 140), "title", [], "any", false, false, false, 140)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "translated", [], "any", false, false, false, 140), "title", [], "any", false, false, false, 140)) : (($context["fallbackImageTitle"] ?? null))), "data-full-image" => twig_get_attribute($this->env, $this->source,         // line 141
($context["image"] ?? null), "url", [], "any", false, false, false, 141)];
        // line 143
        echo "
                                                                            ";
        // line 144
        if (((0 === twig_compare(($context["displayMode"] ?? null), "cover")) || (0 === twig_compare(($context["displayMode"] ?? null), "contain")))) {
            // line 145
            echo "                                                                                ";
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["data-object-fit" => ($context["displayMode"] ?? null)]);
            // line 146
            echo "                                                                            ";
        }
        // line 147
        echo "
                                                                            ";
        // line 148
        if (($context["isProduct"] ?? null)) {
            // line 149
            echo "                                                                                ";
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["itemprop" => "image"]);
            // line 150
            echo "                                                                            ";
        }
        // line 151
        echo "
                                                                            ";
        // line 152
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/thumbnail.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 152);
        })())->display(twig_array_merge($context, ["media" =>         // line 153
($context["image"] ?? null), "name" => "gallery-slider-image-thumbnails"]));
        // line 155
        echo "                                                                        </div>
                                                                    </div>
                                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 163
    public function block_element_image_gallery_inner_controls($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_controls"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_controls"));

        // line 164
        echo "                                                    ";
        if (($context["navigationArrows"] ?? null)) {
            // line 165
            echo "                                                        <div class=\"gallery-slider-controls\"
                                                             data-gallery-slider-controls=\"";
            // line 166
            if (($context["navigationArrows"] ?? null)) {
                echo "true";
            } else {
                echo "false";
            }
            echo "\">
                                                            ";
            // line 167
            $this->displayBlock('element_image_gallery_inner_control_items', $context, $blocks);
            // line 186
            echo "                                                        </div>
                                                    ";
        }
        // line 188
        echo "                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 167
    public function block_element_image_gallery_inner_control_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_control_items"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_control_items"));

        // line 168
        echo "                                                                ";
        $this->displayBlock('element_image_gallery_inner_control_prev', $context, $blocks);
        // line 176
        echo "
                                                                ";
        // line 177
        $this->displayBlock('element_image_gallery_inner_control_next', $context, $blocks);
        // line 185
        echo "                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 168
    public function block_element_image_gallery_inner_control_prev($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_control_prev"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_control_prev"));

        // line 169
        echo "                                                                    <button class=\"base-slider-controls-prev gallery-slider-controls-prev";
        if ((0 === twig_compare(($context["navigationArrows"] ?? null), "outside"))) {
            echo " is-nav-prev-outside";
        } elseif ((0 === twig_compare(($context["navigationArrows"] ?? null), "inside"))) {
            echo " is-nav-prev-inside";
        }
        echo "\"
                                                                            aria-label=\"";
        // line 170
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.previous")), "html", null, true);
        echo "\">
                                                                        ";
        // line 171
        $this->displayBlock('element_image_gallery_inner_control_prev_icon', $context, $blocks);
        // line 174
        echo "                                                                    </button>
                                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 171
    public function block_element_image_gallery_inner_control_prev_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_control_prev_icon"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_control_prev_icon"));

        // line 172
        echo "                                                                            ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 172);
        })())->display(twig_array_merge($context, ["name" => "arrow-head-left"]));
        // line 173
        echo "                                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 177
    public function block_element_image_gallery_inner_control_next($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_control_next"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_control_next"));

        // line 178
        echo "                                                                    <button class=\"base-slider-controls-next gallery-slider-controls-next";
        if ((0 === twig_compare(($context["navigationArrows"] ?? null), "outside"))) {
            echo " is-nav-next-outside";
        } elseif ((0 === twig_compare(($context["navigationArrows"] ?? null), "inside"))) {
            echo " is-nav-next-inside";
        }
        echo "\"
                                                                            aria-label=\"";
        // line 179
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.next")), "html", null, true);
        echo "\">
                                                                        ";
        // line 180
        $this->displayBlock('element_image_gallery_inner_control_next_icon', $context, $blocks);
        // line 183
        echo "                                                                    </button>
                                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 180
    public function block_element_image_gallery_inner_control_next_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_control_next_icon"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_control_next_icon"));

        // line 181
        echo "                                                                            ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 181);
        })())->display(twig_array_merge($context, ["name" => "arrow-head-right"]));
        // line 182
        echo "                                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 191
    public function block_element_image_gallery_inner_single($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_single"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_single"));

        // line 192
        echo "                                                <div class=\"gallery-slider-single-image is-";
        echo twig_escape_filter($this->env, ($context["displayMode"] ?? null), "html", null, true);
        echo " js-magnifier-container\"";
        if (($context["minHeight"] ?? null)) {
            echo " style=\"min-height: ";
            echo twig_escape_filter($this->env, ($context["minHeight"] ?? null), "html", null, true);
            echo "\"";
        }
        echo ">
                                                    ";
        // line 193
        if ((1 === twig_compare(($context["imageCount"] ?? null), 0))) {
            // line 194
            echo "                                                        ";
            $context["attributes"] = ["class" => "img-fluid gallery-slider-image magnifier-image js-magnifier-image", "alt" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_first($this->env,             // line 196
($context["mediaItems"] ?? null)), "translated", [], "any", false, false, false, 196), "alt", [], "any", false, false, false, 196)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["mediaItems"] ?? null)), "translated", [], "any", false, false, false, 196), "alt", [], "any", false, false, false, 196)) : (($context["fallbackImageTitle"] ?? null))), "title" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_first($this->env,             // line 197
($context["mediaItems"] ?? null)), "translated", [], "any", false, false, false, 197), "title", [], "any", false, false, false, 197)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["mediaItems"] ?? null)), "translated", [], "any", false, false, false, 197), "title", [], "any", false, false, false, 197)) : (($context["fallbackImageTitle"] ?? null))), "data-full-image" => twig_get_attribute($this->env, $this->source, twig_first($this->env,             // line 198
($context["mediaItems"] ?? null)), "url", [], "any", false, false, false, 198)];
            // line 200
            echo "
                                                        ";
            // line 201
            if (((0 === twig_compare(($context["displayMode"] ?? null), "cover")) || (0 === twig_compare(($context["displayMode"] ?? null), "contain")))) {
                // line 202
                echo "                                                            ";
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["data-object-fit" => ($context["displayMode"] ?? null)]);
                // line 203
                echo "                                                        ";
            }
            // line 204
            echo "
                                                        ";
            // line 205
            if (($context["isProduct"] ?? null)) {
                // line 206
                echo "                                                            ";
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["itemprop" => "image"]);
                // line 207
                echo "                                                        ";
            }
            // line 208
            echo "
                                                        ";
            // line 209
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/thumbnail.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 209);
            })())->display(twig_array_merge($context, ["media" => twig_first($this->env,             // line 210
($context["mediaItems"] ?? null)), "name" => "gallery-slider-image-thumbnails"]));
            // line 212
            echo "                                                    ";
        } else {
            // line 213
            echo "                                                        ";
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 213);
            })())->display(twig_array_merge($context, ["size" => "fluid", "name" => "placeholder"]));
            // line 216
            echo "                                                    ";
        }
        // line 217
        echo "                                                </div>
                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 222
    public function block_element_image_gallery_slider_dots($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_slider_dots"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_slider_dots"));

        // line 223
        echo "                                        ";
        if (((1 === twig_compare(($context["imageCount"] ?? null), 1)) && ($context["navigationDots"] ?? null))) {
            // line 224
            echo "                                            <div class=\"base-slider-dots ";
            if ((1 === twig_compare(($context["imageCount"] ?? null), ($context["maxItemsToShowNav"] ?? null)))) {
                echo " hide-dots";
            } elseif ((1 === twig_compare(($context["imageCount"] ?? null), ($context["maxItemsToShowMobileNav"] ?? null)))) {
                echo " hide-dots-mobile";
            }
            echo "\">
                                                ";
            // line 225
            $this->displayBlock('element_image_gallery_slider_dots_buttons', $context, $blocks);
            // line 234
            echo "                                            </div>
                                        ";
        }
        // line 236
        echo "                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 225
    public function block_element_image_gallery_slider_dots_buttons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_slider_dots_buttons"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_slider_dots_buttons"));

        // line 226
        echo "                                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mediaItems"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 227
            echo "                                                        ";
            $this->displayBlock('element_image_gallery_slider_dots_button', $context, $blocks);
            // line 232
            echo "                                                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 233
        echo "                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 227
    public function block_element_image_gallery_slider_dots_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_slider_dots_button"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_slider_dots_button"));

        // line 228
        echo "                                                            <button class=\"base-slider-dot\"
                                                                    data-nav-dot=\"";
        // line 229
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 229), "html", null, true);
        echo "\"
                                                                    tabindex=\"-1\"></button>
                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 241
    public function block_element_image_gallery_inner_thumbnails_col($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_thumbnails_col"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_thumbnails_col"));

        // line 242
        echo "                            ";
        if ((1 === twig_compare(($context["imageCount"] ?? null), 1))) {
            // line 243
            echo "                                <div class=\"gallery-slider-thumbnails-col";
            if ((0 === twig_compare(($context["galleryPosition"] ?? null), "left"))) {
                echo " col-0 col-md-auto order-2 order-md-1 is-left";
            } elseif ((0 === twig_compare(($context["galleryPosition"] ?? null), "underneath"))) {
                echo " col-12 order-2 is-underneath";
            }
            echo "\">
                                    <div class=\"gallery-slider-thumbnails-container";
            // line 244
            if ((0 === twig_compare(($context["galleryPosition"] ?? null), "underneath"))) {
                echo " is-underneath";
            }
            echo "\">
                                        ";
            // line 245
            $this->displayBlock('element_image_gallery_inner_thumbnails', $context, $blocks);
            // line 278
            echo "
                                        ";
            // line 279
            $this->displayBlock('element_image_gallery_inner_thumbnails_controls', $context, $blocks);
            // line 302
            echo "                                    </div>
                                </div>
                            ";
        }
        // line 305
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 245
    public function block_element_image_gallery_inner_thumbnails($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_thumbnails"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_thumbnails"));

        // line 246
        echo "                                            <div class=\"gallery-slider-thumbnails";
        if ((0 === twig_compare(($context["galleryPosition"] ?? null), "underneath"))) {
            echo " is-underneath";
        }
        echo "\"
                                                 data-gallery-slider-thumbnails=\"true\">
                                                ";
        // line 248
        $this->displayBlock('element_image_gallery_inner_thumbnails_items', $context, $blocks);
        // line 276
        echo "                                            </div>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 248
    public function block_element_image_gallery_inner_thumbnails_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_thumbnails_items"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_thumbnails_items"));

        // line 249
        echo "                                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mediaItems"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 250
            echo "                                                        ";
            $this->displayBlock('element_image_gallery_inner_thumbnails_item', $context, $blocks);
            // line 274
            echo "                                                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 275
        echo "                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 250
    public function block_element_image_gallery_inner_thumbnails_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_thumbnails_item"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_thumbnails_item"));

        // line 251
        echo "                                                            <div class=\"gallery-slider-thumbnails-item\">
                                                                ";
        // line 252
        $this->displayBlock('element_image_gallery_inner_thumbnails_item_inner', $context, $blocks);
        // line 272
        echo "                                                            </div>
                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 252
    public function block_element_image_gallery_inner_thumbnails_item_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_thumbnails_item_inner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_thumbnails_item_inner"));

        // line 253
        echo "                                                                    <div class=\"gallery-slider-thumbnails-item-inner\">
                                                                        ";
        // line 254
        $context["attributes"] = ["class" => "gallery-slider-thumbnails-image", "alt" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 256
($context["image"] ?? null), "translated", [], "any", false, false, false, 256), "alt", [], "any", false, false, false, 256)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "translated", [], "any", false, false, false, 256), "alt", [], "any", false, false, false, 256)) : (($context["fallbackImageTitle"] ?? null))), "title" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 257
($context["image"] ?? null), "translated", [], "any", false, false, false, 257), "title", [], "any", false, false, false, 257)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "translated", [], "any", false, false, false, 257), "title", [], "any", false, false, false, 257)) : (($context["fallbackImageTitle"] ?? null)))];
        // line 259
        echo "
                                                                        ";
        // line 260
        if (($context["isProduct"] ?? null)) {
            // line 261
            echo "                                                                            ";
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["itemprop" => "image"]);
            // line 262
            echo "                                                                        ";
        }
        // line 263
        echo "
                                                                        ";
        // line 264
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/thumbnail.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 264);
        })())->display(twig_array_merge($context, ["media" =>         // line 265
($context["image"] ?? null), "sizes" => ["default" => "200px"], "name" => "gallery-slider-thumbnails-image-thumbnails"]));
        // line 270
        echo "                                                                    </div>
                                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 279
    public function block_element_image_gallery_inner_thumbnails_controls($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_thumbnails_controls"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_thumbnails_controls"));

        // line 280
        echo "                                            <div data-thumbnail-slider-controls=\"true\" class=\"gallery-slider-thumbnails-controls\">
                                                ";
        // line 281
        $this->displayBlock('element_image_gallery_inner_thumbnails_controls_prev', $context, $blocks);
        // line 290
        echo "
                                                ";
        // line 291
        $this->displayBlock('element_image_gallery_inner_thumbnails_controls_next', $context, $blocks);
        // line 300
        echo "                                            </div>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 281
    public function block_element_image_gallery_inner_thumbnails_controls_prev($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_thumbnails_controls_prev"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_thumbnails_controls_prev"));

        // line 282
        echo "                                                    <button class=\"base-slider-controls-prev gallery-slider-thumbnails-controls-prev\">
                                                        ";
        // line 283
        if ((0 === twig_compare(($context["galleryPosition"] ?? null), "left"))) {
            // line 284
            echo "                                                            ";
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 284);
            })())->display(twig_array_merge($context, ["name" => "arrow-head-up"]));
            // line 285
            echo "                                                        ";
        } elseif ((0 === twig_compare(($context["galleryPosition"] ?? null), "underneath"))) {
            // line 286
            echo "                                                            ";
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 286);
            })())->display(twig_array_merge($context, ["name" => "arrow-head-left"]));
            // line 287
            echo "                                                        ";
        }
        // line 288
        echo "                                                    </button>
                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 291
    public function block_element_image_gallery_inner_thumbnails_controls_next($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_thumbnails_controls_next"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_thumbnails_controls_next"));

        // line 292
        echo "                                                    <button class=\"base-slider-controls-next gallery-slider-thumbnails-controls-next\">
                                                        ";
        // line 293
        if ((0 === twig_compare(($context["galleryPosition"] ?? null), "left"))) {
            // line 294
            echo "                                                            ";
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 294);
            })())->display(twig_array_merge($context, ["name" => "arrow-head-down"]));
            // line 295
            echo "                                                        ";
        } elseif ((0 === twig_compare(($context["galleryPosition"] ?? null), "underneath"))) {
            // line 296
            echo "                                                            ";
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 296);
            })())->display(twig_array_merge($context, ["name" => "arrow-head-right"]));
            // line 297
            echo "                                                        ";
        }
        // line 298
        echo "                                                    </button>
                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 307
    public function block_element_image_gallery_inner_zoom_modal_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_wrapper"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_wrapper"));

        // line 308
        echo "                            ";
        if (($context["zoomModal"] ?? null)) {
            // line 309
            echo "                                <div class=\"zoom-modal-wrapper\">
                                    ";
            // line 310
            $this->displayBlock('element_image_gallery_inner_zoom_modal', $context, $blocks);
            // line 482
            echo "                                </div>
                            ";
        }
        // line 484
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 310
    public function block_element_image_gallery_inner_zoom_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal"));

        // line 311
        echo "                                        <div class=\"modal is-fullscreen zoom-modal js-zoom-modal";
        if ((($context["imageCount"] ?? null) === 1)) {
            echo " no-thumbnails";
        }
        echo "\"
                                             data-image-zoom-modal=\"true\"
                                             tabindex=\"-1\"
                                             role=\"dialog\">
                                            ";
        // line 315
        $this->displayBlock('element_image_gallery_inner_zoom_modal_dialog', $context, $blocks);
        // line 480
        echo "                                        </div>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 315
    public function block_element_image_gallery_inner_zoom_modal_dialog($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_dialog"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_dialog"));

        // line 316
        echo "                                                <div class=\"modal-dialog\"
                                                     role=\"document\">
                                                    ";
        // line 318
        $this->displayBlock('element_image_gallery_inner_zoom_modal_content', $context, $blocks);
        // line 478
        echo "                                                </div>
                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 318
    public function block_element_image_gallery_inner_zoom_modal_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_content"));

        // line 319
        echo "                                                        <div class=\"modal-content\"";
        if ((1 === twig_compare(($context["imageCount"] ?? null), 1))) {
            echo " data-modal-gallery-slider=\"true\"";
        }
        echo ">
                                                            ";
        // line 320
        $this->displayBlock('element_image_gallery_inner_zoom_modal_close_button', $context, $blocks);
        // line 332
        echo "
                                                            ";
        // line 333
        $this->displayBlock('element_image_gallery_inner_zoom_modal_body', $context, $blocks);
        // line 425
        echo "
                                                            ";
        // line 426
        if ((1 === twig_compare(($context["imageCount"] ?? null), 1))) {
            // line 427
            echo "                                                                ";
            $this->displayBlock('element_image_gallery_inner_zoom_modal_footer', $context, $blocks);
            // line 475
            echo "                                                            ";
        }
        // line 476
        echo "                                                        </div>
                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 320
    public function block_element_image_gallery_inner_zoom_modal_close_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_close_button"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_close_button"));

        // line 321
        echo "                                                                <button type=\"button\"
                                                                        class=\"modal-close close\"
                                                                        data-dismiss=\"modal\"
                                                                        aria-label=\"Close\">
                                                                    ";
        // line 325
        $this->displayBlock('element_image_gallery_inner_zoom_modal_close_icon', $context, $blocks);
        // line 330
        echo "                                                                </button>
                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 325
    public function block_element_image_gallery_inner_zoom_modal_close_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_close_icon"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_close_icon"));

        // line 326
        echo "                                                                        <span aria-hidden=\"true\">
                                                                            ";
        // line 327
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 327);
        })())->display(twig_array_merge($context, ["size" => "sm", "name" => "x"]));
        // line 328
        echo "                                                                        </span>
                                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 333
    public function block_element_image_gallery_inner_zoom_modal_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_body"));

        // line 334
        echo "                                                                <div class=\"modal-body\">

                                                                    ";
        // line 336
        $this->displayBlock('element_image_gallery_inner_zoom_modal_action_buttons', $context, $blocks);
        // line 366
        echo "
                                                                    ";
        // line 367
        $this->displayBlock('element_image_gallery_inner_zoom_modal_slider', $context, $blocks);
        // line 398
        echo "
                                                                    ";
        // line 399
        $this->displayBlock('element_image_gallery_inner_zoom_modal_slider_controls', $context, $blocks);
        // line 423
        echo "                                                                </div>
                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 336
    public function block_element_image_gallery_inner_zoom_modal_action_buttons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_action_buttons"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_action_buttons"));

        // line 337
        echo "                                                                        <div class=\"zoom-modal-actions btn-group\"
                                                                             role=\"group\"
                                                                             aria-label=\"zoom actions\">

                                                                            ";
        // line 341
        $this->displayBlock('element_image_gallery_inner_zoom_modal_action_zoom_out', $context, $blocks);
        // line 348
        echo "
                                                                            ";
        // line 349
        $this->displayBlock('element_image_gallery_inner_zoom_modal_action_zoom_reset', $context, $blocks);
        // line 356
        echo "
                                                                            ";
        // line 357
        $this->displayBlock('element_image_gallery_inner_zoom_modal_action_zoom_in', $context, $blocks);
        // line 364
        echo "                                                                        </div>
                                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 341
    public function block_element_image_gallery_inner_zoom_modal_action_zoom_out($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_action_zoom_out"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_action_zoom_out"));

        // line 342
        echo "                                                                                <button class=\"btn btn-light image-zoom-btn js-image-zoom-out\">
                                                                                    ";
        // line 343
        $this->displayBlock('element_image_gallery_inner_zoom_modal_action_zoom_out_icon', $context, $blocks);
        // line 346
        echo "                                                                                </button>
                                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 343
    public function block_element_image_gallery_inner_zoom_modal_action_zoom_out_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_action_zoom_out_icon"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_action_zoom_out_icon"));

        // line 344
        echo "                                                                                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 344);
        })())->display(twig_array_merge($context, ["name" => "minus-circle"]));
        // line 345
        echo "                                                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 349
    public function block_element_image_gallery_inner_zoom_modal_action_zoom_reset($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_action_zoom_reset"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_action_zoom_reset"));

        // line 350
        echo "                                                                                <button class=\"btn btn-light image-zoom-btn js-image-zoom-reset\">
                                                                                    ";
        // line 351
        $this->displayBlock('element_image_gallery_inner_zoom_modal_action_zoom_reset_icon', $context, $blocks);
        // line 354
        echo "                                                                                </button>
                                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 351
    public function block_element_image_gallery_inner_zoom_modal_action_zoom_reset_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_action_zoom_reset_icon"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_action_zoom_reset_icon"));

        // line 352
        echo "                                                                                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 352);
        })())->display(twig_array_merge($context, ["name" => "screen-minimize"]));
        // line 353
        echo "                                                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 357
    public function block_element_image_gallery_inner_zoom_modal_action_zoom_in($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_action_zoom_in"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_action_zoom_in"));

        // line 358
        echo "                                                                                <button class=\"btn btn-light image-zoom-btn js-image-zoom-in\">
                                                                                    ";
        // line 359
        $this->displayBlock('element_image_gallery_inner_zoom_modal_action_zoom_in_icon', $context, $blocks);
        // line 362
        echo "                                                                                </button>
                                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 359
    public function block_element_image_gallery_inner_zoom_modal_action_zoom_in_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_action_zoom_in_icon"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_action_zoom_in_icon"));

        // line 360
        echo "                                                                                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 360);
        })())->display(twig_array_merge($context, ["name" => "plus-circle"]));
        // line 361
        echo "                                                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 367
    public function block_element_image_gallery_inner_zoom_modal_slider($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider"));

        // line 368
        echo "                                                                        <div class=\"gallery-slider\"
                                                                             data-gallery-slider-container=true>
                                                                            ";
        // line 370
        $this->displayBlock('element_image_gallery_inner_zoom_modal_slider_items', $context, $blocks);
        // line 396
        echo "                                                                        </div>
                                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 370
    public function block_element_image_gallery_inner_zoom_modal_slider_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider_items"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider_items"));

        // line 371
        echo "                                                                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mediaItems"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 372
            echo "                                                                                    ";
            $this->displayBlock('element_image_gallery_inner_zoom_modal_slider_item', $context, $blocks);
            // line 394
            echo "                                                                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 395
        echo "                                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 372
    public function block_element_image_gallery_inner_zoom_modal_slider_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider_item"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider_item"));

        // line 373
        echo "                                                                                        <div class=\"gallery-slider-item\">
                                                                                            ";
        // line 374
        $this->displayBlock('element_image_gallery_inner_zoom_modal_slider_item_zoom_container', $context, $blocks);
        // line 392
        echo "                                                                                        </div>
                                                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 374
    public function block_element_image_gallery_inner_zoom_modal_slider_item_zoom_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider_item_zoom_container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider_item_zoom_container"));

        // line 375
        echo "                                                                                                <div class=\"image-zoom-container\"
                                                                                                     data-image-zoom=\"true\">
                                                                                                    ";
        // line 377
        $this->displayBlock('element_image_gallery_inner_zoom_modal_slider_item_image', $context, $blocks);
        // line 390
        echo "                                                                                                </div>
                                                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 377
    public function block_element_image_gallery_inner_zoom_modal_slider_item_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider_item_image"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider_item_image"));

        // line 378
        echo "                                                                                                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/thumbnail.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 378);
        })())->display(twig_array_merge($context, ["media" =>         // line 379
($context["image"] ?? null), "attributes" => ["class" => "gallery-slider-image js-image-zoom-element js-load-img", "alt" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 382
($context["image"] ?? null), "translated", [], "any", false, false, false, 382), "alt", [], "any", false, false, false, 382)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "translated", [], "any", false, false, false, 382), "alt", [], "any", false, false, false, 382)) : (($context["fallbackImageTitle"] ?? null))), "title" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 383
($context["image"] ?? null), "translated", [], "any", false, false, false, 383), "title", [], "any", false, false, false, 383)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "translated", [], "any", false, false, false, 383), "title", [], "any", false, false, false, 383)) : (($context["fallbackImageTitle"] ?? null)))], "load" => false, "loadOriginalImage" => true, "autoColumnSizes" => false, "name" => "gallery-slider-image-thumbnails"]));
        // line 389
        echo "                                                                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 399
    public function block_element_image_gallery_inner_zoom_modal_slider_controls($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider_controls"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider_controls"));

        // line 400
        echo "                                                                        ";
        if ((1 === twig_compare(($context["imageCount"] ?? null), 1))) {
            // line 401
            echo "                                                                            <div class=\"gallery-slider-controls\"
                                                                                 data-gallery-slider-controls=\"true\">
                                                                                ";
            // line 403
            $this->displayBlock('element_image_gallery_inner_zoom_modal_slider_control_prev', $context, $blocks);
            // line 411
            echo "
                                                                                ";
            // line 412
            $this->displayBlock('element_image_gallery_inner_zoom_modal_slider_control_next', $context, $blocks);
            // line 420
            echo "                                                                            </div>
                                                                        ";
        }
        // line 422
        echo "                                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 403
    public function block_element_image_gallery_inner_zoom_modal_slider_control_prev($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider_control_prev"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider_control_prev"));

        // line 404
        echo "                                                                                    <button class=\"base-slider-controls-prev gallery-slider-controls-prev\"
                                                                                            aria-label=\"";
        // line 405
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.previous")), "html", null, true);
        echo "\">
                                                                                        ";
        // line 406
        $this->displayBlock('element_image_gallery_inner_zoom_modal_slider_control_prev_icon', $context, $blocks);
        // line 409
        echo "                                                                                    </button>
                                                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 406
    public function block_element_image_gallery_inner_zoom_modal_slider_control_prev_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider_control_prev_icon"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider_control_prev_icon"));

        // line 407
        echo "                                                                                            ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 407);
        })())->display(twig_array_merge($context, ["name" => "arrow-head-left"]));
        // line 408
        echo "                                                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 412
    public function block_element_image_gallery_inner_zoom_modal_slider_control_next($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider_control_next"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider_control_next"));

        // line 413
        echo "                                                                                    <button class=\"base-slider-controls-next gallery-slider-controls-next\"
                                                                                            aria-label=\"";
        // line 414
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.next")), "html", null, true);
        echo "\">
                                                                                        ";
        // line 415
        $this->displayBlock('element_image_gallery_inner_zoom_modal_slider_control_next_icon', $context, $blocks);
        // line 418
        echo "                                                                                    </button>
                                                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 415
    public function block_element_image_gallery_inner_zoom_modal_slider_control_next_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider_control_next_icon"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider_control_next_icon"));

        // line 416
        echo "                                                                                            ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 416);
        })())->display(twig_array_merge($context, ["name" => "arrow-head-right"]));
        // line 417
        echo "                                                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 427
    public function block_element_image_gallery_inner_zoom_modal_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_footer"));

        // line 428
        echo "                                                                    <div class=\"modal-footer\">
                                                                        ";
        // line 429
        $this->displayBlock('element_image_gallery_inner_zoom_modal_thumbnails_controls', $context, $blocks);
        // line 443
        echo "
                                                                        ";
        // line 444
        $this->displayBlock('element_image_gallery_inner_zoom_modal_thumbnails', $context, $blocks);
        // line 473
        echo "                                                                    </div>
                                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 429
    public function block_element_image_gallery_inner_zoom_modal_thumbnails_controls($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_thumbnails_controls"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_thumbnails_controls"));

        // line 430
        echo "                                                                            <div class=\"gallery-slider-modal-controls\">
                                                                                <div data-thumbnail-slider-controls=\"true\" class=\"gallery-slider-modal-thumbnails\">
                                                                                    <button class=\"base-slider-controls-prev gallery-slider-thumbnails-controls-prev\"
                                                                                            aria-label=\"";
        // line 433
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.previous")), "html", null, true);
        echo "\">
                                                                                        ";
        // line 434
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 434);
        })())->display(twig_array_merge($context, ["name" => "arrow-head-left"]));
        // line 435
        echo "                                                                                    </button>
                                                                                    <button class=\"base-slider-controls-next gallery-slider-thumbnails-controls-next\"
                                                                                            aria-label=\"";
        // line 437
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.next")), "html", null, true);
        echo "\">
                                                                                        ";
        // line 438
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 438);
        })())->display(twig_array_merge($context, ["name" => "arrow-head-right"]));
        // line 439
        echo "                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 444
    public function block_element_image_gallery_inner_zoom_modal_thumbnails($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_thumbnails"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_thumbnails"));

        // line 445
        echo "                                                                            <div class=\"gallery-slider-thumbnails\"
                                                                                 data-gallery-slider-thumbnails=true>
                                                                                ";
        // line 447
        $this->displayBlock('element_image_gallery_inner_zoom_modal_thumbnails_items', $context, $blocks);
        // line 471
        echo "                                                                            </div>
                                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 447
    public function block_element_image_gallery_inner_zoom_modal_thumbnails_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_thumbnails_items"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_thumbnails_items"));

        // line 448
        echo "                                                                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mediaItems"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 449
            echo "                                                                                        ";
            $this->displayBlock('element_image_gallery_inner_zoom_modal_thumbnails_item', $context, $blocks);
            // line 469
            echo "                                                                                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 470
        echo "                                                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 449
    public function block_element_image_gallery_inner_zoom_modal_thumbnails_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_thumbnails_item"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_thumbnails_item"));

        // line 450
        echo "                                                                                            <div class=\"gallery-slider-thumbnails-item\">
                                                                                                ";
        // line 451
        $this->displayBlock('element_image_gallery_inner_zoom_modal_thumbnails_item_inner', $context, $blocks);
        // line 467
        echo "                                                                                            </div>
                                                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 451
    public function block_element_image_gallery_inner_zoom_modal_thumbnails_item_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_thumbnails_item_inner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_thumbnails_item_inner"));

        // line 452
        echo "                                                                                                    <div class=\"gallery-slider-thumbnails-item-inner\">
                                                                                                        ";
        // line 453
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/thumbnail.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 453);
        })())->display(twig_array_merge($context, ["media" =>         // line 454
($context["image"] ?? null), "sizes" => ["default" => "200px"], "attributes" => ["class" => "gallery-slider-thumbnails-image js-load-img", "alt" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 460
($context["image"] ?? null), "translated", [], "any", false, false, false, 460), "alt", [], "any", false, false, false, 460)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "translated", [], "any", false, false, false, 460), "alt", [], "any", false, false, false, 460)) : (($context["fallbackImageTitle"] ?? null))), "title" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 461
($context["image"] ?? null), "translated", [], "any", false, false, false, 461), "title", [], "any", false, false, false, 461)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "translated", [], "any", false, false, false, 461), "title", [], "any", false, false, false, 461)) : (($context["fallbackImageTitle"] ?? null)))], "load" => false, "name" => "gallery-slider-thumbnails-image-thumbnails"]));
        // line 465
        echo "                                                                                                    </div>
                                                                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/element/cms-element-image-gallery.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  2427 => 465,  2425 => 461,  2424 => 460,  2423 => 454,  2416 => 453,  2413 => 452,  2403 => 451,  2392 => 467,  2390 => 451,  2387 => 450,  2377 => 449,  2367 => 470,  2353 => 469,  2350 => 449,  2332 => 448,  2322 => 447,  2311 => 471,  2309 => 447,  2305 => 445,  2295 => 444,  2282 => 439,  2274 => 438,  2270 => 437,  2266 => 435,  2258 => 434,  2254 => 433,  2249 => 430,  2239 => 429,  2228 => 473,  2226 => 444,  2223 => 443,  2221 => 429,  2218 => 428,  2208 => 427,  2198 => 417,  2189 => 416,  2179 => 415,  2168 => 418,  2166 => 415,  2162 => 414,  2159 => 413,  2149 => 412,  2139 => 408,  2130 => 407,  2120 => 406,  2109 => 409,  2107 => 406,  2103 => 405,  2100 => 404,  2090 => 403,  2080 => 422,  2076 => 420,  2074 => 412,  2071 => 411,  2069 => 403,  2065 => 401,  2062 => 400,  2052 => 399,  2042 => 389,  2040 => 383,  2039 => 382,  2038 => 379,  2030 => 378,  2020 => 377,  2009 => 390,  2007 => 377,  2003 => 375,  1993 => 374,  1982 => 392,  1980 => 374,  1977 => 373,  1967 => 372,  1957 => 395,  1943 => 394,  1940 => 372,  1922 => 371,  1912 => 370,  1901 => 396,  1899 => 370,  1895 => 368,  1885 => 367,  1875 => 361,  1866 => 360,  1856 => 359,  1845 => 362,  1843 => 359,  1840 => 358,  1830 => 357,  1820 => 353,  1811 => 352,  1801 => 351,  1790 => 354,  1788 => 351,  1785 => 350,  1775 => 349,  1765 => 345,  1756 => 344,  1746 => 343,  1735 => 346,  1733 => 343,  1730 => 342,  1720 => 341,  1709 => 364,  1707 => 357,  1704 => 356,  1702 => 349,  1699 => 348,  1697 => 341,  1691 => 337,  1681 => 336,  1670 => 423,  1668 => 399,  1665 => 398,  1663 => 367,  1660 => 366,  1658 => 336,  1654 => 334,  1644 => 333,  1633 => 328,  1625 => 327,  1622 => 326,  1612 => 325,  1601 => 330,  1599 => 325,  1593 => 321,  1583 => 320,  1572 => 476,  1569 => 475,  1566 => 427,  1564 => 426,  1561 => 425,  1559 => 333,  1556 => 332,  1554 => 320,  1547 => 319,  1537 => 318,  1526 => 478,  1524 => 318,  1520 => 316,  1510 => 315,  1499 => 480,  1497 => 315,  1487 => 311,  1477 => 310,  1467 => 484,  1463 => 482,  1461 => 310,  1458 => 309,  1455 => 308,  1445 => 307,  1434 => 298,  1431 => 297,  1422 => 296,  1419 => 295,  1410 => 294,  1408 => 293,  1405 => 292,  1395 => 291,  1384 => 288,  1381 => 287,  1372 => 286,  1369 => 285,  1360 => 284,  1358 => 283,  1355 => 282,  1345 => 281,  1334 => 300,  1332 => 291,  1329 => 290,  1327 => 281,  1324 => 280,  1314 => 279,  1303 => 270,  1301 => 265,  1294 => 264,  1291 => 263,  1288 => 262,  1285 => 261,  1283 => 260,  1280 => 259,  1278 => 257,  1277 => 256,  1276 => 254,  1273 => 253,  1263 => 252,  1252 => 272,  1250 => 252,  1247 => 251,  1237 => 250,  1227 => 275,  1213 => 274,  1210 => 250,  1192 => 249,  1182 => 248,  1171 => 276,  1169 => 248,  1161 => 246,  1151 => 245,  1141 => 305,  1136 => 302,  1134 => 279,  1131 => 278,  1129 => 245,  1123 => 244,  1114 => 243,  1111 => 242,  1101 => 241,  1088 => 229,  1085 => 228,  1075 => 227,  1065 => 233,  1051 => 232,  1048 => 227,  1030 => 226,  1020 => 225,  1010 => 236,  1006 => 234,  1004 => 225,  995 => 224,  992 => 223,  982 => 222,  971 => 217,  968 => 216,  959 => 213,  956 => 212,  954 => 210,  947 => 209,  944 => 208,  941 => 207,  938 => 206,  936 => 205,  933 => 204,  930 => 203,  927 => 202,  925 => 201,  922 => 200,  920 => 198,  919 => 197,  918 => 196,  916 => 194,  914 => 193,  903 => 192,  893 => 191,  883 => 182,  874 => 181,  864 => 180,  853 => 183,  851 => 180,  847 => 179,  838 => 178,  828 => 177,  818 => 173,  809 => 172,  799 => 171,  788 => 174,  786 => 171,  782 => 170,  773 => 169,  763 => 168,  753 => 185,  751 => 177,  748 => 176,  745 => 168,  735 => 167,  725 => 188,  721 => 186,  719 => 167,  711 => 166,  708 => 165,  705 => 164,  695 => 163,  683 => 155,  681 => 153,  674 => 152,  671 => 151,  668 => 150,  665 => 149,  663 => 148,  660 => 147,  657 => 146,  654 => 145,  652 => 144,  649 => 143,  647 => 141,  646 => 140,  645 => 139,  644 => 137,  634 => 136,  631 => 135,  621 => 134,  611 => 159,  597 => 158,  594 => 134,  576 => 133,  566 => 132,  555 => 160,  553 => 132,  549 => 130,  539 => 129,  529 => 189,  527 => 163,  524 => 162,  521 => 129,  511 => 128,  501 => 220,  498 => 219,  495 => 191,  492 => 190,  489 => 128,  486 => 127,  476 => 126,  464 => 237,  462 => 222,  459 => 221,  457 => 126,  444 => 125,  438 => 123,  429 => 122,  419 => 121,  408 => 485,  406 => 307,  403 => 306,  401 => 241,  398 => 240,  396 => 121,  392 => 119,  387 => 118,  384 => 117,  381 => 116,  375 => 114,  372 => 113,  368 => 111,  366 => 110,  357 => 109,  347 => 108,  337 => 491,  333 => 489,  331 => 488,  328 => 487,  326 => 108,  323 => 107,  320 => 106,  317 => 91,  315 => 90,  312 => 89,  310 => 76,  309 => 74,  308 => 73,  307 => 70,  306 => 68,  305 => 67,  304 => 63,  301 => 62,  289 => 60,  286 => 59,  276 => 58,  265 => 492,  263 => 58,  256 => 57,  253 => 56,  250 => 55,  248 => 53,  246 => 52,  244 => 51,  241 => 50,  238 => 49,  236 => 47,  234 => 46,  232 => 45,  229 => 44,  226 => 43,  223 => 39,  221 => 38,  218 => 37,  216 => 36,  213 => 35,  210 => 34,  207 => 33,  204 => 31,  201 => 30,  198 => 28,  195 => 27,  192 => 26,  190 => 25,  187 => 24,  184 => 23,  181 => 22,  178 => 21,  175 => 20,  172 => 19,  169 => 18,  166 => 17,  163 => 16,  160 => 15,  157 => 14,  154 => 13,  151 => 12,  149 => 11,  146 => 10,  140 => 9,  137 => 8,  132 => 7,  130 => 6,  127 => 5,  124 => 4,  121 => 3,  119 => 2,  100 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block element_image_gallery %}
    {# cms element data and configs #}
    {% if element.fieldConfig is defined and element.data is defined %}
        {% set sliderConfig = element.fieldConfig.elements %}

        {% set mediaItems = [] %}
        {% for item in element.data.sliderItems %}
            {% set mediaItems = mediaItems|merge([item.media]) %}
        {% endfor %}

        {% set zoom = sliderConfig.zoom.value %}
        {% set gutter = sliderConfig.gutter.value %}
        {% set keepAspectRatioOnZoom = sliderConfig.keepAspectRatioOnZoom.value %}
        {% set magnifierOverGallery = sliderConfig.magnifierOverGallery.value %}
        {% set zoomModal = sliderConfig.fullScreen.value %}
        {% set minHeight = sliderConfig.minHeight.value %}
        {% set displayMode = sliderConfig.displayMode.value %}
        {% set navigationArrows = sliderConfig.navigationArrows.value %}
        {% set navigationDots = sliderConfig.navigationDots.value %}
        {% set galleryPosition = sliderConfig.galleryPosition.value %}
        {% set verticalAlign = sliderConfig.verticalAlign.value %}
        {% set zoomImageContainerSelector = sliderConfig.zoomImageContainerSelector.value %}
    {% endif %}

    {% if fallbackImageTitle is not defined %}
        {% set fallbackImageTitle = '' %}
    {% endif %}

    {# @var mediaItems \\Shopware\\Core\\Content\\Media\\MediaCollection #}
    {% set imageCount = mediaItems|length %}

    {# too many underneath thumbs or slider dots make them hard to see #}
    {% set maxItemsToShowMobileNav = 5 %}
    {% set maxItemsToShowNav = 8 %}

    {% set magnifierOptions = [] %}

    {% if magnifierOverGallery %}
        {% set magnifierOptions = magnifierOptions|merge({
            'magnifierOverGallery': true,
            'cursorType': 'crosshair'
        }) %}
    {% endif %}

    {% if keepAspectRatioOnZoom is defined and keepAspectRatioOnZoom is not null %}
        {% set magnifierOptions = magnifierOptions|merge({
            'keepAspectRatioOnZoom': keepAspectRatioOnZoom
        }) %}
    {% endif %}

    {% if zoomImageContainerSelector %}
        {% set magnifierOptions = magnifierOptions|merge({
            'zoomImageContainerSelector': zoomImageContainerSelector
        }) %}
    {% endif %}

    <div class=\"cms-element-{{ element.type }}{% if displayMode == \"standard\" and verticalAlign %} has-vertical-alignment{% endif %}\">
        {% block element_image_gallery_alignment %}
            {% if config.verticalAlign.value %}
                <div class=\"cms-element-alignment{% if verticalAlign == \"center\" %} align-self-center{% elseif verticalAlign == \"flex-end\" %} align-self-end{% else %} align-self-start{% endif %}\">
            {% endif %}

                {% set gallerySliderOptions = {
                    slider: {
                        navPosition: 'bottom',
                        speed: 500,
                        gutter: gutter ? gutter : 0,
                        controls: navigationArrows ? true : false,
                        autoHeight: false,
                        startIndex: startIndexThumbnails ? startIndexThumbnails : null
                    },
                    thumbnailSlider: {
                        items: (galleryPosition == \"underneath\") ? 6 : 5,
                        slideBy: (galleryPosition == \"underneath\") ? 5 : 4,
                        controls: true,
                        startIndex: startIndexThumbnails ? startIndexThumbnails : null,
                        responsive: {
                            xs: {
                                enabled: false,
                                controls: false
                            },
                            sm: {
                                enabled: false,
                                controls: false
                            }
                        }
                    }
                } %}

                {% if galleryPosition == \"left\" %}
                    {% set gallerySliderOptions = gallerySliderOptions|replace_recursive({
                        thumbnailSlider: {
                            responsive: {
                                md: {
                                    axis: 'vertical'
                                },
                                lg: {
                                    axis: 'vertical'
                                },
                                xl: {
                                    axis: 'vertical'
                                }
                            }
                        }
                    }) %}
                {% endif %}

                {% block element_image_gallery_inner %}
                    <div class=\"row gallery-slider-row{% if imageCount == 1 %} is-single-image{% else %} is-loading{% endif %} js-gallery-zoom-modal-container\"
                            {% if zoom %}
                                data-magnifier=\"true\"
                            {% endif %}
                            {% if magnifierOptions|length > 0 %}
                                data-magnifier-options='{{ magnifierOptions|json_encode|raw }}'
                            {% endif %}
                            {% if imageCount > 1 %}
                                data-gallery-slider=\"true\"
                                data-gallery-slider-options='{{ gallerySliderOptions|json_encode }}'
                            {% endif %}>

                        {% block element_image_gallery_inner_col %}
                            <div class=\"gallery-slider-col{% if galleryPosition == \"left\" %} col order-1 order-md-2{% elseif galleryPosition == \"underneath\" %} col-12 order-1{% endif %}\"
                                 {% if zoomModal %}data-zoom-modal=\"true\"{% endif %}>
                                {# option \"magnifierOverGallery\" shows zoom container over gallery #}
                                <div class=\"base-slider gallery-slider{% if navigationArrows == \"outside\" %} has-nav-outside{% endif %}{% if navigationDots == \"outside\" %} has-dots-outside{% endif %}{% if magnifierOverGallery %} js-magnifier-zoom-image-container{% endif %}\">
                                    {% block element_image_gallery_inner_wrapper %}
                                        {% if imageCount > 1 %}
                                            {% block element_image_gallery_inner_multiple_slides %}
                                                {% block element_image_gallery_inner_container %}
                                                    <div class=\"gallery-slider-container\"
                                                         data-gallery-slider-container=\"true\">
                                                        {% block element_image_gallery_inner_items %}
                                                            {% for image in mediaItems %}
                                                                {% block element_image_gallery_inner_item %}
                                                                    <div class=\"gallery-slider-item-container\">
                                                                        <div class=\"gallery-slider-item is-{{ displayMode }} js-magnifier-container\"{% if minHeight and  (displayMode == \"cover\" or displayMode == \"contain\" ) %} style=\"min-height: {{ minHeight }}\"{% endif %}>
                                                                            {% set attributes = {
                                                                                'class': 'img-fluid gallery-slider-image magnifier-image js-magnifier-image',
                                                                                'alt': (image.translated.alt ?: fallbackImageTitle),
                                                                                'title': (image.translated.title ?: fallbackImageTitle),
                                                                                'data-full-image': image.url
                                                                            } %}

                                                                            {% if displayMode == 'cover' or displayMode == 'contain' %}
                                                                                {% set attributes = attributes|merge({ 'data-object-fit': displayMode }) %}
                                                                            {% endif %}

                                                                            {% if isProduct %}
                                                                                {% set attributes = attributes|merge({ 'itemprop': 'image' }) %}
                                                                            {% endif %}

                                                                            {% sw_thumbnails 'gallery-slider-image-thumbnails' with {
                                                                                media: image
                                                                            } %}
                                                                        </div>
                                                                    </div>
                                                                {% endblock %}
                                                            {% endfor %}
                                                        {% endblock %}
                                                    </div>
                                                {% endblock %}

                                                {% block element_image_gallery_inner_controls %}
                                                    {% if navigationArrows %}
                                                        <div class=\"gallery-slider-controls\"
                                                             data-gallery-slider-controls=\"{% if navigationArrows %}true{% else %}false{% endif %}\">
                                                            {% block element_image_gallery_inner_control_items %}
                                                                {% block element_image_gallery_inner_control_prev %}
                                                                    <button class=\"base-slider-controls-prev gallery-slider-controls-prev{% if navigationArrows == \"outside\" %} is-nav-prev-outside{% elseif navigationArrows == \"inside\" %} is-nav-prev-inside{% endif %}\"
                                                                            aria-label=\"{{ 'general.previous'|trans|striptags }}\">
                                                                        {% block element_image_gallery_inner_control_prev_icon %}
                                                                            {% sw_icon 'arrow-head-left' %}
                                                                        {% endblock %}
                                                                    </button>
                                                                {% endblock %}

                                                                {% block element_image_gallery_inner_control_next %}
                                                                    <button class=\"base-slider-controls-next gallery-slider-controls-next{% if navigationArrows == \"outside\" %} is-nav-next-outside{% elseif navigationArrows == \"inside\" %} is-nav-next-inside{% endif %}\"
                                                                            aria-label=\"{{ 'general.next'|trans|striptags }}\">
                                                                        {% block element_image_gallery_inner_control_next_icon %}
                                                                            {% sw_icon 'arrow-head-right' %}
                                                                        {% endblock %}
                                                                    </button>
                                                                {% endblock %}
                                                            {% endblock %}
                                                        </div>
                                                    {% endif %}
                                                {% endblock %}
                                            {% endblock %}
                                        {% else %}
                                            {% block element_image_gallery_inner_single %}
                                                <div class=\"gallery-slider-single-image is-{{ displayMode }} js-magnifier-container\"{% if minHeight %} style=\"min-height: {{ minHeight }}\"{% endif %}>
                                                    {% if imageCount > 0 %}
                                                        {% set attributes = {
                                                            'class': 'img-fluid gallery-slider-image magnifier-image js-magnifier-image',
                                                            'alt': (mediaItems|first.translated.alt ?: fallbackImageTitle),
                                                            'title': (mediaItems|first.translated.title ?: fallbackImageTitle),
                                                            'data-full-image': mediaItems|first.url
                                                        } %}

                                                        {% if displayMode == 'cover' or displayMode == 'contain' %}
                                                            {% set attributes = attributes|merge({ 'data-object-fit': displayMode }) %}
                                                        {% endif %}

                                                        {% if isProduct %}
                                                            {% set attributes = attributes|merge({ 'itemprop': 'image' }) %}
                                                        {% endif %}

                                                        {% sw_thumbnails 'gallery-slider-image-thumbnails' with {
                                                            media: mediaItems|first,
                                                        } %}
                                                    {% else %}
                                                        {% sw_icon 'placeholder' style {
                                                            'size': 'fluid'
                                                        } %}
                                                    {% endif %}
                                                </div>
                                            {% endblock %}
                                        {% endif %}
                                    {% endblock %}

                                    {% block element_image_gallery_slider_dots %}
                                        {% if imageCount > 1 and navigationDots %}
                                            <div class=\"base-slider-dots {% if imageCount > maxItemsToShowNav %} hide-dots{% elseif imageCount > maxItemsToShowMobileNav %} hide-dots-mobile{% endif %}\">
                                                {% block element_image_gallery_slider_dots_buttons %}
                                                    {% for image in mediaItems %}
                                                        {% block element_image_gallery_slider_dots_button %}
                                                            <button class=\"base-slider-dot\"
                                                                    data-nav-dot=\"{{ loop.index }}\"
                                                                    tabindex=\"-1\"></button>
                                                        {% endblock %}
                                                    {% endfor %}
                                                {% endblock %}
                                            </div>
                                        {% endif %}
                                    {% endblock %}
                                </div>
                            </div>
                        {% endblock %}

                        {% block element_image_gallery_inner_thumbnails_col %}
                            {% if imageCount > 1 %}
                                <div class=\"gallery-slider-thumbnails-col{% if galleryPosition == \"left\" %} col-0 col-md-auto order-2 order-md-1 is-left{% elseif galleryPosition == \"underneath\" %} col-12 order-2 is-underneath{% endif %}\">
                                    <div class=\"gallery-slider-thumbnails-container{% if galleryPosition == \"underneath\" %} is-underneath{% endif %}\">
                                        {% block element_image_gallery_inner_thumbnails %}
                                            <div class=\"gallery-slider-thumbnails{% if galleryPosition == \"underneath\" %} is-underneath{% endif %}\"
                                                 data-gallery-slider-thumbnails=\"true\">
                                                {% block element_image_gallery_inner_thumbnails_items %}
                                                    {% for image in mediaItems %}
                                                        {% block element_image_gallery_inner_thumbnails_item %}
                                                            <div class=\"gallery-slider-thumbnails-item\">
                                                                {% block element_image_gallery_inner_thumbnails_item_inner %}
                                                                    <div class=\"gallery-slider-thumbnails-item-inner\">
                                                                        {% set attributes = {
                                                                            'class': 'gallery-slider-thumbnails-image',
                                                                            'alt': (image.translated.alt ?: fallbackImageTitle),
                                                                            'title': (image.translated.title ?: fallbackImageTitle)
                                                                        } %}

                                                                        {% if isProduct %}
                                                                            {% set attributes = attributes|merge({ 'itemprop': 'image' }) %}
                                                                        {% endif %}

                                                                        {% sw_thumbnails 'gallery-slider-thumbnails-image-thumbnails' with {
                                                                            media: image,
                                                                            sizes: {
                                                                                'default': '200px'
                                                                            }
                                                                        } %}
                                                                    </div>
                                                                {% endblock %}
                                                            </div>
                                                        {% endblock %}
                                                    {% endfor %}
                                                {% endblock %}
                                            </div>
                                        {% endblock %}

                                        {% block element_image_gallery_inner_thumbnails_controls %}
                                            <div data-thumbnail-slider-controls=\"true\" class=\"gallery-slider-thumbnails-controls\">
                                                {% block element_image_gallery_inner_thumbnails_controls_prev %}
                                                    <button class=\"base-slider-controls-prev gallery-slider-thumbnails-controls-prev\">
                                                        {% if galleryPosition == \"left\" %}
                                                            {% sw_icon 'arrow-head-up' %}
                                                        {% elseif galleryPosition == \"underneath\" %}
                                                            {% sw_icon 'arrow-head-left' %}
                                                        {% endif %}
                                                    </button>
                                                {% endblock %}

                                                {% block element_image_gallery_inner_thumbnails_controls_next %}
                                                    <button class=\"base-slider-controls-next gallery-slider-thumbnails-controls-next\">
                                                        {% if galleryPosition == \"left\" %}
                                                            {% sw_icon 'arrow-head-down' %}
                                                        {% elseif galleryPosition == \"underneath\" %}
                                                            {% sw_icon 'arrow-head-right' %}
                                                        {% endif %}
                                                    </button>
                                                {% endblock %}
                                            </div>
                                        {% endblock %}
                                    </div>
                                </div>
                            {% endif %}
                        {% endblock %}

                        {% block element_image_gallery_inner_zoom_modal_wrapper %}
                            {% if zoomModal %}
                                <div class=\"zoom-modal-wrapper\">
                                    {% block element_image_gallery_inner_zoom_modal %}
                                        <div class=\"modal is-fullscreen zoom-modal js-zoom-modal{% if imageCount is same as(1) %} no-thumbnails{% endif %}\"
                                             data-image-zoom-modal=\"true\"
                                             tabindex=\"-1\"
                                             role=\"dialog\">
                                            {% block element_image_gallery_inner_zoom_modal_dialog %}
                                                <div class=\"modal-dialog\"
                                                     role=\"document\">
                                                    {% block element_image_gallery_inner_zoom_modal_content %}
                                                        <div class=\"modal-content\"{% if imageCount > 1 %} data-modal-gallery-slider=\"true\"{% endif %}>
                                                            {% block element_image_gallery_inner_zoom_modal_close_button %}
                                                                <button type=\"button\"
                                                                        class=\"modal-close close\"
                                                                        data-dismiss=\"modal\"
                                                                        aria-label=\"Close\">
                                                                    {% block element_image_gallery_inner_zoom_modal_close_icon %}
                                                                        <span aria-hidden=\"true\">
                                                                            {% sw_icon 'x' style { 'size': 'sm' } %}
                                                                        </span>
                                                                    {% endblock %}
                                                                </button>
                                                            {% endblock %}

                                                            {% block element_image_gallery_inner_zoom_modal_body %}
                                                                <div class=\"modal-body\">

                                                                    {% block element_image_gallery_inner_zoom_modal_action_buttons %}
                                                                        <div class=\"zoom-modal-actions btn-group\"
                                                                             role=\"group\"
                                                                             aria-label=\"zoom actions\">

                                                                            {% block element_image_gallery_inner_zoom_modal_action_zoom_out %}
                                                                                <button class=\"btn btn-light image-zoom-btn js-image-zoom-out\">
                                                                                    {% block element_image_gallery_inner_zoom_modal_action_zoom_out_icon %}
                                                                                        {% sw_icon 'minus-circle' %}
                                                                                    {% endblock %}
                                                                                </button>
                                                                            {% endblock %}

                                                                            {% block element_image_gallery_inner_zoom_modal_action_zoom_reset %}
                                                                                <button class=\"btn btn-light image-zoom-btn js-image-zoom-reset\">
                                                                                    {% block element_image_gallery_inner_zoom_modal_action_zoom_reset_icon %}
                                                                                        {% sw_icon 'screen-minimize' %}
                                                                                    {% endblock %}
                                                                                </button>
                                                                            {% endblock %}

                                                                            {% block element_image_gallery_inner_zoom_modal_action_zoom_in %}
                                                                                <button class=\"btn btn-light image-zoom-btn js-image-zoom-in\">
                                                                                    {% block element_image_gallery_inner_zoom_modal_action_zoom_in_icon %}
                                                                                        {% sw_icon 'plus-circle' %}
                                                                                    {% endblock %}
                                                                                </button>
                                                                            {% endblock %}
                                                                        </div>
                                                                    {% endblock %}

                                                                    {% block element_image_gallery_inner_zoom_modal_slider %}
                                                                        <div class=\"gallery-slider\"
                                                                             data-gallery-slider-container=true>
                                                                            {% block element_image_gallery_inner_zoom_modal_slider_items %}
                                                                                {% for image in mediaItems %}
                                                                                    {% block element_image_gallery_inner_zoom_modal_slider_item %}
                                                                                        <div class=\"gallery-slider-item\">
                                                                                            {% block element_image_gallery_inner_zoom_modal_slider_item_zoom_container %}
                                                                                                <div class=\"image-zoom-container\"
                                                                                                     data-image-zoom=\"true\">
                                                                                                    {% block element_image_gallery_inner_zoom_modal_slider_item_image %}
                                                                                                        {% sw_thumbnails 'gallery-slider-image-thumbnails' with {
                                                                                                            media: image,
                                                                                                            attributes: {
                                                                                                                'class': 'gallery-slider-image js-image-zoom-element js-load-img',
                                                                                                                'alt': (image.translated.alt ?: fallbackImageTitle),
                                                                                                                'title': (image.translated.title ?: fallbackImageTitle)
                                                                                                            },
                                                                                                            load: false,
                                                                                                            loadOriginalImage: true,
                                                                                                            autoColumnSizes: false
                                                                                                        } %}
                                                                                                    {% endblock %}
                                                                                                </div>
                                                                                            {% endblock %}
                                                                                        </div>
                                                                                    {% endblock %}
                                                                                {% endfor %}
                                                                            {% endblock %}
                                                                        </div>
                                                                    {% endblock %}

                                                                    {% block element_image_gallery_inner_zoom_modal_slider_controls %}
                                                                        {% if imageCount > 1 %}
                                                                            <div class=\"gallery-slider-controls\"
                                                                                 data-gallery-slider-controls=\"true\">
                                                                                {% block element_image_gallery_inner_zoom_modal_slider_control_prev %}
                                                                                    <button class=\"base-slider-controls-prev gallery-slider-controls-prev\"
                                                                                            aria-label=\"{{ 'general.previous'|trans|striptags }}\">
                                                                                        {% block element_image_gallery_inner_zoom_modal_slider_control_prev_icon %}
                                                                                            {% sw_icon 'arrow-head-left' %}
                                                                                        {% endblock %}
                                                                                    </button>
                                                                                {% endblock %}

                                                                                {% block element_image_gallery_inner_zoom_modal_slider_control_next %}
                                                                                    <button class=\"base-slider-controls-next gallery-slider-controls-next\"
                                                                                            aria-label=\"{{ 'general.next'|trans|striptags }}\">
                                                                                        {% block element_image_gallery_inner_zoom_modal_slider_control_next_icon %}
                                                                                            {% sw_icon 'arrow-head-right' %}
                                                                                        {% endblock %}
                                                                                    </button>
                                                                                {% endblock %}
                                                                            </div>
                                                                        {% endif %}
                                                                    {% endblock %}
                                                                </div>
                                                            {% endblock %}

                                                            {% if imageCount > 1 %}
                                                                {% block element_image_gallery_inner_zoom_modal_footer %}
                                                                    <div class=\"modal-footer\">
                                                                        {% block element_image_gallery_inner_zoom_modal_thumbnails_controls %}
                                                                            <div class=\"gallery-slider-modal-controls\">
                                                                                <div data-thumbnail-slider-controls=\"true\" class=\"gallery-slider-modal-thumbnails\">
                                                                                    <button class=\"base-slider-controls-prev gallery-slider-thumbnails-controls-prev\"
                                                                                            aria-label=\"{{ 'general.previous'|trans|striptags }}\">
                                                                                        {% sw_icon 'arrow-head-left' %}
                                                                                    </button>
                                                                                    <button class=\"base-slider-controls-next gallery-slider-thumbnails-controls-next\"
                                                                                            aria-label=\"{{ 'general.next'|trans|striptags }}\">
                                                                                        {% sw_icon 'arrow-head-right' %}
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        {% endblock %}

                                                                        {% block element_image_gallery_inner_zoom_modal_thumbnails %}
                                                                            <div class=\"gallery-slider-thumbnails\"
                                                                                 data-gallery-slider-thumbnails=true>
                                                                                {% block element_image_gallery_inner_zoom_modal_thumbnails_items %}
                                                                                    {% for image in mediaItems %}
                                                                                        {% block element_image_gallery_inner_zoom_modal_thumbnails_item %}
                                                                                            <div class=\"gallery-slider-thumbnails-item\">
                                                                                                {% block element_image_gallery_inner_zoom_modal_thumbnails_item_inner %}
                                                                                                    <div class=\"gallery-slider-thumbnails-item-inner\">
                                                                                                        {% sw_thumbnails 'gallery-slider-thumbnails-image-thumbnails' with {
                                                                                                            media: image,
                                                                                                            sizes: {
                                                                                                                'default': '200px'
                                                                                                            },
                                                                                                            attributes: {
                                                                                                                'class': 'gallery-slider-thumbnails-image js-load-img',
                                                                                                                'alt': (image.translated.alt ?: fallbackImageTitle),
                                                                                                                'title': (image.translated.title ?: fallbackImageTitle)
                                                                                                            },
                                                                                                            load: false
                                                                                                        } %}
                                                                                                    </div>
                                                                                                {% endblock %}
                                                                                            </div>
                                                                                        {% endblock %}
                                                                                    {% endfor %}
                                                                                {% endblock %}
                                                                            </div>
                                                                        {% endblock %}
                                                                    </div>
                                                                {% endblock %}
                                                            {% endif %}
                                                        </div>
                                                    {% endblock %}
                                                </div>
                                            {% endblock %}
                                        </div>
                                    {% endblock %}
                                </div>
                            {% endif %}
                        {% endblock %}
                    </div>
                {% endblock %}

            {% if config.verticalAlign.value %}
                </div>
            {% endif %}
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/element/cms-element-image-gallery.html.twig", "/var/www/stage.joes-toolbox.de/vendor/shopware/storefront/Resources/views/storefront/element/cms-element-image-gallery.html.twig");
    }
}
