<?php
require("./core/system/head.php");
if (isset($_REQUEST['action'])) {
    $Action = $_REQUEST['action'];
    if ($action == true) {
        switch ($Action) {
            case 'loc-uid':
                include 'core/tools/locuid.php';
            break;
            case 'add-token':
                include 'core/admin/addtoken.php';
            break;
            case 'khien-token':
                include 'core/tools/khien.php';
            break;
			case 'loc-ban':
                include 'core/tools/locbb.php';
            break;
			case 'choc':
                include 'core/tools/choc.php';
            break;
            case 'kich-hoat':
                include 'core/account/kichhoat.php';
            break;
            case 'trang-loi':
                include 'core/404.shtml';
            break;
            case 'thoat':
                include 'core/logout.php';
            break;
            case 'user':
                include 'core/system/admin.php';
            break;
			case 'daily':
                include 'core/system/daily.php';
            break;
            case 'chuyen-tien':
                include 'core/account/chuyentien.php';
            break;
			case 'chuyen-tien-dl':
                include 'core/account/chuyentiendl.php';
            break;
			case 'chuyen-tien-le':
                include 'core/account/chuyentienle.php';
            break;
            case 'bang-gia':
                include 'core/account/banggia.php';
            break;
            case 'thong-tin':
                include 'core/account/thongtin.php';
            break;
            case 'gift-code':
                include 'core/account/giftcode.php';
            break;
			case 'get-token':
                include 'core/account/gettoken.php';
            break;
			case 'get-token2':
                include 'core/account/gettoken2.php';
            break;
			case 'get-token3':
                include 'core/account/gettoken3.php';
            break;
			case 'get-token4':
                include 'core/account/gettoken4.php';
            break;
            case 'vip-like':
                include 'core/menu/viplike.php';
            break;
			case 'auto-rep':
                include 'core/menu/autorep.php';
            break;
            case 'vip-bot':
                include 'core/menu/vipbot.php';
            break;
			// n???p th???
			case 'nap-the':
                include 'core/account/napthe.php';
            break;
			// l???ch s??? giao d???ch
			case 'lich-su':
                include 'core/account/lichsu.php';
            break;
			// l???ch s??? xo?? vip
			case 'xoa-vip':
                include 'core/account/xoavip.php';
            break;
			
			//qu???n l?? g??i vip like
			case 'admin-like':
                include 'core/adminvip/adminlike.php';
            break;
			//qu???n l?? g??i vip bot
			case 'admin-bot':
                include 'core/adminvip/adminbot.php';
            break;
			//qu???n l?? g??i vip rep cmt
			case 'admin-rep':
                include 'core/adminvip/adminrep.php';
            break;
			// vip buzz
			case 'buzzlike':
                include 'core/tools/buzzlike.php';
            break;
			case 'buzzsub':
                include 'core/tools/buzzsub.php';
            break;
			//tools
			case 'token-cookies':
                include 'core/tools/token-cookies.php';
            break;
			// admin
			case 'reset-pass':
                include 'core/admin/member/resetpass.php';
            break;
            case 'gift-code-admin':
                include 'core/admin/giftcode.php';
            break;
            case 'xoa-member':
                include 'core/admin/member/del.php';
            break;
            case 'chinh-sua-member':
                include 'core/admin/member/edit.php';
            break;
            case 'setting':
                include 'core/admin/setting.php';
            break;
            case 'list-like':
                include 'core/admin/package/like.php';
            break;
            case 'list-cmt':
                include 'core/admin/package/cmt.php';
            break;
            case 'list-reaction':
                include 'core/admin/package/bot.php';
            break;
            default:
            header('Location: /index.php?action=trang-loi');
            break;
        }
    }
}else{
    if ($action == true) {
?>
<?php
if($n['status'] < 1) {
    include "core/account/kichhoat.php";
}else{
?>
<?php $titles='B???NG ??I???U KHI???N';?>
<div class="col-md-8">
    <div class="panel panel-border panel-<?php if ($hour >= 0 && $hour <= 12) { echo 'primary'; }else{ echo 'danger'; } ?>">
	<marquee direction="left"  scrollamount="6"  loop="-1"><b>M???I C??C B???N MUA VIP... (V??o m???c "M?? nh???n th?????ng" ????? nh???n m?? th?????ng mi???n ph?? m???i ng??y !!!</b></marquee>
    <div class="panel-heading">
            <h3 class="panel-title">TH??NG B??O!!! C??C G??I BOT SAU 3 NG??Y KH??NG C???P NH???T H??? TH???NG S??? XO?? ??I.</h3></div>
			<hr>
			<ul>
<?php
echo '<li> H??? TH???NG VIPBOT C???M X??C, BOT COMMENT KH??NG B??? KHO?? T??NH N??NG</li><p>';
echo '<hr>';
echo '<font color="red"><b>* H??? TR??? ONLINE</b></font><br>';
echo '<a href="http://fb.com/4"><img src="https://graph.facebook.com/4/picture?width=100&amp;height=100" class="img img-circle img-thumbnail"></a>';
echo '<hr>';
echo '<center><button class="btn btn-info">* CH???T L?????NG V?? UY T??N ! B???N TR???I NGHI???M D??NG T???T TH?? H??Y H???P T??C V???I CH??NG T??I.</button></center>';
?>
<br>
<hr>
<marquee direction="left"  scrollamount="5"  loop="-1"><b>XO?? B??? G??I VIP S??? ???????C HO??N TI???N V???I S??? NG??Y C??N L???I TR??? 3 NG??Y !!!</b></marquee>
</ul>
    </div>
</div>
<?php 
include "core/system/history.php";
?>
<?php }}} ?>
<?php
require("./core/system/footer.php");
require("xoa.php");
?>