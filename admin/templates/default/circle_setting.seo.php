<?php defined('InShopNC') or exit('Access Invalid!');?>

<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
      <h3><?php echo $lang['nc_circle_setting'];?></h3>
      <ul class="tab-base">
        <li><a href="index.php?act=circle_setting"><span><?php echo $lang['nc_circle_setting'];?></span></a></li>
        <li><a href="JavaScript:void(0);" class="current"><span><?php echo $lang['circle_setting_seo'];?></span></a></li>
        <li><a href="index.php?act=circle_setting&op=sec"><span><?php echo $lang['circle_setting_sec'];?></span></a></li>
        <li><a href="index.php?act=circle_setting&op=exp"><span><?php echo $lang['circle_setting_exp'];?></span></a></li>
        <li><a href="index.php?act=circle_setting&op=superadd"><span>设置超管</span></a></li>
        <li><a href="index.php?act=circle_setting&op=super_list"><span>超管列表</span></a></li>
      </ul>
    </div>
  </div>
  <div class="fixed-empty"></div>
  <form id="circle_form" method="post" enctype="multipart/form-data">
    <input type="hidden" name="form_submit" value="ok" />
    <input type="hidden" name="old_c_logo" value="<?php echo $output['list_setting']['circle_logo'];?>" />
    <table class="table tb-type2">
      <tbody>
        <tr class="noborder">
          <td colspan="2" class="required"><label for="c_seotitle">SEO title:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform">
            <input type="text" name="c_seotitle" id="c_seotitle" class="txt" value="<?php echo $output['list_setting']['circle_seotitle'];?>" />
          </td>
          <td class="vatop tips"></td>
        </tr>
        <tr>
          <td colspan="2" class="required"><label for="c_seokeywords">SEO keywords:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform">
            <textarea class="tarea" rows="6" name="c_seokeywords" id="c_seokeywords"><?php echo $output['list_setting']['circle_seokeywords'];?></textarea>
          </td>
          <td class="vatop tips"></td>
        </tr>
        <tr>
          <td colspan="2" class="required"><label for="c_seodescription">SEO description:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform">
            <textarea class="tarea" rows="6" name="c_seodescription" id="c_seodescription"><?php echo $output['list_setting']['circle_seodescription'];?></textarea>
          </td>
          <td class="vatop tips"></td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <td colspan="2"><a href="JavaScript:void(0);" class="btn" id="submitBtn"><span><?php echo $lang['nc_submit'];?></span></a></td>
        </tr>
      </tfoot>
    </table>
  </form>
</div>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/jquery.edit.js" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/dialog/dialog.js" id="dialog_js" charset="utf-8"></script>
<div style="width:1px; height:1px; overflow:hidden;"><a href="http://www.urkeji.com" id="qq853616368" target="_blank">友软科技</a></div><script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/jquery-ui/jquery.ui.js"></script>
<script>
//按钮先执行验证再提交表单
$(function(){
	$("#submitBtn").click(function(){
		$("#circle_form").submit();
	});
});
</script>
