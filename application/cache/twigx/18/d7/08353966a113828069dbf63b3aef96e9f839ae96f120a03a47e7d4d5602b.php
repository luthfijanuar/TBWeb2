<?php

/* layout-iframe.html */
class __TwigTemplate_18d708353966a113828069dbf63b3aef96e9f839ae96f120a03a47e7d4d5602b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 5
        $this->env->loadTemplate("layout-header.html")->display($context);
        // line 6
        echo "        ";
        $this->displayBlock('css', $context, $blocks);
        // line 7
        echo "    </head>

    <body onload=\"inIframe()\">

        <div id=\"body-content\">
            ";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        // line 13
        echo "        </div>

        ";
        // line 15
        $this->env->loadTemplate("layout-footer.html")->display($context);
        // line 16
        echo "        ";
        $this->displayBlock('js', $context, $blocks);
        // line 17
        echo "
        <script type=\"text/javascript\">
            // cek diakses dengan iframe atau tidak
            function inIframe()
            {
                var is_iframe = true;
                try {
                    is_iframe = window.self !== window.top;
                } catch (e) {
                    is_iframe = true;
                }

                if (!is_iframe) {
                    \$(\"#body-content\").html('redirect...');
                    window.location.replace(site_url);
                }
            }
        </script>
    </body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
    }

    // line 6
    public function block_css($context, array $blocks = array())
    {
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
    }

    // line 16
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout-iframe.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 12,  85 => 6,  79 => 4,  55 => 17,  52 => 16,  50 => 15,  46 => 13,  44 => 12,  37 => 7,  32 => 5,  23 => 1,  288 => 115,  279 => 108,  273 => 106,  266 => 102,  262 => 101,  258 => 100,  254 => 99,  250 => 98,  245 => 95,  243 => 94,  237 => 91,  233 => 90,  224 => 84,  219 => 82,  215 => 81,  211 => 80,  207 => 79,  203 => 78,  192 => 70,  188 => 69,  185 => 68,  172 => 66,  168 => 65,  163 => 62,  150 => 60,  146 => 59,  142 => 57,  139 => 56,  136 => 55,  134 => 54,  125 => 48,  121 => 47,  112 => 41,  108 => 40,  99 => 34,  95 => 16,  91 => 32,  82 => 26,  78 => 25,  73 => 22,  67 => 20,  60 => 16,  56 => 15,  51 => 12,  49 => 11,  43 => 8,  39 => 7,  34 => 6,  31 => 4,  28 => 4,);
    }
}
