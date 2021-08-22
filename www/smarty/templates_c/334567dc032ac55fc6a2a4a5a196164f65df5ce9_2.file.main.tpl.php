<?php
/* Smarty version 3.1.39, created on 2021-08-21 23:50:25
  from '/var/www/smarty/templates/layout/main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612112b1065c42_05674658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '334567dc032ac55fc6a2a4a5a196164f65df5ce9' => 
    array (
      0 => '/var/www/smarty/templates/layout/main.tpl',
      1 => 1629557392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:widget/exception.tpl' => 1,
  ),
),false)) {
function content_612112b1065c42_05674658 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
      name="viewport"
    />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
    <!-- Date Range Picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css" />
    <!-- Google Font: Source Sans Pro -->
    <link
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700"
      rel="stylesheet"
    />
    <!-- Tempusdominus Bootstrap 4 -->
    <link
      rel="stylesheet"
      href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"
    />
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1674178925612112b1060807_34287359', 'meta');
?>

  </head>
  <body class="hold-transition sidebar-mini">
    <?php $_smarty_tpl->_subTemplateRender('file:widget/exception.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2093575931612112b1061df1_97281716', 'content');
?>


    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <?php echo '<script'; ?>
 src="plugins/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <!-- Bootstrap 4 -->
    <?php echo '<script'; ?>
 src="plugins/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    <!-- AdminLTE App -->
    <?php echo '<script'; ?>
 src="dist/js/adminlte.min.js"><?php echo '</script'; ?>
>
    <!-- DateRangePicker -->
    <?php echo '<script'; ?>
 src="plugins/daterangepicker/daterangepicker.js"><?php echo '</script'; ?>
>
    <!-- Select2 -->
    <?php echo '<script'; ?>
 src="plugins/select2/js/select2.full.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="plugins/moment/moment.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="plugins/inputmask/min/jquery.inputmask.bundle.min.js"><?php echo '</script'; ?>
>
    <!-- Tempusdominus Bootstrap 4 -->
    <?php echo '<script'; ?>
 src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
      function check() {
        if (window.confirm("削除してよろしいですか？")) {
          return true;
        } else {
          window.alert("キャンセルされました。");
          return false;
        }
      }

      $(function () {
        //Date picker
        $("#reservationdate").datetimepicker({
          format: "YYYY/MM/DD",
        });

        //Date and time picker
        $("#reservationdatetime").datetimepicker({
          icons: { time: "far fa-clock" },
          format: "YYYY/MM/DD HH:mm",
        });
        $("#reservationdatetime_start").datetimepicker({
          icons: { time: "far fa-clock" },
          format: "YYYY/MM/DD HH:mm",
        });
        $("#reservationdatetime_end").datetimepicker({
          icons: { time: "far fa-clock" },
          format: "YYYY/MM/DD HH:mm",
        });

        //Date range picker
        $("#reservation").daterangepicker();
        //Date range picker with time picker
        $("#reservationtime").daterangepicker({
          timePicker: true,
          timePickerIncrement: 30,
          locale: {
            format: "YYYY/MM/DD hh:mm A",
          },
        });
        //Date range as a button
        $("#daterange-btn").daterangepicker(
          {
            ranges: {
              Today: [moment(), moment()],
              Yesterday: [
                moment().subtract(1, "days"),
                moment().subtract(1, "days"),
              ],
              "Last 7 Days": [moment().subtract(6, "days"), moment()],
              "Last 30 Days": [moment().subtract(29, "days"), moment()],
              "This Month": [
                moment().startOf("month"),
                moment().endOf("month"),
              ],
              "Last Month": [
                moment().subtract(1, "month").startOf("month"),
                moment().subtract(1, "month").endOf("month"),
              ],
            },
            startDate: moment().subtract(29, "days"),
            endDate: moment(),
          },
          function (start, end) {
            $("#reportrange span").html(
              start.format("MMMM D, YYYY") + " - " + end.format("MMMM D, YYYY")
            );
          }
        );

        //Timepicker
        $("#timepicker").datetimepicker({
          format: "LT",
        });
      });
    <?php echo '</script'; ?>
>
    <div
      class="daterangepicker ltr show-calendar opensright"
      style="top: 1438px; left: auto; right: 0px; display: none"
    >
      <div class="ranges"></div>
      <div class="drp-calendar left">
        <div class="calendar-table">
          <table class="table-condensed">
            <thead>
              <tr>
                <th class="prev available"><span></span></th>
                <th colspan="5" class="month">Jul 2021</th>
                <th></th>
              </tr>
              <tr>
                <th>Su</th>
                <th>Mo</th>
                <th>Tu</th>
                <th>We</th>
                <th>Th</th>
                <th>Fr</th>
                <th>Sa</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="weekend off ends available" data-title="r0c0">27</td>
                <td class="off ends available" data-title="r0c1">28</td>
                <td class="off ends available" data-title="r0c2">29</td>
                <td class="off ends available" data-title="r0c3">30</td>
                <td class="available" data-title="r0c4">1</td>
                <td class="available" data-title="r0c5">2</td>
                <td class="weekend available" data-title="r0c6">3</td>
              </tr>
              <tr>
                <td class="weekend available" data-title="r1c0">4</td>
                <td class="available" data-title="r1c1">5</td>
                <td class="available" data-title="r1c2">6</td>
                <td class="available" data-title="r1c3">7</td>
                <td class="available" data-title="r1c4">8</td>
                <td class="available" data-title="r1c5">9</td>
                <td class="weekend available" data-title="r1c6">10</td>
              </tr>
              <tr>
                <td class="weekend available" data-title="r2c0">11</td>
                <td class="available" data-title="r2c1">12</td>
                <td class="available" data-title="r2c2">13</td>
                <td class="available" data-title="r2c3">14</td>
                <td class="available" data-title="r2c4">15</td>
                <td class="available" data-title="r2c5">16</td>
                <td class="weekend available" data-title="r2c6">17</td>
              </tr>
              <tr>
                <td class="weekend available" data-title="r3c0">18</td>
                <td class="available" data-title="r3c1">19</td>
                <td class="available" data-title="r3c2">20</td>
                <td class="available" data-title="r3c3">21</td>
                <td class="available" data-title="r3c4">22</td>
                <td class="available" data-title="r3c5">23</td>
                <td class="weekend available" data-title="r3c6">24</td>
              </tr>
              <tr>
                <td class="weekend available" data-title="r4c0">25</td>
                <td class="available" data-title="r4c1">26</td>
                <td class="available" data-title="r4c2">27</td>
                <td
                  class="today active start-date active end-date available"
                  data-title="r4c3"
                >
                  28
                </td>
                <td class="available" data-title="r4c4">29</td>
                <td class="available" data-title="r4c5">30</td>
                <td class="weekend available" data-title="r4c6">31</td>
              </tr>
              <tr>
                <td class="weekend off ends available" data-title="r5c0">1</td>
                <td class="off ends available" data-title="r5c1">2</td>
                <td class="off ends available" data-title="r5c2">3</td>
                <td class="off ends available" data-title="r5c3">4</td>
                <td class="off ends available" data-title="r5c4">5</td>
                <td class="off ends available" data-title="r5c5">6</td>
                <td class="weekend off ends available" data-title="r5c6">7</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="calendar-time" style="display: none"></div>
      </div>
      <div class="drp-calendar right">
        <div class="calendar-table">
          <table class="table-condensed">
            <thead>
              <tr>
                <th></th>
                <th colspan="5" class="month">Aug 2021</th>
                <th class="next available"><span></span></th>
              </tr>
              <tr>
                <th>Su</th>
                <th>Mo</th>
                <th>Tu</th>
                <th>We</th>
                <th>Th</th>
                <th>Fr</th>
                <th>Sa</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="weekend off ends available" data-title="r0c0">25</td>
                <td class="off ends available" data-title="r0c1">26</td>
                <td class="off ends available" data-title="r0c2">27</td>
                <td
                  class="
                    today
                    off
                    ends
                    active
                    start-date
                    active
                    end-date
                    available
                  "
                  data-title="r0c3"
                >
                  28
                </td>
                <td class="off ends available" data-title="r0c4">29</td>
                <td class="off ends available" data-title="r0c5">30</td>
                <td class="weekend off ends available" data-title="r0c6">31</td>
              </tr>
              <tr>
                <td class="weekend available" data-title="r1c0">1</td>
                <td class="available" data-title="r1c1">2</td>
                <td class="available" data-title="r1c2">3</td>
                <td class="available" data-title="r1c3">4</td>
                <td class="available" data-title="r1c4">5</td>
                <td class="available" data-title="r1c5">6</td>
                <td class="weekend available" data-title="r1c6">7</td>
              </tr>
              <tr>
                <td class="weekend available" data-title="r2c0">8</td>
                <td class="available" data-title="r2c1">9</td>
                <td class="available" data-title="r2c2">10</td>
                <td class="available" data-title="r2c3">11</td>
                <td class="available" data-title="r2c4">12</td>
                <td class="available" data-title="r2c5">13</td>
                <td class="weekend available" data-title="r2c6">14</td>
              </tr>
              <tr>
                <td class="weekend available" data-title="r3c0">15</td>
                <td class="available" data-title="r3c1">16</td>
                <td class="available" data-title="r3c2">17</td>
                <td class="available" data-title="r3c3">18</td>
                <td class="available" data-title="r3c4">19</td>
                <td class="available" data-title="r3c5">20</td>
                <td class="weekend available" data-title="r3c6">21</td>
              </tr>
              <tr>
                <td class="weekend available" data-title="r4c0">22</td>
                <td class="available" data-title="r4c1">23</td>
                <td class="available" data-title="r4c2">24</td>
                <td class="available" data-title="r4c3">25</td>
                <td class="available" data-title="r4c4">26</td>
                <td class="available" data-title="r4c5">27</td>
                <td class="weekend available" data-title="r4c6">28</td>
              </tr>
              <tr>
                <td class="weekend available" data-title="r5c0">29</td>
                <td class="available" data-title="r5c1">30</td>
                <td class="available" data-title="r5c2">31</td>
                <td class="off ends available" data-title="r5c3">1</td>
                <td class="off ends available" data-title="r5c4">2</td>
                <td class="off ends available" data-title="r5c5">3</td>
                <td class="weekend off ends available" data-title="r5c6">4</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="calendar-time" style="display: none"></div>
      </div>
      <div class="drp-buttons">
        <span class="drp-selected">07/28/2021 - 07/28/2021</span
        ><button class="cancelBtn btn btn-sm btn-default" type="button">
          Cancel</button
        ><button class="applyBtn btn btn-sm btn-primary" type="button">
          Apply
        </button>
      </div>
    </div>
    <div class="daterangepicker ltr show-calendar opensright">
      <div class="ranges"></div>
      <div class="drp-calendar left">
        <div class="calendar-table"></div>
        <div class="calendar-time"></div>
      </div>
      <div class="drp-calendar right">
        <div class="calendar-table"></div>
        <div class="calendar-time"></div>
      </div>
      <div class="drp-buttons">
        <span class="drp-selected"></span
        ><button class="cancelBtn btn btn-sm btn-default" type="button">
          Cancel</button
        ><button
          class="applyBtn btn btn-sm btn-primary"
          disabled="disabled"
          type="button"
        >
          Apply
        </button>
      </div>
    </div>
    <div
      class="daterangepicker ltr show-ranges opensright"
      style="display: none; top: 1610px; left: 488px; right: auto"
    >
      <div class="ranges">
        <ul>
          <li data-range-key="Today">Today</li>
          <li data-range-key="Yesterday">Yesterday</li>
          <li data-range-key="Last 7 Days">Last 7 Days</li>
          <li data-range-key="Last 30 Days" class="active">Last 30 Days</li>
          <li data-range-key="This Month">This Month</li>
          <li data-range-key="Last Month">Last Month</li>
          <li data-range-key="Custom Range">Custom Range</li>
        </ul>
      </div>
      <div class="drp-calendar left">
        <div class="calendar-table">
          <table class="table-condensed">
            <thead>
              <tr>
                <th class="prev available"><span></span></th>
                <th colspan="5" class="month">Jun 2021</th>
                <th></th>
              </tr>
              <tr>
                <th>Su</th>
                <th>Mo</th>
                <th>Tu</th>
                <th>We</th>
                <th>Th</th>
                <th>Fr</th>
                <th>Sa</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="weekend off ends available" data-title="r0c0">30</td>
                <td class="off ends available" data-title="r0c1">31</td>
                <td class="available" data-title="r0c2">1</td>
                <td class="available" data-title="r0c3">2</td>
                <td class="available" data-title="r0c4">3</td>
                <td class="available" data-title="r0c5">4</td>
                <td class="weekend available" data-title="r0c6">5</td>
              </tr>
              <tr>
                <td class="weekend available" data-title="r1c0">6</td>
                <td class="available" data-title="r1c1">7</td>
                <td class="available" data-title="r1c2">8</td>
                <td class="available" data-title="r1c3">9</td>
                <td class="available" data-title="r1c4">10</td>
                <td class="available" data-title="r1c5">11</td>
                <td class="weekend available" data-title="r1c6">12</td>
              </tr>
              <tr>
                <td class="weekend available" data-title="r2c0">13</td>
                <td class="available" data-title="r2c1">14</td>
                <td class="available" data-title="r2c2">15</td>
                <td class="available" data-title="r2c3">16</td>
                <td class="available" data-title="r2c4">17</td>
                <td class="available" data-title="r2c5">18</td>
                <td class="weekend available" data-title="r2c6">19</td>
              </tr>
              <tr>
                <td class="weekend available" data-title="r3c0">20</td>
                <td class="available" data-title="r3c1">21</td>
                <td class="available" data-title="r3c2">22</td>
                <td class="available" data-title="r3c3">23</td>
                <td class="available" data-title="r3c4">24</td>
                <td class="available" data-title="r3c5">25</td>
                <td class="weekend available" data-title="r3c6">26</td>
              </tr>
              <tr>
                <td class="weekend available" data-title="r4c0">27</td>
                <td class="available" data-title="r4c1">28</td>
                <td class="active start-date available" data-title="r4c2">
                  29
                </td>
                <td class="in-range available" data-title="r4c3">30</td>
                <td class="off ends in-range available" data-title="r4c4">1</td>
                <td class="off ends in-range available" data-title="r4c5">2</td>
                <td
                  class="weekend off ends in-range available"
                  data-title="r4c6"
                >
                  3
                </td>
              </tr>
              <tr>
                <td
                  class="weekend off ends in-range available"
                  data-title="r5c0"
                >
                  4
                </td>
                <td class="off ends in-range available" data-title="r5c1">5</td>
                <td class="off ends in-range available" data-title="r5c2">6</td>
                <td class="off ends in-range available" data-title="r5c3">7</td>
                <td class="off ends in-range available" data-title="r5c4">8</td>
                <td class="off ends in-range available" data-title="r5c5">9</td>
                <td
                  class="weekend off ends in-range available"
                  data-title="r5c6"
                >
                  10
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="calendar-time" style="display: none"></div>
      </div>
      <div class="drp-calendar right">
        <div class="calendar-table">
          <table class="table-condensed">
            <thead>
              <tr>
                <th></th>
                <th colspan="5" class="month">Jul 2021</th>
                <th class="next available"><span></span></th>
              </tr>
              <tr>
                <th>Su</th>
                <th>Mo</th>
                <th>Tu</th>
                <th>We</th>
                <th>Th</th>
                <th>Fr</th>
                <th>Sa</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="weekend off ends available" data-title="r0c0">27</td>
                <td class="off ends available" data-title="r0c1">28</td>
                <td
                  class="off ends active start-date available"
                  data-title="r0c2"
                >
                  29
                </td>
                <td class="off ends in-range available" data-title="r0c3">
                  30
                </td>
                <td class="in-range available" data-title="r0c4">1</td>
                <td class="in-range available" data-title="r0c5">2</td>
                <td class="weekend in-range available" data-title="r0c6">3</td>
              </tr>
              <tr>
                <td class="weekend in-range available" data-title="r1c0">4</td>
                <td class="in-range available" data-title="r1c1">5</td>
                <td class="in-range available" data-title="r1c2">6</td>
                <td class="in-range available" data-title="r1c3">7</td>
                <td class="in-range available" data-title="r1c4">8</td>
                <td class="in-range available" data-title="r1c5">9</td>
                <td class="weekend in-range available" data-title="r1c6">10</td>
              </tr>
              <tr>
                <td class="weekend in-range available" data-title="r2c0">11</td>
                <td class="in-range available" data-title="r2c1">12</td>
                <td class="in-range available" data-title="r2c2">13</td>
                <td class="in-range available" data-title="r2c3">14</td>
                <td class="in-range available" data-title="r2c4">15</td>
                <td class="in-range available" data-title="r2c5">16</td>
                <td class="weekend in-range available" data-title="r2c6">17</td>
              </tr>
              <tr>
                <td class="weekend in-range available" data-title="r3c0">18</td>
                <td class="in-range available" data-title="r3c1">19</td>
                <td class="in-range available" data-title="r3c2">20</td>
                <td class="in-range available" data-title="r3c3">21</td>
                <td class="in-range available" data-title="r3c4">22</td>
                <td class="in-range available" data-title="r3c5">23</td>
                <td class="weekend in-range available" data-title="r3c6">24</td>
              </tr>
              <tr>
                <td class="weekend in-range available" data-title="r4c0">25</td>
                <td class="in-range available" data-title="r4c1">26</td>
                <td class="in-range available" data-title="r4c2">27</td>
                <td
                  class="today active end-date in-range available"
                  data-title="r4c3"
                >
                  28
                </td>
                <td class="available" data-title="r4c4">29</td>
                <td class="available" data-title="r4c5">30</td>
                <td class="weekend available" data-title="r4c6">31</td>
              </tr>
              <tr>
                <td class="weekend off ends available" data-title="r5c0">1</td>
                <td class="off ends available" data-title="r5c1">2</td>
                <td class="off ends available" data-title="r5c2">3</td>
                <td class="off ends available" data-title="r5c3">4</td>
                <td class="off ends available" data-title="r5c4">5</td>
                <td class="off ends available" data-title="r5c5">6</td>
                <td class="weekend off ends available" data-title="r5c6">7</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="calendar-time" style="display: none"></div>
      </div>
      <div class="drp-buttons">
        <span class="drp-selected">06/29/2021 - 07/28/2021</span
        ><button class="cancelBtn btn btn-sm btn-default" type="button">
          Cancel</button
        ><button class="applyBtn btn btn-sm btn-primary" type="button">
          Apply
        </button>
      </div>
    </div>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1629116069612112b1064c14_09454370', 'script');
?>

  </body>
</html>
<?php }
/* {block 'meta'} */
class Block_1674178925612112b1060807_34287359 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'meta' => 
  array (
    0 => 'Block_1674178925612112b1060807_34287359',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'meta'} */
/* {block 'content'} */
class Block_2093575931612112b1061df1_97281716 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2093575931612112b1061df1_97281716',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'content'} */
/* {block 'script'} */
class Block_1629116069612112b1064c14_09454370 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1629116069612112b1064c14_09454370',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'script'} */
}
