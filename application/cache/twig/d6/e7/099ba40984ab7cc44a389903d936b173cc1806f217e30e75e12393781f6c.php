<?php

/* filter-pengajar.html */
class __TwigTemplate_d6e7099ba40984ab7cc44a389903d936b173cc1806f217e30e75e12393781f6c extends Twig_Template
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
        echo "Filter Pengajar -";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"module\">
    <div class=\"module-head\">
        <h3>Filter Pengajar</h3>
    </div>
    <div class=\"module-body\">";
        // line 13
        echo get_flashdata("pengajar");
        // line 15
        if ((is_admin() == true)) {
            // line 16
            echo "        <div class=\"row-fluid\">
            <div class=\"span7\">
                <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, site_url("pengajar/add/1"), "html", null, true);
            echo "\" class=\"btn btn-primary\">Tambah Pengajar</a>
            </div>

            <div class=\"span5\">
                <div class=\"btn-group pull-right\">";
            // line 23
            echo anchor("pengajar/index/1", "Aktif", array("class" => "btn btn-default"));
            // line 24
            echo anchor("pengajar/index/0", ("Pending " . ((((isset($context["count_pending"]) ? $context["count_pending"] : null) > 0)) ? ((("<span class=\"label label-warning\">" . (isset($context["count_pending"]) ? $context["count_pending"] : null)) . "</span>")) : (""))), array("class" => "btn btn-default"));
            // line 25
            echo anchor("pengajar/index/2", "Blocking", array("class" => "btn btn-default"));
            // line 26
            echo anchor("pengajar/filter", "<i class=\"icon-search\" style=\"line-height: 0px;\"></i> Filter", array("class" => "btn btn-info"));
            echo "
                </div>
            </div>
        </div>
        <br>";
        }
        // line 32
        echo "
        <div class=\"bs-callout bs-callout-info\">
            <b class=\"as-link\" data-toggle=\"collapse\" data-target=\"#form-filter\"><i class=\"icon-search\"></i> PARAMETER PENCARIAN</b>
            <div id=\"form-filter\" class=\"collapse\">";
        // line 36
        echo form_open("pengajar/filter");
        echo "
                <table class=\"table table-condensed\" id=\"form-search\">
                    <tr>
                        <th width=\"20%\">NIP</th>
                        <td>
                            <input type=\"text\" name=\"nip\" class=\"span2\" style=\"margin-bottom:0px;\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, set_value("nip", (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "nip", array(), "any", true, true)) ? ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "nip")) : (""))), "html", null, true);
        echo "\">
                        </td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td>
                            <input type=\"text\" name=\"nama\" class=\"span4\" style=\"margin-bottom:0px;\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, set_value("nama", (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "nama", array(), "any", true, true)) ? ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "nama")) : (""))), "html", null, true);
        echo "\">
                        </td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td>
                            <p style=\"margin-top:0px; margin-bottom:5px;\">
                            <label class=\"checkbox inline\">
                                <input type=\"checkbox\" name=\"jenis_kelamin[]\" value=\"Laki-laki\"";
        // line 55
        echo twig_escape_filter($this->env, set_checkbox("jenis_kelamin[]", "Laki-laki", ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "jenis_kelamin", array(), "any", true, true) && twig_in_filter("Laki-laki", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "jenis_kelamin")))) ? (true) : (false))), "html", null, true);
        echo "> Laki-laki
                            </label>
                            <label class=\"checkbox inline\">
                                <input type=\"checkbox\" name=\"jenis_kelamin[]\" value=\"Perempuan\"";
        // line 58
        echo twig_escape_filter($this->env, set_checkbox("jenis_kelamin[]", "Perempuan", ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "jenis_kelamin", array(), "any", true, true) && twig_in_filter("Perempuan", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "jenis_kelamin")))) ? (true) : (false))), "html", null, true);
        echo "> Perempuan
                            </label>
                            </p>
                        </td>
                    <tr>
                    <tr>
                        <th>Tempat Lahir</th>
                        <td>
                            <input type=\"text\" name=\"tempat_lahir\" class=\"span3\" style=\"margin-bottom:0px;\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, set_value("tempat_lahir", (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "tempat_lahir", array(), "any", true, true)) ? ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "tempat_lahir")) : (""))), "html", null, true);
        echo "\">
                        </td>
                    <tr>
                    <tr>
                        <th>Tanggal Lahir</th>
                        <td>
                            <select class=\"span2\" style=\"width: 10%;\" name=\"tgl_lahir\">
                                <option value=\"\">Tgl</option>";
        // line 74
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 75
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\"";
            echo twig_escape_filter($this->env, set_select("tgl_lahir", (isset($context["i"]) ? $context["i"] : null), ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "tgl_lahir", array(), "any", true, true) && ((isset($context["i"]) ? $context["i"] : null) == $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "tgl_lahir")))) ? (true) : (false))), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                            </select>
                            <select class=\"span2\" style=\"width: 17%;\" name=\"bln_lahir\">
                                <option value=\"\">Bulan</option>";
        // line 80
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 81
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\"";
            echo twig_escape_filter($this->env, set_select("bln_lahir", (isset($context["i"]) ? $context["i"] : null), ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "bln_lahir", array(), "any", true, true) && ((isset($context["i"]) ? $context["i"] : null) == $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "bln_lahir")))) ? (true) : (false))), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, get_indo_bulan((isset($context["i"]) ? $context["i"] : null)), "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                            </select>
                            <input type=\"text\" name=\"thn_lahir\" class=\"span1\" maxlength=\"4\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, set_value("thn_lahir", (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "thn_lahir", array(), "any", true, true)) ? ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "thn_lahir")) : (""))), "html", null, true);
        echo "\" placeholder=\"Tahun\">
                        </td>
                    <tr>
                    <tr>
                        <th>Alamat</th>
                        <td>
                            <input type=\"text\" name=\"alamat\" class=\"span4\" style=\"margin-bottom:0px;\" value=\"";
        // line 90
        echo twig_escape_filter($this->env, set_value("alamat", (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "alamat", array(), "any", true, true)) ? ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "alamat")) : (""))), "html", null, true);
        echo "\">
                        </td>
                    <tr>";
        // line 93
        if ((is_admin() == true)) {
            // line 94
            echo "                    <tr>
                        <th>Status</th>
                        <td>
                            <p style=\"margin-top:0px; margin-bottom:5px;\">
                                <label class=\"checkbox inline\"><input type=\"checkbox\" name=\"status_id[]\" value=\"0\"";
            // line 98
            echo twig_escape_filter($this->env, set_checkbox("status_id[]", "0", ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status_id", array(), "any", true, true) && twig_in_filter(0, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status_id")))) ? (true) : (false))), "html", null, true);
            echo "> Pending</label>
                                <label class=\"checkbox inline\"><input type=\"checkbox\" name=\"status_id[]\" value=\"1\"";
            // line 99
            echo twig_escape_filter($this->env, set_checkbox("status_id[]", "1", ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status_id", array(), "any", true, true) && twig_in_filter(1, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status_id")))) ? (true) : (false))), "html", null, true);
            echo "> Aktif</label>
                                <label class=\"checkbox inline\"><input type=\"checkbox\" name=\"status_id[]\" value=\"2\"";
            // line 100
            echo twig_escape_filter($this->env, set_checkbox("status_id[]", "2", ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status_id", array(), "any", true, true) && twig_in_filter(2, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status_id")))) ? (true) : (false))), "html", null, true);
            echo "> Blocking</label>
                            </p>
                        </td>
                    <tr>
                    <tr>
                        <th>Username</th>
                        <td>
                            <input type=\"text\" name=\"username\" class=\"span3\" style=\"margin-bottom:0px;\" value=\"";
            // line 107
            echo twig_escape_filter($this->env, set_value("username", (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "username", array(), "any", true, true)) ? ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "username")) : (""))), "html", null, true);
            echo "\">
                        </td>
                    </tr>";
        }
        // line 111
        echo "                    <tr>
                        <th>Opsi</th>
                        <td>
                            <label><input type=\"checkbox\" name=\"is_admin\" value=\"1\" style=\"margin-top:-2px;\"";
        // line 114
        echo twig_escape_filter($this->env, set_checkbox("is_admin", "1", ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "is_admin", array(), "any", true, true) && ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "is_admin") == 1))) ? (true) : (false))), "html", null, true);
        echo "> Administrator</label>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button type=\"submit\" class=\"btn btn-primary\">Filter</button>
                        </td>
                    </tr>
                </table>";
        // line 124
        echo form_close();
        echo "
            </div>
        </div>

        <br>";
        // line 130
        echo form_open("pengajar/filter_action");
        echo "
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th width=\"7%\">";
        // line 135
        if ((is_admin() && (((isset($context["status_id"]) ? $context["status_id"] : null) == 0) || ((isset($context["status_id"]) ? $context["status_id"] : null) == 2)))) {
            // line 136
            echo "                            <input type=\"checkbox\" style=\"margin-top:-2px;\" onclick=\"filter_pengajar_ch_uch_checkbox(this)\">";
        }
        // line 138
        echo "                        ID
                    </th>
                    <th>Informasi Pengajar</th>
                    <th width=\"22%\"></th>
                </tr>
            </thead>
            <tbody>";
        // line 145
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pengajars"]) ? $context["pengajars"] : null));
        foreach ($context['_seq'] as $context["no"] => $context["v"]) {
            // line 146
            echo "                <tr>
                    <td>";
            // line 148
            if ((is_admin() && (((isset($context["status_id"]) ? $context["status_id"] : null) == 0) || ((isset($context["status_id"]) ? $context["status_id"] : null) == 2)))) {
                // line 149
                echo "                            <input type=\"checkbox\" name=\"pengajar_id[]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"), "html", null, true);
                echo "\" style=\"margin-top:-2px;\">";
            }
            // line 151
            echo "                        <b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"), "html", null, true);
            echo "</b>
                    </td>
                    <td>
                        <img style=\"height:40px;width:40px; margin-right: 10px;\" class=\"img-polaroid img-circle pull-left\" src=\"";
            // line 154
            echo twig_escape_filter($this->env, get_url_image_pengajar($this->getAttribute((isset($context["v"]) ? $context["v"] : null), "foto"), "medium", $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "jenis_kelamin")), "html", null, true);
            echo "\">
                        <b>";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "nama"), "html", null, true);
            echo (((!twig_test_empty($this->getAttribute((isset($context["v"]) ? $context["v"] : null), "nip")))) ? ((("<span class=\"text-muted\">(" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "nip")) . ")</span>")) : (""));
            echo "</b>";
            // line 156
            $context["is_admin"] = get_row_data("login_model", "retrieve", array(0 => null, 1 => null, 2 => null, 3 => null, 4 => $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "is_admin");
            // line 157
            if (((isset($context["is_admin"]) ? $context["is_admin"] : null) == 1)) {
                // line 158
                echo "                            <span class=\"label label-warning\">Administrator</span>";
            }
            // line 160
            echo "                        <br><b>Alamat :</b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "alamat"), "html", null, true);
            echo "
                    </td>
                    <td>
                        <ul class=\"nav nav-pills\" style=\"margin-bottom:0px;\">";
            // line 164
            if ((is_admin() == true)) {
                // line 165
                echo "                            <li><a class=\"btn btn-default btn-small\" href=\"";
                echo twig_escape_filter($this->env, site_url(((("pengajar/detail/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id")) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"))), "html", null, true);
                echo "\"><i class=\"icon-zoom-in\"></i> Detail</a></li>
                            <li class=\"dropdown\">
                                <a class=\"btn btn-default btn-small\" href=\"#\" id=\"act-";
                // line 167
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"), "html", null, true);
                echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-edit\"></i> Edit <b class=\"caret\" style=\"margin-top:5px;\"></b></a>
                                <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"act-";
                // line 168
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"), "html", null, true);
                echo "\">
                                    <li>";
                // line 169
                echo anchor(((("pengajar/edit_profile/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id")) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "Edit Profil", array("class" => "pengajar-iframe-4", "title" => "Edit Profil Pengajar"));
                echo "</li>
                                    <li>";
                // line 170
                echo anchor(((("pengajar/edit_picture/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id")) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "Edit Foto", array("class" => "pengajar-iframe-5", "title" => "Edit Foto Pengajar"));
                echo "</li>
                                    <li>";
                // line 171
                echo anchor(((("pengajar/edit_username/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id")) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "Edit Username", array("class" => "pengajar-iframe-2", "title" => "Edit Username Pengajar"));
                echo "</li>
                                    <li>";
                // line 172
                echo anchor(((("pengajar/edit_password/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id")) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "Edit Password", array("class" => "pengajar-iframe-3", "title" => "Edit Password Pengajar"));
                echo "</li>
                                </ul>
                            </li>";
            } else {
                // line 176
                echo "                            <li><a class=\"btn btn-default btn-small\" href=\"";
                echo twig_escape_filter($this->env, site_url(("pengajar/detail/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"))), "html", null, true);
                echo "\"><i class=\"icon-zoom-in\"></i> Detail</a></li>";
            }
            // line 178
            echo "                        </ul>
                    </td>
                </tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['no'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        echo "            </tbody>
        </table>";
        // line 185
        if ((is_admin() && (!twig_test_empty((isset($context["pengajars"]) ? $context["pengajars"] : null))))) {
            // line 186
            echo "        <br>
        <div class=\"row-fluid\">
            <div class=\"span8\">
                <table cellpadding=\"5\">
                    <tr>
                        <th valign=\"top\">Aksi Terpilih</th>
                        <td valign=\"top\">
                            <select name=\"status_id\" style=\"width:auto;\">
                                <option value=\"\">--Update Status--</option>
                                <option value=\"1\">Aktif</option>
                                <option value=\"2\">Blocking</option>
                            </select>
                        </td>
                        <td valign=\"top\">
                            <button type=\"submit\" class=\"btn btn-primary\">Update</button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>";
        }
        // line 208
        echo form_close();
        echo "

        <br>";
        // line 211
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "filter-pengajar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 211,  381 => 208,  359 => 186,  357 => 185,  354 => 182,  346 => 178,  341 => 176,  335 => 172,  331 => 171,  327 => 170,  323 => 169,  319 => 168,  315 => 167,  309 => 165,  307 => 164,  300 => 160,  297 => 158,  295 => 157,  293 => 156,  289 => 155,  285 => 154,  278 => 151,  273 => 149,  271 => 148,  268 => 146,  264 => 145,  256 => 138,  253 => 136,  251 => 135,  244 => 130,  237 => 124,  225 => 114,  220 => 111,  214 => 107,  204 => 100,  200 => 99,  196 => 98,  190 => 94,  188 => 93,  183 => 90,  174 => 84,  171 => 83,  159 => 81,  155 => 80,  151 => 77,  139 => 75,  135 => 74,  125 => 66,  114 => 58,  108 => 55,  97 => 47,  88 => 41,  80 => 36,  75 => 32,  67 => 26,  65 => 25,  63 => 24,  61 => 23,  54 => 18,  50 => 16,  48 => 15,  46 => 13,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
