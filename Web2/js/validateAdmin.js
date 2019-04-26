
function validateFormLoginAdmin()
{
	var tdn=document.forms['dangnhapadmin']['tendangnhap'].value;
	var mk=document.forms['dangnhapadmin']['matkhau'].value;
	var pattern=/^[a-zA-Z0-9\_\-\@\.]*$/gi;
	if(tdn=="")
	{
		document.getElementById('loidn').innerHTML="Tên đăng nhập không được để trống.";
		return false;
	}
	else if(pattern.test(tdn)==false)
	{
		document.getElementById('loidn').innerHTML="Tên đăng nhập không hợp lệ.";
		return false;
	}
	else if(mk=="")
	{
		document.getElementById('loidn').innerHTML="Mật khẩu không được để trống.";
		return false;
	}
	
}