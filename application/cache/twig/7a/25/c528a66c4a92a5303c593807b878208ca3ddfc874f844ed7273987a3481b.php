<?php

/* layout-footer.html */
class __TwigTemplate_7a25c528a66c4a92a5303c593807b878208ca3ddfc874f844ed7273987a3481b extends Twig_Template
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
        echo "<script type=\"text/javascript\">
var site_url = \"";
        // line 2
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\";
var base_url = \"";
        // line 3
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "\";
</script>
<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, base_url("assets/comp/jquery/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, base_url("assets/comp/jquery/jquery-ui-1.10.1.custom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script data-pace-options='{ \"ajax\": false }' src=\"";
        // line 7
        echo twig_escape_filter($this->env, base_url("assets/comp/pace/pace.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, base_url("assets/comp/offline/offline.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, base_url("assets/comp/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        // line 10
        echo (isset($context["comp_js"]) ? $context["comp_js"] : null);
        echo "
<script src=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["base_url_theme"]) ? $context["base_url_theme"] : null), "html", null, true);
        echo "scripts/script.js\" type=\"text/javascript\"></script>
";
    }

    public function getTemplateName()
    {
        return "layout-footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  42 => 7,  33 => 5,  29 => 4,  26 => 3,  22 => 2,  51 => 10,  47 => 9,  43 => 8,  35 => 6,  27 => 4,  19 => 1,  234 => 102,  229 => 81,  211 => 103,  208 => 102,  206 => 101,  192 => 93,  179 => 82,  177 => 81,  174 => 80,  168 => 78,  166 => 77,  158 => 71,  156 => 70,  136 => 53,  129 => 51,  123 => 49,  121 => 48,  112 => 45,  110 => 44,  107 => 43,  101 => 41,  99 => 40,  92 => 36,  86 => 33,  83 => 32,  77 => 30,  75 => 29,  72 => 28,  60 => 20,  52 => 17,  48 => 16,  37 => 7,  34 => 6,  32 => 5,  23 => 3,  394 => 201,  382 => 191,  373 => 188,  370 => 187,  366 => 186,  356 => 178,  344 => 174,  340 => 172,  336 => 171,  328 => 165,  316 => 161,  312 => 159,  308 => 158,  300 => 152,  292 => 147,  286 => 143,  283 => 142,  280 => 141,  278 => 140,  275 => 139,  262 => 128,  253 => 125,  250 => 124,  246 => 123,  238 => 117,  230 => 112,  224 => 6,  221 => 107,  218 => 4,  216 => 105,  213 => 104,  205 => 99,  198 => 96,  194 => 94,  181 => 83,  172 => 80,  169 => 79,  165 => 78,  152 => 68,  148 => 67,  142 => 64,  138 => 63,  132 => 52,  128 => 59,  122 => 56,  118 => 47,  114 => 53,  102 => 44,  91 => 36,  80 => 28,  73 => 23,  70 => 27,  68 => 21,  62 => 17,  56 => 15,  54 => 14,  50 => 13,  45 => 11,  39 => 7,  31 => 5,  28 => 4,);
    }
}
