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

/* @Storefront/storefront/page/product-detail/index.html.twig */
class __TwigTemplate_94ca84f0ec18baec6d02e5338ed198eb4bec97da6e07c5824d99a996b00d14c5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'base_head' => [$this, 'block_base_head'],
            'base_content' => [$this, 'block_base_content'],
            'page_product_detail' => [$this, 'block_page_product_detail'],
            'page_product_detail_inner' => [$this, 'block_page_product_detail_inner'],
            'page_product_detail_content' => [$this, 'block_page_product_detail_content'],
            'page_product_detail_headline' => [$this, 'block_page_product_detail_headline'],
            'page_product_detail_main' => [$this, 'block_page_product_detail_main'],
            'page_product_detail_media' => [$this, 'block_page_product_detail_media'],
            'page_product_detail_buy' => [$this, 'block_page_product_detail_buy'],
            'page_product_detail_tabs' => [$this, 'block_page_product_detail_tabs'],
            'page_product_detail_cross_selling' => [$this, 'block_page_product_detail_cross_selling'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/product-detail/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/product-detail/index.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/base.html.twig", "@Storefront/storefront/page/product-detail/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_base_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_head"));

        // line 4
        echo "    ";
        $this->loadTemplate("@Storefront/storefront/page/product-detail/meta.html.twig", "@Storefront/storefront/page/product-detail/index.html.twig", 4)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_base_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_content"));

        // line 8
        echo "    ";
        $this->displayBlock('page_product_detail', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_page_product_detail($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail"));

        // line 9
        echo "
        <div class=\"product-detail\"
             itemscope
             itemtype=\"https://schema.org/Product\">
            ";
        // line 13
        $this->displayBlock('page_product_detail_inner', $context, $blocks);
        // line 75
        echo "        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_page_product_detail_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_inner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_inner"));

        // line 14
        echo "                ";
        $this->displayBlock('page_product_detail_content', $context, $blocks);
        // line 58
        echo "
                ";
        // line 59
        $this->displayBlock('page_product_detail_tabs', $context, $blocks);
        // line 64
        echo "
                ";
        // line 65
        $this->displayBlock('page_product_detail_cross_selling', $context, $blocks);
        // line 74
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_page_product_detail_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_content"));

        // line 15
        echo "                    <div class=\"product-detail-content\">
                        ";
        // line 16
        $this->displayBlock('page_product_detail_headline', $context, $blocks);
        // line 21
        echo "
                        ";
        // line 22
        $context["mediaItems"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 22), "media", [], "any", false, false, false, 22), "media", [], "any", false, false, false, 22);
        // line 23
        echo "
                        ";
        // line 24
        $this->displayBlock('page_product_detail_main', $context, $blocks);
        // line 56
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_page_product_detail_headline($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_headline"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_headline"));

        // line 17
        echo "                            <div class=\"row align-items-center product-detail-headline\">
                                ";
        // line 18
        $this->loadTemplate("@Storefront/storefront/page/product-detail/headline.html.twig", "@Storefront/storefront/page/product-detail/index.html.twig", 18)->display($context);
        // line 19
        echo "                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_page_product_detail_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_main"));

        // line 25
        echo "                            <div class=\"row product-detail-main\">
                                ";
        // line 26
        $this->displayBlock('page_product_detail_media', $context, $blocks);
        // line 48
        echo "
                                ";
        // line 49
        $this->displayBlock('page_product_detail_buy', $context, $blocks);
        // line 54
        echo "                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_page_product_detail_media($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_media"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_media"));

        // line 27
        echo "                                    <div class=\"col-lg-7 product-detail-media\">
                                        ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 28), "media", [], "any", false, false, false, 28)) {
            // line 29
            echo "                                            ";
            $this->loadTemplate("@Storefront/storefront/element/cms-element-image-gallery.html.twig", "@Storefront/storefront/page/product-detail/index.html.twig", 29)->display(twig_array_merge($context, ["mediaItems" =>             // line 30
($context["mediaItems"] ?? null), "zoom" => true, "zoomModal" => true, "displayMode" => "contain", "gutter" => 5, "minHeight" => "430px", "navigationArrows" => "inside", "navigationDots" => "inside", "galleryPosition" => "left", "isProduct" => true, "fallbackImageTitle" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 40
($context["page"] ?? null), "product", [], "any", false, false, false, 40), "translated", [], "any", false, false, false, 40), "name", [], "any", false, false, false, 40), "startIndexThumbnails" => (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 41
($context["page"] ?? null), "product", [], "any", false, false, false, 41), "cover", [], "any", false, false, false, 41), "position", [], "any", false, false, false, 41) + 1), "startIndexSlider" => (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 42
($context["page"] ?? null), "product", [], "any", false, false, false, 42), "cover", [], "any", false, false, false, 42), "position", [], "any", false, false, false, 42) + 1), "keepAspectRatioOnZoom" => false]));
            // line 45
            echo "                                        ";
        }
        // line 46
        echo "                                    </div>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 49
    public function block_page_product_detail_buy($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy"));

        // line 50
        echo "                                    <div class=\"col-lg-5 product-detail-buy\">
                                        ";
        // line 51
        $this->loadTemplate("@Storefront/storefront/page/product-detail/buy-widget.html.twig", "@Storefront/storefront/page/product-detail/index.html.twig", 51)->display($context);
        // line 52
        echo "                                    </div>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 59
    public function block_page_product_detail_tabs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_tabs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_tabs"));

        // line 60
        echo "                    <div class=\"product-detail-tabs\">
                        ";
        // line 61
        $this->loadTemplate("@Storefront/storefront/page/product-detail/tabs.html.twig", "@Storefront/storefront/page/product-detail/index.html.twig", 61)->display($context);
        // line 62
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 65
    public function block_page_product_detail_cross_selling($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_cross_selling"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_cross_selling"));

        // line 66
        echo "                    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "crossSellings", [], "any", false, true, false, 66), "elements", [], "any", true, true, false, 66) && (1 === twig_compare(twig_length_filter($this->env, twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "crossSellings", [], "any", false, false, false, 66), "elements", [], "any", false, false, false, 66), function ($__item__) use ($context, $macros) { $context["item"] = $__item__; return (1 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "total", [], "any", false, false, false, 66), 0)); })), 0)))) {
            // line 67
            echo "                        <div class=\"product-detail-tabs product-detail-cross-selling\">
                            ";
            // line 68
            $this->loadTemplate("@Storefront/storefront/page/product-detail/cross-selling/tabs.html.twig", "@Storefront/storefront/page/product-detail/index.html.twig", 68)->display(twig_array_merge($context, ["crossSellings" => twig_get_attribute($this->env, $this->source,             // line 69
($context["page"] ?? null), "crossSellings", [], "any", false, false, false, 69)]));
            // line 71
            echo "                        </div>
                    ";
        }
        // line 73
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 73,  371 => 71,  369 => 69,  368 => 68,  365 => 67,  362 => 66,  352 => 65,  341 => 62,  339 => 61,  336 => 60,  326 => 59,  315 => 52,  313 => 51,  310 => 50,  300 => 49,  289 => 46,  286 => 45,  284 => 42,  283 => 41,  282 => 40,  281 => 30,  279 => 29,  277 => 28,  274 => 27,  264 => 26,  253 => 54,  251 => 49,  248 => 48,  246 => 26,  243 => 25,  233 => 24,  222 => 19,  220 => 18,  217 => 17,  207 => 16,  196 => 56,  194 => 24,  191 => 23,  189 => 22,  186 => 21,  184 => 16,  181 => 15,  171 => 14,  161 => 74,  159 => 65,  156 => 64,  154 => 59,  151 => 58,  148 => 14,  138 => 13,  127 => 75,  125 => 13,  119 => 9,  99 => 8,  89 => 7,  78 => 4,  68 => 3,  45 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/base.html.twig' %}

