<?php

/* layout-header.html */
class __TwigTemplate_d8245c3c092e01e0ae9366d766a745f41900b15da9a60d78669b09fea9826e61 extends Twig_Template
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
        // line 1
        echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<link type=\"text/css\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, base_url("assets/comp/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link type=\"text/css\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, base_url("assets/comp/bootstrap/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["base_url_theme"]) ? $context["base_url_theme"] : null), "html", null, true);
        echo "css/theme.css\" rel=\"stylesheet\">
<link type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, base_url("assets/comp/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, base_url("assets/comp/pace/flash.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, base_url("assets/comp/offline/offline-theme-chrome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        // line 9
        echo (isset($context["comp_css"]) ? $context["comp_css"] : null);
        echo "
<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["favicon_url"]) ? $context["favicon_url"] : null), "html", null, true);
        echo "\">
";
    }

    public function getTemplateName()
    {
        return "layout-header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  47 => 9,  43 => 8,  35 => 6,  27 => 4,  19 => 1,  234 => 102,  229 => 81,  211 => 103,  208 => 102,  206 => 101,  192 => 93,  179 => 82,  177 => 81,  174 => 80,  168 => 78,  166 => 77,  158 => 71,  156 => 70,  136 => 53,  129 => 51,  123 => 49,  121 => 48,  112 => 45,  110 => 44,  107 => 43,  101 => 41,  99 => 40,  92 => 36,  86 => 33,  83 => 32,  77 => 30,  75 => 29,  72 => 28,  60 => 20,  52 => 17,  48 => 16,  37 => 7,  34 => 6,  32 => 5,  23 => 3,  394 => 201,  382 => 191,  373 => 188,  370 => 187,  366 => 186,  356 => 178,  344 => 174,  340 => 172,  336 => 171,  328 => 165,  316 => 161,  312 => 159,  308 => 158,  300 => 152,  292 => 147,  286 => 143,  283 => 142,  280 => 141,  278 => 140,  275 => 139,  262 => 128,  253 => 125,  250 => 124,  246 => 123,  238 => 117,  230 => 112,  224 => 6,  221 => 107,  218 => 4,  216 => 105,  213 => 104,  205 => 99,  198 => 96,  194 => 94,  181 => 83,  172 => 80,  169 => 79,  165 => 78,  152 => 68,  148 => 67,  142 => 64,  138 => 63,  132 => 52,  128 => 59,  122 => 56,  118 => 47,  114 => 53,  102 => 44,  91 => 36,  80 => 28,  73 => 23,  70 => 27,  68 => 21,  62 => 17,  56 => 15,  54 => 14,  50 => 13,  45 => 11,  39 => 7,  31 => 5,  28 => 4,);
    }
}
