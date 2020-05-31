function dangki(){
    var hoten = document.form_register.txtFullname;
    var sdt = document.form_register.txtPhone;
    var cmnd = document.form_register.txtCmnd;
    var password = document.form_register.txtPassword;
    var rePassword = document.form_register.txtRePassword;
    if(!checkname(hoten.value))
	{
		alert("Mời bạn kiểm tra lại họ tên!!!");
		hoten.focus();
		return false;
	}
	else if(!checksdt(sdt.value))
	{
		alert("Mời bạn kiểm tra lại số điện thoại!!!");
		sdt.focus();
		return false;
    }
	else if(!checkcmnd(cmnd.value))
	{
		alert("Mời bạn kiểm tra lại chứng minh nhân dân!!!");
		cmnd.focus();
		return false;
    }
    else if(password.value != rePassword.value)
    {
        alert("Mật khẩu nhập lại không đúng!!!");
        rePassword.focus();
        return false;
    }
    return true;
}
function checkname(str)
{
    var pattern = /[a-zA-Z\s]{1,50}/;
    if(str.match(pattern)) return true;
    return false;
}
function checksdt(str)
{
    var pattern = /^0[1-9]\d{8}$/;
    if(str.match(pattern)) return true;
    return false;
}
function checkcmnd(str)
{
    var pattern = /^[0-9]{9}$/;
    if(str.match(pattern)) return true;
    return false;
}