{% block base_head %}
    {% sw_include '@Storefront/storefront/page/product-detail/meta.html.twig' %}
{% endblock %}

{% block base_content %}
    {% block page_product_detail %}

        <div class=\"product-detail\"
             itemscope
             itemtype=\"https://schema.org/Product\">
            {% block page_product_detail_inner %}
                {% block page_product_detail_content %}
                    <div class=\"product-detail-content\">
                        {% block page_product_detail_headline %}
                            <div class=\"row align-items-center product-detail-headline\">
                                {% sw_include '@Storefront/storefront/page/product-detail/headline.html.twig' %}
                            </div>
                        {% endblock %}

                        {% set mediaItems = page.product.media.media %}

                        {% block page_product_detail_main %}
                            <div class=\"row product-detail-main\">
                                {% block page_product_detail_media %}
                                    <div class=\"col-lg-7 product-detail-media\">
                                        {% if page.product.media %}
                                            {% sw_include '@Storefront/storefront/element/cms-element-image-gallery.html.twig' with {
                                                'mediaItems': mediaItems,
                                                'zoom': true,
                                                'zoomModal': true,
                                                'displayMode': 'contain',
                                                'gutter': 5,
                                                'minHeight': '430px',
                                                'navigationArrows': 'inside',
                                                'navigationDots': 'inside',
                                                'galleryPosition': 'left',
                                                'isProduct': true,
                                                'fallbackImageTitle': page.product.translated.name,
                                                'startIndexThumbnails': page.product.cover.position + 1,
                                                'startIndexSlider': page.product.cover.position + 1,
                                                'keepAspectRatioOnZoom': false
                                            } %}
                                        {% endif %}
                                    </div>
                                {% endblock %}

                                {% block page_product_detail_buy %}
                                    <div class=\"col-lg-5 product-detail-buy\">
                                        {% sw_include '@Storefront/storefront/page/product-detail/buy-widget.html.twig' %}
                                    </div>
                                {% endblock %}
                            </div>
                        {% endblock %}
                    </div>
                {% endblock %}

                {% block page_product_detail_tabs %}
                    <div class=\"product-detail-tabs\">
                        {% sw_include '@Storefront/storefront/page/product-detail/tabs.html.twig' %}
                    </div>
                {% endblock %}

                {% block page_product_detail_cross_selling %}
                    {% if page.crossSellings.elements is defined and page.crossSellings.elements|filter(item => item.total > 0)|length > 0 %}
                        <div class=\"product-detail-tabs product-detail-cross-selling\">
                            {% sw_include '@Storefront/storefront/page/product-detail/cross-selling/tabs.html.twig' with {
                                crossSellings: page.crossSellings
                            } %}
                        </div>
                    {% endif %}
                {% endblock %}
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/page/product-detail/index.html.twig", "/var/www/stage.joes-toolbox.de/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/index.html.twig");
    }
}
