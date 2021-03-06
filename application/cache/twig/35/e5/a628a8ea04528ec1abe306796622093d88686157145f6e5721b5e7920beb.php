<?php

/* tulis-pesan.html */
class __TwigTemplate_35e5a628a8ea04528ec1abe306796622093d88686157145f6e5721b5e7920beb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout-private.html");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout-private.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "Tulis pesan -";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"module\">
    <div class=\"module-head\">
        <h3>";
        // line 10
        echo anchor("message", "Pesan");
        echo " / Tulis</h3>
    </div>
    <div class=\"module-body\">";
        // line 13
        echo get_flashdata("msg");
        // line 15
        echo form_open_multipart(("message/create/" . (((!twig_test_empty((isset($context["login"]) ? $context["login"] : null)))) ? ($this->getAttribute((isset($context["login"]) ? $context["login"] : null), "id")) : (""))), array("class" => "form-horizontal row-fluid"));
        echo "
            <div class=\"control-group\">
                <label class=\"control-label\">Penerima <span class=\"text-error\">*</span></label>
                <div class=\"controls\">";
        // line 19
        if (twig_test_empty((isset($context["login"]) ? $context["login"] : null))) {
            // line 20
            echo "                        <input type=\"text\" name=\"penerima\" id=\"msg-penerima\" data-role=\"tagsinput\" placeholder=\"Nama atau email\" value=\"";
            echo set_value("penerima");
            echo "\">
                        <br>";
            // line 21
            echo form_error("penerima");
        } else {
            // line 23
            echo "                        <div style=\"margin-top: 5px;\"><b>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["login"]) ? $context["login"] : null), "profil"), "nama"), "html", null, true);
            echo " </b> [";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["login"]) ? $context["login"] : null), "username"), "html", null, true);
            echo "]</div>
                        <input type=\"hidden\" name=\"penerima\" value=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["login"]) ? $context["login"] : null), "profil"), "nama"), "html", null, true);
            echo " [";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["login"]) ? $context["login"] : null), "username"), "html", null, true);
            echo "]\">";
        }
        // line 26
        echo "                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Isi Pesan <span class=\"text-error\">*</span></label>
                <div class=\"controls\">
                    <textarea name=\"content\" id=\"content\" class=\"texteditor\">";
        // line 31
        echo set_value("content");
        echo "</textarea>";
        // line 32
        echo form_error("content");
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <div class=\"controls\">
                    <button type=\"submit\" class=\"btn btn-primary\">Kirim</button>
                    <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, site_url("message"), "html", null, true);
        echo "\" class=\"btn btn-default\">Batal</a>
                </div>
            </div>";
        // line 41
        echo form_close();
        echo "

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "tulis-pesan.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 41,  99 => 38,  90 => 32,  87 => 31,  80 => 26,  74 => 24,  67 => 23,  64 => 21,  59 => 20,  57 => 19,  51 => 15,  49 => 13,  44 => 10,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
