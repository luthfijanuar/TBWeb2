<?php

/* layout-ujian.html */
class __TwigTemplate_6f10fc4ca59e6f6a23646b234f1928d865f11b384246e27c3379239c258d678a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        ";
        // line 4
        $this->env->loadTemplate("layout-header.html")->display($context);
        // line 5
        echo "        <link type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["base_url_theme"]) ? $context["base_url_theme"] : null), "html", null, true);
        echo "css/read.css\" rel=\"stylesheet\">
        <link type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["base_url_theme"]) ? $context["base_url_theme"] : null), "html", null, true);
        echo "css/ujian.css\" rel=\"stylesheet\">
        ";
        // line 7
        $this->displayBlock('css', $context, $blocks);
        // line 8
        echo "    </head>
    <body>

        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "
        <br><br>
        <!--/.wrapper-->
        <div class=\"footer\">
            <div class=\"container\">
                <center>
                    <b class=\"copyright\">";
        // line 18
        echo (isset($context["copyright"]) ? $context["copyright"] : null);
        echo " </b> All rights reserved.<br>
                    ";
        // line 19
        echo (isset($context["version"]) ? $context["version"] : null);
        echo " | Page loaded in ";
        echo twig_escape_filter($this->env, (isset($context["elapsed_time"]) ? $context["elapsed_time"] : null), "html", null, true);
        echo " seconds.
                </center>
            </div>
        </div>

        ";
        // line 24
        $this->env->loadTemplate("layout-footer.html")->display($context);
        // line 25
        echo "        ";
        $this->displayBlock('js', $context, $blocks);
        // line 26
        echo "    </body>
</html>
";
    }

    // line 7
    public function block_css($context, array $blocks = array())
    {
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
    }

    // line 25
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout-ujian.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 7,  74 => 26,  69 => 24,  59 => 19,  55 => 18,  47 => 12,  45 => 11,  38 => 7,  34 => 6,  27 => 4,  22 => 1,  448 => 208,  444 => 207,  440 => 206,  436 => 205,  432 => 204,  429 => 203,  427 => 202,  420 => 197,  401 => 181,  390 => 172,  366 => 166,  360 => 163,  354 => 160,  349 => 159,  332 => 158,  325 => 154,  317 => 149,  312 => 148,  310 => 147,  306 => 145,  297 => 139,  277 => 121,  256 => 113,  245 => 109,  228 => 107,  225 => 106,  220 => 105,  214 => 102,  208 => 99,  202 => 96,  197 => 95,  180 => 94,  173 => 90,  167 => 86,  165 => 85,  161 => 83,  155 => 80,  147 => 75,  139 => 70,  128 => 62,  123 => 59,  101 => 40,  98 => 39,  94 => 37,  90 => 25,  87 => 34,  85 => 11,  77 => 28,  73 => 26,  71 => 25,  60 => 17,  56 => 16,  49 => 12,  43 => 8,  40 => 8,  32 => 4,  29 => 5,);
    }
}
